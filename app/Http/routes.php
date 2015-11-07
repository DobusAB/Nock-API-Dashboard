<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

get('/', [
	'as' => 'index_page',
	'uses' => 'PageController@index'
]);

get('/generatetoken', function(){
	return sha1(str_random(30));
});


Route::group(['prefix' => 'api/v1'], function () {

	post('login', [
		'as' => 'login',
		'uses' => 'SessionController@create'
	]);

	Route::group(['middleware' => 'check'], function () {
    	get('companies', [
			'as' => 'get_companies',
			'uses' => 'CompanyController@index'
		]);
		
		put('users/{id}', [
			'as' => 'update_user',
			'uses' => 'UserController@edit'
		]);

		post('users/{id}/image', [
			'as' => 'update_image',
			'uses' => 'UserController@profileImage'
		]);

		get('company/{id}', [
			'as' => 'get_company_single',
			'uses' => 'CompanyController@show'
		]);

		put('users/{id}/status', [
			'as' => 'update_status',
			'uses' => 'UserController@status'
		]);
		get('users/{id}/device', [
			'as' => 'get_device',
			'uses' => 'DeviceController@show'
		]);
		put('company/{id}/update', [
			'as' => 'update_company',
			'uses' => 'CompanyController@edit'
		]);
		get('company/{id}/join', [
            'as' => 'join_company',
            'uses' => 'CompanyController@joinCompany'
        ]);

		put('company/{id}/leave', [
			'as' => 'leave_company',
			'uses' => 'CompanyController@leave' 
		]);

		post('company/{id}/update/image', [
			'as' => 'image_upload',
			'uses' => 'CompanyController@uploadImage'
		]);

		put('user/devicetoken', [
			'as' => 'store_devicetoken',
			'uses' => 'UserController@storeDeviceToken'
		]);

		post('nocking/{id}', [
			'as' => 'user_knocking',
			'uses' => 'UserController@nocking'
		]);
	});
});

get('companies/{id}', [
	'as' => 'company_office',
	'uses' => 'CompanyController@getCompaniesOffice'
]);

get('companies', [
	'as' => 'companies_dashboard',
	'uses' => 'CompanyController@getDashboardComapanies'
]);

get('/api/v1/device/companies/{token}', [
	'as' => 'device_companies',
	'uses' => 'CompanyController@deviceCompanies'
]);

get('admin', [
	'as' => 'login_admin',
	'uses' => 'AdminController@index'
]);
get('login/admin', [
	'as' => 'login_admin',
	'uses' => 'PageController@getloginAdmin'
]);
post('login/admin', [
	'as' => 'login_admin',
	'uses' => 'SessionController@loginAdmin'	
]);



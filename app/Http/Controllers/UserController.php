<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Nock\Result;
use Carbon\Carbon;
use Parse\ParsePush;
use Parse\ParseInstallation;
use App\Company;


use Storage;

use App\User;

class UserController extends Controller
{

    private $result;

    function __construct(Result $result){
        $this->result = $result;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function facebook(Request $request, \SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb)
    {  
        $access_token = $request->get('token');

        $fb->setDefaultAccessToken($access_token);
        try {
            $response = $fb->get('/me?fields=id,name,email,first_name,last_name');
        } catch (Facebook\Exceptions\FacebookSDKException $e) {
            dd($e->getMessage());
        }

        $facebook_user = $response->getGraphUser();

        if($facebook_user)
        {
            return "its work";
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $exists = User::whereId($id)->exists();
        if($exists)
        {
            $inputs = $request->all();

            $validator = Validator::make($request->all(), [
                'email' => 'required|unique:users',
                'firstname' => 'required',
                'lastname' => 'required',
            ]);

            if ($validator->fails()) {
                return $this->result->generateApiError(response(402), "error");
            }

            $update_user = User::whereId($id)->update($inputs);

            if($update_user)
            {
                $user = User::whereId($id)->first();
                return $this->result->generateApiSuccess($user, "update_user", response(200));
            }  
            return $this->generateApiError(response(402), "error");
        }
        return $this->generateApiError(response(402), "error");
    }

    public function profileImage(Request $request){

        if($request->hasFile('file'))
        {
            $token = $request->header('X-Authentication-Token');
            $file = $request->file('file');
            $filename = sha1($file->getClientOriginalName());
            $ext = $file->getClientOriginalExtension();

            $full_filename = $filename . '.' . $ext;

            $user = User::whereToken($token)->first();
            $file_path = storage_path() . '/uploads/' . $user->id . '/' . $full_filename;

            $upload_file = Storage::disk('local', file_get_contents($file));

            if($uplaod_file)
            {
                $update_user = User::whereId($user->id)->update(['profile_image' => $file_path]);
                if($update_user)
                {
                    return $this->result->generateApiSuccess(["msg" => "success"], 'update_image', response(200));
                }
            }   
        }
    }

    public function status(Request $request, $id)
    {
        $token = $request->header('X-Authentication-Token');
        $status = $request->get('status');
        if(isset($status))
        {
            $user = User::whereToken($token)->first();
            if($status == 1)
            {
                $update_user = User::whereToken($token)->update(['status' => Carbon::now()]);

                if($update_user)
                {
                    return $this->result->generateApiSuccess([], 'update_status', response(200));
                }

            }
            if($status == 0)
            {
                $update_user = User::whereToken($token)->update(['status' => null]);

                if($update_user)
                {
                    return $this->result->generateApiSuccess([], "update_status", response(200));
                }
            }
            return $this->result->generateApiError(response(402), "error");
        }
        return $this->result->generateApiError(response(402), "error");
    }

    public function storeDeviceToken(Request $request)
    {
        $inputs = $request->only('user_id', 'device_token');

        extract($inputs);

        $update_user = User::whereId($user_id)->update(['device_token' => $device_token]);

        if($update_user)
        {
            return $this->result->generateApiSuccess([], "update_device_token", response(200));
        }
        return $this->result->generateApiError(response(401), "error");
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function nocking($id)
    {

        $company = Company::with('users')->whereId($id)->first(); 

        foreach($company->users as $key => $val)
        {
            $data = array("alert" => "Du har besök. Dra för att svara!");
            $query = ParseInstallation::query();
            $query->equalTo("deviceToken", $val->device_token);
            ParsePush::send(array(
                "where" => $query,
                "data" => $data
            ));
        }

        
        return $id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

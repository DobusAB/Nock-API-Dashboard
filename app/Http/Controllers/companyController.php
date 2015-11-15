<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Nock\Result;
use App\Company;
use App\User;
use App\Office;
use Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $result;

    function __construct(Result $result){
        $this->result = $result;
    }

    public function index()
    {
        $companies = Company::with(['users' => function($query){
            $query->where("status", "!=", "");
        }])->get();

        if($companies)
        {
            return $this->result->generateApiSuccess($companies, "get_companies", response(200));
        }
        return $this->result->generateApiError(response(401), "error");
    }
    public function deviceCompanies($token)
    {
        $office = Office::whereToken($token)->with(['companies.users' => function($query){
            $query->where('status', '!=', "");
        }])->first();

        if($office)
        {
            return $this->result->generateApiSuccess($office, "get_companies", response(200));
        }
        return $this->result->generateApiError(response(401), "error");

    }

    public function getCompaniesOffice($id)
    {   

        $companies = Company::all();

        if($companies)
        {
            return $this->result->generateApiSuccess($companies, "get_companies", response(200));
        }
        return $this->result->generateApiError(response(401), "error");
    
    }

    public function getDashboardComapanies(){

        $companies = Company::with(['users'])->get();

        if($companies)
        {
            return $this->result->generateApiSuccess($companies, "get_companies", response(200));
        }
        return $this->result->generateApiError(response(401), "error");
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function joinCompany(Request $request, $id)
   {
       $token = $request->header('X-Authentication-Token');
       $company = Company::whereId($id)->first();
       $user = User::whereToken($token)->first();
       $user->company_id = $company->id;
       $user->save();

       if($user)
       {
           return ["Joined company"];
           return $this->result->generateApiSuccess($company, "get_company", response(200));
       }
       return $this->result->generateApiError(response(402), "error");
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
        
        $company = Company::with('users')->whereId($id)->first();
        
        if($company)
        {
            return $this->result->generateApiSuccess($company, "get_company", response(200));
        }
        return $this->result->generateApiError(response(402), "error");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $token = $request->header('X-Authentication-Token');
        $input = $request->only('description');

        $user = User::whereToken($token)->first();

        if($user)
        {
            if($user->company_id == $id)
            {
                $update_company = Company::whereId($id)->update($input);
                if($update_company)
                {
                    return $this->result->generateApiSuccess(['msg' => 'you have updated profile'], "update_profile", response(200));
                }
                return $this->generateApiError(response(401), "error");
            }
            return $this->generateApiError(response(401), "error");

        }
        return $this->generateApiError(response(401), "error");


    }

    public function leave(Request $request, $id)
    {
         $token = $request->header('X-Authentication-Token');

         $user = User::whereToken($token)->first();

         if($user)
         {
            $update_user = User::whereCompanyId($id)->whereId($user->id)->update(['company_id' => null]);
            if($update_user)
            {
                return $this->result->generateApiSuccess(['msg' => 'you have left the company'], "leave_company", response(200));
            }
            return $this->result->generateApiError(response(401), "error");
         }
         return $this->result->generateApiError(response(401), "error");
    }

    public function uploadImage($id, Request $request){
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $filename = sha1($file->getClientOriginalName());
            $ext = $file->getClientOriginalExtension();
            $full_filename = $filename . '.' . $ext;

            $company = Company::whereId($id)->first();
            $file_path =  public_path() . '/uploads/companies/' . $full_filename;
            $db_url = 'http://192.168.37.86:8000/uploads/companies/' . $full_filename;

            $img = \Image::make($file->getRealPath());
            $img->save($file_path);

            $update_company = Company::whereId($id)->update(["company_imageURL" => $db_url]);

            if($update_company)
            {
                return $this->result->generateApiSuccess(["image" => $db_url], "update_image", response(200));
            }
            return $this->result->generateApiError(response(401), "error");
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

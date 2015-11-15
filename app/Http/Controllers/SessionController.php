<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Parse\ParseObject;

use Socialite;
use App\Nock\Result;
use App\User;
use Auth;

class SessionController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, \SammyK\LaravelFacebookSdk\LaravelFacebookSdk $fb)
    {
        $request_token = $request->get('token');
        $deviceToken = $request->get('device_token');
        if($request_token)
        {
            $access_token = $request->get('token');

            $fb->setDefaultAccessToken($access_token);

            try {
                $response = $fb->get('/me?fields=id,name,email,first_name,last_name,picture');
            } catch (Facebook\Exceptions\FacebookSDKException $e) {
                dd($e->getMessage());
            }

            $facebook_user = $response->getGraphUser();

            if($facebook_user)
            {
                $id = $facebook_user["id"];
                $exists = User::whereFacebookId($id)->exists();

                if($exists)
                {
                    $user = User::whereFacebookId($id)->first();
                    $update_user = User::whereId($user->id)->update(['device_token' => $deviceToken]);

                    if($update_user)
                    {
                        return $this->result->generateApiSuccess($user, "login_facebook", response(200));
                    }
                }

                //User does not exist in our db, create one in our db
                $token = sha1(str_random(30));
                $data = [
                    'firstname' => $facebook_user["first_name"],
                    'email' => $facebook_user["email"],
                    'lastname' => $facebook_user["last_name"],
                    'facebook_id' => $facebook_user["id"],
                    'token' => $token,
                    'device_token' => $deviceToken,
                    'profile_image' => $facebook_user["picture"]["data"]["url"]
                ];

                $user_create = User::create($data);
                if($user_create)
                {
                    return $this->result->generateApiSuccess($user_create, "login_facebook", response(202));
                }
                return $this->result->generateApiError(response(401), "error");
            }
            return $this->result->generateApiError(response(401), "error");
        }
        return $this->result->generateApiError(response(401), "error");
    }

    public function loginAdmin(Request $request)
    {
        
         $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        extract($request->all());


        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('admin');
        }else{
            return back()->with('message', 'Du misslyckades din jävla nolla...');
        }
    }
   
}

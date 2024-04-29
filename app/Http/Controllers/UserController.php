<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Jobs\NewUserWelcomeMail;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{


    public function create(Request $request)
    {
        // validate your request

        // create a user
        $user = User::create([
            "name"=> $request->name,
            "email" => $request->email
            // other fields
        ]);

        // dispatch your queue job
        dispatch(new NewUserWelcomeMail($user));

        // return your response
    }

    public function profile()
    {
        $role= Role::all();
        // dd($role);
        return view('pages.home',compact('role'));
    }

    public function profilestore(Request $request)
    {
      dd($request);

        // $mobile_no = $this->Users->find('all')->where(['Users.mobile_no' => $this->request->getData('mobile_no')])->count();
    }
}

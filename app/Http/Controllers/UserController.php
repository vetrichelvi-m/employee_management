<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{



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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Jobs\NewUserWelcomeMail;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



// Now you can store $hashedPassword in your database

class UserController extends Controller
{


    public function create(Request $request)
    {
        // validate your request

        // create a user
        $user = User::create([
            "name" => $request->name,
            "email" => $request->email
            // other fields
        ]);

        // dispatch your queue job
        dispatch(new NewUserWelcomeMail($user));

        // return your response
    }

    public function profile()
    {
        $role = Role::all();
        // dd($role);
        return view('pages.home', compact('role'));
    }

    public function profilestore(Request $request)
    {
        // dd($request);

        // $request->validate([
        //     'title' => 'required|string',
        //     'description' => 'required|string',
        //     'user_id' => 'required|exists:users,id',
        //     'status' => 'required|in:open,in_progress,completed',
        //     'file' => 'required|file|mimes:jpeg,png,pdf|max:2048',
        // ]);
        $old_user = DB::table('users')->where('email', $request->email)->count();

        if ($old_user > 0) {
            echo "Email already registered";
        } else {
            $user = new User();
            $user->role_id = 1;
            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->email = $request->email;
            $user->phone = $request->mobile_no;
            $user->address = $request->address;
            $user->created_date = date('Y-m-d H:i:s');
            $user->created_by = 1;


            if ($user->save()) {
                $this->Flash->success(__('User Registration Success !'));
                return $this->redirect(['controller' => 'AdminUsers', 'action' => 'login']);
            } else {
                $this->Flash->error(__('User registration failed. Please, try again.'));
            }
        }
    }
}

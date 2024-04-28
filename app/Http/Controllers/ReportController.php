<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use App\Models\StatusType;

class ReportController extends Controller
{
    public function dashboard()
    {
        // $user = "SELECT count(emp.id) as totalempcount
        //             from status_types as emp
        //             where emp.is_active=1";


        // $StatusType = StatusType::where('is_active', 1)
        //     ->orderBy('name')
        //     ->take(2)
        //     ->get();

        $user = "SELECT count(emp.id) as totalempcount
                    from status_types as emp
                    where emp.is_active=1";


        echo $user;
        return $user;
        dd($user);
    }
}

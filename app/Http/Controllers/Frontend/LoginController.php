<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;



class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.login');
    }
    // public function admindisplay_data(): View
    // {

    //     $alldata = DB::table('project_data')->get();


    //     return view('admindisplay')->with(['allInfo' => $alldata, 'user' => 'CLIENT']);
    // }


    // public function login_data(Request $request)
    // {
    //     $email = $request->input('email');
    //     $password = $request->input('password');

    //     // Fetching user data based on email or phone
    //     $data = DB::table('project_data')
    //                 ->where('email', $email)
    //                 ->orWhere('phone', $email)
    //                 ->first();

    //     // Check if user exists
    //     if (!$data) {
    //         return redirect('/login')->with('message', 'User not found');
    //     }

    //     // Verify password
    //     $password_db = $data->password;
    //     if ($password_db != $password) {
    //         return redirect('/login')->with('message', 'Password does not match');
    //     }

    //     // Set session and redirect based on user role
    //     $user_type = $data->user;
    //     if ($user_type == 'ADMIN') {
    //         // If user is admin, redirect back to login with a message
    //         return redirect('/admindisplay');
    //     } else {
    //         // If user is client, proceed with setting session and redirection
    //         $uid = $data->user_id;
    //         $request->session()->put('session_id', $uid);
    //         return redirect('/display');
    //     }
    // }
    public function admindisplay_data(Request $request)
{
    // Check if the user is an admin
    if ($request->session()->get('user_type') != 'ADMIN') {
        return redirect('/login')->with('message', 'Unauthorized access');
    }
else{
    $alldata = DB::table('project_data')->where('user','=','CLIENT')->get();

    return view('admindisplay')->with(['allInfo' => $alldata]);
}
}

public function login_data(Request $request)
{
    $email = $request->input('email');
    $password = $request->input('password');

    // Fetching user data based on email or phone
    $data = DB::table('project_data')
                ->where('email', $email)
                ->orWhere('phone', $email)
                ->first();

    // Check if user exists
    if (!$data) {
        return redirect('/login')->with('message', 'User not found');
    }

    // Verify password
    $password_db = $data->password;
        if ($password_db != $password) {
            return redirect('/login')->with('message', 'Password does not match');
        }

    // Set session and redirect based on user role
    $user_type = $data->user;
    $request->session()->put('session_id', $data->user_id);
    $request->session()->put('user_type', $user_type);

    if ($user_type == 'ADMIN') {
        return redirect('/admindisplay');
    } else {
        return redirect('/display');
    }
}

}

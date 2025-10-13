<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{

    function getUser()
    {
        return view('user');
    }

    function getGafoor()    
    {
        return "gafoor ko pakad liya";
    }
    function getUserName($name)
    {
        // return "hira beta " .$name;
        return view('getuser', ['name' => $name]);
    }
    function adminLogin()
    {
        return view('admin.login');
    }
    function getArray()
    {
        $name="anil";
        $users = ['peter','otaku','harry'];
        return view ('displayArray',["name"=>$name, "users"=>$users]);

    }
}

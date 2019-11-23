<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;

class loginController extends BaseController
{
    public function login(Request $req)
    {
        $emailper = $req->input('emailAdmin');
        $passwordper = $req->input('passwordAdmin');

        $ceklogin = DB::table('user')->where(['email'=>$emailper,'password'=>$passwordper])->get();
        if(count($ceklogin) >0)
        {
            return redirect('companyform');
        }
        else
        {
            echo "Login Gagal";
        }
    }
}



?>
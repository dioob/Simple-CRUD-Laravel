<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Query;
use DB;

class companyController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function show ()
    {
        return redirect('companyform');
    }
    public function store (Request $req)
    {
       

        if(!empty($req->input('id')))
        {
        $update_per = DB::table('tbperusahaan')->where('id', $req->input('id'))
        ->update([
            'namap'     => $req->input('namaPerusahaan'),
            'emailp'     => $req->input('emailPerusahaan'),
            'websitep'   => $req->input('websitePerusahaan')
    
        ]);
        return redirect('companyform');
        }
        else 
        {
        $namapers = $req->input('namaPerusahaan');
        $emailpers = $req->input('emailPerusahaan');
        $webpers = $req->input('websitePerusahaan');
        
        
        DB::table('tbperusahaan')->insert(
            ['namap'=>$namapers , 'emailp' => $emailpers, 'websitep'=>$webpers]
        );
        return redirect('companyform');
        }
        
    }

    public function index()
    {
        $perusahaan = DB::table('tbperusahaan')->paginate(5);
        return view('companyform', ['perusahaan' => $perusahaan]);
    }

    public function delete($id)
    {
        $perusahaan=DB::table('tbperusahaan')->delete($id);
        return redirect('companyform');
    }

    public function edit($id)
    {
        $perusahaan=DB::table('tbperusahaan')->where('id', $id)->first();
        return view('perusahaan_edit',compact('perusahaan'));
    }
}
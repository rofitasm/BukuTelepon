<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    function show(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $job = $request->input('job');
        $number = $request->input('number');
        // dd($request->input());
        $open = fopen("DataKontak.txt",'a');
        fwrite($open,"  Nama       : ${name} \n");
        fwrite($open,"  Email      : ${email} \n");
        fwrite($open,"  Pekerjaan  : ${job} \n");
        fwrite($open,"  No Telp    : ${number} \n");
        fwrite($open,"<hr>");
        fclose($open);

        return view('data');

    }
    
    
}
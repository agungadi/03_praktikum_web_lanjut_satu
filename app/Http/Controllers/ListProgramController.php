<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProgramController extends Controller
{
    //
    public function list($id = null){
        if($id){
            switch($id){
                case 1:
                return view('programid', ['link' => 'karir']);
                break;
                case 2:
                return view('programid', ['link' => 'magang']);
                break;
                case 3:
                return view('programid', ['link' => 'kunjungan-industri']);
                break;
            }
        }else{
               return view('program');
            }
        }
}


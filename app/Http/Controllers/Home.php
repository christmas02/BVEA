<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    public function home(){
        return view('template/home');
    }

    public function actualite(){
        return view('template/actualite');
    }

    public function nosactions(){
        return view('template/nosactions');
    }
    
    public function nosImplementations(){
        return view('template/nosImplementations');
    }

    public function nosMission(){
        return view('template/nosMissions');
    }

    public function nousContacter(){
        return view('template/nousContacter');
    }

    public function nousSoutenir(){
        return view('template/nousSoutenir');
    }

    public function oneArticle(){
        return view('template/oneArticle');
    }

    public function quiSommesnous(){
        return view('template/quiSommes-nous');
    }

    public function temoignages(){
        return view('template/temoignages');
    }

}  




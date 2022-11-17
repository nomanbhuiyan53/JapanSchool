<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function HomeView(){
        return view('frontend.page.home');
    }
    public function ProgramOne(){
        return view('frontend.program.page_one');
    }
    public function Programtwo(){
        return view('frontend.program.page_two');
    }
    public function Programthree(){
        return view('frontend.program.page_three');
    }
    public function TestModul(){
        return view('frontend.program.test_monial');
    }
   

}

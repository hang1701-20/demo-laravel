<?php

namespace App\Http\Controllers\Codebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BladeController extends Controller
{
    //
    public function index(){
       echo __METHOD__;
        $data = [];
        $data["learn"] = "laravel 7x";
        $data["year"] = "2020";

        return view("codebase.blade.index", $data);
    }

    public function indexMaster(){
        echo __METHOD__;
        return view("codebase.content.home");
    }

    public function home() {
        return view("codebase.master.home");
    }

    public function contact() {
        return view("codebase.master.contact");
    }

    public function intro() {
        return view("codebase.master.intro");
    }

    public function news() {
        return view("codebase.master.news");
    }
}

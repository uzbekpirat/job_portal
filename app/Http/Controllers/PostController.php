<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        return view("index");
    }

    public function about(){

        return view("about");
        }

    public function job_detalis(){

        return view("job-detalis");
    }
    public function contact(){

        return view("contact");
    }

    public function job_listing(){

        return view("job-listings");
        }
}

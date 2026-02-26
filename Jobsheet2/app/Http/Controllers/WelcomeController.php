<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	public function hello() {
    	    return 'Hello World';
	}

    public function about(){
            return 'Rifqi Aries Saputra 244107020175';
    }

    public function index() {
        return 'Selamat Datang';
    }
    
    public function articles($id) {
        return 'Halaman Artikel dengan Id ' . $id;
    }


    //percobaan3

    //public function greeting(){
        //return view('blog.hello', ['name' => 'Ari']);
    //}

    public function greeting(){
        return view('blog.hello')
            ->with('name','Andi')
            ->with('occupation','Astronaut');
    }

    

}

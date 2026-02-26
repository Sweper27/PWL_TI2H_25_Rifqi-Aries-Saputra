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


}

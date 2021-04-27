<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\produits;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        $category=categorie::all();
        $produits=produits::all();
        return view('default' , ['category' => $category , 'produits' => $produits ]);
    }

    public function about(){
        return view('layouts.about');
    }

    public function admin(){
        return view('admin.adminpanel');
    }
    
}

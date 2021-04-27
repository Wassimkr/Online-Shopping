<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\produits;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listc(){
        $categories = categorie::all();
        return view('admin.categorie.list' , compact('categories'));
    }


    public function index()
    {
        $produits = produits::all();
        $categories= categorie::all();


        return view('admin.categorie.create',compact(['categories','produits']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = categorie::all();
        return view('admin.categorie.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->except('image');

//        validation
        $this->validate($request,[
            'nomc'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg,webp|max:10000'
        ]);
//        image upload
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }
        categorie::create($formInput);
        return redirect()->route('categorie.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = categorie::find($id)->produits;
        $categories = categorie::all();
        return view('layouts.categories', compact(['categories' , 'products']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id){
        categorie::find($id)->delete();
        return redirect()->back();
    }
}

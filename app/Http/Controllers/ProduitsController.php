<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;
use App\Models\produits;
//use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Session;
use App\Models\cart;
use Illuminate\Support\Facades\DB;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function listp(){
        $produits = produits::all();
        return view('admin.produit.list' , compact('produits'));
    }
    
    public function showall(Request $request){ 
        $product=produits::where('idProduit', '=' , $request->idProduit)->first();
        return view('layouts.produits' , ['product' => $product]);
    }

    public function index()
    {
        $categories= categorie::all();
        $products=produits::all();
        return view('admin.produit.create',compact(['products', 'categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = categorie::pluck('nomc', 'id');
        return view('admin.produit.create', compact('categories'));
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
            'nom'=>'required',
            'prix'=>'required',
            'descript'=>'required',
            'quantite'=>'required',
            'categorie_id'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg,webp|max:10000'
        ]);
//        image upload
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }

        produits::create($formInput);
        return redirect()->route('produits.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produits=produits::where('idProduit',$id);
        $categories=categorie::pluck('nomc','id');
        return view('admin.produit.edit',compact(['produits','categories']));
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
        produits::where('idProduit', $id)->delete();
        return redirect()->back();
    }

    public function deletec($id){
        cart::destroy($id);
        return redirect('/cartList');
    }

    public function addToCart(Request $request){
            $cart = new cart;
            //$cart->user_id=$request->session()->get('user')['id'];
            $cart->idProduits=$request->produit_id;
            $cart->save();
            return redirect('/');
    }

    public static function cartItem(){
        //$userId= Session::get('user')['id'];
        return cart::count();
    }

    public function cartl(){
        $produits = DB::table('carts')->join('produits', 'carts.idProduits', '=' , 'produits.idProduit')
        ->select('produits.*' , 'carts.id as cart_id')->get();

        return view('cart' , ['produits' =>$produits]);
    }

}
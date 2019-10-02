<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Photo;
use DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->rate = $request->rate;
        $product->reviewsCount = $request->reviewsCount;
        $product->price = $request->price;
        $product->featuredProduct = $request->featuredProduct;
        $product->featuredPhoto = $request->featuredPhoto;
        $product->save();

        $product_id = $product->id;

        $photo1 = new Photo;
        $photo1->product_id = $product_id;
        $photo1->photo = $request->photos[0];
        $photo1->save();

        $photo2 = new Photo;
        $photo2->product_id = $product_id;
        $photo2->photo = $request->photos[1];
        $photo2->save();

        $photo3 = new Photo;
        $photo3->product_id = $product_id;
        $photo3->photo = $request->photos[2];
        $photo3->save();

        $photo4 = new Photo;
        $photo4->product_id = $product_id;
        $photo4->photo = $request->photos[3];
        $photo4->save();

        // $full_product = DB::table('products')
        //     ->join('photos', 'products.id', '=', 'photos.product_id')
        //     ->select('products.*', 'photos.photo')
        //     ->get();
        
        return $product_id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // view product photos only
        $photos = DB::table('photos')
            ->select('photo')
            ->where('product_id', '=', $id)
            ->get();
        return $photos;
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
}

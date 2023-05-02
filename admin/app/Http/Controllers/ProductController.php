<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\subcategory;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=product::orderby('id','DESC')->paginate('100');
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=category::orderby('id','DESC')->paginate('100');
        $subcategories=subcategory::orderby('id','DESC')->paginate('100');
        return view('admin.product.create',compact('categories','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
          // dd($request->all());
           $product= product::create([
            'image'=>'image.jpg', 
            'name'=>$request->name,
            'price'=>$request->price,
            'offer_price'=>$request->offer_price,
            'sku'=>$request->sku,
            'category'=>$request->category,
            'description'=>$request->description,
            'trending'=>$request->trending,
            'bestseller'=>$request->bestseller,
           'subcategory'=>$request->subcategory,
           ]);
           //image upload
           if($request->has('image')){
                $image= $request->image;
                $image_new_name=time() . '.' .$image->getClientOriginalExtension();
                $image->move('storage/post',$image_new_name);
                $product->image='/storage/post/'. $image_new_name;
                $product->save();
           }    
           //image upload
    
           
         
           return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        $categories=category::orderby('id','DESC')->paginate('100');
        $subcategories=subcategory::orderby('id','DESC')->paginate('100');
        return view('admin.product.edit',compact('product','categories','subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $product->image='image.jpg';
        $product->name=$request->name;
        $product->price=$request->price;
        $product->offer_price=$request->offer_price;
        $product->sku=$request->sku;
        $product->category=$request->category;
        $product->description=$request->description;
        $product->trending=$request->trending;
        $product->bestseller=$request->bestseller;
        $product->subcategory=$request->subcategory;
      
           //image upload
           if($request->has('image')){
                $image= $request->image;
                $image_new_name=time() . '.' .$image->getClientOriginalExtension();
                $image->move('storage/post',$image_new_name);
                $product->image='/storage/post/'. $image_new_name;
                $product->save();
           }    
           //image upload
    
           
         
           return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        if($product){
            $product->delete();
          
   
   return redirect()->route('product.index');
        }
    }
}

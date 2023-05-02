<?php

namespace App\Http\Controllers;

use App\Models\smallBanner;
use Illuminate\Http\Request;

class SmallBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $smallBanners=SmallBanner::OrderBy('id','ASC')->paginate('2');
        return view('admin.smallBanner.index',compact('smallBanners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.smallBanner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image'=>'required|image',
           ]);
          // dd($request->all());
           $smallBanner= smallBanner::create([
            
            'link'=>$request->link,
            'image'=>'image.jpg', 
           ]);
           //image upload
           if($request->has('image')){
                $image= $request->image;
                $image_new_name=time() . '.' .$image->getClientOriginalExtension();
                $image->move('storage/post',$image_new_name);
                $smallBanner->image='/storage/post/'. $image_new_name;
                $smallBanner->save();
           }    
           //image upload
    
           
         
           return redirect()->route('smallBanner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\smallBanner  $smallBanner
     * @return \Illuminate\Http\Response
     */
    public function show(smallBanner $smallBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\smallBanner  $smallBanner
     * @return \Illuminate\Http\Response
     */
    public function edit(smallBanner $smallBanner)
    {
        return view('admin.smallBanner.edit',compact('smallBanner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\smallBanner  $smallBanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, smallBanner $smallBanner)
    {
        $smallBanner->image='image.jpg';
        $smallBanner->link=$request->link;
          
           //image upload
           if($request->has('image')){
                $image= $request->image;
                $image_new_name=time() . '.' .$image->getClientOriginalExtension();
                $image->move('storage/post',$image_new_name);
                $smallBanner->image='/storage/post/'. $image_new_name;
                $smallBanner->save();
           }    
           //image upload
    
           
         
           return redirect()->route('smallBanner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\smallBanner  $smallBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(smallBanner $smallBanner)
    {
        if($smallBanner){
            $smallBanner->delete();
          
   
   return redirect()->route('smallBanner.index');
        }
    }
}

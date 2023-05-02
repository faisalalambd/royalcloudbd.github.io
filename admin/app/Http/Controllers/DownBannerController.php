<?php

namespace App\Http\Controllers;

use App\Models\downBanner;
use Illuminate\Http\Request;

class DownBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $downBanners=downBanner::OrderBy('id','DESC')->paginate('2');
        return view('admin.downBanners.index',compact('downBanners'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.downBanners.create');
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
           $downBanner= downBanner::create([
            
            'link'=>$request->link,
            'image'=>'image.jpg', 
           ]);
           //image upload
           if($request->has('image')){
                $image= $request->image;
                $image_new_name=time() . '.' .$image->getClientOriginalExtension();
                $image->move('storage/post',$image_new_name);
                $downBanner->image='/storage/post/'. $image_new_name;
                $downBanner->save();
           }    
           //image upload
    
           
         
           return redirect()->route('downBanner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\downBanner  $downBanner
     * @return \Illuminate\Http\Response
     */
    public function show(downBanner $downBanner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\downBanner  $downBanner
     * @return \Illuminate\Http\Response
     */
    public function edit(downBanner $downBanner)
    {
        return view('admin.downBanners.edit',compact('downBanner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\downBanner  $downBanner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, downBanner $downBanner)
    {
        $downBanner->image='image.jpg';
        $downBanner->link=$request->link;
          
           //image upload
           if($request->has('image')){
                $image= $request->image;
                $image_new_name=time() . '.' .$image->getClientOriginalExtension();
                $image->move('storage/post',$image_new_name);
                $downBanner->image='/storage/post/'. $image_new_name;
                $downBanner->save();
           }    
           //image upload
    
           
         
           return redirect()->route('downBanner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\downBanner  $downBanner
     * @return \Illuminate\Http\Response
     */
    public function destroy(downBanner $downBanner)
    {
        //
    }
}

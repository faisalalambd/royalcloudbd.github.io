<?php

namespace App\Http\Controllers;

use App\Models\gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries=Gallery::orderby('id','DESC')->paginate('100');
        return view('admin.gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
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
           $gallery= gallery::create([
            
            'link'=>$request->link,
            'banner'=>$request->banner,
            'image'=>'image.jpg', 
           ]);
           //image upload
           if($request->has('image')){
                $image= $request->image;
                $image_new_name=time() . '.' .$image->getClientOriginalExtension();
                $image->move('storage/post',$image_new_name);
                $gallery->image='/storage/post/'. $image_new_name;
                $gallery->save();
           }    
           //image upload
    
           
         
           return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $gallery)
    {
        return view('admin.gallery.edit',compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        $gallery->link=$request->link;
        $gallery->banner=$request->banner;
        $gallery->image='image.jpg';
         
           //image upload
           if($request->has('image')){
                $image= $request->image;
                $image_new_name=time() . '.' .$image->getClientOriginalExtension();
                $image->move('storage/post',$image_new_name);
                $gallery->image='/storage/post/'. $image_new_name;
                $gallery->save();
           }    
           //image upload
    
           
         
           return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery)
    {
        if($gallery){
            $gallery->delete();
        return redirect()->route('gallery.index');
        }
    }
}

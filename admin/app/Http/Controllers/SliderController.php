<?php

namespace App\Http\Controllers;

use App\Models\slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::OrderBy('id','DESC')->paginate('20');
        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            
            'image'=>'required|image'           
           ]);
          // dd($request->all());
           $slider= Slider::create([
            'image'=>'image.jpg', 
           ]);
           //image upload
           if($request->has('image')){
                $image= $request->image;
                $image_new_name=time() . '.' .$image->getClientOriginalExtension();
                $image->move('storage/post',$image_new_name);
                $slider->image='/storage/post/'. $image_new_name;
                $slider->save();
           }    
           //image upload
    
           
         
           return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(slider $slider)
    {
        return view('admin.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, slider $slider)
    {
        $slider->image='image.jpg';
          
           //image upload
           if($request->has('image')){
                $image= $request->image;
                $image_new_name=time() . '.' .$image->getClientOriginalExtension();
                $image->move('storage/post',$image_new_name);
                $slider->image='/storage/post/'. $image_new_name;
                $slider->save();
           }    
           //image upload
    
           
         
           return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(slider $slider)
    {
       
        if($slider){
            $slider->delete();
          
   
   return redirect()->route('slider.index');
        }
    }
}

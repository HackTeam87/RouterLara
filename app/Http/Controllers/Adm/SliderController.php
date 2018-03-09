<?php

namespace App\Http\Controllers\Adm;

use App\Model\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Menu;

use Image;

class SliderController extends Controller

{

    public function create (Request $request)
    {
        //считывание таблиц с базы данных
        $slider = Slider::paginate(5);


        return view('adm.slider.create' , array(
            'slider' => $slider,
        ));
    }




    public function store(Request $request)
    {
        $slider = new Slider();

        $slider->caption = $request->caption;
        $slider->text = $request->text;

        if( $request->hasFile('images') ) {
            $images = $request->file('images');

            $filename = time() . '.' . $images->getClientOriginalExtension();

            Image::make($images)->save( public_path('blog/img/slider/' . $filename ) );

            // Set page-images url
            $slider->images = $filename;
        }



        $slider->save();

        $mtitle = 'An Post'.' '.$request->name.' '.'has been added';
        return redirect()->route('sli.create', array(
            'message'=>$mtitle,
            'slider' =>$slider,
        ));
    }





    public function show($id)
    {
        //
    }





    public function edit($id)
    {
        $slider = Slider::find($id);


        return view('adm.slider.edit', compact('slider'));

    }



    public function update(Request $request, $id)
    {

        $slider = Slider::find($id);
        $slider->caption = $request->caption;
        $slider->text = $request->text;

        if( $request->hasFile('images') ) {
            $images = $request->file('images');

            $filename = time() . '.' . $images->getClientOriginalExtension();

            Image::make($images)->resize(500, 450)->save( public_path('blog/images/slider/' . $filename ) );

            // Set page-images url
            $slider->images = $filename;
        }


        $slider->save();

        $mtitle = 'An Post'.' '.$request->title.' '.'has been updated';
        return redirect()->route('sli.create', $slider->id);


    }



    public function destroy($id)
    {
        $slider = Slider::find($id);

        $slider->delete();

        return redirect()->route('sli.create', $slider->id);
    }



}

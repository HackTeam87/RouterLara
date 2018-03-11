<?php

namespace App\Http\Controllers\Adm;

use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\ByIptv;

use Illuminate\View\View;
use Image;

class IptvController extends Controller

{

    public function create (Request $request)
    {
        //считывание таблиц с базы данных
        $iptv = ByIptv::paginate(2);

        return View('adm.iptv.create', array('iptv' => $iptv));
    }





    public function store(Request $request)
    {
        $iptv = new ByIptv();

        $iptv->model = $request->model;
        $iptv->producer = $request->producer;
        $iptv->type = $request->type;
        $iptv->processor = $request->processor;
        $iptv->storage = $request->storage;
        $iptv->wifi = $request->wifi;
        $iptv->interface = $request->interface;
        $iptv->compozit = $request->compozit;
        $iptv->usb = $request->usb;
        $iptv->price = $request->price;
        $iptv->category_id = $request->category_id;

        if( $request->hasFile('images') ) {
            $images = $request->file('images');

            $filename = time() . '.' . $images->getClientOriginalExtension();

            Image::make($images)->save( public_path('blog/img/iptv/' . $filename ) );

            // Set page-images url
            $iptv->images = $filename;
        }



        $iptv->save();

        $mtitle = 'An Post'.' '.$request->name.' '.'has been added';
        return redirect()->route('iptv.create', array(
            'message'=>$mtitle,
            'iptv' =>$iptv,
        ));
    }





    public function show($id)
    {
        //
    }





    public function edit($id)
    {
        $iptv = ByIptv::find($id);


        return view('adm.iptv.edit', compact('iptv'));

    }



    public function update(Request $request, $id)
    {

        $iptv = ByIptv::find($id);

        $iptv->model = $request->model;
        $iptv->producer = $request->producer;
        $iptv->type = $request->type;
        $iptv->processor = $request->processor;
        $iptv->storage = $request->storage;
        $iptv->wifi = $request->wifi;
        $iptv->interface = $request->interface;
        $iptv->compozit = $request->compozit;
        $iptv->usb = $request->usb;
        $iptv->price = $request->price;
        $iptv->category_id = $request->category_id;

        if( $request->hasFile('images') ) {
            $images = $request->file('images');

            $filename = time() . '.' . $images->getClientOriginalExtension();

            Image::make($images)->save( public_path('blog/img/iptv/' . $filename ) );

            // Set page-images url
            $iptv->images = $filename;
        }



        $iptv->save();

        $mtitle = 'An Post'.' '.$request->title.' '.'has been updated';
        return redirect()->route('iptv.create', $iptv->id);


    }



    public function destroy($id)
    {
        $iptv = ByIptv::find($id);

        $iptv->delete();

        return redirect()->route('iptv.create', $iptv->id);
    }



}

<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use http\Env\Response;
use App\Model\ByIptv;
use Illuminate\View\View;

use App\Model\ByNetwork;

use Image;

class NetworkController extends Controller

{

    public function create (Request $request)
    {
        //считывание таблиц с базы данных
        $router = ByNetwork::paginate(1);

        return View('adm.routers.create', array('router' => $router));
    }





    public function store(Request $request)
    {
        $router = new ByNetwork();

        $router->model = $request->model;
        $router->producer = $request->producer;
        $router->type = $request->type;
        $router->standart = $request->standart;
        $router->dualBand = $request->dualBand;
        $router->interface = $request->interface;
        $router->wan = $request->wan;
        $router->usb = $request->usb;
        $router->storage = $request->storage;
        $router->typeAntenna = $request->typeAntenna;
        $router->numberAntenna = $request->numberAntenna;
        $router->text = $request->text;
        $router->price = $request->price;
        $router->category_id = $request->category_id;

        if( $request->hasFile('images') ) {
            $images = $request->file('images');

            $filename = time() . '.' . $images->getClientOriginalExtension();

            Image::make($images)->save( public_path('blog/img/routers/' . $filename ) );

            // Set page-images url
            $router->images = $filename;
        }



        $router->save();

        $mtitle = 'An Post'.' '.$request->name.' '.'has been added';
        return redirect()->route('router.create', array(
            'message'=>$mtitle,
            'router' =>$router,
        ));
    }





    public function show($id)
    {
        //
    }





    public function edit($id)
    {
        $router = ByNetwork::find($id);


        return view('adm.routers.edit', compact('router'));

    }



    public function update(Request $request, $id)
    {

        $router = ByNetwork::find($id);

        $router->model = $request->model;
        $router->producer = $request->producer;
        $router->type = $request->type;
        $router->standart = $request->standart;
        $router->dualBand = $request->dualBand;
        $router->interface = $request->interface;
        $router->wan = $request->wan;
        $router->usb = $request->usb;
        $router->storage = $request->storage;
        $router->typeAntenna = $request->typeAntenna;
        $router->numberAntenna = $request->numberAntenna;
        $router->text = $request->text;
        $router->price = $request->price;
        $router->category_id = $request->category_id;

        if( $request->hasFile('images') ) {
            $images = $request->file('images');

            $filename = time() . '.' . $images->getClientOriginalExtension();

            Image::make($images)->save( public_path('blog/img/routers/' . $filename ) );

            // Set page-images url
            $router->images = $filename;
        }


        $router->update();


        $mtitle = 'An Post'.' '.$request->title.' '.'has been updated';
        return redirect()->route('router.create', $router->id);


    }



    public function destroy($id)
    {
        $router = ByNetwork::find($id);

        $router->delete();

        return redirect()->route('router.create', $router->id);
    }



}

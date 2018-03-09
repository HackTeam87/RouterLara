<?php

namespace App\Http\Controllers\Adm;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Menu;
use App\Model\ByNetwork;
use App\Model\ByIptv;

use Image;

class AdminController extends Controller

{

    public function create (Request $request)
    {
        //считывание таблиц с базы данных
        $memu = Menu::paginate(3);

        $networks = ByNetwork::all();
        $iptvs = ByIptv::all();


        return view('adm.network.create' , array(
            'menu' => $memu,
            'networks' => $networks,
            'iptvs' => $iptvs,
        ));
    }




    public function store(Request $request)
    {
        $menus = new Menu();

        $menus->name = $request->name;
        $menus->alias = $request->alias;


        $menus->save();

        $mtitle = 'An Post'.' '.$request->name.' '.'has been added';
        return redirect()->route('my.create', array(
            'message'=>$mtitle,
            'menus' =>$menus,
        ));
    }





    public function show($id)
    {
        //
    }





    public function edit($id)
    {
        $menus = Menu::find($id);


        return view('adm.network.edit', compact('menus'));

    }



    public function update(Request $request, $id)
    {

        $menus = Menu::find($id);
        $menus->name = $request->name;
        $menus->alias = $request->alias;

        if( $request->hasFile('images') ) {
            $images = $request->file('images');

            $filename = time() . '.' . $images->getClientOriginalExtension();

            Image::make($images)->resize(500, 450)->save( public_path('blog/images/post/' . $filename ) );

            // Set page-images url
            $menus->images = $filename;
        }


        $menus->save();

        $mtitle = 'An Post'.' '.$request->title.' '.'has been updated';
        return redirect()->route('my.create', $menus->id);


    }



    public function destroy($id)
    {
        $menus = Menu::find($id);

        $menus->delete();

        return redirect()->route('my.create', $menus->id);
    }


}

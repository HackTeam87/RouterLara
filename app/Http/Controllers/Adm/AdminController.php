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


        return view('adm.admin.create' , array(
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
        $menu = Menu::find($id);


        return view('adm.admin.edit', compact('menu'));

    }



    public function update(Request $request, $id)
    {

        $menus = Menu::find($id);

        $menus->name = $request->name;
        $menus->alias = $request->alias;


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

<?php

namespace App\Http\Controllers\Adm;

//use Illuminate\Http\Request;

use Request;
use Response;
use View;
use App\Http\Controllers\Controller;
use App\Model\Menu;
use App\Model\ByNetwork;
use App\Model\ByIptv;
use App\Model\Slider;

use Image;

class MenuController extends Controller
{

    public function index(Request $request)
    {
        $memu = Menu::all();

        $networks = ByNetwork::all();
        $iptv = ByIptv::paginate(1);
        $slider = Slider::all();

        if (Request::ajax()) {
            return Response::json(View::make('blog.index', array(
                'menu' => $memu,
                'slider' => $slider,
                'iptv' => $iptv,
                'networks' => $networks,
            ))->render());

        }

            return view('blog.index' , array(
                'menu' => $memu,
                'networks' => $networks,
                'iptv' => $iptv,
                'slider' => $slider,
            ));




    }


    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

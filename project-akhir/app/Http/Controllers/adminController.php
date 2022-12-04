<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\menu;
use Illuminate\Http\Request;


class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = category::all();
        $menu = menu::all();
        return view('adminpage.home',[
            'menu' => $menu,
            'category' => $category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = menu::all();
        $category = category::all();
        return view('adminpage.create',[
            'menu' => $menu,
            'category' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $menu = new menu;
        $menu->name = $request->name;
        $menu->image = $request->image;
        $menu->price = $request->price;
        $menu->category_id = $request->category_id;
        $menu->save();
        return redirect('home');
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
        $menu = menu::find($id);
        $category = category::all();
        return view('adminpage.edit',[
            'menu' => $menu,
            'category' => $category

        ]);
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
        $menu = menu::find($id);
        // $menu->category_id = $request->category_id
        // $menu->nama = $request->nama;
        $menu->name = $request->name;
        $menu->image = $request->image;
        $menu->price = $request->price;
        $menu->save();
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = menu::find($id);
        $menu-> delete();
        return redirect('home');
    }
}

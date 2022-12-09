<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $category = Category::all();
        // if($request->has('search')){
        //     $menu = Menu::where('name', 'LIKE', '%' . $request->search . '%')
        //         ->orWhere('id', 'LIKE', '%' . $request->search . '%')
        //         ->orWhereHas('category_id', function ($query) use ($request) {
        //             $query->where('name', 'LIKE', '%' . $request->search . '%');
        //     })
        //     ->paginate(5);
        // }else{
        //     $menu=Menu::paginate(5);
        // }
        $menu = Menu::paginate(5);
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
        $menu = Menu::all();
        $category = Category::all();
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
        $menu = new Menu;
        $menu->name = $request->name;
        $menu->image = $request->file('image')->store("menu-img");
        $menu->price = $request->price;
        $menu->category_id = 1;
        $menu->save();

        $menu->categories()->attach(
            $request->categories
        );

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
        $menu = Menu::find($id);
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
        $menu = Menu::find($id);
        // $menu->category_id = $request->category_id
        // $menu->nama = $request->nama;
        $menu->name = $request->name;
        $menu->image = $request->file('image')->store("menu-img");
        $menu->price = $request->price;
        $menu->category_id = 1;
        $menu->save();

        $menu->categories()->sync(
            $request->categories
        );
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
        $menu = Menu::find($id);
        $menu-> delete();
        return redirect('home');
    }
}

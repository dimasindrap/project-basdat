<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Menu;
// use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // $transaction = Transaction::all();
        $menu = Menu::find($id);
        // $user = User::all();
        dd($menu);
        return view('cart',[
            // 'transaction' => $transaction,
            'menu' => $menu
            // 'user' => $user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $menu = Menu::all();
        // $transaction = Transaction::all();
        
        // return view('cart',[
        //     'transcation' => $transaction
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $transaction = new Transaction();
        // $transaction->address = $request->address;
        // $transaction->bukti_bayar = $request->file('image')->store("menu-img");
        // $transaction->save();
        // return redirect('riwayat');
        $validatedData = $request->validate([
            'menu_id' => 'required',
            'address' => 'required',
            'image_nota' => 'required',
            'date' => now() 
        ]);

        if($request->file('image_nota')){
            $validatedData['image_nota'] = $request->file('image_nota')->store('trasaksi-img');
        }
        Transaction::create($validatedData);

        return redirect('riwayat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $menu = Menu::find($id);
        // $user = User::all();
        // dd($menu);

        return view('cart',[
            // 'transaction' => $transaction,
            'menu' => $menu

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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

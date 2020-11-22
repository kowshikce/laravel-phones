<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($brand)
    {
        $asus = Phone::where("brand", "Asus")->orderBy("id", "desc")->take(6)->get();
        $samsung = Phone::where("brand", "Samsung")->orderBy("id", "desc")->take(6)->get();
        $xiaomi = Phone::where("brand", "Xiaomi")->orderBy("id", "desc")->take(6)->get();
        $oppo = Phone::where("brand", "Oppo")->orderBy("id", "desc")->take(6)->get();
        $lg = Phone::where("brand", "LG")->orderBy("id", "desc")->take(6)->get();
        $apple = Phone::where("brand",  "Apple")->orderBy("id", "desc")->take(6)->get();
        $nokia = Phone::where("brand", "Asus")->orderBy("id", "desc")->take(6)->get();


        $items = [
          "asus" => $asus,
          "samsung" => $samsung,
          "xiaomi" => $xiaomi,
          "oppo" => $oppo,
          "lg" => $lg,
          "apple" => $apple,
          "nokia" => $nokia
        ];


        return response()->json($items);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function show(Phone $phone)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(Phone $phone)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phone $phone)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phone $phone)
    {
        //
    }
}

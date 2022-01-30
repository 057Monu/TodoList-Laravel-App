<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use http\Exception\BadConversionException;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $todolists = Todolist::all();
        return view('home', compact('todolists'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $data = $request->validate([
           'content' => 'required'
        ]);

        Todolist::create($data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todolist  $todolist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todolist $todolist){
        $todolist->delete();
        return back();
    }


//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Models\Todolist  $todolist
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Todolist $todolist) {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Models\Todolist  $todolist
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Todolist $todolist) {
//        //
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create(){
//        //
//    }
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Models\Todolist  $todolist
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Todolist $todolist){
//        //
//    }
}

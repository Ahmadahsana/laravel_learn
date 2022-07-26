<?php

namespace App\Http\Controllers;

use App\Models\list_web;
use App\Http\Requests\Storelist_webRequest;
use App\Http\Requests\Updatelist_webRequest;

class ListWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing', [
            'title' => 'home',
            'lists' => list_web::all()
        ]);
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
     * @param  \App\Http\Requests\Storelist_webRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storelist_webRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\list_web  $list_web
     * @return \Illuminate\Http\Response
     */
    public function show(list_web $list_web)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\list_web  $list_web
     * @return \Illuminate\Http\Response
     */
    public function edit(list_web $list_web)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatelist_webRequest  $request
     * @param  \App\Models\list_web  $list_web
     * @return \Illuminate\Http\Response
     */
    public function update(Updatelist_webRequest $request, list_web $list_web)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\list_web  $list_web
     * @return \Illuminate\Http\Response
     */
    public function destroy(list_web $list_web)
    {
        //
    }
}

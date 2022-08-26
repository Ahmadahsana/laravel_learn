<?php

namespace App\Http\Controllers;

use App\Models\list_web;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Requests\Storelist_webRequest;
use App\Http\Requests\Updatelist_webRequest;
use phpDocumentor\Reflection\Types\Null_;

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
            'lists' => list_web::status_active()
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
    public function edit(Request $request)
    {
        // dd($request);
        return view('editweb', [
            'title' => 'Edit web',
            'Edit' => list_web::find($request)
            // 'Edit' => list_web::where('id', $id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatelist_webRequest  $request
     * @param  \App\Models\list_web  $list_web
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, list_web $list_web)
    {
        // ddd($list_web->all());
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'address' => 'required',
            'description' => 'required',
            'image' => 'image|file|max:2024'
        ]);

        if ($request->file('image')) {
            // if ($request->oldImage) {
            //     // Storage::delete($request->oldImage);
            // }
            $validatedData['image'] = $request->file('image')->store('web-image');
        }

        $validatedData['status'] = $request->status;

        // dd($validatedData);

        // list_web::where('id', $list_web->id)->update($validatedData);

        if ($request->filled('id')) {
            list_web::where('id', $request->id)->update($validatedData);
        }

        // $list_web->update($validatedData);

        return 'sukses kamu';
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

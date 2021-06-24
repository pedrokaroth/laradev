<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('property.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $property = new Property();
        $property->title = $request->title;
        $property->rental_price = $request->rental_price;
        $property->cover = $request->file('cover')->store('property');
        $property->save();

        var_dump(
            $request->file('cover')->getMimeType(),
            $request->file('cover')->getClientOriginalName(),
            $request->file('cover')->getClientOriginalExtension(),
            $request->file('cover')->getSize(),
            $request->file('cover')->isValid()
        );

        echo "<img src='" . Storage::url($property->cover) . "'>";

        //var_dump($request->cover, $request->file('cover'), $request->allFiles());
        //var_dump($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Property  $property
     * @return Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Property  $property
     * @return Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Property  $property
     * @return Response
     */
    public function update(Request $request, Property $property)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Property  $property
     * @return Response
     */
    public function destroy(Property $property)
    {
        //
    }
}

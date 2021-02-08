<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LaraDev\Property;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::all();

        return view('property/index')->with('properties', $properties);
    }

    public function show($name)
    {
        $property = Property::where('name', $name)->get();

        if(empty($property)) {
            return redirect()->action('PropertyController@index');
        }

        return view('property/show')->with('property', $property);

    }

    public function create()
    {
        return view('property/create');
    }

    public function edit($name)
    {
        $property = Property::where('name', $name)->get();

        if(empty($property)) {
            return redirect()->action('PropertyController@index');
        }

        return view('property/edit')->with('property', $property);

    }

    public function store(Request $request)
    {

        $property = [
            'title' => $request->title,
            'name' => $this->setName($request),
            'description' => $request->description,
            'rental_price' =>$request->rental_price,
            'sale_price' => $request->sale_price
        ];

        Property::create($property);

        return redirect()->action('PropertyController@index');
    }

    public function update(Request $request, $id)
    {
        $property = Property::find($id);

        $property->title = $request->title;
        $property->name = $this->setName($request);
        $property->description = $request->description;
        $property->rental_price = $request->rental_price;
        $property->sale_price = $request->sale_price;

        $property->save();

        return redirect()->action('PropertyController@index');
    }

    public function destroy($name)
    {
        $property = Property::where('name', $name)->get();

        if(!empty($property)) {
            DB::delete("DELETE FROM properties WHERE name = ?", [$name]);
        }

        return redirect()->action('PropertyController@index');
    }

    private function setName(Request $request) {
        $propertySlug = str_slug($request->title);

        $properties = Property::all();

        $inc = 0;
        foreach ($properties as $property) {
            if(str_slug($property->title) === $propertySlug) {
                $inc++;
            }
        }

        if($inc) {
            $propertySlug = $propertySlug . "-{$inc}";
        }

        return $propertySlug;
    }

}

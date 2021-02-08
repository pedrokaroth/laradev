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
            $request->title,
            $this->setName($request),
            $request->description,
            $request->rental_price,
            $request->sale_price
        ];

        DB::insert("INSERT INTO properties (title,name, description, rental_price, sale_price)
                          VALUES (?, ?, ?, ?, ?)", $property);

        return redirect()->action('PropertyController@index');
    }

    public function update(Request $request, $id)
    {
        $property = [
            $request->title,
            $this->setName($request),
            $request->description,
            $request->rental_price,
            $request->sale_price,
            $id
        ];

        DB::update("UPDATE properties SET title = ?, name = ?, description = ?, rental_price = ?, sale_price = ?
                          WHERE id = ?", $property);

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

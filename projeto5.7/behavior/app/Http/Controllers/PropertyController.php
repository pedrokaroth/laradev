<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = DB::select("SELECT * FROM properties");

        return view('property/index')->with('properties', $properties);
    }

    public function show($name)
    {
        $property = DB::select("SELECT * FROM properties WHERE name = ?", [$name]);

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
        $property = DB::select("SELECT * FROM properties WHERE name = ?", [$name]);

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

    private function setName(Request $request) {
        $propertySlug = str_slug($request->title);

        $properties = DB::select("SELECT * FROM properties");

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

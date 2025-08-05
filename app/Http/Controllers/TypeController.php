<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return view("types.index", compact("types"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("types.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newType = new Type();

        $newType->name = $data['name'];
        $newType->description = $data['description'];

        $newType->save();

        return redirect()->route("types.show", $newType);
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        return view("types.show", compact("type"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view("types.edit", compact("type"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $data = $request->all();

        $type->name = $data['name'];
        $type->description = $data['description'];

        $type->update();

        return redirect()->route("types.show", $type);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $type->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        return redirect()->route("types.index");
    }
}

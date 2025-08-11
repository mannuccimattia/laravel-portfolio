<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technology::all();
        return view("technologies.index", compact("technologies"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("technologies.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newTech = new Technology();

        $newTech->name = $data['name'];
        $newTech->color = $data['color'];

        $newTech->save();

        return redirect()->route("technologies.show", $newTech);
    }

    /**
     * Display the specified resource.
     */
    public function show(Technology $technology)
    {
        return view("technologies.show", compact("technology"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Technology $technology)
    {
        return view("technologies.edit", compact("technology"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technology $technology)
    {
        $data = $request->all();

        $technology->name = $data['name'];
        $technology->color = $data['color'];

        $technology->update();

        return redirect()->route("technologies.show", $technology);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Technology $technology)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $technology->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        return redirect()->route("types.index");
    }
}

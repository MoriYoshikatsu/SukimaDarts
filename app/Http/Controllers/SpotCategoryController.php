<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpotCategory;

class SpotCategoryController extends Controller
{
    public function departureForm(SpotCategory $spot_category)
    {
        return view('home2')->with(['spot_categories' => $spot_category->get()]);
        dd();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Spot_category  $spot_category
     * @return \Illuminate\Http\Response
     */
    public function show(Spot_category $spot_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spot_category  $spot_category
     * @return \Illuminate\Http\Response
     */
    public function edit(Spot_category $spot_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spot_category  $spot_category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spot_category $spot_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spot_category  $spot_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Spot_category $spot_category)
    {
        //
    }
}

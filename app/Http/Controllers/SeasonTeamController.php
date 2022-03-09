<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSeasonTeamRequest;
use App\Http\Requests\UpdateSeasonTeamRequest;
use App\Models\SeasonTeam;

class SeasonTeamController extends Controller
{
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
     * @param  \App\Http\Requests\StoreSeasonTeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeasonTeamRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SeasonTeam  $seasonTeam
     * @return \Illuminate\Http\Response
     */
    public function show(SeasonTeam $seasonTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SeasonTeam  $seasonTeam
     * @return \Illuminate\Http\Response
     */
    public function edit(SeasonTeam $seasonTeam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSeasonTeamRequest  $request
     * @param  \App\Models\SeasonTeam  $seasonTeam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeasonTeamRequest $request, SeasonTeam $seasonTeam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SeasonTeam  $seasonTeam
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeasonTeam $seasonTeam)
    {
        //
    }
}

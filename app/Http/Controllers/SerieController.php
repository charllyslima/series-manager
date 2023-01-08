<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSeriesRequest;
use App\Http\Requests\UpdateSeriesRequest;
use App\Models\Serie;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {

        $series = DB::select('SELECT * FROM series');

        return view('series/index')->with('series', $series);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        dd('teste');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSeriesRequest  $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(StoreSeriesRequest $request)
    {
        $serie = new Serie();
        $serie->setAttribute('name', $request->input('name'));
        $serie->save();
        return redirect('/series');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Serie  $series
     * @return Response
     */
    public function show(Serie $series)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Serie  $series
     * @return Response
     */
    public function edit(Serie $series)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSeriesRequest  $request
     * @param  \App\Models\Serie  $series
     * @return Response
     */
    public function update(UpdateSeriesRequest $request, Serie $series)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Serie  $series
     * @return Response
     */
    public function destroy(Serie $series)
    {
        //
    }
}

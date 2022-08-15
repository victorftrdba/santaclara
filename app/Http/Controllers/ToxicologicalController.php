<?php

namespace App\Http\Controllers;

use App\Models\Unity;
use Illuminate\Http\Request;
use App\Models\Toxicological;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ToxicologicalRequest;

class ToxicologicalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $toxicologicals = Toxicological::orderBy('updated_at', 'DESC')
            ->paginate(15);

        return view('toxicological.index', compact('toxicologicals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unities = Unity::all();

        return view("toxicological.create", compact('unities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ToxicologicalRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = Auth::user()->id;

        Toxicological::create($data);

        return response()->redirectTo(route('toxicological.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Visited;
use Illuminate\Http\Request;

class VisitedController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $visited = Visited::create($request->post());
        return response()->json([
            'visited'=>$visited
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visited  $visited
     * @return \Illuminate\Http\Response
     */
    public function show(Visited $visited)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visited  $visited
     * @return \Illuminate\Http\Response
     */
    public function edit(Visited $visited)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visited  $visited
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visited $visited)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visited  $visited
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $visited= Visited::find($id);
        $visited->delete();
        return response()->json([
            'msg'=>$visited
         ]);
    }
}

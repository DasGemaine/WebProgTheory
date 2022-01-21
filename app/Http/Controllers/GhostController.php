<?php

namespace App\Http\Controllers;

use App\Models\Ghost;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreGhostRequest;
use App\Http\Requests\UpdateGhostRequest;

class GhostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ghosts = Ghost::all();
        return view('ghost', [
            'title' => 'ghosts',
            'ghosts' => $ghosts
        ]);
    }

    public function detail(Ghost $ghosts)
    {
        return view('detail', [
            'title' => 'Detail',
            'ghosts' => $ghosts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //

        $ghost = $request->validate([
            'name' => 'required',
            'origin' => 'required|not_in:Choose Origin...',
            'ghost_image' => 'required|mimes:png,jpg,jpeg,svg',
            'information' => 'required'
        ]);


        $string = $request->information;

        $file_ext = $request->ghost_image->getClientOriginalExtension();
        $filename = $request->name.'.'.$file_ext;
        $filepath = $request->ghost_image->move('image', $filename);
        $newfilepath = asset('image/'.$filename);

        $ghost['ghost_image'] = $newfilepath;

        
        // $ghost['ghost_image'] = $request->file('ghost_image')->store('ghost-images');
        
        $ghost['thumbnail_text'] = Str::limit(strip_tags($string), 200, '...');
        
        Ghost::create($ghost);

        return redirect('/ghosts')->with('success_add-ghost', 'Successfully inputted a new Ghost');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGhostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGhostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ghost  $ghost
     * @return \Illuminate\Http\Response
     */
    public function show(Ghost $ghost)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ghost  $ghost
     * @return \Illuminate\Http\Response
     */
    public function edit(Ghost $ghost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGhostRequest  $request
     * @param  \App\Models\Ghost  $ghost
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGhostRequest $request, Ghost $ghost)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ghost  $ghost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ghost $ghost)
    {
        //
    }
}

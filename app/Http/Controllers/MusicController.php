<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Music;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musics = Music::orderBy('created_at', 'desc')->paginate(10);
        return view('musics.list',['musics' => $musics]);
    }

    public function findByRanking()
    {
        $musics = Music::orderBy('like', 'desc')->paginate(9);
        return view('index',['musics' => $musics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('musics.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $music = new Music;
        $music->name        = $request->name;
        $music->track = $request->track;
        $music->vocalist    = $request->vocalist;
        $music->file       = 'https://soundcloud.com/carlos-izel/sets/malta';
        $music->imgTumbnail       = 'https://s2.glbimg.com/my8EQve4cN_m8-eBAAFLRp4GkdA=/s.glbimg.com/et/pr/f/original/2014/09/01/malta-supernova_1.jpg';
        
        $music->save();
        return redirect('musics');
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

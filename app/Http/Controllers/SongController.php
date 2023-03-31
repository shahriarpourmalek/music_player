<?php

namespace App\Http\Controllers;

use App\Events\MusicStreamEvent;
use App\Http\Requests\AddSongRequest;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SongController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $songs = Song::all();
        return view('songs.index', compact('songs'));
    }

    public function create()
    {
        return view('songs.create');
    }

    public function store(AddSongRequest $request)
    {
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();
        $url = Storage::disk('public')->put('uploads', $file);
        Song::create([
            'title' => $request->input('title'),
            'artist' => $request->input('artist'),
            'file' => $url,
        ]);

        return redirect()->route('songs.index');
    }

    public function show(Song $song)
    {

        event(new MusicStreamEvent($song));
        return view('songs.show', compact('song'));
    }


}

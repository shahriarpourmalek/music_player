@extends('layouts.app')

@section('content')
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex justify-center items-center mb-8">
            <h1 class="text-3xl font-bold">All Songs</h1>
            <a href="{{ route('songs.create') }}" class="ml-4 inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-green-600 hover:bg-green-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-700 active:bg-blue-800 transition duration-150 ease-in-out">
                Add Song
            </a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($songs as $song)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">

                    <div class="px-4 py-2">
                        <h2 class="text-xl font-bold mb-2">{{ $song->title }}</h2>
                        <p class="text-gray-700">{{ $song->artist }}</p>
                        <a href="{{ route('songs.show', $song->id) }}" class="block bg-green-600 text-white rounded-lg py-2 px-4 mt-4 hover:bg-green-700">Play Now</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

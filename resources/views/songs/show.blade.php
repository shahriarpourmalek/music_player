@extends('layouts.app')

@section('content')

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="flex flex-col md:flex-row">

            <div class="md:w-1/2 md:pl-8 mt-4 md:mt-0">
                <h1 class="text-3xl font-bold mb-2">{{ $song->title }}</h1>
                <p class="text-gray-700 mb-4">{{ $song->artist }}</p>
                <audio id="player" controls autoplay>
                    <source src="{{ asset($song->file)}}" type="audio/mpeg">
                </audio>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://js.pusher.com/3.2/pusher.min.js"></script>
<script>
    import Pusher from 'pusher-js'

</script>

@endsection

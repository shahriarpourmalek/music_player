@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h1 class="text-3xl font-bold mb-8">Login</h1>

    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 mb-8 rounded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-2" for="email">
                Email
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="mb-4">
            <label class="block text-gray-500 font-bold mb-2" for="password">
                Password
            </label>
            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" required>
        </div>

        <div class="mb-4">
            <input type="checkbox" name="remember" id="remember" class="mr-2">
            <label class="text-gray-500 font-bold" for="remember">
                Remember Me
            </label>
        </div>

        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded">
            Login
        </button>
    </form>
@endsection

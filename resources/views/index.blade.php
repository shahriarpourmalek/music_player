@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <h1 class="text-3xl font-bold mb-8">Welcome to {{ config('app.name') }}</h1>

        <p class="text-lg mb-8">
            This is a sample application built with Laravel and Tailwind CSS. It demonstrates how to use Laravel's built-in authentication features to allow users to register, login, and logout.
        </p>

        <p class="text-lg mb-8">
            To get started, you can either register a new account or login with the following credentials:
        </p>

        <ul class="list-disc ml-8 mb-8">
            <li><strong>Email:</strong> test@example.com</li>
            <li><strong>Password:</strong> password</li>
        </ul>

        <p class="text-lg">
            Thanks for checking out this demo!
        </p>
    </div>
@endsection

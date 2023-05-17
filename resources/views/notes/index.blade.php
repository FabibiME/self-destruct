@extends('layouts.app')

@section('content')
    <h1><b>Create</b> new self-destructing note</h1>

    <form method="POST" action="{{ route('store') }}">
        @csrf
        <textarea
            class="dark-textarea h-200"
            name="message"
            placeholder="Enter your note here!"
        ></textarea>
        <button type="submit" class="dark-button">
                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" width="16" height="16">
                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                </svg>


            Encrypt message!
        </button>
    </form>
@endsection
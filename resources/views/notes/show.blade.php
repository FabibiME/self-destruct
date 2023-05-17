@extends('layouts.app')

@section('content')
    <h1><b>Do</b> you want reveal the secret message?</h1>

    <div class="p-6-rem">
        <a href="{{ route('openNote',[$uuid]) }}">
        <button class="dark-button" id="copyButton">
        Show me!
        </button>
        </a>
    </div>

    
@endsection
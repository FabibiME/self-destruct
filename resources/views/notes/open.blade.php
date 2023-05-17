@extends('layouts.app')

@section('content')
    <h1><b>Self-destructing</b> note has been deleted.</h1>

    <div class="p-6-rem">
        <textarea
            class="dark-textarea h-200"
            name="message"
            placeholder="Enter your note here!"
        >{{$text}}</textarea>
    </div>
@endsection
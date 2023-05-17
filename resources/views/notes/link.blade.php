@extends('layouts.app')

@section('content')
    <h1><b>Your</b> link has been created.</h1>

    <div class="p-6-rem">
        <input class="dark-textarea link-area" id="link" value="{{config('app.url')}}/notes/{{$title}}" >
        <button class="dark-button" id="copyButton">
        Copy to clipboard
        </button>
    </div>


<script>
  const textarea = document.getElementById('link');
  const copyButton = document.getElementById('copyButton');

  copyButton.addEventListener('click', function() {
    textarea.select();
    document.execCommand('copy');
    alert('Text successfully copied to your clipboard!');
  });
</script>

    
@endsection
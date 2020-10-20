@extends('layouts.app')

@section('content')
<h2>Elenco Post</h2>
    @foreach ($posts as $post)
          <div>
            <p>{{$post->title}}</p>
            <p>{{$post->body}}</p>
          </div>
      @endforeach
@endsection
@extends('layouts.app')

@section('content')
  <h2>Dettagli Utente</h2>
      <ul>
      <li>{{$user->name}}</li>
      <li>{{$user->email}}</li>
      <li>{{$user->avatar->avatar}}</li>
      <li><a href="{{route('users.show',$user->id)}}">Dettagli</a></li>
      </ul>
    <form action="{{route('users.destroy',$user->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Cancella utente">
      </form>

    <h3>Post che ha scritto</h3>
      @foreach ($user->posts as $post)
          <div>
            <p>{{$post->title}}</p>
            <p>{{$post->body}}</p>
          </div>
      @endforeach
@endsection
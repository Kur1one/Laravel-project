@extends('layouts.app')

@section('content')
    <form action="" method="POST">
    <ul>
@foreach ($posts as $post)
        <li style="color: #cbd5e0" {{ $post->id }}">{{ $post->title }} <input type="checkbox" name="{{$post->title}}">
@endforeach
    </ul>
    <button type="submit">Order service</button>
    </form>
@endsection

@extends('layouts.app')

@section('content')
    <h1 style="color: #cbd5e0">{{$title}}</h1>
    <center>
        <form action="{{route("placingOrder")}}" method="POST">
            @csrf
    <ul style="justify-content: center; color: #cbd5e0">
        <li><input type="checkbox" name="first" value="firstP" /> first</li>
        <li><input type="checkbox" name="second" value="secondP" /> second</li>
        <li><input type="checkbox" name="third" value="thirdP" /> third</li>
        <li><input type="checkbox" name="fourth" value="fourthP" /> fourth</li>
        <li><input type="checkbox" name="fifth" value="fifthP" /> fifth</li>
        <button type="submit" class="" id="orderBtn">Place and order</button>
    </ul>
        </form>
    </center>
    <script>

    </script>
@endsection

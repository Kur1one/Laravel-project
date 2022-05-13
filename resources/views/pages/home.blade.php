@extends('layouts.app')

@section('content')
    <title>{{($title)}}</title>
    <video autoplay muted loop id="myVideo">
        <source src="http://localhost/B/public/main.mp4" type="video/mp4">
    </video>

    <div class="content">
        <h1>Framecore production...</h1>
        <p>Is the best way to advertise your business!!!</p>
        <button id="myBtn" onclick="myFunction()">Pause</button>
    </div>

    <script>
        var video = document.getElementById("myVideo");

        var btn = document.getElementById("myBtn");

        function myFunction() {
            if (video.paused) {
                video.play();
                btn.innerHTML = "Pause";
            } else {
                video.pause();
                btn.innerHTML = "Play";
            }
        }
    </script>

    <h3>Companies we are cooperate with</h3>
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://localhost/B/public/blackstar.png" alt="blackstar" class="d-block w-20 m-auto">
            </div>
            <div class="carousel-item">
                <img src="http://localhost/B/public/kaspi.png" alt="kaspi" class="d-block w-20 m-auto">
            </div>
            <div class="carousel-item">
                <img src="http://localhost/B/public/tdfa.png" alt="tdfa" class="d-block w-20 m-auto">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <br></br>
    <br></br>
    <br></br>
@endsection



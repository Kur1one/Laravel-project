@extends('layouts.app')

@section('content')
    <title>{{$title}}</title>
    <body>
    <div class="tab">
        <button class="tablinks" onclick="openService(event, 'Goal')" id="defaultOpen">Arlan</button>
        <button class="tablinks" onclick="openService(event, 'SMM')">Bauyrzhan</button>
        <button class="tablinks" onclick="openService(event, 'Production')">Daniyar</button>
    </div>

    <div id="Goal" class="tabcontent">
        <p class="row">
        <div class="row">
            <div class="col-sm">
                Arlan is the creator of the original website, and helps Bauyrzhan and Daniyar to transport the website to the Laravel.
            </div>
            <div class="col-sm" class="embed-responsive embed-responsive-4by3">
                <img src="http://localhost/B/public/Arl.jfif">
            </div>
            </p>
        </div>
    </div>

    <div id="SMM" class="tabcontent">
        <p class="row">
        <div class="row">
            <div class="col-sm">
                Bauyrzhan is the person who likes Laravel a lot and tell everyone how to do things there.
            </div>
            <div class="col-sm" class="embed-responsive embed-responsive-4by3">
                <img src="http://localhost/B/public/Bau.jfif">
            </div>
            </p>
        </div>
    </div>

    <div id="Production" class="tabcontent">
        <p class="row">
        <div class="row">
            <div class="col-sm">
                Daniyar is the person who helps Arlan and Bauyrzhan.
            </div>
            <div class="col-sm" class="embed-responsive embed-responsive-4by3">
                <img src="http://localhost/B/public/Dan.jfif">
            </div>
            </p>
        </div>
    </div>

    <script>
        function openService(evt, Service) {
            var i, tabcontent, tablinks;

            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            document.getElementById(Service).style.display = "block";
            evt.currentTarget.className += " active";
        }

    </script>

    </body>
    <br></br>
    <br></br>
@endsection

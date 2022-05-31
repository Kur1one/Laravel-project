@extends('layouts.app')

@section('content')
    <title>{{$title}}</title>
    <body>
    <div class="tab">
        <button class="tablinks" onclick="openService(event, 'Goal')" id="defaultOpen">Goal of the company</button>
        <button class="tablinks" onclick="openService(event, 'SMM')">SMM</button>
        <button class="tablinks" onclick="openService(event, 'Production')">Production</button>
        <button class="tablinks" onclick="openService(event, 'Branding')">Branding</button>
        <button class="tablinks" onclick="openService(event, 'Motion Design')">Motion Design</button>
    </div>

    <div id="Goal" class="tabcontent">
        <p class="row">
        <div class="row">
            <div class="col-sm">
                The goal of FRAMECORE is to increase the popularity of companies around the world.
                We develop corporate identity and advertising for large companies, small businesses,
                start-ups and other projects, as well as promote them in the digital space.
            </div>
            <div class="col-sm" class="embed-responsive embed-responsive-4by3">
                <button id="playbtn1" type="button" class="btn btn-secondary" onclick="playPause1()"><i class="fa-solid fa-circle-play"></i></button>
                <video id="video1" width=320 height=240>
                    <source src="http://localhost/B/public/goal.mp4" type="video/mp4">
                </video>
            </div>
            </p>
        </div>
        <button type="submit">Login</button>
    </div>

    <div id="SMM" class="tabcontent">
        <p class="row">
        <div class="row">
            <div class="col-sm">
                We will help your business to grow up in digital area by using of modern tools, such as target advertising
                </p>
            </div>
        </div>
        <button type="submit">Login</button>
    </div>

    <div id="Production" class="tabcontent">
        <p class="row">
        <div class="row">
            <div class="col-sm">
                Making of commercial videos for brands using 3D Graphics, 2D animation and video recording
            </div>
            <div class="col-sm">
                <button id="playbtn3" type="button" class="btn btn-secondary" onclick="playPause3()"><i class="fa-solid fa-circle-play"></i></button>
                <video id="video3" width=460 height=240>
                    <source src="http://localhost/B/public/production.mp4" type="video/mp4">
                </video>
            </div>
            </p>
        </div>
        <button type="submit">Login</button>
    </div>

    <div id="Branding" class="tabcontent">
        <p class="row">
        <div class="row">
            <div class="col-sm">
                Creating logo, making design and your own style for your business or product
                </p>
            </div>
        </div>
        <button type="submit">Login</button>
    </div>

    <div id="Motion Design" class="tabcontent">
        <p class="row">
        <div class="row">
            <div class="col-sm">
                Commercial advertisment
            </div>
            <div class="col-sm">
                <button id="playbtn2" type="button" class="btn btn-secondary" onclick="playPause2()"><i class="fa-solid fa-circle-play"></i></button>
                <video id="video2" width=320 height=240>
                    <source src="http://localhost/B/public/motion.mp4" type="video/mp4">
                </video>
            </div>
            </p>
        </div>
        <button type="submit">Login</button>
    </div>

    <script>
        document.getElementById("defaultOpen").click();
        var myVideo1 = document.getElementById("video1");
        var myVideo2 = document.getElementById("video2");
        var myVideo3 = document.getElementById("video3");


        function playPause1() {
            if (myVideo1.paused)
                myVideo1.play();
            else
                myVideo1.pause();
        }
        function playPause2() {
            if (myVideo2.paused)
                myVideo2.play();
            else
                myVideo2.pause();
        }
        function playPause3() {
            if (myVideo3.paused)
                myVideo3.play();
            else
                myVideo3.pause();
        }

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
@endsection

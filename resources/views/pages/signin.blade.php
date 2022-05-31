@extends('layouts.app')

@section('content')
    <title>Login</title>
    <style>
        h1{
            color: white;
        }
        Body {
            font-family: verdana;
            background-color: #1a1919;
        }
        button {
            background-color: #4e4b4b;
            width: 100%;
            color: white;
            padding: 15px;
            margin: 10px 0px;
            border: none;
            cursor: pointer;
        }
        input[type=text], input[type=password] {
            width: 100%;
            margin: 8px 0;
            padding: 12px 20px;
            display: inline-block;
            background-color:#4e4b4b;
            box-sizing: border-box;
        }
        button:hover {
            opaService: 0.7;
        }
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            margin: 10px 5px;
        }


        .container {
            padding: 25px;
            background-color: #1a1919;
            height: auto;
            margin-top: 100px;
        }
        .reg{
            text-align:center;
            color:white;
        }
    </style>
    <body>
    <br>
    <form method="POST" action="{{route("login_process")}}">
        @csrf
        <div class="container">
            <label> Email :
            </label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label>Password : </label>
            <input type="password" placeholder="Enter Password" name="password" required>
            <div>
                <a href="{{route('forgot')}}" style="position: center;">Forgot Password?</a>
            </div>
            <button type="submit">Login</button>

        </div>
        <br></br>

        <div class="reg">
            <p>Not registered yet? <a href="http://localhost/B/public/registration">Register</a>.</p>
        </div>
        <div class="reg">
            <p>Go to admin panel <a href="http://localhost:8000/admin/login">Admin panel</a>.</p>
        </div>
    </form>
    </body>
    //checkk
@endsection

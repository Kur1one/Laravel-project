@extends('layouts.app')

@section('content')
    <title>Order</title>
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
    <form method="POST" action="{{route("order_process")}}">
        @csrf
        <div class="container">
            <label> Price :
            </label>
            <input type="text" placeholder="Enter your price" name="price" required>

            <label> Order : </label>
            <input type="text" placeholder="Enter your order" name="order" required>

            <label> Email : </label>
            <input type="text" placeholder="Enter your email" name="email" required>

            <button type="submit">Order</button>

        </div>
        <br></br>

    </form>
    </body>
    //checkk
@endsection

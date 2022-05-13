@extends('layouts.app')

@section('content')
    <h1 style="padding-left: 10px;"><title>{{$title}}</title></h1>
    <body>
    <div class="api" style="position:relative;overflow:hidden;"><a href="https://yandex.kz/maps/163/nur-sultan/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Нур‑Султан</a><a href="https://yandex.kz/maps/163/nur-sultan/house/Y0gYcgNlTkIFQFtrfX11cnxqZw==/?ll=71.446660%2C51.142489&utm_medium=mapframe&utm_source=maps&z=16.53" style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Амман, 4 — Яндекс Карты</a><iframe src="https://yandex.kz/map-widget/v1/-/CCUFeKg8cA" width="2000" height="580" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div></body>
@endsection

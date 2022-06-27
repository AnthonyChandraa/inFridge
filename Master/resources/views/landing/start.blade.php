@extends('landing.template')

@section('title', 'inFridge | Start')

@section('content')
<div class="container-fluid m-0 p-0" style="background-image: url('http://127.0.0.1:8000/storage/Assets/Home.jpg');
         background-repeat: no-repeat; background-size: contain; background-position: right;">
    <div class="container logo-container position-relative p-0 m-0 d-flex justify-content-end align-items-center"
         style="width: 45vw; height:100vh; background-color: #0F225E">
        <div class="position-absolute" style="left:38vw">
            <div class="logo d-flex justify-content-center align-items-center">
                <p class="m-2" style="font-size: 100px; font-family: 'Poppins', sans-serif; color: white; font-weight:
                bold;
">in</p>
                <p class="m-2" style="font-size: 100px; font-family: 'Poppins', sans-serif; font-weight: bold;
color: #0F225E">Fridge</p>
            </div>
            <div class="d-flex justify-content-center">
                <a href="" id="btn-start" style="font-family: 'Poppins', sans-serif"><button
                        style="width: 100px; border-radius: 45px; padding: 10px; border: 2px solid
                        #0F225E; background-color: transparent;">Start</button></a>
            </div>
        </div>
    </div>
</div>

@endsection()

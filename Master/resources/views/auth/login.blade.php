@extends('auth.template')

@section('title', 'Login')

@section('content')
    <div class="container-fluid">
        <div class="container mt-5 p-3 border rounded shadow" style="width: 600px">
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="mb-3  d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first()}}
                    </div>
                @endif
            </form>
        </div>
    </div>
@endsection

@extends('auth.template')

@section('title', 'Register')

@section('content')
    <div class="container-fluid">
        <div class="container mt-5 p-3 border rounded shadow" style="width: 600px">
            <form action="{{route('register')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                </div>
                <div class="mb-3">
                    <label for="conf-password" class="form-label">Confirm Password</label>
                    <input type="password" name="conf-password" class="form-control" id="conf-password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="terms" id="terms" required>
                    <label class="form-check-label" for="terms">I Agree to Terms & Conditions</label>
                </div>
                <div class="mb-3  d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Register</button>
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

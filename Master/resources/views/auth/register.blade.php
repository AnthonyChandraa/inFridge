@extends('auth.template')

@section('title', 'Register')

@section('content')
{{--    <div class="container-fluid">--}}
{{--        <div class="container mt-5 p-3 border rounded shadow" style="width: 600px">--}}
{{--            <form action="{{route('register')}}" method="post">--}}
{{--                @csrf--}}
{{--                <div class="mb-3">--}}
{{--                    <label for="name" class="form-label">Name</label>--}}
{{--                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">--}}
{{--                </div>--}}
{{--                <div class="mb-3">--}}
{{--                    <label for="email" class="form-label">Email address</label>--}}
{{--                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">--}}
{{--                </div>--}}
{{--                <div class="mb-3">--}}
{{--                    <label for="password" class="form-label">Password</label>--}}
{{--                    <input type="password" name="password" class="form-control" id="password">--}}
{{--                </div>--}}
{{--                <div class="mb-3">--}}
{{--                    <label for="conf-password" class="form-label">Confirm Password</label>--}}
{{--                    <input type="password" name="conf-password" class="form-control" id="conf-password">--}}
{{--                </div>--}}
{{--                <div class="mb-3 form-check">--}}
{{--                    <input type="checkbox" class="form-check-input" name="terms" id="terms" required>--}}
{{--                    <label class="form-check-label" for="terms">I Agree to Terms & Conditions</label>--}}
{{--                </div>--}}
{{--                <div class="mb-3  d-flex justify-content-center">--}}
{{--                    <button type="submit" class="btn btn-primary">Register</button>--}}
{{--                </div>--}}
{{--                @if($errors->any())--}}
{{--                    <div class="alert alert-danger" role="alert">--}}
{{--                        {{$errors->first()}}--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="container-fluid d-flex p-0">
        <div class="left" style="">
            <p class="h2 position-absolute ms-3 mt-3" style="font-family: 'Poppins', sans-serif; font-weight:
                bold">inFridge</p>
            <svg class="topography-shape js-shape" width="70vw" height="100vh" viewBox="0 0 1200 580" version="1.1"
                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 preserveAspectRatio="none">
                <path d="M734.567 34.372c-28.692 61.724-23.266 100.422 16.275 116.094 59.313 23.508 200.347 32.911 259.299 83.906 58.95 50.994 238.697 11.572 269.438-75.95C1310.32 70.9 1365.669-64 1073.808-64c-194.576 0-307.654 32.79-339.24 98.372h-.001z" fill="#FFFA72" fill-rule="nonzero"></path>
                <path d="M734.567 34.372c-28.692 61.724-23.266 100.422 16.275 116.094 59.313 23.508 200.347 32.911 259.299 83.906 58.95 50.994 238.697 11.572 269.438-75.95C1310.32 70.9 1365.669-64 1073.808-64c-194.576 0-307.654 32.79-339.24 98.372h-.001z" fill="#FFFA72" fill-rule="nonzero" transform="translate(-1800, 60) scale(2.8, 2.8) skewX(30) " style="position: relative; z-index: 0; fill: rgb(15, 34, 94);"></path><path d="M734.567 34.372c-28.692 61.724-23.266 100.422 16.275 116.094 59.313 23.508 200.347 32.911 259.299 83.906 58.95 50.994 238.697 11.572 269.438-75.95C1310.32 70.9 1365.669-64 1073.808-64c-194.576 0-307.654 32.79-339.24 98.372h-.001z" fill="#FFFA72" fill-rule="nonzero" transform="translate(-1650, 55) scale(2.65, 2.65) skewX(27.5) " style="position: relative; z-index: 1; fill: rgb(27, 52, 108);"></path><path d="M734.567 34.372c-28.692 61.724-23.266 100.422 16.275 116.094 59.313 23.508 200.347 32.911 259.299 83.906 58.95 50.994 238.697 11.572 269.438-75.95C1310.32 70.9 1365.669-64 1073.808-64c-194.576 0-307.654 32.79-339.24 98.372h-.001z" fill="#FFFA72" fill-rule="nonzero" transform="translate(-1500, 50) scale(2.5, 2.5) skewX(25) " style="position: relative; z-index: 2; fill: rgb(39, 69, 122);"></path><path d="M734.567 34.372c-28.692 61.724-23.266 100.422 16.275 116.094 59.313 23.508 200.347 32.911 259.299 83.906 58.95 50.994 238.697 11.572 269.438-75.95C1310.32 70.9 1365.669-64 1073.808-64c-194.576 0-307.654 32.79-339.24 98.372h-.001z" fill="#FFFA72" fill-rule="nonzero" transform="translate(-1350, 45) scale(2.3499999999999996, 2.3499999999999996) skewX(22.5) " style="position: relative; z-index: 3; fill: rgb(51, 87, 136);"></path><path d="M734.567 34.372c-28.692 61.724-23.266 100.422 16.275 116.094 59.313 23.508 200.347 32.911 259.299 83.906 58.95 50.994 238.697 11.572 269.438-75.95C1310.32 70.9 1365.669-64 1073.808-64c-194.576 0-307.654 32.79-339.24 98.372h-.001z" fill="#FFFA72" fill-rule="nonzero" transform="translate(-1200, 40) scale(2.2, 2.2) skewX(20) " style="position: relative; z-index: 4; fill: rgb(63, 104, 150);"></path><path d="M734.567 34.372c-28.692 61.724-23.266 100.422 16.275 116.094 59.313 23.508 200.347 32.911 259.299 83.906 58.95 50.994 238.697 11.572 269.438-75.95C1310.32 70.9 1365.669-64 1073.808-64c-194.576 0-307.654 32.79-339.24 98.372h-.001z" fill="#FFFA72" fill-rule="nonzero" transform="translate(-1050, 35) scale(2.05, 2.05) skewX(17.5) " style="position: relative; z-index: 5; fill: rgb(75, 122, 165);"></path><path d="M734.567 34.372c-28.692 61.724-23.266 100.422 16.275 116.094 59.313 23.508 200.347 32.911 259.299 83.906 58.95 50.994 238.697 11.572 269.438-75.95C1310.32 70.9 1365.669-64 1073.808-64c-194.576 0-307.654 32.79-339.24 98.372h-.001z" fill="#FFFA72" fill-rule="nonzero" transform="translate(-900, 30) scale(1.9, 1.9) skewX(15) " style="position: relative; z-index: 6; fill: rgb(86, 139, 179);"></path><path d="M734.567 34.372c-28.692 61.724-23.266 100.422 16.275 116.094 59.313 23.508 200.347 32.911 259.299 83.906 58.95 50.994 238.697 11.572 269.438-75.95C1310.32 70.9 1365.669-64 1073.808-64c-194.576 0-307.654 32.79-339.24 98.372h-.001z" fill="#FFFA72" fill-rule="nonzero" transform="translate(-750, 25) scale(1.75, 1.75) skewX(12.5) " style="position: relative; z-index: 7; fill: rgb(98, 156, 193);"></path><path d="M734.567 34.372c-28.692 61.724-23.266 100.422 16.275 116.094 59.313 23.508 200.347 32.911 259.299 83.906 58.95 50.994 238.697 11.572 269.438-75.95C1310.32 70.9 1365.669-64 1073.808-64c-194.576 0-307.654 32.79-339.24 98.372h-.001z" fill="#FFFA72" fill-rule="nonzero" transform="translate(-600, 20) scale(1.6, 1.6) skewX(10) " style="position: relative; z-index: 8; fill: rgb(110, 174, 207);"></path><path d="M734.567 34.372c-28.692 61.724-23.266 100.422 16.275 116.094 59.313 23.508 200.347 32.911 259.299 83.906 58.95 50.994 238.697 11.572 269.438-75.95C1310.32 70.9 1365.669-64 1073.808-64c-194.576 0-307.654 32.79-339.24 98.372h-.001z" fill="#FFFA72" fill-rule="nonzero" transform="translate(-450, 15) scale(1.45, 1.45) skewX(7.5) " style="position: relative; z-index: 9; fill: rgb(122, 191, 221);"></path><path d="M734.567 34.372c-28.692 61.724-23.266 100.422 16.275 116.094 59.313 23.508 200.347 32.911 259.299 83.906 58.95 50.994 238.697 11.572 269.438-75.95C1310.32 70.9 1365.669-64 1073.808-64c-194.576 0-307.654 32.79-339.24 98.372h-.001z" fill="#FFFA72" fill-rule="nonzero" transform="translate(-300, 10) scale(1.3, 1.3) skewX(5) " style="position: relative; z-index: 10; fill: rgb(134, 209, 235);"></path><path d="M734.567 34.372c-28.692 61.724-23.266 100.422 16.275 116.094 59.313 23.508 200.347 32.911 259.299 83.906 58.95 50.994 238.697 11.572 269.438-75.95C1310.32 70.9 1365.669-64 1073.808-64c-194.576 0-307.654 32.79-339.24 98.372h-.001z" fill="#FFFA72" fill-rule="nonzero" transform="translate(-150, 5) scale(1.15, 1.15) skewX(2.5) " style="position: relative; z-index: 11; fill: rgb(146, 226, 249);"></path></svg>
        </div>
        <div class="right d-flex align-items-center"
             style="background-color:#0F225E; width: 40vw">
            <div class="container ms-2 me-2" style="color: white; ">
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="mb-3 d-flex justify-content-center" >
                        <h3 style="font-family: 'Poppins', sans-serif; font-weight: bold">Register Page</h3>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                        placeholder="Enter Your Name Here...">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email"
                        placeholder="Enter Your Email Here...">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password"
                               placeholder="Enter Your Password Here...">
                    </div>
                    <div class="mb-3">
                        <label for="conf-password" class="form-label">Confirm Password</label>
                        <input type="password" name="conf-password" class="form-control" id="conf-password"
                        placeholder="Re-Type Your Password Here">
                    </div>
                    <div class="mb-3 form-check d-flex justify-content-center">
                        <input type="checkbox" class="form-check-input me-2" name="terms" id="terms" required>
                        <label class="form-check-label" for="terms">I Agree to Terms & Conditions</label>
                    </div>
                    <div class="mb-3 mt-1  d-flex justify-content-center">
                        <button type="submit" style="border: 2px solid white; background-color: rgba(255,255,255,0);
                        border-radius: 40px; padding: 5px; width: 100px; color: white;
                    ">Register</button>
                    </div>
                    <div class="mb-3 d-flex justify-content-center">
                        <p>Already have an Account? Click <a href="/auth/login">Here</a> to Login.</p>
                    </div>
                    @if($errors->any())
                        <div class="alert alert-danger" role="alert">
                            {{$errors->first()}}
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection

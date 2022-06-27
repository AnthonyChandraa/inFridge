@extends('content.template')

@section('title', 'inFridge | Fridge Management')

@section('content')
    <div class="container-fluid m-0 p-0">
        @if(\Illuminate\Support\Facades\Auth::check())
            <h3 class="mb-3">Welcome, {{\Illuminate\Support\Facades\Auth::user()->name}}</h3>
        @endif
        <a href="/fridge/add"><button class="btn btn-primary">+ Add Item</button></a>
        <div class="container-fluid mt-5 border">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Item Name</th>
                        <th scope="col">Item Quantity</th>
                        <th scope="col">Item Type</th>
                        <th scope="col">Item Placement</th>
                        <th scope="col">Date Added</th>

                    </tr>
                </thead>
                <tbody>
{{--                    <tr>--}}
{{--                        <td>Name</td>--}}
{{--                        <td>Quantity</td>--}}
{{--                        <td>Type</td>--}}
{{--                        <td>Placement</td>--}}
{{--                        <td>Date</td>--}}
{{--                    </tr>--}}
{{--                    {{dd($datas)}}--}}
                    @foreach($datas as $d)
                        <tr>
                            <td>{{$d->item_name}}</td>
                            <td>{{$d->quantity}}</td>
                            <td>{{$d->category_name}}</td>
                            <td>{{$d->type}}</td>
                            <td>{{$d->date}}</td>
                            <td><form action="{{route('delete_item')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$d->id}}">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

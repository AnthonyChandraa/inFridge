@extends('content.template')

@section('title', 'Add Item')

@section('content')
    <div class="container-fluid m-0 p-0">
        <a href="/fridge/manage"><button class="btn btn-primary shadow">< Back</button></a>
        <div class="form-ctr mt-3 container-fluid border rounded shadow" style="width:80vw">
            <h2 class="mt-4 text-center" style="color: #0F225E">Add Item Form</h2>
            <form action="" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Item Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Item Name...">
                </div>
                <div class="input-group mb-3">
                    <label for="item_category" class="input-group-text">Item Category</label>
                    <select class="custom-select" name="item_category" id="item_category" required>
                        @foreach($itemCategory as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-group mb-3">
                    <label for="item_type" class="input-group-text">Item Placement</label>
                    <select class="custom-select" name="item_type" id="item_type" required>
                        <option value="Refrigerator">Refrigerator</option>
                        <option value="Freezer">Freezer</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="quantity">Item Quantity</label>
                    <input type="text" name="quantity" id="quantity" class="form-control"
                           placeholder="Enter Item Quantity..">
                </div>
                @if($errors->any())
                    <div class="mb-3 alert alert-danger">
                        {{$errors->first()}}
                    </div>
                @endif
                <div class="form-group d-flex justify-content-center">
                    <input type="submit" class="btn btn-primary" value="Add Item">
                </div>
            </form>
        </div>
    </div>
@endsection

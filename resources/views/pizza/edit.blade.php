@extends('layouts.layout')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="container">
            <div class="title m-b-md text-center">
                Create Pizza
            </div>
            <div class="container">
                <form action="{{route('pizza.update',$pizza->id)}}" method="post">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="name">Pizza Name</label>
                        <input type="text" name="name" value="{{$pizza->name}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="price">Pizza Price</label>
                        <input type="number" value="{{$pizza->price}}" name="price" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>

    </div>
@endsection


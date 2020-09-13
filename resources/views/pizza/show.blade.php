@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="container">
        <div class="title m-b-md text-center">
             Pizza Show Page
        </div>
        <div class="container">

                <div class="form-group">
                    <label for="name">Pizza Name</label>
                    <input type="text" name="name" value="{{$pizza->name}}" class="form-control" disabled>
                </div>

                <div class="form-group">
                    <label for="price">Pizza Price</label>
                    <input type="number" value="{{$pizza->price}}" name="price" class="form-control" disabled>
                </div>

        </div>
    </div>

</div>
@endsection


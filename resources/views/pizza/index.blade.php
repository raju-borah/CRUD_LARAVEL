@extends('layouts.layout')
@section('content')
@if($message = Session::has('success'))
<div class="alert alert-success bg-success text-white">{{ Session::get('success') }}</div>
{{ Session::forget('success') }}
@endif
<div class="flex-center position-ref full-height">
    <div class="container">
        <div class="title m-b-md text-center">
            Pizzas List
        </div>
        <div class="container">

            <div class="container d-flex ml-0 m-3 pl-0">
                <div>
                    <form action="{{route('pizza.index')}}" method="get">
                        @csrf
                        <div class="d-flex">
                            <input type="text" name="name" class="form-control " style="width: 200px">
                            <select name="price" class="form-control" style="width: 150px">
                                <option value="" selected>NO OPTIONS</option>
                                @foreach($pizzas as $pizza)
                                <option class="form-control" value="{{$pizza->price}}">{{$pizza->price}}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary">search</button>
                        </div>
                    </form>
                </div>
                <div class="ml-4"> <a href="{{route('pizza.create')}}" class="btn btn-primary">Create Pizza</a></div>
            </div>
            <table class="table table-striped" style="font-size: 18px;">
                <thead>
                    <tr>
                        <th>Pizza ID</th>
                        <th>Pizza Name</th>
                        <th>Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Show</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pizzas as $pizza)
                    <tr>
                        <td>{{$pizza->id}}</td>
                        <td>{{$pizza->name}}</td>
                        <td>{{$pizza->price}}</td>
                        <td><a href="{{route('pizza.edit',$pizza->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form action="{{route('pizza.destroy',$pizza->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <td><a href="{{route('pizza.show',$pizza->id)}}" class="btn btn-primary">Show</a></td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">NO PIZZAS</td>
                    </tr>
                    @endforelse

                </tbody>

            </table> {{$pizzas->links()}}
        </div>
    </div>

</div>
@endsection
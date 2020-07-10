@extends('layouts.layout')
@section('content')
    <div class="flex-center position-ref full-height">
        <div class="container">
            <div class="title m-b-md text-center">
                Pizzas List
            </div>
           <div class="container">
               @if($message = Session::get('success'))
                 <div class="alert alert-success bg-success text-white">{{$message}}</div>
               @endif
               <a href="{{route('pizza.create')}}" class="btn btn-primary m-2">Create Pizza</a>
               <table class="table table-striped" style="font-size: 18px;">
                   <thead>
                   <tr>
                       <th>Pizza ID</th>
                       <th>Pizza Name</th>
                       <th>Price</th>
                       <th>Edit</th>
                       <th>Delete</th>
                   </tr>
                   </thead>
                   <tbody>
                   @forelse($pizzas as $pizza)
                       <tr>
                           <td>{{$pizza->id}}</td>
                           <td>{{$pizza->name}}</td>
                           <td>{{$pizza->price}}</td>
                           <td><a href="{{route('pizza.edit',$pizza->id)}}" class="btn btn-primary">Edit</a></td>
                           <td><form action="{{route('pizza.destroy',$pizza->id)}}" method="post">
                                   @csrf
                                   @method('DELETE')
                                   <button type="submit" class="btn btn-danger">Delete</button></form>
                           </td>
                       </tr>
                   @empty
                       <tr>
                           <td colspan="3">NO PIZZAS</td>
                       </tr>
                   @endforelse
                   </tbody>
               </table>
           </div>
        </div>

    </div>
@endsection


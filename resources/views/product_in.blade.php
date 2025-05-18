<!-- resources/views/addproducts.blade.php -->
@extends('layouts.app')
@section('title',' contacts')
@section('content')

<div class="container indashbord">

    <div class="body">
        <div class="sidebar">
            <div class="user-d">
                <div class="admin">

                </div>
                <h3>admin</h3>
            </div>
             <ul>
                <li> <a href="addproducts.php" class="actionbtn"> add product</a>
                </li>
                <li> <a href="products.php"> products in</li>
                <li> <a href="#"> products out</li>
                <li> <a href="#">reports</a></li>
                <li> <a href="#"> log out</a></li>
            </ul>
           <!--  -->


        </div>
        <div class="fildtoaction">
            <div class="form-fild">
            <h2>Items List</h2>
<a href="{{ route('create') }}" class="btn btn-primary mb-2">Add Item</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->description }}</td>
        <td>
            <a href="{{ route('show', $item) }}" class="btn btn-info btn-sm">View</a>
            <a href="{{ route('edit', $item) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('destroy', $item) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
            </div>
         </div>
    </div>

</div>

@endsection

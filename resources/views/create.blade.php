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
              <a href="{{ route('index') }}" class="btn btn-secondary"> < Back</a>
            <br>
            <br>
            <h2>Add New Item</h2>
              
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif

                <form action="{{ route('items.store') }}" method="POST">
                    <div class="form-input textarea">
                        <label for="">product name:</label>
                        <input type="text" name="product" class="inputarea" placeholder=" enter product name">
                    </div>
                    <div class="form-input"id="textarea" >
                    <label for="" >product description:</label>
                        <textarea name="description" cols="27" rows="5" id="" placeholder="enter description">

                        </textarea>

                    </div>
                    {{-- <div class="form-input">
                    <label for="">product price:</label>
                        <input type="number" name="price" placeholder="enter price">
                    </div> --}}

                    <div class="submit-btn">
                        <button name="addproduct" class="inputarea"> add product </button>  <br> <br>

                    </div>
                </form>
            </div>
         </div>
    </div>

</div>

@endsection

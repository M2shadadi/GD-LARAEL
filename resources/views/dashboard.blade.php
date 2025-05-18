@extends('layouts.app')
@section('title','about us')
@section('content')
<div class="container">

    <div class="body">
        <div class="sidebar">
            <div class="user-d">
                <div class="admin">

                </div>
                <h3>admin</h3>
            </div>
            <ul>
                <li> <a href="{{ route('addproducts') }}" class="actionbtn"> add product</a>
                </li>
                <li> <a href="{{ route('products') }}"> products in </a></li>
                <li> <a href="{{ route('product_in') }}"> products out </a></li>
                <li> <a href="{{ route('addproducts') }}">reports</a></li>
                <li> <a href="{{ route('addproducts') }}"> log out</a></li>
            </ul>
           <!--  -->


        </div>
        <div class="fildtoaction">


        </div>
    </div>

</div>


@endsection

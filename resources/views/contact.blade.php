<!-- resources/views/contact.blade.php -->
@extends('layouts.app')
@section('title',' contacts')
@section('content')
<div class="container">


    <div class="container">
            <div class="herosection">
                <h1>contact us hare</h1>
                      <!-- Add a welcome message -->
                    <p>MuhaziTech Ltd, a software company located in Rwamagana District, Eastern Province, <br>
                      specializes in developing custom web applications for small businesses in the region. </p>
            </div>
            <!-- Add a  preview section -->
             <div class="ourfuture">
                 <h1> every where you are </h1>
                    <div class="rows">
                        <div class="cols">
                            <h2>we are located at</h2>
                             <!-- Add an image -->
                             <img src="{{ asset('images/someimage') }}" alt="image represent objective" width="150">

                             <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.  Reiciendis, nostrum?</p>

                             {{-- <button><a href="">add to cart</a></button> --}}
                        </div>
                        <div class="cols">
                            <h2> our social media</h2>
                             <!-- Add an image -->
                             <img src="{{ asset('images/someimage') }}" alt="image represent visions" width="150">

                             <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.  Reiciendis, nostrum?</p>
                        </div>

                        <div class="cols">
                            <h2>contact us </h2>
                             <!-- Add an image -->
                             <img src="{{ asset('images/someimage') }}" alt="image represent missions" width="150">

                             <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.  Reiciendis, nostrum?</p>
                        </div>



                   </div>

             </div>

              <div class="herosection">
                     <h1>Think about innovetion to lounch on market</h1>
                      <!-- Add a welcome message -->
                    <p>MuhaziTech Ltd, a software company located in Rwamagana District, Eastern Province, <br>
                      specializes in developing custom web applications for small businesses in the region. </p>
              </div>


    </div>

@endsection

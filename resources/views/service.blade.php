<!-- resources/views/service.blade.php -->
@extends('layouts.app')
@section('title','servises')
@section('content')

<div class="container">
            <div class="herosection">
                <h1>we provide better servise on market</h1>
                      <!-- Add a welcome message -->
                    <p>MuhaziTech Ltd, we are here for you we are, <br>
                      specializes in developing custom web applications  </p>
            </div>
            <!-- Add a  preview section -->
             <div class="ourfuture">
                 <h1>our service</h1>
                    <div class="rows">
                        <div class="cols">
                            <h2> web application</h2>
                             <!-- Add an image -->
                             <img src="{{ asset('images/someimage') }}" alt="image represent objective" width="150">

                             <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.  Reiciendis, nostrum?</p>

                             {{-- <button><a href="">add to cart</a></button> --}}
                        </div>
                        <div class="cols">
                            <h2> webhosting</h2>
                             <!-- Add an image -->
                             <img src="{{ asset('images/someimage') }}" alt="image represent visions" width="150">

                             <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.  Reiciendis, nostrum?</p>
                        </div>

                        <div class="cols">
                            <h2>social media management </h2>
                             <!-- Add an image -->
                             <img src="{{ asset('images/someimage') }}" alt="image represent missions" width="150">

                             <p>Lorem ipsum dolor sit amet consectetur <br> adipisicing elit.  Reiciendis, nostrum?</p>
                        </div>



                   </div>

             </div>

              <div class="herosection">
                     <h1>came to work lounch you dreams</h1>
                      <!-- Add a welcome message -->
                    <p>MuhaziTech Ltd, a software company located in Rwamagana District, Eastern Province, <br>
                      specializes in developing custom web applications for small businesses in the region. </p>
              </div>


    </div>


@endsection

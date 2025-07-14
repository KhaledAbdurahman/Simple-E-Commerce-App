@extends('theme.master')
@section('title', 'Home')
@section('home-active', 'active')

@section('content')
    <!-- slider section -->
    <section class="slider_section ">
        <div class="slider_bg_box">
            <img src="{{ asset('assets') }}/images/slider-bg.jpg" alt="">
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1>
                                        <span>
                                            Sale 20% Off
                                        </span>
                                        <br>
                                        On Everything
                                    </h1>
                                    <p>
                                        Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam
                                        fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat
                                        molestias, veniam, vel architecto veritatis delectus repellat modi impedit
                                        sequi.
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn1">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1>
                                        <span>
                                            Sale 20% Off
                                        </span>
                                        <br>
                                        On Everything
                                    </h1>
                                    <p>
                                        Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam
                                        fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat
                                        molestias, veniam, vel architecto veritatis delectus repellat modi impedit
                                        sequi.
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn1">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1>
                                        <span>
                                            Sale 20% Off
                                        </span>
                                        <br>
                                        On Everything
                                    </h1>
                                    <p>
                                        Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam
                                        fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat
                                        molestias, veniam, vel architecto veritatis delectus repellat modi impedit
                                        sequi.
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn1">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel1" data-slide-to="1"></li>
                    <li data-target="#customCarousel1" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </section>
    <!-- end slider section -->
    </div>

    @include('theme.partials.why-section')

    @include('theme.partials.arrivals')

    <!-- subscribe section -->
    <section class="subscribe_section">
        <div class="container-fuild">
            <div class="box">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="subscribe_form ">
                            <div class="heading_container heading_center">
                                <h3>Subscribe To Get Discount Offers</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="{{ route('subscriber.store') }}" method="POST">
                                @csrf
                                <input type="email" name="email" placeholder="Enter your email"
                                    value="{{ old('email') }}">

                                <button type="submit" class="btn btn-primary">
                                    subscribe
                                </button>

                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end subscribe section -->

    <!-- client section -->
    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Customer's Testimonial
                </h2>
            </div>
            <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="{{ asset('assets') }}/images/client.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Anna Trevor
                                </h5>
                                <h6>
                                    Customer
                                </h6>
                                <p>
                                    Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde
                                    quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum
                                    ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="{{ asset('assets') }}/images/client.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Anna Trevor
                                </h5>
                                <h6>
                                    Customer
                                </h6>
                                <p>
                                    Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde
                                    quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum
                                    ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="{{ asset('assets') }}/images/client.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Anna Trevor
                                </h5>
                                <h6>
                                    Customer
                                </h6>
                                <p>
                                    Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde
                                    quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum
                                    ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn_box">
                    <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end client section -->
@endsection

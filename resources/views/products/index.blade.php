@extends('theme.master')
@section('title', 'Products')
@section('products-active', 'active')

@section('content')
    </div>
    <!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->

    <!-- product section -->
    @if (count($products) > 0)
        <section class="product_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Our <span>products</span>
                    </h2>
                </div>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="box">
                                <div class="option_container">
                                    <div class="options">
                                        <a href="" class="option2">
                                            Add To Cart
                                        </a>
                                    </div>
                                </div>
                                <div class="img-box">
                                    <img src="{{ asset("storage/products/$product->image") }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        {{ $product->name }}
                                    </h5>
                                    <h6>
                                        {{ $product->price }}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                @if (count($products) > 0)
                    {{ $products->render('pagination::bootstrap-4') }}
                @endif

            </div>
        </section>
    @endif

    <!-- end product section -->

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


@endsection

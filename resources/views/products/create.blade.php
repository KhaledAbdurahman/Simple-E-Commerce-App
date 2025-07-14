@extends('theme.master')
@section('title', 'Create Product')

@section('content')
    </div>
    <!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Create Product</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->

    <!-- send message section -->
    <section class="why_section layout_padding">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="full">

                        @if (session('ProductCreateStatus'))
                            <div class="alert alert-success">
                                {{ session('ProductCreateStatus') }}
                            </div>
                        @endif
                        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <fieldset>
                                <input type="text" placeholder="Enter product name" name="name"
                                    value="{{ old('name') }}" />
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <input type="text" placeholder="Enter product description" name="description"
                                    value="{{ old('description') }}" />
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <input type="file" name="image" />
                                @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <input type="number" placeholder="Enter product price" name="price"
                                    value="{{ old('price') }}" />
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <input type="submit" value="Submit" />
                            </fieldset>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- send message section -->

    <!-- arrival section -->
    @include('theme.partials.arrivals')
@endsection

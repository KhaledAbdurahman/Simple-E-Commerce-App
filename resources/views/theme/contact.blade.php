@extends('theme.master')
@section('title', 'Contact')
@section('contact-active', 'active')

@section('content')
    </div>
    <!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Contact us</h3>
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

                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <fieldset>
                                <input type="text" placeholder="Enter your full name" name="name"
                                    value="{{ old('name') }}" />
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <input type="email" placeholder="Enter your email address" name="email"
                                    value="{{ old('email') }}" />
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <input type="text" placeholder="Enter subject" name="subject"
                                    value="{{ old('subject') }}" />
                                @error('subject')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror

                                <textarea placeholder="Enter your message" name="message">{{ old('message') }}</textarea>
                                @error('message')
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

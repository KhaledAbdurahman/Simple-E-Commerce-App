@extends('theme.master')
@section('title', 'Login')

@section('content')

    </div>
    <!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Login</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->
    <!-- Login section -->
    <section class="why_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="full">

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <fieldset>
                                <div>
                                    <input type="email" placeholder="Enter your email address" name="email"
                                        value="{{ old('name') }}" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div>
                                    <input type="password" placeholder="Enter your password" name="password" required />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <input type="submit" value="Login" />
                                <p class="text-center mt-3">Don't have an account? <a
                                        href="{{ route('register') }}">Register here</a></p>

                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Login section -->
@endsection

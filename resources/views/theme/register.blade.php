@extends('theme.master')
@section('title', 'Register')

@section('content')

    </div>
    <!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Register</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->
    <!-- Register section -->
    <section class="why_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="full">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <fieldset>
                                <div>
                                    <input type="text" placeholder="Enter your full name" name="name"
                                        value="{{ old('name') }}" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <div>
                                    <input type="email" placeholder="Enter your email address" name="email"
                                        value="{{ old('email') }}" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <div>
                                    <input type="password" placeholder="Enter your password" name="password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <div>
                                    <input type="password" placeholder="Confirm your password"
                                        name="password_confirmation" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                                <input type="submit" value="Register" />
                                <p class="text-center mt-3">Already have an account? <a href="{{ route('login') }}">Login
                                        here</a></p>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end Register section -->
@endsection

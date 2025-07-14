@extends('theme.master')
@section('title', 'About')
@section('pages-active', 'active')

@section('content')
    </div>
    <!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>About us</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->

    @include('theme.partials.why-section')

    @include('theme.partials.arrivals')
@endsection

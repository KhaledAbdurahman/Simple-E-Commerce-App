@extends('theme.master')
@section('title', 'Blog List')
@section('blog-active', 'active')

@section('content')
    <!-- inner page section -->
    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>Blog List</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->
    @include('theme.partials.why-section')


@endsection

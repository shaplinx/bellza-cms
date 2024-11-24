@extends('frontend.layouts.app')

@section('title')
    {{ $$module_name_singular->name }}
@endsection

@section('content')
    <section id="intro" style="background-color:#E8F0F1;">
        <div class="container">
            <div class="row padding-medium">
                <div class="col-12 col-md-6">
                    <div class="py-2 py-md-5">
                        <h1 class="display-3 fw-bold text-dark">{{ $$module_name_singular->name }}</h1>
                        <span class="item"><a href="{{ route('home') }}" class="">Home</a></span> &nbsp; <span
                            class="">/</span> <a href="{{ route('frontend.posts.index') }}"
                            class="">Posts</a></span> <span class="">/</span> &nbsp; <span
                            class="item">{{ $$module_name_singular->name }}</span>
                        <p class="mb-8 leading-relaxed">
                            @if ($$module_name_singular->intro != '')
                                <p class="mb-8 leading-relaxed">
                                    {{ $$module_name_singular->intro }}
                                </p>
                            @endif
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 my-4 align-self-center ">
                    <img
                    class="rounded img-fluid shadow"
                    src="{{ $$module_name_singular->image ?? asset('images/team-item.jpg') }}"
                    alt="{{ $$module_name_singular->name }}"
                />
                </div>
            </div>
        </div>
    </section>

    <section class="container padding-small">
        <div class="row">
            <div class="col-12">
                <div class="post-content">
                        {!! $$module_name_singular->description !!}
                </div>
            </div>
        </div>
    </section>
    <x-subscribe />
@endsection

@push('after-style')
@endpush

@push('after-scripts')
@endpush

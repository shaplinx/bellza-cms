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
                    src="{{ $$module_name_singular->image }}"
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
                        {!! $$module_name_singular->content !!}
                </div>

                <hr />

                <div class="py-1">
                    <div class="flex flex-col justify-between sm:flex-row">
                        <div class="pb-2">
                            {{ __('Written by') }}:
                            {{ isset($$module_name_singular->created_by_alias) ? $$module_name_singular->created_by_alias : $$module_name_singular->created_by_name }}
                        </div>
                        <div class="pb-2">
                            {{ __('Published at') }}: {{ $$module_name_singular->published_at->isoFormat('llll') }}
                        </div>
                    </div>
                </div>

                <div class="flex flex-row justify-between py-1">
                    <div>
                        <span class="font-weight-bold">
                            @lang('Category')
                            :
                        </span>
                        <x-frontend.badge :url="route('frontend.categories.show', [
                            encode_id($$module_name_singular->category_id),
                            $$module_name_singular->category->slug,
                        ])" :text="$$module_name_singular->category_name" />
                    </div>
                </div>

                @if (count($$module_name_singular->tags))
                    <div class="py-1">
                        <span class="font-weight-bold">
                            @lang('Tags')
                            :
                        </span>

                        @foreach ($$module_name_singular->tags as $tag)
                            <x-frontend.badge :url="route('frontend.tags.show', [encode_id($tag->id), $tag->slug])" :text="$tag->name" />
                        @endforeach
                    </div>
                @endif

            </div>

            <div class="col-12 mt-5">
                    <livewire:recent-posts />
            </div>
        </div>
    </section>
    <x-subscribe />
@endsection

@push('after-style')
@endpush

@push('after-scripts')
    <script type="module" src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush

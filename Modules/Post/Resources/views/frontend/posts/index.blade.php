@extends('frontend.layouts.app')

@section('title')
    {{ __($module_title) }}
@endsection

@section('content')
    <x-frontend.header :title="__($module_title)" :breadcrumbs="[
        [
            'label' => 'Home',
            'to' => route('home'),
        ],
        [
            'label' => 'Posts',
        ],
    ]">
        <p class="mb-8 leading-relaxed">
            We publish {{ __($module_name) }} on a number of topics.
            <br />
            We encourage you to read our posts and let us know your feedback. It would be really help us to move
            forward.
        </p>
    </x-frontend.header>
    <x-post::frontend::pagination :models="$$module_name" :module-name="$module_name" class="padding-medium" />

    <div class="d-flex justify-content-center w-100 mt-4">
        {{ $$module_name->links('vendor.pagination.frontend-pagination') }}
    </div>
    </section>
@endsection

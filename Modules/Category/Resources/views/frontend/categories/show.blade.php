@extends('frontend.layouts.app')

@section('title')
    {{ $$module_name_singular->name }} - {{ __($module_title) }}
@endsection

@section('content')
    <x-frontend.header :title="__($module_title)" :breadcrumbs="[
        [
            'label' => 'Home',
            'to' => route('home'),
        ],
        [
            'label' => ucfirst(__($module_name)),
            'to' => route('frontend.categories.index'),
        ],
        [
            'label' => $$module_name_singular->name,
        ],
    ]">
        <p class="mb-8 leading-relaxed">
            {{ $$module_name_singular->description }}
        </p>
    </x-frontend.header>
    <x-post::frontend::pagination :models="$module_owner_paginated" :module-name="$module_name" class="padding-medium" />
    <div class="d-flex justify-content-center w-100">
        {{ $module_owner_paginated->links('vendor.pagination.frontend-pagination') }}
    </div>
@endsection

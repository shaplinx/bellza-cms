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
            'label' => ucfirst(__($module_name)),
        ],
    ]">
        <p class="mb-8 leading-relaxed">Here Are Frequently Asked Questions.
            You can browse our FAQs here.</p>
    </x-frontend.header>

    <x-faq::frontend::accordion class="padding-medium" :faqs="$$module_name" :always-open="true"/>


    <div class="d-flex justify-content-center w-100 mt-3">
        {{ $$module_name->links('vendor.pagination.frontend-pagination') }}
    </div>
@endsection

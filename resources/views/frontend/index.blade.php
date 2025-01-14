@extends('frontend.layouts.app')

@section('title')
    {{ app_name() }}
@endsection

@section('content')
    <x-intro 
        badge="Live your life" 
        title="We Care About Your Health"
        subtitle="Vitae aliquam vestibulum elit adipiscing massa diam in dignissim. Risus tellus libero
            elementum aliquam etiam. Lectus adipiscing est auctor mi quisque nunc non viverra est."
        button-link="#" 
        button-text="Contact Us" />
    <x-stats :stats="
     [
        [
            'description' => 'Happy Patients',
            'number' => 5120,
        ],
        [
            'description' => 'Total Branches',
            'number' => 2,
        ],
        [
            'description' => 'Doctors',
            'number' => 2,
        ],
        [
            'description' => 'Years Experience',
            'number' => 5,
        ],
    ],
    " />
    <x-services />
    <livewire:doctor::recents />
    <livewire:testimony::recents />
    <livewire:faq::recents />
    <x-book />
    <x-departement />
    <livewire:recent-posts />
    <x-brands />
    <x-subscribe />
@endsection

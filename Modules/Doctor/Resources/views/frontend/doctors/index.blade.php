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
        <p class="mb-8 leading-relaxed">Here are our doctors.
            You can browse our doctors here.</p>
    </x-frontend.header>

    <section id="review">
        <div class=" services-sub container my-5 pb-5">
            <div class="row">
                @foreach ($$module_name as $models_singular)
                    @php
                        $details_url = route("frontend.$module_name.show", [
                            encode_id($models_singular->id),
                            $models_singular->slug,
                        ]);
                    @endphp
                    <div class=" mt-5 col-md-6">
                        <a href="{{$details_url}}">
                        <div class="team-member d-flex align-items-lg-center">
                            <div class="col-md-6">
                                <div class="image-holder me-4 mb-4">
                                    <img src="{{ $models_singular->image ?? asset('images/team-item.jpg')}}" alt="team member" class="border-radius-10 img-fluid">
                                </div>  
                            </div>
                            <div class="col-md-6">
                                <div class="member-info">
                                    <h3 class="fs-4 fw-bold text-dark">{{$models_singular->name }}</h3>
                                    <span class="text-uppercase fs-6 text-cadet-blue pb-2 d-block">{{ $models_singular->departement }}</span>
                                    <p> {{$models_singular->intro}}</p>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </section>


    <div class="d-flex justify-content-center w-100 mt-3">
        {{ $$module_name->links('vendor.pagination.frontend-pagination') }}
    </div>
@endsection

@extends("frontend.layouts.app")

@section("title")
    {{ __($module_title) }}
@endsection

@section("content")
<x-frontend.header :title="__($module_title)" :breadcrumbs="[
    [
        'label' => 'Home',
        'to' => route('home'),
    ],
    [
        'label' =>ucfirst(__($module_name)),
    ],
]">
    <p class="mb-8 leading-relaxed"> What Costumer Said</p>
</x-frontend.header>

<section id="our-services">
    <div class="container mt-5">
        <div class="row">
            @foreach ($$module_name as $$module_name_singular)
                <div class="col-lg-4 col-md-6 mt-2 pb-3">
                        <div class="service-icon-box p-4 bg-light border-radius-10 text-center">
                            <div class="icon-box-content">
                                <h3 class="card-title py-2">{{ $$module_name_singular->name }}</h3>
                                <p>"{{ $$module_name_singular->description }}"</p>
                            </div>
                        </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center w-100 mt-3">
            {{ $$module_name->links('vendor.pagination.frontend-pagination') }}
        </div>
    </div>
</section>
@endsection

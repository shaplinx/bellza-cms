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
    <p class="mb-8 leading-relaxed"> We publish articles on a number of {{ __($module_name) }}.
        You can browse our posts by it's tags here.</p>
</x-frontend.header>

<section id="our-services">
    <div class="container mt-5">
        <div class="row">
            @foreach ($$module_name as $$module_name_singular)
                @php
                    $details_url = route("frontend.$module_name.show", [
                        encode_id($$module_name_singular->id),
                        $$module_name_singular->slug,
                    ]);
                @endphp
                <div class="col-lg-4 col-md-6 mt-2 pb-3">
                    <a href="{{ $details_url }}">
                        <div class="service-icon-box p-4 bg-light border-radius-10 text-center">
                            <div class="icon-box-content">
                                <h3 class="card-title py-2">{{ $$module_name_singular->name }}</h3>
                                <p>{{ $$module_name_singular->description }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center w-100 mt-3">
            {{ $$module_name->links('vendor.pagination.frontend-pagination') }}
        </div>
    </div>
</section>
@endsection

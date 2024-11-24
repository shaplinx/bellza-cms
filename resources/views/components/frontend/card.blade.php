@props([
    'url' => null,
    'name',
    'image' => '',
    'createdAt' => '',
    'category' => '',
    'categoryLink' => ''
])

<div class="card-item pe-3">
    <div class="card border-0 bg-transparent">
        <div class="card-image position-relative">
            @if ($image)
                <a href="{{ $url }}">
                    <img src="{{ $image }}" alt="{{ $name }}"
                        class="post-image img-fluid border-radius-top-10">
                </a>
            @endif
            <a href="{{ $categoryLink }}">
                <span class="bg-primary-dim text-light position-absolute text-uppercase text-capitalize">
                    {{ $category }}</span>
            </a>
        </div>
    </div>
    <div class="card-body p-3 mt-2">
        <div class="meta-date">{{ $createdAt }}</div>
        <h3 class="card-title fs-3 text-capitalize fw-semibold mt-3">
            <a href="{{ $url }}">{{$name}}</a>
        </h3>
        <p>{!! $slot !!}
        </p>
    </div>
</div>

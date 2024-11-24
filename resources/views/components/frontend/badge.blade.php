@props([
    "url" => "",
    "text",
])

<span class="">
    @if ($url)
        <a
            class="fs-6 btn my-1 btn-outline-primary border-radius-30  border-1 text-uppercase text-cadet-blue"
            href="{{ $url }}"
        >
            {{ $text }}
        </a>
    @else
        <span
            class="fs-6 btn btn-outline-primary border-radius-30  border-1 text-uppercase text-cadet-blue"
        >
            {{ $text }}
        </span>
    @endif
</span>

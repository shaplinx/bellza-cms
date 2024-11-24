@props([
    'title',
    'breadcrumbs' => [
        'label' => "Home",
        'to' =>  route('home')
    ]
])
<section id="intro" style="background-color:#E8F0F1;">
    <div class="container">
      <div class="banner-content padding-large">
        <h1 class="display-3 fw-bold text-dark">{{$title}}</h1>
        @foreach($breadcrumbs as $key => $breadcrumb)
            @if ($key)
                <span class="">/</span>
            @endif
            <span class="item">
                @if(isset($breadcrumb['to']))
                    <a href="{{$breadcrumb['to']}}" class="">
                        {{ $breadcrumb['label'] }}
                    </a>
                @else
                    {{ $breadcrumb['label'] }}
                @endif
            </span>
        @endforeach
            {!! $slot !!}
      </div>
    </div>
  </section>
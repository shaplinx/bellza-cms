@props([
    'class',
    'faqs' => [
        'question' => "question", 
        'answer' => "answer",
    ],
    'alwaysOpen' => false,
    'title'
])

<section id="faqs" class="{{$class}}">
    <div class="container">
        <div class="row">
            @if(isset($title))
            <div class="display-header mb-5">
                <h2 class="display-5 fw-bold text-center text-dark">{{$title}}</h2>
              </div>
            @endif
            <div class="accordion" id="accordion">
                @foreach($faqs as $key => $faq)
                <div class="accordion-item border-0 py-3">
                    <h2 class="accordion-header">
                        <button
                            class="accordion-button fs-4 fw-bold text-dark bg-transparent focus-transparent text-capitalize shadow-none"
                            type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$faq['id']}}"
                            aria-expanded="true" aria-controls="collapse-{{$faq['id']}}">
                            {{$faq["question"]}}
                        </button>
                    </h2>
                    <div id="collapse-{{$faq['id']}}" class="accordion-collapse border-0 collapse {{!$key ? 'show' : ''}}"
                        {{ $alwaysOpen ? '' : 'data-bs-parent="#accordion"' }}>
                        <div class="accordion-body">
                            <p>{{$faq["answer"]}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
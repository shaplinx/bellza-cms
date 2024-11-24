@props([
    'testimonies' => [
        [
            'name' => 'James Rodrigo',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit.The more content you provide about you. Lorem, Quos saepe suscipit, nemo dolore sapiente!',
        ],
        [
            'name' => 'Jenny Rose',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit.The more content you provide about you. Lorem, Quos saepe suscipit, nemo dolore sapiente!',
        ],
        [
            'name' => 'Wednesday Marigold',
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipisicing elit.The more content you provide about you. Lorem, Quos saepe suscipit, nemo dolore sapiente!',
        ],
    ],
])

<section id="testimonial"
    style="background-image: url({{asset('images/review-bg.jpg')}}); background-repeat: no-repeat; background-position: right; height: 595px;">
    <div class="container">
        <div class="row align-items-center padding-medium">
            <div class="col-lg-5 col-md-4">
                <div class="image-holder">
                    <img src="images/review-image.png" alt="review" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-7 col-md-8">
                <div class="review-content">
                    <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper position-relative">
                            @foreach ($testimonies as $testimony)
                                <div class="swiper-slide">
                                    <div class="review-item">
                                        <svg class="quote quote-up primary-color-500 position-absolute" width="80"
                                            height="70">
                                            <use xlink:href="#quote-up" />
                                        </svg>
                                        <blockquote class="fs-4">
                                            <p>{{ $testimony['description'] }}</p>
                                            <div class="author-detail">
                                                <div class="name fs-3 fw-bold text-dark">{{ $testimony['name'] }}
                                                </div>
                                                <span
                                                    class="text-cadet-blue text-uppercase">Pelanggan</span>
                                            </div>
                                        </blockquote>
                                        <svg class="quote quote-down primary-color-500 position-absolute" width="80"
                                            height="70">
                                            <use xlink:href="#quote-down" />
                                        </svg>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination text-left"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

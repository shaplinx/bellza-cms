@props([
    'stats' => [
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
])
<section id="about-us" class="padding-large">
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($stats as $stat)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="counter-info text-center">
                        <div
                            class="counter-number text-primary-500 display-2 fw-semibold d-flex align-items-center justify-content-center">
                            <span class="counter-prefix">+</span>
                            <h5 class="timer display-4 fw-bold m-0" data-to="5120" data-speed="8000">{{ $stat['number'] }}
                            </h5>
                        </div>
                        <p class="counter-description">{{ $stat['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

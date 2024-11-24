@props(['doctors'])
@if (isset($doctors))
    <section id="our-team" class="padding-large">
        <div class="container">
            <div class="row">
                <div class="display-header mb-5">
                    <h2 class="display-5 fw-bold text-dark text-center">Dokter Andalan Kami</h2>
                </div>
                <div class="team-content">
                    <div class="swiper team-swiper">
                        <div class="swiper-wrapper pb-5">
                            @foreach ($doctors as $doctor)
                                @php
                                    $details_url = route('frontend.doctors.show', [
                                        encode_id($doctor->id),
                                        $doctor->slug,
                                    ]);
                                @endphp
                                <a class="swiper-slide" href={{ $details_url }}>
                                    <div >
                                        <div class="team-member d-flex align-items-center">
                                            <div class="col-md-6">
                                                <div class="image-holder me-4 mb-4">
                                                    <img src="{{ $doctor['image'] ?? asset('images/team-item.jpg') }}"
                                                        alt="{{ $doctor['name'] }}" class="border-radius-10 img-fluid">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="member-info">
                                                    <h3 class="fs-4 fw-bold text-dark">{{ $doctor['name'] }}</h3>
                                                    <span
                                                        class="text-uppercase fs-6 text-cadet-blue pb-2 d-block">{{ $doctor['departement'] }}</span>
                                                    <p>{{ $doctor['intro'] }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- team-content -->
            </div>
        </div>
    </section>
@endif

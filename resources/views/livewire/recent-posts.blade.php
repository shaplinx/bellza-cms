<section id="latest-blog" class="padding-medium">
    <div class="container">
        <div class="row">
            <div class="display-header">
                <h2 class="display-5 fw-bold text-dark">Our Recent Posts</h2>
            </div>
            <div class="post-grid d-flex flex-wrap mt-4">
                @foreach ($recentPosts as $row)
                    @php
                        $details_url = route('frontend.posts.show', [encode_id($row->id), $row->slug]);
                    @endphp
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                        <div class="card-item pe-2">
                            <div class="card border-0 bg-transparent">

                                <div class="card-image position-relative">
                                    <a href="{{ $details_url }}">
                                        <img src="{{ $row->image }}" src="{{ $row->name }}"
                                            class="post-image img-fluid border-radius-top-10">
                                    </a>
                                    <a
                                        href="{{ route('frontend.categories.show', [encode_id($row->category_id), $row->category->slug]) }}">
                                        <span
                                            class="bg-primary-dim text-light position-absolute text-uppercase text-capitalize">{{ $row->category_name }}</span>
                                    </a>
                                </div>

                            </div>
                            <div class="card-body p-3 mt-2">
                                <div class="meta-date">
                                    {{ \Carbon\Carbon::parse($row->created_at)->format('l, j F Y ; h:i a') }}</div>
                                <h3 class="card-title fs-3 text-capitalize fw-semibold mt-3">
                                    <a href="{{ $details_url }}">{{ $row->name }}</a>
                                </h3>
                                <p>
                                    @if ($row->created_by_alias)
                                        <h6>
                                            {{ $row->created_by_alias }}
                                        </h6>
                                    @else
                                        <a href="{{ route('frontend.users.profile', $row->created_by) }}">
                                            <h6>
                                                {{ $row->created_by_name }}
                                            </h6>
                                        </a>
                                    @endif
                                </p>
                                <p>{{ $row->intro }} <a href="{{ $details_url }}"
                                        class="text-decoration-underline"><em>Read more</em></a>
                                </p>
                                <div class="mt-4 d-flex justify-content-start flex-wrap gap-1">
                                    @foreach ($row->tags as $tag)
                                        <x-frontend.badge :url="route('frontend.tags.show', [encode_id($tag->id), $tag->slug])" :text="$tag->name" />
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <a href="{{ route('frontend.posts.index') }}"
            class="btn btn-medium btn-primary btn-pill text-uppercase text-center mx-auto">Read more
            blogs</a>
    </div>
</section>

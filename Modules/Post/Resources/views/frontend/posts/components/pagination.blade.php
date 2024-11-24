@props([
  'models',
  'moduleName',
  'class'
])

<section id="latest-blog" class="{{$class}}">
  <div class="container">
      <div class="row">
          <div class="post-grid d-flex flex-wrap mt-4">
              @foreach ($models as $models_singular)
                  @php
                      $details_url = route("frontend.$moduleName.show", [
                          encode_id($models_singular->id),
                          $models_singular->slug,
                      ]);
                  @endphp
                  <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                      <x-frontend.card :url="$details_url" :name="$models_singular->name" :image="$models_singular->image" :category="$models_singular->category_name"
                          :category-link="route('frontend.categories.show', [
                              encode_id($models_singular->category_id),
                              $models_singular->category->slug,
                          ])" :created-at="\Carbon\Carbon::parse($models_singular->created_at)->format(
                              'l, j F Y ; h:i a',
                          )">

                          @if ($models_singular->created_by_alias)
                              <h6>
                                  {{ $models_singular->created_by_alias }}
                              </h6>
                          @else
                              <a href="{{ route('frontend.users.profile', $models_singular->created_by) }}">
                                  <h6>
                                      {{ $models_singular->created_by_name }}
                                  </h6>
                              </a>
                          @endif

                          <p>
                              {{ $models_singular->intro }}
                          </p>
                          <a href="{{ $details_url }}" class="text-decoration-underline"><em>Read more</em></a>
                          <div class="mt-4 d-flex justify-content-start flex-wrap gap-1">
                              <x-frontend.badge :url="route('frontend.categories.show', [
                                  encode_id($models_singular->category_id),
                                  $models_singular->category->slug,
                              ])" :text="$models_singular->category_name" />
                              @foreach ($models_singular->tags as $tag)
                                  <x-frontend.badge :url="route('frontend.tags.show', [encode_id($tag->id), $tag->slug])" :text="$tag->name" />
                              @endforeach
                          </div>
                      </x-frontend.card>
                  </div>
              @endforeach
          </div>
      </div>
  </div>
</section>
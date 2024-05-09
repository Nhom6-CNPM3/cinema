

@extends('frontend.layout.layout')


@section('content')

    <main id="content">
        <section>

            <div class="home-slider position-relative overflow-hidden">
                <div id="sliderSyncingNav" class="js-slick-carousel slick"
                    data-hs-slick-carousel-options="{
                        &quot;dots&quot;: true,
                        &quot;dotsClass&quot;: &quot;d-xl-none slick-pagination mb-3 position-absolute right-0 left-0 bottom-0 &quot;,
                        &quot;infinite&quot;: true,
                        &quot;asNavFor&quot;: &quot;#sliderSyncingThumb&quot;
                    }">

                    <div class="bg-img-hero d-flex align-items-center min-h-676rem slider-gradient"
                        style="background-image: url({{ asset('client/img/1280x645/img2.jpg') }});">
                        <div class="mx-3 mx-md-5 mx-lg-10 ol-xl-6 px-0">
                            <div class="mb-3 pb-1">
                                <ul class="list-unstyled nav nav-meta nav-meta__white">
                                    <li class>2020</li>
                                    <li class><a
                                            href="{{ route('frontend.movies') }}">Hành động, Khám phá, Lãng mạn</a>
                                    </li>
                                    <li class>1hr 55 phút</li>
                                </ul>
                            </div>
                            <h1 class="display-12 text-lh-1dot1 max-w-565 mb-6"><a
                                    href="{{ route('frontend.movies') }}" class="h-w-primary">Khám phá những bộ phim yêu thích</a></h1>
                            <div class="d-flex flex-column flex-md-row">
                                <a href="{{ route('frontend.movies') }}"
                                    class="btn btn-primary px-6 py-3d btn-sm mb-3 mb-md-0">Xem ngay</a>
                                <a href="{{ route('frontend.movies') }}"
                                    class="btn btn-outline-light ml-md-4 px-6 py-3d btn-sm">+ Danh sách phát</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <div class="bg-gray-2000 space-1">
            <div class="container px-md-6 px-xl-7 px-wd-6 pb-3 pt-2">
                <div class="border-bottom pb-4 border-g-1200-op mb-1">
                    <div class="home-section">
                        <header class="d-md-flex align-items-center justify-content-between mb-5 w-100">
                            <div class="font-size-24 font-weight-medium mb-3 mb-md-0 text-white font-secondary">2024
                                Phim nổi bật</div>
                            <div class="d-none d-lg-block border-top col p-0 mx-3 border-gray-6830"></div>
                          
                                </ul>
                            </div>
                        </header>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active dark" id="pills-one-code-features-example3"
                            role="tabpanel" aria-labelledby="pills-one-code-features-example3-tab">
                            <div class="row mx-n2d">
                                @foreach($movies as $movie)
                                <div class="col-md-4 col-lg-2 px-2d">
                                    <div class="mb-4 mb-lg-0">
                                        <div class="position-relative">
                                            <div class="gradient-x-overlay-1">
                                                <div>
                                                    <img class="img-fluid" src="{{ Storage::url($movie->hinhanh) }}"                                                     alt="{{ $movie->atenphim }}">
                                                </div>
                                                <!-- Kiểm tra xem phim có được đánh dấu là Featured không -->
                                                @if($movie->featured)
                                                <span class="position-absolute px-2d line-height-lg bg-primary rounded content-centered-x z-index-2 mt-n2 text-white font-size-12 top-0">Featured</span>
                                                @endif
                                                <div class="position-absolute bottom-0 pb-2 pl-3">
                                                    <div class="product--title product-meta font-size-12">
                                                        <span><a href="#">{{ $movie->theloai }}</a></span>
                                                        <span><a href="#">{{ $movie->nsx }}</a></span>
                                                    </div>
                                                    <div class="product-title font-weight-bold font-size-1"><a href="{{ route('movie.detail', ['id' => $movie->id_phim]) }}">{{ $movie->atenphim }}</a></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                        </div>

                    </div>
                </div>
                </div>
            </div>
        </div>




    </main>

@endsection

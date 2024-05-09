@extends('frontend.layout.layout')


@section('content')
    <main id="content">
        <div class="container px-md-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pt-5 pb-3 mt-1">
                    <li class="breadcrumb-item"><a href="../">Trang Chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bài Viết</li>
                </ol>
            </nav>
            <div class="row mb-5 mb-lg-0">
                {{-- 1 --}}
            <div class="col-lg-8">
    <div class="mb-6">
        @foreach($blogs as $blog)
            <div class="mb-5 mb-lg-8">
                <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}" class="d-block mb-4">
                    <img class="img-fluid" src="{{ Storage::url($blog->hinhanh) }}" alt="Image-Description">
                </a>
                <!-- Your blog post content here -->
                <h6 class="product-title font-size-26 font-weight-semi-bold mb-1">
                    <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}">{{ $blog->tieude }}</a>
                </h6>
                <div class="mb-2 pb-1">
                    <!-- You can add more dynamic content from your $blog object -->
                    <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}" class="font-weight-semi-bold font-size-13">
                    </a>
                    <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}"
                        class="product-comment font-weight-normal font-size-13 font-italic h-g-primary">
                        
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

                <div class="col-lg-4">
                    <div class="pl-lg-6">
                        <div class="mb-5 dark">
                            <header
                                class="d-md-flex align-items-center justify-content-between mb-3 pb-1 w-100 home-section">
                                <h6 class="font-size-20 font-weight-medium m-0 text-gray-700">Tin Hot</h6>
                                <div class="border-top col p-0 mx-3 border-gray-3600"></div>
                            </header>
                            <div class="row">
                                {{-- 3 --}}
                                <div class="col-md-6 col-lg-12">
                                    <div class="position-relative mb-3">
                                        <div class="bg-img-hero bg-gradient__1"
                                            style="background-image: url({{ asset('client/img/480x270/img81.jpg') }}); height: 180px;">
                                            <div class="position-absolute bottom-0 z-index-2 pl-3 ml-1 pr-7 mb-3">
                                                <h6
                                                    class="product-title font-size-18 text-lh-1dot3 font-weight-semi-bold font-secondary">
                                                    <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}">Wizard Actor Has Another Digital
                                                        Comics Role – Featured Slideshow Post</a>
                                                </h6>
                                                <div class="text-lh-sm">
                                                    <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}"
                                                        class="font-weight-bold font-size-13 font-italic">
                                                        <span>Tin Nóng</span>
                                                    </a>
                                                    <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}"
                                                        class="product-comment font-weight-normal font-size-13 font-italic h-g-primary mr-9">
                                                        <span>10 am, 5 Feb</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12">
                                    <div class="position-relative mb-3">
                                        <div class="bg-img-hero bg-gradient__1"
                                            style="background-image: url({{ asset('client/img/480x270/img69.jpg') }}); height: 180px;">
                                            <div class="position-absolute bottom-0 z-index-2 pl-3 ml-1 pr-7 mb-3">
                                                <h6
                                                    class="product-title font-size-18 text-lh-1dot3 font-weight-semi-bold font-secondary">
                                                    <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}">World Starts With Word Peace</a>
                                                </h6>
                                                <div class="text-lh-sm">
                                                    <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}"
                                                        class="font-weight-bold font-size-13 font-italic">
                                                        <span>Tennis</span>
                                                    </a>
                                                    <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}"
                                                        class="product-comment font-weight-normal font-size-13 font-italic h-g-primary mr-9">
                                                        <span>10 am, 5 Feb</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-12">
                                    <div class="position-relative mb-0">
                                        <div class="bg-img-hero bg-gradient__1"
                                            style="background-image: url({{ asset('client/img/480x270/img70.jpg') }}); height: 180px;">
                                            <div class="position-absolute bottom-0 z-index-2 pl-3 ml-1 pr-7 mb-3">
                                                <h6
                                                    class="product-title font-size-18 text-lh-1dot3 font-weight-semi-bold font-secondary">
                                                    <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}">The Long Run</a>
                                                </h6>
                                                <div class="text-lh-sm">
                                                    <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}"
                                                        class="font-weight-bold font-size-13 font-italic">
                                                        <span>TV Rumours</span>
                                                    </a>
                                                    <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}"
                                                        class="product-comment font-weight-normal font-size-13 font-italic h-g-primary mr-9">
                                                        <span>10 am, 5 Feb</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <header
                                class="d-md-flex align-items-center justify-content-between mb-3 pb-1 w-100 home-section">
                                <h6 class="font-size-20 font-weight-medium m-0 text-gray-700">Phim Sắp Ra Mắt</h6>
                                <div class="border-top col p-0 mx-3 border-gray-3600"></div>
                                <a href="#" class="h-g-primary font-size-1 font-weight-medium font-secondary">View
                                    All</a>
                            </header>
                            <ul class="list-unstyled">
                                <li
                                    class="product_title font-size-17 font-weight-semi-bold font-secondary d-flex align-items-center text-lh-1dot25 mb-2 pb-1">
                                    <div
                                        class="border rounded-circle d-flex align-items-center justify-content-center w-34rem h-34rem mr-2">
                                        1</div>
                                    <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}" class="ml-1">Black Devision 3</a>
                                </li>
                                <li
                                    class="product_title font-size-17 font-weight-semi-bold font-secondary d-flex align-items-center text-lh-1dot25 mb-2 pb-1">
                                    <div
                                        class="border rounded-circle d-flex align-items-center justify-content-center w-34rem h-34rem mr-2">
                                        2</div>
                                    <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}" class="ml-1">Infinity World War</a>
                                </li>
                                <li
                                    class="product_title font-size-17 font-weight-semi-bold font-secondary d-flex align-items-center text-lh-1dot25 mb-2 pb-1">
                                    <div
                                        class="border rounded-circle d-flex align-items-center justify-content-center w-34rem h-34rem mr-2">
                                        3</div>
                                    <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}" class="ml-1">Purze Maze Halloween</a>
                                </li>
                                <li
                                    class="product_title font-size-17 font-weight-semi-bold font-secondary d-flex align-items-center text-lh-1dot25 mb-2 pb-1">
                                    <div
                                        class="border rounded-circle d-flex align-items-center justify-content-center w-34rem h-34rem mr-2">
                                        4</div>
                                    <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}" class="ml-1">Halloween Weekend</a>
                                </li>
                                <li
                                    class="product_title font-size-17 font-weight-semi-bold font-secondary d-flex align-items-center text-lh-1dot25 mb-2 pb-1">
                                    <div
                                        class="border rounded-circle d-flex align-items-center justify-content-center w-34rem h-34rem mr-2">
                                        5</div>
                                    <a href="{{route('blog.detail', ['id' => $blog->id_tintuc])}}" class="ml-1">One Big Question</a>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('frontend.layout.layout')
@section('content')
    <main id="content">
        <div class="container px-md-5">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb pt-5 pb-3 flex-nowrap flex-md-wrap overflow-auto overflow-md-hidden">
                    <li class="breadcrumb-item flex-shrink-0 flex-shrink-md-1"><a href="../">Trang Chủ</a></li>
                    <li class="breadcrumb-item flex-shrink-0 flex-shrink-md-1 active" aria-current="page">{{ $blog->tieude }}</li>
                </ol>
            </nav>
            <div class="row mb-5 mb-lg-6">
                <div class="col-lg-8">
                    <div class="mb-6">
                        <div class="mb-6">
                            <a href="../blog/blog-single.html" class="d-block mb-4">
                                <img class="img-fluid" src="{{ Storage::url($blog->hinhanh) }}" alt="Image-Description">
                            </a>
                            <h6 class="font-size-26 font-weight-semi-bold mb-1">
                                {{ $blog->tieude }}
                            </h6>
                            <div class="mb-3 pb-1">
                                <a href="../blog/blog-single.html" class="font-weight-semi-bold font-size-13">
                                    <span>Tin Nóng</span>
                                </a>
                                <a href="../blog/blog-single.html"
                                    class="product-comment font-weight-normal font-size-13 font-italic h-g-primary">
                                    <span>February 6 2020</span>
                                </a>
                            </div>
                        </div>
                        <div class="mb-6">
                            <p class="font-size-14 mb-0">
                                {{ $blog->noidung }}
                            </p>
                        </div>



                        <div>
                            <div class="bg-gray-1500 p-5 py-md-6 px-md-7">
                                <div class="row justify-content-between">
                                    <div class="col-md-6 mb-5 mb-md-">
                                        <a class="d-block" href="../blog/blog-single.html">
                                            <div class="mb-1">
                                                <span class="text-gray-5900 font-size-13"></span>
                                            </div>
                                            <div class="text-dark font-size-17 font-weight-semi-bold pb-1"></div>
                                            <div class="d-flex align-items-center">
                                                <div class="font-size-13 font-weight-bold text-lh-1dot1">
                                                </div>
                                                <div
                                                    class="product-comment font-weight-normal font-size-13 font-italic h-g-primary">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="d-block" href="../blog/blog-single.html">
                                            <div class="text-md-right">
                                                <div class="mb-1">
                                                    <span class="text-gray-5900 font-size-13"></span>
                                                </div>
                                                <div class="text-dark font-size-17 font-weight-semi-bold pb-1"></div>
                                                <div class="d-md-flex align-items-center justify-content-md-end">
                                                    <div class="font-size-13 font-weight-bold text-lh-1dot1">
                                                    </div>
                                                    <div
                                                        class="product-comment font-weight-normal font-size-13 font-italic h-g-primary">
                                                        <span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pl-lg-6">
                        
                        <div class="mb-5 mb-lg-7">
                            <header
                                class="d-md-flex align-items-center justify-content-between mb-3 pb-1 w-100 home-section">
                                <h6 class="font-size-20 font-weight-medium m-0 text-gray-700">What's hot</h6>
                                <div class="border-top col p-0 mx-3 border-gray-3600"></div>
                                <a href="#" class="h-g-primary font-size-1 font-weight-medium font-secondary">View
                                    All</a>
                            </header>
                            <div class="row no-gutters border-bottom mb-4 pb-4">
                                <div class="col-md-4">
                                    <a class="d-flex h-100 mb-3 mb-lg-0" href="../blog/blog-single.html">
                                        <img class="img-fluid" src="{{ asset('client/img/480x270/img78.jpg') }}"
                                            alt="Image-Description">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="px-md-3">
                                        <h6
                                            class="product-title font-size-17 font-weight-semi-bold font-secondary mb-0 mt-3 mt-md-0">
                                            <a href="../blog/blog-single.html">Saints, Leicester agree Maddison fee </a>
                                        </h6>
                                        <div class="d-flex align-items-center">
                                            <div class="text-lh-1dot1 font-size-13 font-weight-bold">
                                                <a href="../blog/blog-single.html">Trailers</a>
                                            </div>
                                            <div>
                                                <a href="../blog/blog-single.html"
                                                    class="product-comment font-weight-normal font-size-13 font-italic h-g-primary">
                                                    <span>9 am, 3 Feb</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters border-bottom mb-4 pb-4">
                                <div class="col-md-4">
                                    <a class="d-flex h-100 mb-3 mb-lg-0" href="../blog/blog-single.html">
                                        <img class="img-fluid" src="{{ asset('client/img/480x270/img79.jpg') }}"
                                            alt="Image-Description">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="px-md-3">
                                        <h6
                                            class="product-title font-size-17 font-weight-semi-bold font-secondary mb-0 mt-3 mt-md-0">
                                            <a href="../blog/blog-single.html">Sunday's Man Ut. transfer rumours</a>
                                        </h6>
                                        <div class="d-flex align-items-center">
                                            <div class="text-lh-1dot1 font-size-13 font-weight-bold">
                                                <a href="../blog/blog-single.html">Trailers</a>
                                            </div>
                                            <div>
                                                <a href="../blog/blog-single.html"
                                                    class="product-comment font-weight-normal font-size-13 font-italic h-g-primary">
                                                    <span>7 am, 2 Feb</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <a class="d-flex h-100 mb-3 mb-lg-0" href="../blog/blog-single.html">
                                        <img class="img-fluid" src="{{ asset('client/img/480x270/img80.jpg') }}"
                                            alt="Image-Description">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="px-md-3">
                                        <h6
                                            class="product-title font-size-17 font-weight-semi-bold font-secondary mb-0 mt-3 mt-md-0">
                                            <a href="../blog/blog-single.html">Merghani Alonso wins Le Mans 24</a>
                                        </h6>
                                        <div class="d-flex align-items-center">
                                            <div class="text-lh-1dot1 font-size-13 font-weight-bold">
                                                <a href="../blog/blog-single.html">Trailers</a>
                                            </div>
                                            <div>
                                                <a href="../blog/blog-single.html"
                                                    class="product-comment font-weight-normal font-size-13 font-italic h-g-primary">
                                                    <span>9 am, 1 Feb</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

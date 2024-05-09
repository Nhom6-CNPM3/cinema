@extends('frontend.layout.layout')


@section('content')
    <main id="content">
        <div class="bg-gray-1100 space-bottom-2 space-bottom-lg-3">
            <div class="container px-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb dark font-size-1">
                        <li class="breadcrumb-item"><a href="#" class="text-gray-1300">Trang chủ</a></li>

                    </ol>
                </nav>
            </div>
            <section>
                <div class="container px-md-6">
                    <div class="row">
                        <div class="font-size-21 col-12 mb-0 text-white p-0">Các vé đang chờ thanh toán</div>
                        <br>
                        <div class="font-size-21 mb-0 text-white">Giá: {{ number_format($totalPendingPayments, 0, ',', '.') }} VNĐ</div>


                        @foreach ($userTickets as $ticket)
                            <div class="col-md-12 mb-4 border-bottom border-gray-3200 bg-gray-3100 " >
                                <div class="row ">
                                    <div class="col-md-1 p-0">
                                        <img style="height: 100%;" src="{{ Storage::url( $ticket->hinhanh) }}" alt="Movie Image" class="img-fluid">
                                    </div>
                                    <div class="col-md-9 p-3">
                                        <h5 class="font-size-21 mb-0 text-white"><strong>{{ $ticket->atenphim }}</strong></h5>
                                        <p class="font-size-15 mb-0 text-white"><strong>Rạp:</strong> {{ $ticket->tenrap }}</p>
                                        <p class="font-size-15 mb-0 text-white"><strong>Số ghế:</strong> {{ $ticket->soghe }}</p>
                                        <p class="font-size-15 mb-0 text-white"><strong>Khung giờ chiếu:</strong> {{ $ticket->gio }}</p>
                                        <p class="font-size-15 mb-0 text-white"><strong>Ngày chiếu:</strong> {{ $ticket->ngay }}</p>
                                        <p class="font-size-15 mb-0 text-white"><strong>Tên món ăn:</strong> {{ $ticket->tencombo }}</p>
                                        <p class="font-size-15 mb-0 text-white"><strong>Giá vé:</strong> {{ number_format($ticket->gia, 0, ',', '.') }} VND</p>

                                    </div>

                                </div>
                            </div>
                        @endforeach
                        <a href="{{ route('payment') }}" class=" col-12 btn btn-primary d-flex align-items-center justify-content-center w-lg-220rem h-52rem mb-3" tabindex="0">Thanh toán</a>

                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection

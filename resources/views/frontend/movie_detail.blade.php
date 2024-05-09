@extends('frontend.layout.layout')


@section('content')
    <main id="content">
        <div class="bg-gray-1100 space-bottom-2 space-bottom-lg-3">
            <div class="container px-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb dark font-size-1">
                        <li class="breadcrumb-item"><a href="./" class="text-gray-1300">Danh sách phim</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">{{ $movie->atenphim }}</li>

                    </ol>
                </nav>
            </div>
            <section>
                <div class="container px-md-6">
                    <div class="row">
                        <div class="col-md-3">
                            <div>
                                <img class="img-fluid" src="{{ Storage::url($movie->hinhanh) }}" alt="Image-Description">
                            </div>
                            <div class="bg-gray-3100">
                                <div>
                                    <ul class="list-unstyled">
                                        <li class="border-bottom border-gray-3200">
                                            
                                        </li>
                                        <li class="border-bottom border-gray-3200">
                                           
                                        </li>
                                        <li class="border-bottom border-gray-3200">
                                           
                                        </li>
                                        <li class="border-bottom border-gray-3200">
                                            <div class="p-4">
                                                
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="pl-md-2 pt-4">
                                <div class="row border-bottom border-gray-5600 space-bottom-2 no-gutters mb-4">
                                    <div class="col-md-7 col-lg">
                                        <div class="mb-5 mb-md-0">
                                            <h6 class="font-size-36 text-white mb-4 pb-1">{{ ucwords($movie->atenphim) }}
                                            </h6>


                                            <div class="d-flex align-items-center mb-5">
                                                <div class="d-flex">
                                                    <div>
                                                        <i class="fas fa-star text-primary font-size-42"></i>
                                                    </div>
                                                    <div class="text-lh-1 ml-1">
                                                        <div class="text-primary font-size-24 font-weight-semi-bold">8.5
                                                        </div>
                                                        <span class="text-gray-1300 font-size-12">2 Votes</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center ml-6 text-gray-1300">
                                                    <div>
                                                        <i class="far fa-heart font-size-30"></i>
                                                    </div>
                                                    <a href="#" class="text-gray-1300 ml-2">+ Playlist</a>
                                                </div>
                                            </div>
                                            <ul
                                                class="list-unstyled nav nav-meta font-secondary mb-3 pb-1 flex-nowrap flex-lg-wrap overflow-auto overflow-lg-hidden">
                                                <li class="text-white flex-shrink-0 flex-shrink-lg-1">{{ $movie->nsx }}
                                                </li> <!-- Năm sản xuất -->
                                                <li class="text-white flex-shrink-0 flex-shrink-lg-1">
                                                    {{ $movie->thoiluong }} mins</li> <!-- Thời lượng -->
                                                <li class="text-white flex-shrink-0 flex-shrink-lg-1">{{ $movie->rating }}
                                                </li> <!-- Đánh giá -->
                                                <li class="text-white flex-shrink-0 flex-shrink-lg-1">
                                                    <a href="#" class="text-white">{{ $movie->theloai }}</a>
                                                </li> <!-- Thể loại -->
                                            </ul>

                                            <p class="text-gray-5500 font-size-16 mb-5 pb-1 text-lh-md">
                                                {{ $movie->noidung }}</p>
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h6 class="font-size-15 mb-0">
                                                        <a href="#" class="text-white">{{ $movie->daodien }}</a>
                                                    </h6>
                                                    <span class="text-white font-size-13">Director</span>
                                                </div>
                                                <div>
                                                    <h6 class="font-size-15 mb-0">

                                                        <a href="#" class="text-white">{{ $movie->dienvien }}</a>
                                                    </h6>
                                                    <span class="text-white font-size-13">Actor</span>
                                                </div>

                                                <div>
                                                    <h6 class="font-size-15 mb-0">
                                                        <a href="../single-movies/single-movies-v1.html"
                                                            class="text-white">Anna martez</a>
                                                    </h6>
                                                    <span class="text-white font-size-13">Producer</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="mb-6 mb-lg-8">
                                    <div class="font-size-26 text-gray-5500 mb-3 pb-1">Các phim khác</div>
                                    <div class="row row-cols-1 row-cols-md-3 row-cols-xl-6 mx-n2 dark">
                                        @foreach ($relatedMovies as $relatedMovie)
                                            <div class="col-xl px-2">
                                                <div class="product mb-5 mb-xl-0">
                                                    <div class="product-image mb-2">
                                                        <a href="{{ route('movie.detail', ['id' => $relatedMovie->id_phim]) }}"
                                                            class="d-inline-block position-relative stretched-link">
                                                            <img class="img-fluid"
                                                                src="{{ Storage::url($relatedMovie->hinhanh) }}"
                                                                alt="Image Description">
                                                        </a>
                                                    </div>
                                                    <div class="product-meta font-size-12 mb-1">
                                                        <span><a href="{{ route('movie.detail', ['id' => $relatedMovie->id_phim]) }}"
                                                                class="h-g-primary">{{ $relatedMovie->nsx }}</a></span>
                                                        <!-- Thay đổi các trường thông tin phim -->
                                                    </div>
                                                    <div class="product-title font-weight-bold font-size-1"><a
                                                            href="{{ route('movie.detail', ['id' => $relatedMovie->id_phim]) }}">{{ $relatedMovie->atenphim }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                </div>

                              @if (count($schedules) > 0)
                              <div class="row">
                                <div class="col-md-3">
                                    <form action="/buy-ticket" method="POST" id="buyTicketForm">
                                    <section id="buy-ticket mt-2">
                                            @csrf <!-- Đảm bảo sử dụng CSRF protection của Laravel -->

                                            <!-- Các input ẩn để chứa giá trị đã chọn -->
                                            <input type="hidden" name="selectedScheduleId" id="selectedScheduleId">
                                            <input type="hidden" name="selectedRoomId" id="selectedRoomId">
                                            <input type="hidden" name="selectedTheaterId" id="selectedTheaterId">
                                            <input type="hidden" id="selectedSeatId" name="selectedSeatId">

                                            <h3 class="font-size-26 text-gray-5500 mb-3 pb-1">Danh sách rạp</h3>
                                            <div class="theaters" style="display: flex;">
                                                @foreach ($schedules->groupBy('id_rap') as $idRap => $schedulesByRap)
                                                    @php
                                                        $tenrap = $schedulesByRap[0]->tenrap; // Lấy tên rạp từ một lịch chiếu bất kỳ trong nhóm
                                                    @endphp
                                                    <div class="card" data-theater-id="{{ $idRap }}"
                                                        style="cursor: pointer; background: white"
                                                        onclick="selectTheater({{ $idRap }})">
                                                        <input type="hidden" name="selectedTheater"
                                                            value="{{ $idRap }}">
                                                        <div class="card-body p-1">{{ $tenrap }}</div>
                                                    </div>
                                                @endforeach


                                                <style>
                                                    .selected {
                                                        background: #24baef !important;
                                                        color: white !important;
                                                    }
                                                </style>
                                            </div>

                                            <div class="rooms mt-2">
                                                <p class="font-size-26 text-gray-5500 mb-3 pb-1">Chọn phòng</p>
                                                <div id="roomList" style="gap: 1rem" class="d-flex flex-wrap">
                                                   <p class="font-size-14 text-danger mb-3 pb-1">Vui lòng chọn rạp</p>
                                                </div>
                                            </div>


                                            <div class="schedules mt-2">
                                                <p class="font-size-26 text-gray-5500 mb-3 pb-1">Lịch chiếu</p>
                                                <select id="selectSchedule" class="form-select">
                                                    @foreach ($schedules->groupBy('id_rap') as $idRap => $schedulesByRap)
                                                        <optgroup label="Rạp {{ $schedulesByRap[0]->tenrap }}">
                                                            @foreach ($schedulesByRap as $schedule)
                                                                <option value="{{ $schedule->id_lichchieu }}">
                                                                    {{ $schedule->ngay }} - {{ $schedule->gio }}
                                                                </option>
                                                            @endforeach
                                                        </optgroup>
                                                    @endforeach
                                                </select>


                                            </div>

                                            <div class="comboFood mt-2">
                                                <p class="font-size-26 text-gray-5500 mb-3 pb-1">Chọn thức ăn</p>
                                                <select name="comboFood" id="comboFood">
                                                    <option value="" selected disabled>Chọn thức ăn</option>
                                                    @foreach ($comboFoods as $comboFood)
                                                        <option style="color: black" value="{{ $comboFood->id_combo }}">{{ $comboFood->tencombo }}</option>
                                                    @endforeach
                                                </select>


                                            </div>


                                            <button type="submit" onclick="buyTicket()"
                                                class="mt-4 btn btn-primary d-flex align-items-center justify-content-center  w-lg-220rem h-52rem mb-3"
                                                tabindex="0">Mua vé</button>


                                        <script>
                                            function selectTheater(theaterId) {
                                                console.log(theaterId)

                                                const rooms = {!! json_encode($schedules->groupBy('id_rap', 'id_phong')->toArray()) !!}[theaterId];
                                                console.log(rooms)
                                                const roomList = document.getElementById('roomList');

                                                //
                                                const theaters = document.querySelectorAll('.theaters .card');
                                                theaters.forEach(theater => {
                                                    theater.classList.remove('selected');
                                                });

                                                const selectedTheater = document.querySelector(`.theaters .card[data-theater-id="${theaterId}"]`);
                                                if (selectedTheater) {
                                                    selectedTheater.classList.add('selected');
                                                }
                                                //


                                                // Xóa các phòng cũ trước khi hiển thị các phòng mới
                                                roomList.innerHTML = '';

                                                // Xác định danh sách phòng duy nhất dựa trên id_phong
                                                const uniqueRooms = Array.from(new Set(rooms.map(room => room.id_phong))).map(id_phong => {
                                                    return rooms.find(room => room.id_phong === id_phong);
                                                });

                                                if (uniqueRooms.length > 0) {
                                                    uniqueRooms.forEach(room => {
                                                        const card = document.createElement('div');
                                                        card.className = 'card';
                                                        card.style.cursor = 'pointer';
                                                        card.style.background = 'white';
                                                        card.onclick = function() {
                                                            selectRoom(room.id_phong);
                                                            // Gọi hàm mới và truyền id của phòng vào đó
                                                            selectRoom(room.id_phong);
                                                        };
                                                        card.innerHTML = `
                                                       <input type="hidden" name="selectedRoom" value="${room.id_phong}">
                                                              <div class="card  p-1" data-room-id="${room.id_phong}">${room.tenphong}</div>
                                                          `;
                                                        roomList.appendChild(card);
                                                    });

                                                    // Định nghĩa hàm mới để xử lý logic khi chọn phòng


                                                } else {
                                                    roomList.innerHTML = '<p>Không có phòng nào được tìm thấy cho rạp này.</p>';
                                                }

                                            }


                                            function selectRoom(roomId) {
                                                console.log("Room selected:", roomId);
                                                const selectSchedule = document.getElementById('selectSchedule');
                                                //
                                                const rooms = document.querySelectorAll('.rooms .card');
                                                rooms.forEach(room => {
                                                    room.classList.remove('selected');
                                                });

                                                const selectedRoom = document.querySelector(`.rooms .card[data-room-id="${roomId}"]`);
                                                if (selectedRoom) {
                                                    selectedRoom.classList.add('selected');

                                                    // Tiếp tục với các logic khác...
                                                } else {
                                                    console.error('Không tìm thấy phòng được chọn.');
                                                }
                                                //
                                                const selectSeat = document.getElementById('selectSeat'); // Thêm id cho select ghế

// Xóa lựa chọn cũ trong select ghế
selectSeat.innerHTML = '';

// Lấy danh sách ghế dựa trên id_phong đã chọn
const seatsForSelectedRoom = {!! json_encode($seats->toArray()) !!}.filter(seat => seat.id_phong == roomId);

// Xóa nội dung hiện tại của #selectSeat
selectSeat.innerHTML = '';

// Hiển thị danh sách ghế dưới dạng các badge trong #selectSeat
seatsForSelectedRoom.forEach(seat => {
    const badge = document.createElement('span');
    badge.className = 'badge badge-white mr-2 mb-2';
    badge.textContent = `${seat.sohang} - Ghế ${seat.soghe}`;
    badge.setAttribute('data-seat-id', seat.id_ghe); // Thêm thuộc tính data-seat-id
    badge.onclick = function() {
        updateSelectedSeat(seat.id_ghe);
    };
    selectSeat.appendChild(badge);
});
                                                // Xóa các option cũ trong select schedule
                                                selectSchedule.innerHTML = '';

                                                // Lấy danh sách lịch chiếu dựa trên id_phong đã chọn
                                                const schedulesForSelectedRoom = {!! json_encode($schedules->toArray()) !!}.filter(schedule => schedule.id_phong == roomId);

                                                // Hiển thị danh sách xuất chiếu trong select schedule
                                                schedulesForSelectedRoom.forEach(schedule => {
                                                    const option = document.createElement('option');
                                                    option.value = schedule.id_lichchieu;
                                                    option.textContent = `${schedule.ngay} - ${schedule.gio}`;
                                                    selectSchedule.appendChild(option);
                                                });
                                            }


                                            function buyTicket() {
                                                const selectedScheduleId = document.getElementById('selectSchedule').value;
                                                const selectedRoomId = document.querySelector('.rooms .card.selected').getAttribute('data-room-id');
                                                const selectedTheaterId = document.querySelector('.theaters .card.selected').getAttribute('data-theater-id');

                                                console.log(
                                                    selectedScheduleId,
                                                    selectedRoomId,
                                                    selectedTheaterId,
                                                )
                                                document.getElementById('selectedScheduleId').value = selectedScheduleId;
            document.getElementById('selectedRoomId').value = selectedRoomId;
            document.getElementById('selectedTheaterId').value = selectedTheaterId;

            // Submit form
            document.getElementById('buyTicketForm').submit();
                                            }

                                        </script>


                                    </section>
                                </div>




                                <div class="col-md-6">
                                    <div class="rooms mt-2">
                                        <p class="font-size-26 text-gray-5500 mb-3 pb-1">Chọn ghế</p>
                                        <div id="selectSeat" class="d-flex flex-wrap">
                                            @foreach ($seats as $seat)
                                                <span data-seat-id="{{ $seat->id_ghe }}" class="badge    badge-white mb-2 mr-2" onclick="updateSelectedSeat({{ $seat->id_ghe }})">
                                                    {{ $seat->sohang }} - Ghế {{ $seat->soghe }}
                                                </span>

                                            @endforeach
                                            <style>
                                                #selectSeat span {
                                                    cursor: pointer;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    let selectedSeatId = null;
                               function updateSelectedSeat(seatId) {
    // Lấy thẻ span của ghế được chọn
    console.log(seatId)

    const selectedSeat = document.querySelector(`#selectSeat span[data-seat-id="${seatId}"]`);

    // Nếu ghế đã được chọn, hãy bỏ chọn nó
    if (selectedSeatId === seatId) {
        selectedSeat.classList.remove('badge-primary');
        selectedSeat.classList.add('badge-white');
        selectedSeatId = null; // Cập nhật biến lưu trữ

    } else { // Nếu ghế chưa được chọn
        // Bỏ chọn ghế hiện tại (nếu có)
        if (selectedSeatId !== null) {
            const previousSelectedSeat = document.querySelector(`#selectSeat span[data-seat-id="${selectedSeatId}"]`);
            previousSelectedSeat.classList.remove('badge-primary');
            previousSelectedSeat.classList.add('badge-white');
        }

        // Đánh dấu ghế mới là đã chọn
        selectedSeat.classList.remove('badge-white');
        selectedSeat.classList.add('badge-primary');
        selectedSeatId = seatId; // Cập nhật biến lưu trữ
    }
    document.getElementById('selectedSeatId').value = seatId;
}
                                </script>
                            </form>

                            </div>
                              @else
                            <p class="font-size-26 text-danger mb-3 pb-1">Phim chưa công chiếu</p>
                              @endif






                                <div class="mb-6 mb-lg-9 pb-lg-1">
                                    <div class="font-size-26 text-gray-5500 mb-3 pb-1">Đánh giá phim</div>
                                    <div>
                                        <div class="d-flex mb-3 pb-1">
                                            <div>
                                                <img class="img-fluid rounded-circle"
                                                    src="{{ asset('client/img/36x36/img1.jpg  ') }}"
                                                    alt="Image-Description">
                                            </div>
                                            <div class="ml-3">
                                                <div class="mb-2">
                                                    <span class="text-primary">Người xem 1002</span>
                                                    <span class="text-gray-1300 ml-1">May 3, 2024</span>
                                                </div>
                                                <div
                                                    class="form-group d-flex align-items-center justify-content-between font-size-15 text-gray-1300 text-lh-lg text-body mb-0">
                                                    <span class="d-block text-gray-1300">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                        <i class="far fa-star"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="mb-3 text-gray-5500">Tôi hôm qua đã có cơ hội được xem một bộ phim chiếu rạp tuyệt vời và tôi không thể không chia sẻ cảm nhận của mình với các bạn. Phim này thực sự là một tác phẩm điện ảnh xuất sắc và đáng để mọi người dành thời gian để khám phá..</p>
                                        <div class="text-gray-1300">
                                            <a href="#" class="text-gray-1300">
                                                <i class="far fa-thumbs-up font-size-18"></i>
                                            </a>
                                            <span class="font-size-12 font-weight-semi-bold ml-1">0</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-6 mb-lg-8 pb-lg-1">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection



@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Add Seat </h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="{{ route('admin.seats.store') }}" method="POST" class="form">
                    @csrf

                    <div class="col-12 col-lg-6">
                        <label for="room">Room</label>
                        <select name="id_phong" id="room" class="form__input">
                            @foreach($rooms as $room)
                            <option value="{{ $room->id_phong }}">{{ $room->tenphong }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="row">Row</label>
                        <input type="text" name="sohang" class="form__input" placeholder="Row">
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="seat">Seat</label>
                        <input type="text" name="soghe" class="form__input" placeholder="Seat">
                    </div>

                    <div class="col-12">
                        <div class="row row--form">
                            <div class="col-12">
                                <button type="submit" class="form__btn">Confirm</button>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
            <!-- end form -->
        </div>
    </div>
</main>

    @endsection

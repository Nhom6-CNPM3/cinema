

@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Add Schedule</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="{{ route('admin.schedules.store') }}" method="POST" class="form">
                    @csrf

                    <div class="col-12 col-lg-6">
                        <label for="movie">Movie</label>
                        <select name="id_phim" id="movie" class="form__input">

                            @foreach($movies as $movie)

                                <option value="{{ $movie->id_phim }}">{{ $movie->atenphim }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="theater">Theater</label>
                        <select name="id_rap" id="theater" class="form__input">
                            @foreach($theaters as $theater)
                                <option value="{{ $theater->id_rap }}">{{ $theater->tenrap }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="room">Room</label>
                        <select name="id_phong" id="room" class="form__input">
                            @foreach($rooms as $room)
                                <option value="{{ $room->id_phong }}">{{ $room->tenphong }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="date">Date</label>
                        <input type="date" name="ngay" id="date" class="form__input">
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="time">Time</label>
                        <input type="time" name="gio" id="time" class="form__input">
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

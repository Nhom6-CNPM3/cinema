

@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Edit seat</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="{{ route('admin.seats.update', $seat->id_ghe) }}" method="POST" class="form">
                    @csrf
                    @method('PUT') <!-- Use PUT method for updating -->

                    <div class="col-12 col-lg-6">
                        <label for="room">Room</label>
                        <select name="id_phong" id="room" class="form__input">
                            @foreach($rooms as $room)
                                <option value="{{ $room->id_phong }}" {{ $room->id_phong == $seat->id_phong ? 'selected' : '' }}>
                                    {{ $room->tenphong }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="row">Row</label>
                        <input type="text" name="sohang" class="form__input" placeholder="Row" value="{{ $seat->sohang }}">
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="seat">Seat</label>
                        <input type="text" name="soghe" class="form__input" placeholder="Seat" value="{{ $seat->soghe }}">
                    </div>

                    <div class="col-12">
                        <div class="row row--form">
                            <div class="col-12">
                                <button type="submit" class="form__btn">Update</button> <!-- Change button text to "Update" -->
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

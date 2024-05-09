

@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Edit Room</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="{{ route('admin.rooms.update', $room->id_phong) }}" method="POST" class="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Use PUT method for updating -->
                
                    <div class="col-12 col-lg-6">
                        <!-- Trường nhập tên phòng, populated with existing room name -->
                        <input type="text" name="tenphong" class="form__input" placeholder="Room Name" value="{{ $room->tenphong }}">
                    </div>

                    <div class="col-12 col-lg-6">
                        <!-- Trường chọn rạp chiếu phim -->
                        <select name="id_rap" class="form__input">
                            @foreach($theaters as $theater)
                            <option value="{{ $theater->id_rap }}" {{ $theater->id_rap == $room->id_rap ? 'selected' : '' }}>{{ $theater->tenrap }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-12">
                        <!-- Button submit -->
                        <div class="row row--form">
                            <div class="col-12">
                                <button type="submit" class="form__btn">Update</button>
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

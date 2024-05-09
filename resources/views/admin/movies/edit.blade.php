

@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Edit Movie</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
        <!-- Form sửa thông tin phim -->
        <form action="{{ route('admin.movies.update', $movie->id_phim) }}" method="POST" class="form" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row row--form">
                <div class="col-12 col-md-5 form__cover">
                    <div class="row row--form">
                        <div class="col-12 col-sm-6 col-md-12">
                            <div class="form__img">
                                <label for="hinhanh">Upload cover (270 x 400)</label>
                                <input id="hinhanh" name="hinhanh" type="file" accept=".png, .jpg, .jpeg">
                                <img id="form__img" src="{{ asset('storage/' . $movie->hinhanh) }}" alt="Cover Image">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-7 form__content">
                    <div class="row row--form">
                        <div class="col-12">
                            <input type="text" name="atenphim" class="form__input" placeholder="Title" value="{{ $movie->atenphim }}">
                        </div>

                        <div class="col-12">
                            <textarea id="noidung" name="noidung" class="form__textarea" placeholder="Description">{{ $movie->noidung }}</textarea>
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3">
                            <input type="text" name="nsx" class="form__input" placeholder="Release year" value="{{ $movie->nsx }}">
                        </div>

                        <div class="col-12 col-sm-6 col-lg-3">
                            <input type="text" name="thoiluong" class="form__input" placeholder="Running time in minutes" value="{{ $movie->thoiluong }}">
                        </div>

                        <div class="col-12 col-md-7 form__content">
                            <div class="row row--form">
                                <div class="col-12 col-lg-4">
                                    <input type="text" name="daodien" class="form__input" id="daodien" placeholder="Đạo diễn" value="{{ $movie->daodien }}">
                                </div>
                                <div class="col-12 col-lg-4">
                                    <input type="text" name="dienvien" class="form__input" id="dienvien" placeholder="Diễn viên" value="{{ $movie->dienvien }}">
                                </div>
                                <div class="col-12 col-lg-4">
                                    <input type="number" name="giave" class="form__input" placeholder="Ticket price" value="{{ $movie->giave }}">
                                </div>
                                <div class="col-12 col-sm-6 col-lg-3">
                                    <input type="date" name="ngaykhoichieu" class="form__input" placeholder="Release date" value="{{ $movie->ngaykhoichieu }}">
                                </div>
                                <div class="col-12">
                                    <input type="text" name="trailer" class="form__input" placeholder="Trailer link" value="{{ $movie->trailer }}">
                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-lg-6">
                            <select name="quocgia[]" class="js-example-basic-multiple" id="country" multiple="multiple">
                                <option value="Viet Nam" {{ in_array('Viet Nam', explode(',', $movie->quocgia)) ? 'selected' : '' }}>Viet Nam</option>
                                <option value="USA" {{ in_array('USA', explode(',', $movie->quocgia)) ? 'selected' : '' }}>USA</option>
                                <option value="Algeria" {{ in_array('Algeria', explode(',', $movie->quocgia)) ? 'selected' : '' }}>Algeria</option>
                                <option value="American Samoa" {{ in_array('American Samoa', explode(',', $movie->quocgia)) ? 'selected' : '' }}>American Samoa</option>
                                <option value="Andorra" {{ in_array('Andorra', explode(',', $movie->quocgia)) ? 'selected' : '' }}>Andorra</option>
                                <!-- Các option khác ở đây -->
                            </select>
                        </div>

                        <div class="col-12 col-lg-6">
                            <select name="theloai[]" class="js-example-basic-multiple" id="genre" multiple="multiple">
                                <option value="Action" {{ in_array('Action', explode(',', $movie->theloai)) ? 'selected' : '' }}>Action</option>
                                <!-- Các option khác ở đây -->
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row row--form">
                        <div class="col-12">
                            <button type="submit" class="form__btn">Update</button>
                        </div>
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

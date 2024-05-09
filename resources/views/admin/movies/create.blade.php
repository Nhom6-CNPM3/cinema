

@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Add Movie</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="{{ route('admin.movies.store') }}" method="POST" class="form" enctype="multipart/form-data">
                    @csrf
                    <div class="row row--form">
                        <div class="col-12 col-md-5 form__cover">
                            <div class="row row--form">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class="form__img">
                                        <label for="hinhanh">Upload cover (270 x 400)</label>
                                        <input id="hinhanh" name="hinhanh" type="file" accept=".png, .jpg, .jpeg">
                                        <img id="form__img" src="#" alt=" ">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-7 form__content">
                            <div class="row row--form">
                                <div class="col-12">
                                    <input type="text" name="atenphim" class="form__input" placeholder="Title">
                                </div>

                                <div class="col-12">
                                    <textarea id="noidung" name="noidung" class="form__textarea" placeholder="Description"></textarea>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <input type="text" name="nsx" class="form__input" placeholder="Release year">
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3">
                                    <input type="text" name="thoiluong" class="form__input" placeholder="Running time in minutes">
                                </div>

                                <div class="col-12 col-md-7 form__content">
                                    <div class="row row--form">
                                        <div class="col-12 col-lg-4">
                                            <input type="text" name="daodien" class="form__input" id="daodien" placeholder="Đạo diễn">
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <input type="text" name="dienvien" class="form__input" id="dienvien" placeholder="Diễn viên">
                                        </div>


                                        <div class="col-12 col-lg-4">
                                            <input type="number" name="giave" class="form__input" placeholder="Ticket price">
                                        </div>
                                        <div class="col-12 col-sm-6 col-lg-3">
                                            <input type="date" name="ngaykhoichieu" class="form__input" placeholder="Release date">
                                        </div>
                                        <div class="col-12">
                                            <input type="text" name="trailer" class="form__input" placeholder="Trailer link">
                                        </div>

                                    </div>

                                </div>

                                <div class="col-12 col-lg-6">
                                    <select name="quocgia[]" class="js-example-basic-multiple" id="country" multiple="multiple">
                                        <option value="Viet Nam">Viet Nam</option>
                                        <option value="USA">Mỹ</option>
                                        <option value="Korea">Hàn Quốc</option>
                                        <option value="Denmark">Đan Mạch</option>
                                        <option value="ThaiLand">Thái Lan</option>
                                        <!-- Các option khác ở đây -->
                                    </select>
                                </div>

                                <div class="col-12 col-lg-6">
                                    <select name="theloai[]" class="js-example-basic-multiple" id="genre" multiple="multiple">
                                        <option value="HanhDong">Hành Động</option>
                                        <option value="KinhDi">Kinh Dị</option>
                                        <option value="TamLy">Tâm Lý</option>
                                        <option value="Hai">Hài</option>
                                        <option value="HoiHop">Hồi Hộp</option>
                                        <option value="LangMan">Lãng Mạn</option>
                                        <option value="HoatHinh">Hoạt Hình</option>
                                        <!-- Các option khác ở đây -->
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row row--form">
                                <div class="col-12">
                                    <button type="submit" class="form__btn">Confirm</button>
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

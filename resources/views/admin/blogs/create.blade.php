

@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Add Blog</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="{{ route('admin.blogs.store') }}" method="POST" class="form" enctype="multipart/form-data">
                    @csrf
                    <div class="row row--form">
                        <div class="col-12">
                            <input type="text" name="tieude" class="form__input" placeholder="Title">
                        </div>

                        <div class="col-12">
                            <textarea name="noidung" id="noidung" class="form__textarea" placeholder="Content"></textarea>
                        </div>

                        <div class="col-12 col-md-5 form__cover">
                            <div class="row row--form">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class="form__img">
                                        <label for="hinhanh">Upload cover</label>
                                        <input id="hinhanh" name="hinhanh" type="file" accept=".png, .jpg, .jpeg">
                                        <img id="form__img" src="#" alt=" ">
                                    </div>
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

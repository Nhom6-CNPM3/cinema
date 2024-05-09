

@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Edit Blog</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="{{route('admin.blogs.update', $blog)}}" method="POST" class="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') <!-- Sử dụng phương thức PUT để cập nhật thông tin -->

                    <div class="row row--form">
                        <div class="col-12      ">
                            <input type="text" name="tieude" class="form__input" placeholder="Title" value="{{ $blog->tieude }}">
                        </div>

                        <div class="col-12">
                            <textarea name="noidung" id="noidung" class="form__textarea" placeholder="Content">{{ $blog->noidung }}</textarea>
                        </div>

                        <div class="col-12 col-md-5 form__cover">
                            <div class="row row--form">
                                <div class="col-12 col-sm-6 col-md-12">
                                    <div class="form__img">
                                        <label for="hinhanh">Upload cover</label>
                                        <input id="hinhanh" name="hinhanh" type="file" accept=".png, .jpg, .jpeg">
                                        @if($blog->hinhanh)
                    <img id="form__img" src="{{ asset('storage/' . $blog->hinhanh) }}" alt="Cover Image">
                @else
                    <!-- Nếu không có ảnh, hiển thị một thông báo hoặc một hình ảnh mặc định -->
                    <img id="form__img" src="#" alt="No Image">
                @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row row--form">
                                <div class="col-12">
                                    <button type="submit" class="form__btn">Update </button>
                                </div>
                            </div>
                        </div>

                        <!-- Thêm trường ẩn để gửi ID của bài viết -->
                        <input type="hidden" name="id" value="{{ $blog->id }}">
                    </div>
                </form>



            </div>
            <!-- end form -->
        </div>
    </div>
</main>

    @endsection

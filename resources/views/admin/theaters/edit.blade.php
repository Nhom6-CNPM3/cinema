

@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Edit Theater</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="{{ route('admin.theaters.update', $theater->id_rap) }}" method="POST" class="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="col-12 col-lg-6">
                        <input type="text" name="tenrap" class="form__input" placeholder="Theater Name" value="{{ $theater->tenrap }}">
                    </div>
                    <div class="col-12">
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

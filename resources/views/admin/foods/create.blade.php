

@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Add Combo Food</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="{{ route('admin.foods.store') }}" method="POST" class="form">
                    @csrf

                    <div class="col-12 col-lg-6">
                        <label for="name">Name</label>
                        <input type="text" name="tencombo" class="form__input" placeholder="Combo Name">
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="description">Description</label>
                        <textarea name="chitiet" id="description" class="form__textarea" placeholder="Combo Description"></textarea>
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="price">Price</label>
                        <input type="number" name="gia" class="form__input" placeholder="Price">
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

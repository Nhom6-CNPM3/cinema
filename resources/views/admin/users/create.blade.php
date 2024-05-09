

@extends('admin.layout.layout')

@section('title', 'Home Page')

@section('content')

<main class="main">
    <div class="container-fluid">
        <div class="row">
            <!-- main title -->
            <div class="col-12">
                <div class="main__title">
                    <h2>Add User</h2>
                </div>
            </div>
            <!-- end main title -->

            <!-- form -->
            <div class="col-12">
                <form action="{{ route('admin.users.store') }}" method="POST" class="form">
                    @csrf

                    <div class="col-12 col-lg-6">
                        <label for="sdt">Phone Number</label>
                        <input type="text" name="sdt" id="sdt" class="form__input" placeholder="Phone Number">
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form__input" placeholder="Username">
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form__input" placeholder="Email">
                    </div>

                    <div class="col-12 col-lg-6">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form__input" placeholder="Password">
                    </div>
                    <div class="col-12 col-lg-6">
                        <label for="role">Role</label>
                        <select name="role" id="role" class="form__input">
                            <option value="0">Member</option>
                            <option value="1">Admin</option>
                        </select>
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

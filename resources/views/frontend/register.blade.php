
@extends('frontend.layout.layout')


@section('content')
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <button type="button" class="close position-absolute top-0 right-0 z-index-2 mt-3 mr-3" data-dismiss="modal"
                    aria-label="Close">
                    <svg  class="mb-0" width="14" height="14" viewBox="0 0 18 18"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor"
                            d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                    </svg>
                </button>

                <div class="modal-body">
                    <div class="text-center mb-7">
                        <h3 class="mb-0">Sign Up to Vodi</h3>
                        <p>Create an account to get started.</p>
                    </div>
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form method="POST" action="{{ route('register') }}"  >
                        @csrf <!-- Thêm CSRF token cho bảo mật -->

                        <!-- Email -->
                        <div class="js-form-message mb-4">
                            <label class="input-label">Username</label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="signupEmail"
                                    placeholder="Username" aria-label="Username" required>
                            </div>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="js-form-message mb-4">
                            <label class="input-label">Email </label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="signupEmail"
                                    placeholder="Email hoặc Username" aria-label="Email hoặc Username" required>
                            </div>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="js-form-message mb-3">
                            <label class="input-label">Password</label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="signupPassword"
                                    placeholder="Password" aria-label="Password" required>
                            </div>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="js-form-message mb-3">
                            <label class="input-label">Confirm Password</label>
                            <div class="input-group input-group-sm mb-2">
                                <input type="password" class="form-control" name="password_confirmation" id="signupConfirmPassword"
                                    placeholder="Confirm Password" aria-label="Confirm Password" required>
                            </div>
                        </div>

                        <!-- Submit button -->
                        <div class="mb-3">
                            <button type="submit" class="btn btn-sm btn-primary btn-block">Register</button>
                        </div>

                        <!-- Nếu quên mật khẩu -->
                        <div class="d-flex justify-content-end mb-4">
                            <a class="js-animation-link small link-underline" href="javascript:;"
                                data-hs-show-animation-options="{
                                    &quot;targetSelector&quot;: &quot;#forgotPassword&quot;,
                                    &quot;groupName&quot;: &quot;idForm&quot;
                                }">Forgot Password?
                            </a>
                        </div>
                    </form>


                </div>


            </div>
        </div>
@endsection

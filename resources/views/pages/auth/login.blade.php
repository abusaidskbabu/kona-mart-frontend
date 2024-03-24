@extends('layout.app')
@section('title', 'Login')
@section('content')
    <section class="gry-bg py-5">
        <div class="profile">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 mx-auto">
                        <div class="card">
                            <div class="text-center px-35 pt-5">
                                <h1 class="heading heading-4 strong-500">
                                    Login to your account.
                                </h1>
                            </div>

                            <div class="px-5 py-3 py-lg-4">
                                <div class="">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                    <form class="form-default" role="form" action="{{ route('authenticate') }}"
                                        method="POST">
                                        @csrf
                                        <!--<span>Use country code before number <span style="color:red;">+8801XXX</span> </span>-->
                                        <div class="form-group">
                                            <input type="tel" class="form-control h-auto form-control-lg "
                                                value="" placeholder="Email Or Phone" name="phone_number" id="email">
                                            {{-- <a style="display:none" href="" class="link link-xs link--style-3">Login With Email</a> --}}
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control h-auto form-control-lg "
                                                placeholder="Password" name="password" id="password">
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <div class="checkbox pad-btm text-left">
                                                        <input id="demo-form-checkbox" class="magic-checkbox"
                                                            type="checkbox" name="remember">
                                                        <label for="demo-form-checkbox" class="text-sm">
                                                            Remember Me
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 text-right">

                                                <a href=""
                                                    class="link link-xs link--style-3">Forgot password?</a>
                                            </div>
                                        </div>


                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn btn-styled btn-base-1 btn-md w-100">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="text-center px-35 pb-3">
                                <p class="text-md">
                                    Need an account? <a href="{{ route('signup') }}"
                                        class="strong-600">Register Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


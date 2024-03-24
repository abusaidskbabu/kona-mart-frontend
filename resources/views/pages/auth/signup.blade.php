@extends('layout.app')
@section('title', 'Signup')
@section('content')
    <section class="gry-bg py-4">
        <div class="profile">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8 mx-auto">
                        <div class="card">
                            <div class="text-center px-35 pt-5">
                                <h1 class="heading heading-4 strong-500">
                                    Create an account.
                                </h1>
                            </div>
                            <!---->
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
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                    <form id="reg-form" class="form-default" role="form"
                                        action="{{route('signup.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="h-auto form-control-lg form-control" value=""
                                                placeholder="Name" name="name">
                                        </div>

                                        <div class="form-group phone-form-group mb-2">
                                            <div class="iti iti--allow-dropdown iti--separate-dial-code">
                                                <div class="iti__flag-container">
                                                    <div class="iti__selected-flag" role="combobox"
                                                        aria-owns="country-listbox" aria-expanded="false" tabindex="0"
                                                        title="Bangladesh (বাংলাদেশ): +88"
                                                        aria-activedescendant="iti-item-bd">
                                                        <div class="iti__flag iti__bd"></div>
                                                        <div class="iti__selected-dial-code">+88</div>
                                                        <div class="iti__arrow"></div>
                                                    </div>
                                                    <ul class="iti__country-list iti__hide" id="country-listbox"
                                                        role="listbox">
                                                        <li class="iti__country iti__standard iti__active" tabindex="-1"
                                                            id="iti-item-bd" role="option" data-dial-code="88"
                                                            data-country-code="bd" aria-selected="true">
                                                            <div class="iti__flag-box">
                                                                <div class="iti__flag iti__bd"></div>
                                                            </div><span class="iti__country-name">Bangladesh
                                                                (বাংলাদেশ)</span><span class="iti__dial-code">+88</span>
                                                        </li>
                                                    </ul>
                                                </div><input type="tel" id="phone-code"
                                                    class="h-auto w-100 form-control-lg form-control" value=""
                                                    placeholder="01xxxxxxxxx" name="phone" autocomplete="off"
                                                    data-intl-tel-input-id="0" style="padding-left: 79px;">
                                            </div>
                                        </div>

                                        <input type="hidden" name="country_code" value="88">

                                        <div class="form-group email-form-group mb-2 d-none">
                                            <input type="email" class="h-auto form-control-lg form-control "
                                                value="" placeholder="Email" name="email" autocomplete="off">
                                        </div>

                                        {{-- <div class="form-group">
                                            <button class="btn btn-link p-0" type="button"
                                                onclick="toggleEmailPhone(this)">Use Email Instead</button>
                                        </div> --}}

                                        <div class="form-group">
                                            <input type="password" class="h-auto form-control-lg form-control"
                                                placeholder="Password" name="password">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="h-auto form-control-lg form-control"
                                                placeholder="Confirm Password" name="password_confirmation">
                                        </div>


                                        <div class="checkbox text-left">
                                            <input class="magic-checkbox" type="checkbox" name="checkbox_example_1"
                                                id="checkboxExample_1a" required="">
                                            <label for="checkboxExample_1a" class="text-sm"> <a
                                                    href="" target="_blank">By
                                                    signing up you agree to our terms and conditions.</a></label>
                                        </div>

                                        <div class="text-right mt-3">
                                            <button type="submit" class="btn btn-styled btn-base-1 w-100 btn-md">Create
                                                Account</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="text-center px-35 pb-3">
                                <p class="text-md">
                                    Already have an account?<a href="{{ route('login') }}"
                                        class="strong-600">Log In</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

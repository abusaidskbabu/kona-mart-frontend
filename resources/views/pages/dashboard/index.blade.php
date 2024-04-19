@extends('layout.app')
@section('title', 'Dashboard')
@section('content')
    <div class="breadcrumb-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <ul class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="">My Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="bg-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active mb-1" id="v-pills-home-tab" data-toggle="pill" data-target="#v-pills-home"
                            type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</button>
                        <button class="nav-link mb-1" id="v-pills-profile-tab" data-toggle="pill" data-target="#v-pills-profile"
                            type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">Profile</button>
                        <button class="nav-link mb-1" id="v-pills-messages-tab" data-toggle="pill"
                            data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                            aria-selected="false">Messages</button>
                        <button class="nav-link mb-1" id="v-pills-settings-tab" data-toggle="pill"
                            data-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                            aria-selected="false">Settings</button>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">...</div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">...</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

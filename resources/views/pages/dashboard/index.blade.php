@extends('layout.app')
@section('title', 'Dashboard')
@push('css')
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
<style scoped>
    .nav-pills .nav-link {
    border: 1px #dbdcdc solid !important;
}
</style>
@endpush
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
                <div class="col-lg-3 mb-3">
                    <div class="nav flex-column nav-pills " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <button class="nav-link active mb-1" id="v-pills-home-tab" data-toggle="pill" data-target="#v-pills-home"
                            type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</button>
                        <button class="nav-link mb-1" id="v-pills-profile-tab" data-toggle="pill" data-target="#v-pills-profile"
                            type="button" role="tab" aria-controls="v-pills-profile"
                            aria-selected="false">Profile</button>
                        <button class="nav-link mb-1" id="v-pills-messages-tab" data-toggle="pill"
                            data-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                            aria-selected="false">Order List</button>
                        <button class="nav-link mb-1" id="v-pills-settings-tab" data-toggle="pill"
                            data-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                            aria-selected="false">Settings</button>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <div class="row">
                                <div class="col-lg-3 mb-2">
                                    <div class="card dashboard_card">
                                        <div class="card-body">
                                            <h5 class="card-title card_title_1">Active Orders <i class="fa-solid fa-cart-arrow-down card_icon_1"></i></h5>
                                            <h4 class="text-center">{{ $activeOrders }}</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 mb-2">
                                    <div class="card dashboard_card">
                                        <div class="card-body">
                                            <h5 class="card-title card_title_2">Total Orders <i class="fa-solid fa-list-check card_icon_2"></i></h5>
                                            {{-- <p class="card-text">Some quick example text to build on the card title and
                                                make up the bulk of the card's content.</p> --}}
                                            <h4 class="text-center">{{ $totalOrders }}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div class="card dashboard_card">
                                        <div class="card-body">
                                            <h5 class="card-title card_title_3">Total Purchase <i class="fa-solid fa-bangladeshi-taka-sign card_icon_3"></i></h5>
                                            <h4 class="text-center">৳ {{$totalPurchase}}</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 mb-2">
                                    <div class="card dashboard_card">
                                        <div class="card-body">
                                            <h5 class="card-title card_title_4">Wishlist Item<i class="fa-solid fa-heart card_icon_4"></i></h5>
                                            <h4 class="text-center">0</h4>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <div class="card user-card-full">
                                <div class="row m-l-0 m-r-0">
                                    <div class="col-sm-4 bg-c-lite-green user-profile">
                                        <div class="card-block text-center text-white">
                                            <div class="m-b-25">
                                                <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                            </div>
                                            <h6 class="f-w-600">Hembo Tingor</h6>
                                            <p>Web Designer</p>
                                            <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-block">
                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Email</p>
                                                    <input type="text" id="email" class="form-control" readonly>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Phone</p>
                                                    <input type="number" min="10" max="11" id="phone" class="form-control">
                                                </div>
                                            </div>

                                            <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                            aria-labelledby="v-pills-messages-tab">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                          <h4>Order List</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>S.N</th>
                                                            <th>Date</th>
                                                            <th>Quantity</th>
                                                            <th>Total Cost</th>
                                                            <th>Payment Type</th>
                                                            <th>Delivery Charge</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($orderList as $key => $order)
                                                        <tr>
                                                            <td>{{$key+1}}</td>
                                                            <td>{{$order->created_at}}</td>
                                                            <td>{{$order->qty}}</td>
                                                            <td>{{$order->amount}}</td>
                                                            <td>{{$order->type}}</td>
                                                            <td>@if($order->shipping_charge == 0) Free @else {{$order->shipping_charge}} @endif</td>
                                                            <td>{{$order->delivery_status}}</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {{ $orderList->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">...</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('admin.layouts.layout')
@section('title')
Dashboard
@endsection
@section('dashboardActive')
active
@endsection
@section('content')
<div class="row">
                        <!-- statustic-card start -->
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-yellow text-white">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class="m-b-5">Total Transaksi</p>
                                            <h4 class="m-b-0">{{\App\Transaksi::count()}}</h4>
                                        </div>
                                        <div class="col col-auto text-right">
                                            <i class="feather icon-user f-50 text-c-yellow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-green text-white">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class="m-b-5">Transaksi Berhasil</p>
                                            <h4 class="m-b-0">{{\App\Transaksi::where('status', 'Sudah bayar')->count()}}</h4>
                                        </div>
                                        <div class="col col-auto text-right">
                                            <i class="feather icon-credit-card f-50 text-c-green"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-pink text-white">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class="m-b-5">Total Barang</p>
                                            <h4 class="m-b-0">{{\App\Barang::count()}}</h4>
                                        </div>
                                        <div class="col col-auto text-right">
                                            <i class="feather icon-book f-50 text-c-pink"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-c-blue text-white">
                                <div class="card-block">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <p class="m-b-5">Total Barang [Published]</p>
                                            <h4 class="m-b-0">{{\App\Barang::where('published', 'Yes')->count()}}</h4>
                                        </div>
                                        <div class="col col-auto text-right">
                                            <i class="feather icon-shopping-cart f-50 text-c-blue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- statustic-card start -->

                    </div>

@endsection

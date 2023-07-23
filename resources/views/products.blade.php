@extends('templates.mainTemplates')

@section('container')
    <section>
        <div class= "container px-4 px-lg-5 text-center">
        <h2 style="color:#F22DFF;"> Layanan & Harga </h2>
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col">
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row gx-5 align-items-center">
                <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            @foreach ($products as $product)
                            <div class="col-md-6 mb-5">
                                <!-- Feature item-->
                                <div class="text-center">

                                    <img src="/img/{{ $product->image }}" style = "width:200px ; height:200px"alt="">
                                    <h3 class="font-alt">{{ $product->name }}</h3>
                                    <p class="text-muted mb-0"> {{$product->kg}} KG</p>
                                    <p class="text-muted mb-0">Rp. {{ $product->price}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-0">
                    <!-- Features section device mockup-->
                    <div class="features-device-mockup">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            
                            </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"></svg>
                        <div class="device-wrapper">
                        <img src="/img/Desain produk.png" style = "width : 350px ; height: 500px">
            </div>
        </div>
    </section>

    <hr size ="10px"/>
 
    <section class="bg-light">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-5">
                    <h2 class="display-4 lh-1 mb-4">MENGAPA HARUS SUPER LAUNDRY?</h2>
                    <p class="lead fw-normal text-muted mb-5 mb-lg-0"> Karena dapat menghemat waktu, mendapatkan hasil cucian yang bersih dan wangi, menjaga kualitas dan keawetan pakaian, menjaga kesehatan, serta harga yang sangat terjangkau.</p>
                </div>
                <div class="col-sm-8 col-md-6">
                    <div class="px-5 px-sm-0">
                        <img src="/img/mesincuciproduk1.jpg" alt="..." style = "width :500px ; height:550px"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gradient-primary-to-secondary" id="download">
        <div class="container px-5">
            <h2 class="text-center text-white font-alt mb-4">Nikmati Layanan Super Laundry!</h2>
            <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center">
            
            </div>
        </div>
    </section>
@endsection
@extends('templates.mainTemplates')

@section('container')
    <section>
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
            <div class="row gx-5 pt-5">
                <h2 class="text-center mb-5"> LAYANAN & HARGA </h2>
                <div class="col-lg-6 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid px-5">
                        <div class="row gx-5">
                            @foreach ($products as $product)
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">

                                        <img src="/img/{{ $product->image }}" style = "width:120px ; height:120px"alt="">
                                        <h3 class="font-alt">{{ $product->name }}</h3>
                                        <p class="text-muted mb-0"> {{$product->kg}} KG</p>
                                        <p class="text-muted mb-0 mb-3">Rp. {{ $product->price}}</p>
                                        <form action="/cart" method="post">
                                            @csrf
                                            <input type="hidden" name="id_user" value="@auth {{ Auth::user()->id }} @endauth">
                                            <input type="hidden" name="id_product" value="{{ $product->id }}">
                                            <button class="btn bg-gradient-primary-to-secondary text-light text-center rounded-pill mb-2" type="submit"><i class="bi bi-cart3"></i> Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-0">
                    <img src="/img/Desain produk.png" style = "width : 350px ; height: 500px">
                </div>
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
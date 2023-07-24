@extends('templates.mainTemplates')

@section('container')
    <section style="min-height: 100vh">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2 class="text-center mt-5">My Chart</h2>
                <table class="table mt-5">
                    <thead class="table-primary">
                      <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Kg</th>
                        <th>Price</th>
                        <th>Qty</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0; // Inisialisasi variabel total
                        @endphp
                        @foreach ($carts as $cart)
                            <tr>
                                <td>
                                    <form action="" method="post">
                                        @csrf
                                        <button class="btn btn-danger" >
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </form>
                                </td>
                                <td>{{ $cart->product->name }}</td>
                                <td>{{ $cart->product->kg }}</td>
                                <td>{{ $cart->product->price }}</td>
                                <td>1</td>
                            </tr>
                            @php
                                $total += $cart->product->price; // Menambahkan harga produk ke total
                            @endphp
                        @endforeach
                    </tbody>
                    
                </table>
                <form action="/checkout/{{ Auth::user()->id }}" method="post">
                    @csrf
                    <input type="hidden" name="total" value="{{ $total }}">
                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                    <button class="btn bg-gradient-primary-to-secondary text-light text-center rounded-pill btn-lg mb-2" style="width: 100%;" type="submit"><i class="bi bi-cart3"></i> Checkout</button>
                </form>
            </div>
        </div>
    </section>
@endsection
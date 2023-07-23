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
                            $no = 1;
                        @endphp
                        @foreach ( $carts as $cart )
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $cart->product->name }}</td>
                                <td>{{ $cart->product->kg }}</td>
                                <td>{{ $cart->product->price }}</td>
                                <td>1</td>
                            </tr>
                            @php
                                $no++
                            @endphp
                        @endforeach
                    </tbody>
                </table>
                <button class="btn bg-gradient-primary-to-secondary text-light text-center rounded-pill btn-lg mb-2" style="width: 100%;" type="submit"><i class="bi bi-cart3"></i> Checkout</button>
            </div>
        </div>
    </section>
@endsection
@extends('templates.mainTemplates')

@section('container')
    <section class="pt-5 mt-5" style="min-height: 100vh">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card text-center">
                    <div class="card-header bg-gradient-primary-to-secondary text-light">
                      <b>RIWAYAT CHECKOUT</b>
                    </div>
                    <div class="card-body">
                        <table class="table" id="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no=1
                            @endphp
                            @foreach ( $checkouts as $checkout )
                                <tr>
                                    <td>{{ $no }}</td>
                                    <td>{{ $checkout->created_at }}</td>
                                    <td>{{ $checkout->total }}</td>
                                </tr>
                                @php
                                    $no++
                                @endphp
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                  </div>
            </div>
        </div>
        @if (session()->has('succesCheckout'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('succesCheckout') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </section>
@endsection
<script>
        new DataTable('#table');
</script>

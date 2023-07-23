<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Chart;
use App\Http\Requests\StoreCheckoutRequest;
use App\Http\Requests\UpdateCheckoutRequest;
use Illuminate\Http\Request;



class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id_user)
    {   
        return view('checkout', [
            "title" => "Checkout",
            "active" => "checkout",
            "checkouts" => Checkout::where('id_user', $id_user)->get()
        ]);

    }
    public function saveCheckout(Checkout $checkout, Request $checkoutRequest, $id_user)
    {   
        $data = $checkoutRequest->all();
        $checkout->create($data);
        return view('checkout', [
            "title" => "Checkout",
            "active" => "checkout",
            "checkouts" => Checkout::where('id_user', $id_user)->get()
        ])->with('succesCheckout', 'Berhasil Checkout');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCheckoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Checkout $checkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCheckoutRequest $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}

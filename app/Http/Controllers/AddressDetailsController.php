<?php

namespace App\Http\Controllers;

use App\AddressDetails;
use Illuminate\Http\Request;

class AddressDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $app_id)
    {
        $request->validate([
            'business_type' => ['required', 'string', 'max:255'],
            'process_transaction' => 'required',
            'service_sold' => 'required',
            'business_address' => 'required',
            'business_street' => ['required', 'string', 'max:255'],
            'business_city' => 'required',
            'business_state' => 'required',
            'business_zip' => 'required',
            'same_as_business_address' => 'required',
            'shipping_address' => ['nullable', 'string', 'max:255'],
            'shipping_street' => 'nullable',
            'shipping_city' => 'nullable',
            'shipping_state' => 'nullable',
            'shipping_zip' => 'nullable',
        ]);
        dd($request);
        try{
            $app = App::find($app_id);
            $address_details = new AddressDetails;
            $address_details->business_type = $request->business_type;
            $address_details->process_transaction = $request->process_transaction;
            $address_details->service_sold = $request->service_sold;
            $address_details->business_address = $request->business_address;
            $address_details->business_street = $request->business_street;
            $address_details->business_city = $request->business_city;
            $address_details->business_state = $request->business_state;
            $address_details->business_zip = $request->business_zip;
            $address_details->same_as_business_address = $request->same_as_business_address;
            if($request->same_as_business_address == 0) {
                $address_details->shipping_address = $request->shipping_address;
                $address_details->shipping_city = $request->shipping_city;
                $address_details->shipping_state = $request->shipping_state;
                $address_details->shipping_street = $request->shipping_street;
                $address_details->shipping_zip = $request->shipping_zip;
            }
            $app->address_details()->save($address_details);
            return response()->json([
                'status' =>'success',
                'message'=>'Address Details Added Successfully !',
                ]);
        }
        catch(\Exception $e)
        {
         
            return response()->json(['status'=>'error','message'=>$e->getMessage()]);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AddressDetails  $addressDetails
     * @return \Illuminate\Http\Response
     */
    public function show(AddressDetails $addressDetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AddressDetails  $addressDetails
     * @return \Illuminate\Http\Response
     */
    public function edit(AddressDetails $addressDetails)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AddressDetails  $addressDetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddressDetails $addressDetails)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AddressDetails  $addressDetails
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddressDetails $addressDetails)
    {
        //
    }
}

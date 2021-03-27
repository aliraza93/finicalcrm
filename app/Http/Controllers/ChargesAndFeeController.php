<?php

namespace App\Http\Controllers;

use App\ChargesAndFee;
use App\ServiceFee;
use App\CostPlus;
use Illuminate\Http\Request;

class ChargesAndFeeController extends Controller
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
            'business_website' => ['required', 'string', 'max:255'],
            'percent_ownership' => 'required',
            'biling_type' => 'required',
            'number_of_days_to_get_products' => 'required',
            'estimated_average_monthly_credit_card_sales' => ['required', 'string', 'max:255'],
            'estimated_average_individual_credit_card_sales' => 'required',
            'estimated_highest_individual_credit_card_sales' => 'required',

            'setup_fee' => ['required', 'string', 'max:255'],
            'bach_fee' => 'required',
            'address_verification' => 'required',
            'account_on_file_fee_monthly' => 'required',
            'wireless_activation_fee' => ['required', 'string', 'max:255'],
            'gateway_setup_fee' => 'required',
            'annual_fee' => 'required',
            'wireless_monthly_fee' => ['required', 'string', 'max:255'],
            'gateway_transaction_fee' => 'required',
            'retireval_fee' => 'required',
            'monthly_minimum_fee' => 'required',
            'gateway_monthly_fee' => ['required', 'string', 'max:255'],
            'chargeback_fee' => 'required',
            'monthly_membership_fee' => 'required',

            'visa_mvc_discover' => ['required', 'string', 'max:255'],
            'amex' => 'required',
            'transaction_fee' => 'required',
            'authorization_fee' => 'required',
            'pin_debit_processing' => ['required', 'string', 'max:255'],
            'pin_debit_transaction_fee' => 'nullable',
            'ebt' => 'required',
            'ebt_per_item' => 'nullable',
            'fns_number' => 'nullable',
        ]);
        dd($request);
        try{
            $app = App::find($app_id);

            //Charges and Fee
            $chargesAndFee = new ChargesAndFee;
            $chargesAndFee->business_website = $request->business_website;
            $chargesAndFee->percent_ownership = $request->percent_ownership;
            $chargesAndFee->biling_type = $request->biling_type;
            $chargesAndFee->number_of_days_to_get_products = $request->number_of_days_to_get_products;
            $chargesAndFee->estimated_average_monthly_credit_card_sales = $request->estimated_average_monthly_credit_card_sales;
            $chargesAndFee->estimated_average_individual_credit_card_sales = $request->estimated_average_individual_credit_card_sales;
            $chargesAndFee->estimated_highest_individual_credit_card_sales = $request->estimated_highest_individual_credit_card_sales;
            $app->charges_and_fee()->save($chargesAndFee);

            //Service Fee
            $serviceFee = new ServiceFee;
            $serviceFee->setup_fee = $request->setup_fee;
            $serviceFee->bach_fee = $request->bach_fee;
            $serviceFee->address_verification = $request->address_verification;
            $serviceFee->account_on_file_fee_monthly = $request->account_on_file_fee_monthly;
            $serviceFee->wireless_activation_fee = $request->wireless_activation_fee;
            $serviceFee->gateway_setup_fee = $request->gateway_setup_fee;
            $serviceFee->annual_fee = $request->annual_fee;
            $serviceFee->wireless_monthly_fee = $request->wireless_monthly_fee;
            $serviceFee->gateway_transaction_fee = $request->gateway_transaction_fee;
            $serviceFee->retireval_fee = $request->retireval_fee;
            $serviceFee->monthly_minimum_fee = $request->monthly_minimum_fee;
            $serviceFee->gateway_monthly_fee = $request->gateway_monthly_fee;
            $serviceFee->chargeback_fee = $request->chargeback_fee;
            $serviceFee->monthly_membership_fee = $request->monthly_membership_fee;
            $app->service_fee()->save($serviceFee);

            //Service Fee
            $costPlus = new CostPlus;
            $costPlus->visa_mvc_discover = $request->visa_mvc_discover;
            $costPlus->amex = $request->amex;
            $costPlus->transaction_fee = $request->transaction_fee;
            $costPlus->authorization_fee = $request->authorization_fee;
            $costPlus->pin_debit_processing = $request->pin_debit_processing;
            $costPlus->pin_debit_transaction_fee = $request->pin_debit_transaction_fee;
            $costPlus->ebt = $request->ebt;
            $costPlus->ebt_per_item = $request->ebt_per_item;
            $costPlus->fns_number = $request->fns_number;
            $app->cost_plus()->save($costPlus);

            return response()->json([
                'status' =>'success',
                'message'=>'Charges and Fees Added Successfully !',
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
     * @param  \App\ChargesAndFee  $chargesAndFee
     * @return \Illuminate\Http\Response
     */
    public function show(ChargesAndFee $chargesAndFee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ChargesAndFee  $chargesAndFee
     * @return \Illuminate\Http\Response
     */
    public function edit(ChargesAndFee $chargesAndFee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ChargesAndFee  $chargesAndFee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChargesAndFee $chargesAndFee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ChargesAndFee  $chargesAndFee
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChargesAndFee $chargesAndFee)
    {
        //
    }
}

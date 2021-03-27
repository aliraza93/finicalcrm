<?php

namespace App\Http\Controllers;

use App\BusinessInformation;
use App\App;
use Illuminate\Http\Request;

class BusinessInformationController extends Controller
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
    public function store(Request $request)
    {
        $request->validate([
            'businessName' => ['required', 'string', 'max:255'],
            'business_phone' => 'required',
            'business_email' => ['required', 'confirmed'],
            'agent_office_rep_name' => 'required',
        ]);
        try{
            $app = new App;
            $app->save();
            $business_information = new BusinessInformation;
            $business_information->name = $request->businessName;
            $business_information->phone = $request->business_phone;
            $business_information->email = $request->business_email;
            $business_information->agent_office_rep_name = $request->agent_office_rep_name;
            // $business_information->save();
            $app->business_information()->save($business_information);
            return response()->json([
                'status' =>'success',
                'message'=>'Business Information Added Successfully !',
                'app_id' => $app->id
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
     * @param  \App\BusinessInformation  $businessInformation
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessInformation $businessInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BusinessInformation  $businessInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(BusinessInformation $businessInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BusinessInformation  $businessInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessInformation $businessInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BusinessInformation  $businessInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessInformation $businessInformation)
    {
        //
    }
}

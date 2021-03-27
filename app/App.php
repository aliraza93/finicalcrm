<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    use HasFactory;

    /**
     * Get the business_information record associated with the user.
     */
    public function business_information()
    {
        return $this->hasOne(BusinessInformation::class);
    }

    /**
     * Get the address_details record associated with the user.
     */
    public function address_details()
    {
        return $this->hasOne(AddressDetails::class);
    }

    /**
     * Get the charges_and_fee record associated with the user.
     */
    public function charges_and_fee()
    {
        return $this->hasOne(ChargesAndFee::class);
    }

    /**
     * Get the service_fee record associated with the user.
     */
    public function service_fee()
    {
        return $this->hasOne(ServiceFee::class);
    }

    /**
     * Get the cost_plus record associated with the user.
     */
    public function cost_plus()
    {
        return $this->hasOne(CostPlus::class);
    }
}

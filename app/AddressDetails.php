<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddressDetails extends Model
{
    use HasFactory;

    /**
     * Get the app record associated with the user.
     */
    public function app()
    {
        return $this->belongsTo(App::class);
    }
}

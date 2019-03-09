<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    /**
     * Get the user record associated with the address.
     */
    public function User(){
        return $this->hasOne('User');
    }
}

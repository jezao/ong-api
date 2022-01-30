<?php

namespace App\Domain\Person\Models;

use App\Domain\Address\Models\AddressModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PersonModel extends Model
{

    protected $table = 'persons';

    public function address(): HasOne
    {
        return $this->hasOne(AddressModel::class, 'id', 'address_id');
    }
}
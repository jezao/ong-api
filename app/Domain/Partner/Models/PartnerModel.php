<?php

namespace App\Domain\Partner\Models;

use App\Domain\Address\Models\AddressModel;
use App\Domain\Partner\Factory\PartnerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PartnerModel extends Model
{
    use HasFactory;

    protected $table = 'partners';

    public function address(): HasOne
    {
        return $this->hasOne(AddressModel::class, 'id', 'address_id');
    }

    protected static function newFactory(): PartnerFactory
    {
        return PartnerFactory::new();
    }
}
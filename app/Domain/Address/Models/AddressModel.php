<?php

namespace App\Domain\Address\Models;

use App\Domain\Address\Factory\AddressFactory;
use App\Domain\Partner\Models\PartnerModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AddressModel extends Model
{

    use HasFactory;

    protected $table = 'addresses';

    public function partner(): BelongsTo
    {
        return $this->belongsTo(PartnerModel::class, 'address_id', 'id');
    }

    protected static function newFactory(): AddressFactory
    {
        return AddressFactory::new();
    }
}
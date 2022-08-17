<?php

namespace App\Models;

use App\Models\CstmInvc;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    public function customerinvoices() {
        return $this->hasMany(CstmInvc::class);
    }
}

<?php

namespace App\Models;

use App\Models\AccountType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AccountSubType extends Model
{
    use HasFactory;


    public function account()
    {
        return $this->belongsTo(AccountType::class, 'account_id','id');
    }
}

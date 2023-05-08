<?php

namespace App\Models;

use App\Models\Account;
use App\Models\AccountProcess;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AccountProcessMapping extends Model
{
    use HasFactory;


    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id','id');
    }

    public function process()
    {
        return $this->belongsTo(AccountProcess::class, 'account_id','id');
    }
}

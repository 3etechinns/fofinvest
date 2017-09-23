<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DepositMethod extends Model
{
	protected $table = 'deposit_methods';
    protected $fillable = ['user_id', 'value', 'method', 'receive', 'identifier', 'ref_type'];
}

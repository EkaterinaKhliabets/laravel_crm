<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'id_number',  'character_code'];

    public function bankAccounts()
    {
        return $this->hasMany(BankAccount::class);
    }

    public function settings()
    {
        return $this->hasMany(Setting::class);
    }


}

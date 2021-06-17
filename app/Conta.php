<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    protected $fillable = ['agencia', 'numero','digito','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function people()
    {
        return $this->hasMany(Person::class);
    }

    public function companys()
    {
        return $this->hasMany(Company::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}


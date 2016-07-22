<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'domain'];

    # Scopes

    public function scopeMainCities($query)
    {
        return $query->whereIn('domain', ['msk', 'spb'])->get();
    }

    public function scopeBigCities($query)
    {
        return $query->whereIn('domain', ['ekburg', 'kazan', 'krasnodar', 'nnov', 'rnd', 'vrn'])->get();
    }

    public function scopeLittleCities($query)
    {
        return $query->whereNotIn('domain', ['msk', 'spb', 'eesti', 'fin', 'ekburg', 'kazan', 'krasnodar', 'nnov', 'rnd', 'vrn'])->get();
    }

    public function scopeEuropeCities($query)
    {
        return $query->whereIn('domain', ['eesti', 'fin'])->get();
    }
}

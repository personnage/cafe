<?php

namespace App\Models;

class City extends Model
{
    use Traits\CityScopes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'domain'];

    /**
     * Get the users for the cities.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}

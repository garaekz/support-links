<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'link',
        'redirects',
    ];

    public function redirects()
    {
        return $this->hasMany(Redirect::class);
    }
}

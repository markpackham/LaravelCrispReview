<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flavour extends Model
{
    use HasFactory;

    protected $fillable = [
        'flavour_name',
    ];

    public function scopeFilter($query, array $filters)
    {

        if ($filters['searchFlavour'] ?? false) {
            $query->where('flavour_name', 'like', '%' . request('searchFlavour') . '%');
        }
    }
}

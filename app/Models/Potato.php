<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Potato extends Model
{
    use HasFactory;

    protected $fillable = [
        'potato_name',
        'potato_country',
    ];

    public function scopeFilter($query, array $filters)
    {

        if ($filters['searchPotato'] ?? false) {
            $query->where('potato_name', 'like', '%' . request('searchPotato') . '%')
                ->orWhere('potato_country', 'like', '%' . request('searchPotato') . '%');
        }
    }
}

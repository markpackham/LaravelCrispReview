<?php

namespace App\Models;

use App\Models\Crisp;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Flavour extends Model
{
    use HasFactory;

    protected $fillable = [
        'flavour_name',
    ];

    public function crisps()
    {
        return $this->hasMany(Crisp::class, 'id');
    }

    public function scopeFilter($query, array $filters)
    {

        if ($filters['searchFlavour'] ?? false) {
            $query->where('flavour_name', 'like', '%' . request('searchFlavour') . '%');
        }
    }
}

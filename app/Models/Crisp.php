<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Flavour;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Crisp extends Model
{
    use HasFactory;

    protected $fillable = [
        'crisp_name',
        'crisp_image',
        'crisp_weight',
        'crisp_review',
        'crisp_review_score',
        'brand_id',
        'flavour_id',
    ];

    // Relationship to Brand
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    // Relationship to Flavour
    public function flavour()
    {
        return $this->belongsTo(Flavour::class);
    }

    public function scopeFilter($query, array $filters)
    {

        if ($filters['searchCrisp'] ?? false) {
            $query->where('crisp_name', 'like', '%' . request('searchCrisp') . '%');
        }
    }
}

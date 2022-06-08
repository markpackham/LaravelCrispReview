<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_name',
    ];

    // Relationship to Company
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    public function scopeFilter($query, array $filters)
    {

        if ($filters['searchBrand'] ?? false) {
            $query->where('brand_name', 'like', '%' . request('searchBrand') . '%');
        }
    }
}

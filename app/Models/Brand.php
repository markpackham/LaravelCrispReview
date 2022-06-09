<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_name',
        'company_id'
    ];

    // Relationship to Company, a brand may only have 1 company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function scopeFilter($query, array $filters)
    {

        if ($filters['searchBrand'] ?? false) {
            $query->where('brand_name', 'like', '%' . request('searchBrand') . '%');
        }
    }
}

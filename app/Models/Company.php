<?php

namespace App\Models;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_address',
        'company_phone',
        'company_website',
    ];

    // Relationship to Company, a company belongs to many brands
    public function brands()
    {
        return $this->hasMany(Brand::class, 'brand_id', 'id');
    }

    public function scopeFilter($query, array $filters)
    {

        if ($filters['searchCompany'] ?? false) {
            $query->where('company_name', 'like', '%' . request('searchCompany') . '%');
        }
    }
}

<?php

namespace App\Models;

use App\Models\Crisp;
use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_name',
        'company_id'
    ];

    // Relationship to Company, a Brand may only belong to 1 Company
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    // Many Crisps can belong to 1 Brand
    public function crisps()
    {
        return $this->hasMany(Crisp::class, 'id');
    }

    public function scopeFilter($query, array $filters)
    {

        if ($filters['searchBrand'] ?? false) {
            $query->where('brand_name', 'like', '%' . request('searchBrand') . '%');
        }
    }
}

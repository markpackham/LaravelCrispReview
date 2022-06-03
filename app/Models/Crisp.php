<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crisp extends Model
{
    use HasFactory;

    protected $fillable = [
        'crisp_name',
        'crisp_image',
        'crisp_weight',
        'crisp_review',
        'crisp_score',
    ];

    // Relationship to Brand
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    // Relationship to Flavour
    public function flavour()
    {
        return $this->belongsTo(Flavour::class, 'flavour_id');
    }
}

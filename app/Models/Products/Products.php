<?php

namespace App\Models\Products;

use App\Models\Methods\MethodsUnits;
use App\Models\Methods\MethodsFamilies;
use App\Models\Methods\MethodsServices;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['CODE',
                          'LABEL', 
                           'IND',
                           'methods_services_id', 
                           'methods_families_id', 
                           'purchased', 
                           'purchased_price', 
                           'sold', 
                           'selling_price', 
                           'methods_units_id', 
                           'material', 
                           'thickness', 
                           'weight', 
                           'x_size', 
                           'Y_size', 
                           'z_size', 
                           'x_oversize',
                           'y_oversize',
                           'z_oversize',
                           'comment',
                           'tracability_type',
                           'qty_eco_min',
                           'qty_eco_max',
                           'diameter',
                           'diameter_oversize',
                           'section_size',
                           'PICTURE',];

    public function service()
    {
        return $this->belongsTo(MethodsServices::class, 'methods_services_id');
    }

    public function family()
    {
        return $this->belongsTo(MethodsFamilies::class, 'methods_families_id');
    }

    public function Unit()
    {
        return $this->belongsTo(MethodsUnits::class, 'methods_units_id');
    }

    public function GetPrettyCreatedAttribute()
    {
        return date('d F Y', strtotime($this->created_at));
    }
    
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeWordSearch($query, $word)
    {
        if(!empty($word)){
            $query->where('first_name', 'like', '%' . $word . '%')->orwhere('last_name', 'like', '%' . $word . '%')->orwhere('email', 'like', '%' . $word . '%');
        }
    }

    public function scopeGenderSearch($query, $gender)
    {
        if(!empty($gender)){
            $query->where('gender', $gender);
        }
    }

    public function scopeCategorySearch($query, $category_id)
    {
        if(!empty($category_id)){
            $query->where('category_id', $category_id);
        }
    }

    public function scopeDateSearch($query, $date)
    {
        if(!empty($date)){
            $query->where('created_at', 'like', '%' . $date . '%');
        }
    }
}

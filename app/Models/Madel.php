<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Madel extends Model
{
    use HasFactory;
    protected $table = 'madels';
    protected $fillable = [
        'name_en', 'name_ru', 'gender', 'age', 'height', 'weight', 'bust', 'waist', 'hips',
        'shoe', 'eyes_color', 'hair_color', 'phone_number', 'image', 'img_compcard', 'category_id'
    ];

      public function categories() {
        return $this->belongsTo(App\Models\Categories::class);
    }

    public function images() {
        return $this->hasMany(App\Models\Images::class);
    }
}

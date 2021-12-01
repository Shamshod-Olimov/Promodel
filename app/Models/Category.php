<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $fillable = [
        'image', 'name_en', 'name_ru'
      ];
    public function models() {
        return $this->hasMany(App\Models\Madels::class);
    }
}

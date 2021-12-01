<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $fillable = [
        'name', 'madel_id'
      ];

      public function models() {
        return $this->belongsTo(App\Model\Madels::class);
    }
}

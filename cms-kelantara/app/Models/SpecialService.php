<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialService extends Model
{
    use HasSlug;
    use HasFactory;
    protected $table = 'special_services';
    protected $primaryKey = 'id';
    protected $guard = [];

    public function img(){
        return $this->hasMany(SpecialServiceImage::class, 'porto_id');
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}

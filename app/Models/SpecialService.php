<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SpecialService extends Model
{
    use HasSlug;
    use HasFactory;
    protected $table = 'special_services';
    protected $primaryKey = 'id';
    protected $guard = [];

    public function img(){
        return $this->hasMany(SpecialServiceImage::class, 'ss_id');
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}

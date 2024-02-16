<?php

namespace App\Models;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portofolio extends Model
{
    use HasSlug;
    use HasFactory;
    protected $table = 'portofolios';
    protected $primaryKey = 'id';
    protected $guard = [];

    public function img(){
        return $this->hasMany(PortofolioImage::class, 'porto_id');
    }
    public function type(){
        return $this->belongsTo(PortoType::class, 'type_id');
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}

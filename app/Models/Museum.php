<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Museum extends Model
{
    use HasFactory;

    public static function generateSlug($str){
        $slug = Str::slug($str, '-');
        $original_slug = $slug;
        $slug_exixts = Museum::where('slug', $slug)->first();
        $c = 1;
       while($slug_exixts){
            $slug = $original_slug . '-' . $c;
            $slug_exixts = Museum::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
}


    protected $fillable = [
        "name",
        "nation",
        "city",
        "slug",
        "address",
        "web_site",
        "image_name",
        "image_path",
        "photo",
        "description",
        "latitude",
        "longitude",
    ];
}

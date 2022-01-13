<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function example()
    {
        return $this->hasMany(Example::class);
    }

    public function setImgAttribute($img)
    {

        if (!$img || $this->img == $img) {
            return;
        }
        if($this->id) {
            $this->deleteOldImg();
        }
        if (gettype($img) != 'string') {

            $img->store('/public/images');
            $this->attributes['img'] = $img->hashName();
        } else {
            $this->attributes['img'] = $img;
        }
    }
    public function getImgAttribute($value)
    {
  
        return $value ? Storage::url('images/' . $value) : '/img/preview-9.59807f81.jpg';
    }

    public function deleteOldImg()
    {
        Storage::delete('images/' . $this->attributes['img']);
    }
}

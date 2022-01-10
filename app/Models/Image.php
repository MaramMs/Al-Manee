<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function setImageAttribute($image)
    {
        if (!$image || $this->image == $image) {
            return;
        }
        if($this->id) {
            $this->deleteOldImage();
        }
        if (gettype($image) != 'string') {
            $image->store('/public/images');
            $this->attributes['image'] = $image->hashName();
        } else {
            $this->attributes['image'] = $image;
        }
    }
    public function getImageAttribute($value)
    {
        return $value ? Storage::url('images/' . $value) : '/img/preview-9.59807f81.jpg';
    }

    public function deleteOldImage()
    {
        Storage::delete('images/' . $this->attributes['image']);
    }
}

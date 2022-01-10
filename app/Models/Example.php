<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Example extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function setSrcAttribute($src)
    {
        if (!$src|| $this->src == $src) {
            return;
        }
        if($this->id) {
            $this->deleteOldSrc();
        }
        if (gettype($src) != 'string') {
            $src->store('/public/images');
            $this->attributes['src'] = $src->hashName();
        } else {
            $this->attributes['src'] = $src;
        }
    }
    public function getSrcAttribute($value)
    {
        return $value ? Storage::url('images/' . $value) : '/img/preview-9.59807f81.jpg';
    }

    public function deleteOldSrc()
    {
        Storage::delete('images/' . $this->attributes['src']);
    }

}

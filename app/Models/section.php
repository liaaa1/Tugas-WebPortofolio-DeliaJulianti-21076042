<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class section extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'thumbail', 'content', 'post_as'];

    protected static function boot()
    {
        parent::boot();
        static::updating(function($model){
            if($model->isDirty('thumbail') && ($model->getOriginal('thumbail') !== null))
                Storage::disk('public')->delete(($model->getOriginal('thumbail')));
            {

            }});
        }
}

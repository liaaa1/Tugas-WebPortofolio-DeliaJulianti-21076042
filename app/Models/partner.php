<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class partner extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'thumbail', 'content', 'link'];

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

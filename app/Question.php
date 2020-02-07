<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable=['title',body];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function setTitleAttribute($value)
    {
        $this->Attributes['title']=$value;
        $this->Attributes['slug']=Str::slug($value);
    }
    
}

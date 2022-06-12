<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;
class Venue extends Model
{
    use HasFactory;
    protected $fillable=['name','phone','region','lat','long','instagram_username'];
    protected $with=['tags'];
    public function tags(){
        return $this->belongsToMany(Tag::class,'venues_has_tags');
    }
}

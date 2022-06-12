<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Venue;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function venues(){
        return $this->belongsToMany(Venue::class,'venues_has_tags');
    }
}

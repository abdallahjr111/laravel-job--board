<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model
{
    use HasFactory;

    use HasUuids;
    //primary keys
    protected $primaryKey='id';
    protected $KeyType='string'; //UUID -uninversal unique identifier

    public $incrementing= false;

    protected $table='post';

    protected $fillable = ['title','author','body','published'];//field that can be updated
    protected $guarded = ['id'];//field that can't be updated/assigned (readonly)

    public function comments()  {
    return  $this->hasMany(comment::class);

    }
    public function tags()  {
    return  $this->belongsToMany(Tag::class);

    }
}

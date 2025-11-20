<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    use HasUuids;

    protected $primaryKey='id';
    protected $KeyType='string'; //UUID -uninversal unique identifier

    public $incrementing= false;
        protected $table='tag';

    protected $fillable = ['title'];//field that can be updated
    protected $guarded = ['id'];//field that can't be updated/assigned (readonly)

    public function posts(){
        return $this->belongsToMany(post::CLASS);

    }
}

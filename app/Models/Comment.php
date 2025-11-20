<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    use HasUuids;

    protected $primaryKey='id';
    protected $KeyType='string'; //UUID -uninversal unique identifier

    public $incrementing= false;

    protected $table='comment';
    protected $fillable = ['author','content','post_id' ];//field that can be updated
    protected $guarded = ['id'];//field that can't be updated/assigned (readonly)

    public function post(){
        return $this->belongsTo(post::CLASS);

    }

}

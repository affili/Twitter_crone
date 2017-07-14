<?php
namespace Patter;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $guarded = ['id', 'created_at'];
    
    // protected $fillable = ['body'];

    public function user(){
        return $this->belongsTo('Patter\User');
    }
}

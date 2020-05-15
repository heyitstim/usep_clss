<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choices extends Model
{
    protected $table = 'choice';
    protected $primaryKey = 'id';
    protected $fillable = [
        'choice', 'question_id',
    ];
    public function Questionaire(){
        return $this->hasOne('App\Questionaire');
    }

}

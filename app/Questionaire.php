<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionaire extends Model
{
    protected $table = 'questions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'q_question', 'choice_id','faculty_id','description',
    ];

    public function Choice(){
        return $this->hasMany('App\Choices');
    }
}

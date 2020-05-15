<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty_evaluation_form_data extends Model
{
    protected $table = 'faculty_evaluation_form_data';
    protected $primaryKey = 'id';
    protected $fillable = [
        'StudentNo','AcademicYear','FacultyName','SubjectCode','SubjectTitle','CollegeName','choice_id_1','choice_id_2','choice_id_3','choice_id_4','choice_id_5','choice_id_6','choice_id_7',
        'choice_id_8','choice_id_9','choice_id_10','choice_id_11','choice_id_12','choice_id_13','choice_id_14','choice_id_15','choice_id_16',
        'choice_id_17','choice_id_18','choice_id_19','choice_id_20'
    ];

    public function Faculty(){
        return $this->hasMany('App\Questionaire');
    }
}

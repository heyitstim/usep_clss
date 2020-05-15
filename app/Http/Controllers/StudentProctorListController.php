<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
class StudentProctorListController extends Controller
{
    public function return_faculty_list(){

/*         function check_diff_multi($array1, $array2){
            $result = array();
            foreach($array1 as $key => $val) {
                if(isset($array2[$key])){
                   if(is_array($val)  && is_array($array2[$key])){
                        $result[$key] = check_diff_multi($val, $array2[$key]);
                        //dd($result[$key]);
                    }
                } else {
                    $result[$key] = $val;
                }
            }

            return $result;
        }
        $user_idno = Auth::user()->StudentNo;

        $eval_form_data = DB::table('faculty_evaluation_form_data')
            ->select('StudentNo','AcademicYear','FacultyName','SubjectTitle','CollegeName','SubjectCode')
            ->where('StudentNo',$user_idno)
            ->get();

        $subjectlist = DB::table('StudentSubjectLoad')
            ->select('StudentNo','AcademicYear','FacultyName','SubjectTitle','CollegeName','SubjectCode')
            ->where('StudentNo',$user_idno)
            ->get();

            $subjectlist_data = json_decode( json_encode($subjectlist), true);
            $eform_data = json_decode(json_encode($eval_form_data), true);

            $result[] = check_diff_multi($subjectlist_data,$eform_data);

            $result = array_values(array_filter($result));
            $result2 = $result[0][1];
            dd($result[0][1]);
*/
    $user_idno = Auth::user()->StudentNo;
    $result = DB::table('StudentSubjectLoad')
    ->select('StudentNo','AcademicYear','FacultyName','SubjectTitle','CollegeName','SubjectCode')
    ->where('StudentNo',$user_idno)
    ->get();

        return view('evalforms.faculty_list',compact('result'));
    }
}

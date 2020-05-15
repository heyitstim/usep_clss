<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Questionaire;
use App\Choices;
use App\Faculty_evaluation_form_data;
use Alert;
use Illuminate\Support\Facades\Request;

class QuestionaireController extends Controller
{

    public function faculty_evaluation_form(Request $request)
    {
        $request = Request::instance();
        $user_data = Auth::user();
        $choice_data = Choices::all();
        $question_count = DB::table('questions')->distinct('choice_id')->count('choice_id');
        $question_data = DB::table('questions')->where('description','Faculty Evaluation Form')->get();
        $faculty_data = json_decode($request->faculty_data, true);

        return view('evalforms.faculty_evaluation_form', compact('user_data','choice_data','question_data','question_count','faculty_data'));
    }

    public function customer_feedback_form(){
        $user_data = Auth::user();
        $question_count = DB::table('questions')->distinct('choice_id')->count('choice_id');

        $question_data = DB::table('questions')->where('description','Customer Feedback Form')->get();
        $choice_data = Choices::all();

        return view('evalforms.customer_feedback_form', compact('user_data','choice_data','question_data','question_count'));
    }

    public function store_faculty_evaluation_form(Request $request){
        $request = Request::instance();
        $post_request_count = count($request->request->all());
        $post_request_count = $post_request_count - 4;
        $faculty_data = json_decode($request->faculty_data, true);

            $eval_form_data = new Faculty_evaluation_form_data();
            $eval_form_data->AcademicYear = $faculty_data['AcademicYear'];
            $eval_form_data->FacultyName =  $faculty_data['FacultyName'];
            $eval_form_data->SubjectTitle = $faculty_data['SubjectTitle'];
            $eval_form_data->SubjectCode = $faculty_data['SubjectCode'];
            $eval_form_data->CollegeName = $faculty_data['CollegeName'];
            $eval_form_data->StudentNo = Auth::user()->StudentNo;

            for($i = 1;$i <= $post_request_count;++$i){
                $c = 'choice_id_'.$i;
                $eval_form_data->$c = $request->get('choice_id_'.$i);
                echo 'choice_id_'.$c;
            }

            $eval_form_data->comments = $request->get('comment');
            $eval_form_data->created_at = now();
            $eval_form_data->save();

            DB::table('StudentSubjectLoad')
            ->where('StudentNo', '=',Auth::user()->StudentNo)
            -> where('AcademicYear', '=',$faculty_data['AcademicYear'])
            -> where('FacultyName', '=',$faculty_data['FacultyName'])
            -> where('SubjectCode', '=',$faculty_data['SubjectCode'])
            -> where('SubjectTitle', '=',$faculty_data['SubjectTitle'])
            -> where('CollegeName', '=',$faculty_data['CollegeName'])
            -> delete();

        return redirect()->route('faculty_list')->with('msg', '<b>Form Successfully Submitted</b> You can now view your grade at the student portal.');;
    }
}

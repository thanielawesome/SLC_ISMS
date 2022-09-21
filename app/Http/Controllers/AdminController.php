<?php

namespace App\Http\Controllers;

use DB;
use View;
use Session;
use App\Models\Users;
use App\Models\Student_bed;
use App\Models\Student_college;
use App\Models\Sy_bed;
use App\Models\Sy_college;
use App\Models\Grade_level;
use App\Models\Section;
use App\Models\Course;
use App\Models\Department;
use App\Models\Year_level;
use App\Models\Strand;
use App\Models\Sy;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function current_period(Request $request)
    { 
        if($request->session()->get('id')==null){
        return redirect('/');
        }

        $id = $request->session()->get('id');
        $user_info = DB::table('users')
                    ->where('id', $id)
                    ->first();

        if ($request->has('submit')) 
        {
            $current_period = $request->input('current_period');
            $request->session()->put('current_period',$current_period);
            return redirect('/admin/home?current_period='.$current_period)->with(['user_info' => $user_info, 'current_period' => $current_period]);
        }
    }

    public function home(Request $request)
    {
        if($request->session()->get('id')==null){
        return redirect('/');
        }
        $id = $request->session()->get('id');
        $user_info = DB::table('users')
                    ->where('id', $id)
                    ->first();
        $syy = DB::table('sy')
                    ->get();
        
        $current_period = $request->input('current_period');
        $request->session()->put('current_period',$current_period);
       return View::make('/admin/home')->with(['user_info' => $user_info, 'current_period' => $current_period, 'syy' => $syy]);
    }

    public function sy_bed(Request $request)
    {
        if($request->session()->get('id')==null){
        return redirect('/');
        }
        $id = $request->session()->get('id');
        $user_info = DB::table('users')
                    ->where('id', $id)
                    ->first();

        $current_period = $request->input('current_period');
        if($current_period == NULL){
            return redirect()->back()->with('error', 'PLEASE SELECT SCHOOL YEAR!');   
        }else{

            $request->session()->put('current_period',$current_period);
                $arr = explode(", ", $current_period, 2);
                $semester = $arr[0];
                $sy = $arr[1];
            $students = DB::table('student_bed')
                        ->where('entry_year', $sy)
                        ->get();
            $syy = DB::table('sy')
                        ->get();
        }

       return View::make('/admin/sy_bed')->with(['user_info' => $user_info, 'students' => $students, 'current_period' => $current_period, 'syy' => $syy]);
    }

    public function college(Request $request)
    {
        if($request->session()->get('id')==null){
        return redirect('/');
        }
        $id = $request->session()->get('id');
        $user_info = DB::table('users')
                    ->where('id', $id)
                    ->first();

        $syy = DB::table('sy')
                    ->get();

        $current_period = $request->input('current_period');
        if($current_period == NULL){
            return redirect()->back()->with('error', 'PLEASE SELECT SCHOOL YEAR!');   
        }else{
            if($current_period == null){

            }else{
                $arr = explode(", ", $current_period, 2);
                $sem = $arr[0];
                if($sem == 'First Semester'){
                    $semm = 1;
                }else{
                    $semm = 2;
                }
                $syr = $arr[1];
                $sclyr = explode("-", $syr, 2);
                $sclyrr1 = substr($sclyr[0], -2);
                $sclyrr2 = substr($sclyr[1], -2);
                $sy = $sclyrr1.$sclyrr2.$semm;
                $college = DB::table('student_college')
                    ->where('entry_year', $sy)
                    ->where('semester', $sem)
                    ->get();

            }
        }

        

       return View::make('/admin/sy_college')->with(['user_info' => $user_info, 'college' => $college, 'current_period' => $current_period, 'syy' => $syy]);
    }

    public function view_college(Request $request)
    {
        if($request->session()->get('id')==null){
        return redirect('/');
        }
        $id = $request->session()->get('id');
        $user_info = DB::table('users')
                    ->where('id', $id)
                    ->first();

        $current_period =  $request->session()->get('current_period');
        dd($current_period);

        $studentid = $request->input('id');
        $student_info = DB::table('student_college')
                ->where('idnumber', $studentid)
                ->first();
        $syy = DB::table('sy')
                    ->get();
       return View::make('/admin/view_college')->with(['user_info' => $user_info, 'student_info' => $student_info, 'current_period' => $current_period, 'syy' => $syy]);
    }


    public function bed(Request $request)
    {
        if($request->session()->get('id')==null){
        return redirect('/');
        }
        $id = $request->session()->get('id');
        $user_info = DB::table('users')
                    ->where('id', $id)
                    ->first();

        $current_period = $request->session()->get('current_period');

        $studentid = $request->input('id');
        $student_info = DB::table('student_bed')
                ->where('idnumber', $studentid)
                ->first();
        $syy = DB::table('sy')
                    ->get();
       return View::make('/admin/bed')->with(['user_info' => $user_info, 'student_info' => $student_info, 'current_period' => $current_period, 'syy' => $syy]);
    }

     public function form_shifter(Request $request)
    {
        if($request->session()->get('id')==null){
        return redirect('/');
        }
        $id = $request->session()->get('id');
            $user_info = DB::table('users')
                    ->where('id', $id)
                    ->first();
       return View::make('/admin/form_shifter')->with(['user_info' => $user_info]);
    }

    public function individual_form(Request $request)
    {
        if($request->session()->get('id')==null){
        return redirect('/');
        }
        $id = $request->session()->get('id');
        $user_info = DB::table('users')
                    ->where('id', $id)
                    ->first();

        $student_bed = DB::table('student_bed')
                    ->get();
        $current_period =  $request->session()->get('current_period');

    
        $syy = DB::table('sy')
                    ->get();
       return View::make('/admin/individual_form')->with(['user_info' => $user_info, 'student_bed' => $student_bed, 'current_period' => $current_period, 'syy' => $syy]);
    }

    public function individual_form_bed(Request $request)
    {
        if($request->session()->get('id')==null){
        return redirect('/');
        }
        $id = $request->session()->get('id');
        $user_info = DB::table('users')
                    ->where('id', $id)
                    ->first();

        $studentid = $request->input('idnumber');
        $student_info = DB::table('student_bed')
                    ->where('idnumber', $studentid)
                    ->first();
        $request->session()->put('current_period',$current_period);
       return View::make('/admin/individual_form_bed')->with(['user_info' => $user_info, 'student_info' => $student_info, 'current_period' => $current_period]);
    }

     public function guidance_form(Request $request)
    {
        if($request->session()->get('id')==null){
        return redirect('/');
        }
        $id = $request->session()->get('id');
            $user_info = DB::table('users')
                    ->where('id', $id)
                    ->first();

        $current_period = $request->session()->get('current_period');
        $syy = DB::table('sy')
                    ->get();
       return View::make('/admin/guidance_form')->with(['user_info' => $user_info, 'current_period' => $current_period, 'syy' => $syy]);
    }

    public function update_student (Request $request)
    { 
        if($request->session()->get('id')==null){
        return redirect('/');
        }

        if ($request->has('submit')) 
        {
            $id = $request->input('id');
            $firstname = $request->input('firstname');
            $middlename = $request->input('middlename');
            $lastname = $request->input('lastname');
            $idno = $request->input('idno');
            $contactno = $request->input('contactno');
            $grade = $request->input('grade');
            $section = $request->input('section');
            $pg = $request->input('pg');
            $pg_cn = $request->input('pg_cn');

            $user_info = DB::table('student_bed')
                    ->where('id', $id)
                    ->update(['firstname' => $firstname, 'middlename' => $middlename, 'lastname' => $lastname, 'idnumber' => $idno, 'contact_number' => $contactno, 'grade_level' => $grade, 'section' => $section, 'guardian_name' => $pg, 'pg_contact_number' => $pg_cn]);
            return redirect()->back()->with('success', 'STUDENT PROFILE SUCCESSFULLY UPDATED!');
        }
    }

    public function update_student_c (Request $request)
    { 
        if($request->session()->get('id')==null){
        return redirect('/');
        }

        if ($request->has('submit')) 
        {
            $id = $request->input('id');
            $firstname = $request->input('firstname');
            $middlename = $request->input('middlename');
            $lastname = $request->input('lastname');
            $idno = $request->input('idno');
            $contactno = $request->input('contactno');
            $course = $request->input('course');
            $department = $request->input('department');
            $year = $request->input('year');
            $pg = $request->input('pg');
            $pg_cn = $request->input('pg_cn');

            $user_info = DB::table('student_college')
                    ->where('id', $id)
                    ->update(['firstname' => $firstname, 'middlename' => $middlename, 'lastname' => $lastname, 'idnumber' => $idno, 'contact_number' => $contactno, 'department' => $department, 'year' => $year, 'course' => $course, 'guardian_name' => $pg, 'pg_contact_number' => $pg_cn]);
            return redirect()->back()->with('success', 'STUDENT PROFILE SUCCESSFULLY UPDATED!');
        }
    }

    public function delete_student(Request $request)
    { 
        if($request->session()->get('id')==null){
        return redirect('/');
        }

        if ($request->has('submit')) 
        {
            $id = $request->input('id');

            $user_info = DB::table('student_bed')
                    ->where('id', $id)
                    ->delete();
            return redirect('/admin/sy_bed')->with('success', 'STUDENT SUCCESSFULLY DELETED!');
        }
    }

     public function delete_student_c(Request $request)
    { 
        if($request->session()->get('id')==null){
        return redirect('/');
        }

        if ($request->has('submit')) 
        {
            $id = $request->input('id');

            $user_info = DB::table('student_college')
                    ->where('id', $id)
                    ->delete();
            return redirect('/admin/college')->with('success', 'STUDENT SUCCESSFULLY DELETED!');
        }
    }

    public function add_bed(Request $request)
    {
        if($request->session()->get('id')==null){
        return redirect('/');
        }
        $id = $request->session()->get('id');
        $user_info = DB::table('users')
                    ->where('id', $id)
                    ->first();

        $students = DB::table('student_bed')
                    ->get();
        $grade_level = DB::table('grade_level')
                    ->get();
        $section = DB::table('section')
                    ->get();

        $current_period = $request->input('current_period');
        $request->session()->put('current_period',$current_period);
        $syy = DB::table('sy')
                    ->get();
       return View::make('/admin/add_bed')->with(['user_info' => $user_info, 'students' => $students, 'grade_level' => $grade_level, 'section' => $section, 'current_period' => $current_period, 'syy' => $syy]);
    }

    public function add_student_bed (Request $request)
    { 
        if($request->session()->get('id')==null){
        return redirect('/');
        }

        if ($request->has('submit')) 
        {
            $firstname = $request->input('firstname');
            $middlename = $request->input('middlename');
            $lastname = $request->input('lastname');
            $idno = $request->input('idno');
            $contactno = $request->input('contactno');
            $grade = $request->input('grade');
            $section = $request->input('section');
            $pg = $request->input('pg');
            $pg_cn = $request->input('pg_cn');
            $age = $request->input('age');
            $sex = $request->input('sex');
            $date_of_birth = $request->input('date_of_birth');
            $address = $request->input('address');


            $add_student_bed = new Student_bed;
            $add_student_bed->id = NULL;
            $add_student_bed->firstname = $firstname;
            $add_student_bed->middlename = $middlename;
            $add_student_bed->lastname = $lastname;
            $add_student_bed->idnumber = $idno;
            $add_student_bed->contact_number = $contactno;
            $add_student_bed->grade_level = $grade;
            $add_student_bed->section = $section;
            $add_student_bed->guardian_name = $pg;
            $add_student_bed->pg_contact_number  = $pg_cn;
            $add_student_bed->age = $age;
            $add_student_bed->sex = $sex;
            $add_student_bed->date_of_birth  = $date_of_birth;
            $add_student_bed->address  = $address;
            $add_student_bed->save() or die('ERROR ADDING NEW STUDENT!');
           
            return redirect()->back()->with('success', 'STUDENT PROFILE SUCCESSFULLY UPDATED!');
        }
    }
    

     public function add_college(Request $request)
    {
        if($request->session()->get('id')==null){
        return redirect('/');
        }
        $id = $request->session()->get('id');
        $user_info = DB::table('users')
                    ->where('id', $id)
                    ->first();

        $students = DB::table('student_bed')
                    ->get();
        $department = DB::table('department')
                    ->get();
        $current_period = $request->input('current_period');
        $request->session()->put('current_period',$current_period);
        $syy = DB::table('sy')
                    ->get();
       return View::make('/admin/add_college')->with(['user_info' => $user_info, 'department' => $department, 'students' => $students, 'current_period' => $current_period, 'syy' => $syy]);
    }

    public function add_student_college (Request $request)
    { 
        if($request->session()->get('id')==null){
        return redirect('/');
        }

        if ($request->has('submit')) 
        {
            $firstname = $request->input('firstname');
            $middlename = $request->input('middlename');
            $lastname = $request->input('lastname');
            $idno = $request->input('idno');
            $contactno = $request->input('contactno');
            $department = $request->input('department');
            $course = $request->input('course');
            $year = $request->input('year');
            $pg = $request->input('pg');
            $pg_cn = $request->input('pg_cn');
            $address = $request->input('address');


            $add_student_college = new Student_college;
            $add_student_college->id = NULL;
            $add_student_college->firstname = $firstname;
            $add_student_college->middlename = $middlename;
            $add_student_college->lastname = $lastname;
            $add_student_college->idnumber = $idno;
            $add_student_college->contact_number = $contactno;
            $add_student_college->department = $department;
            $add_student_college->course = $course;
            $add_student_college->year = $year;
            $add_student_college->guardian_name = $pg;
            $add_student_college->pg_contact_number  = $pg_cn;
            $add_student_college->address  = $address;
            $add_student_college->save() or die('ERROR ADDING NEW STUDENT!');
           
            return redirect()->back()->with('success', 'STUDENT PROFILE SUCCESSFULLY UPDATED!');
        }
    }

    


    public function add_sy(Request $request)
        {
            if($request->session()->get('id')==null){
            return redirect('/');
            }
            $id = $request->session()->get('id');
            $user_info = DB::table('users')
                        ->where('id', $id)
                        ->first();

            $current_period = $request->input('current_period');
            $request->session()->put('current_period',$current_period);

            if($current_period ==  NULL){
                return redirect()->back()->with('error', 'PLEASE SELECT SCHOOL YEAR!');
            }else{
                $arr = explode(",", $current_period, 2);
            $semester = $arr[0];
            $sy = $arr[1];

            $students = DB::table('student_bed')
                        ->get();
            $sy_bed = DB::table('sy')           
                        ->get();
            $department = DB::table('department')
                        ->get();
            $syy = DB::table('sy')
                    ->get();
            }

            

           return View::make('/admin/add_sy')->with(['user_info' => $user_info, 'department' => $department, 'students' => $students, 'sy_bed' => $sy_bed, 'current_period' => $current_period, 'syy' => $syy]);
        }

    public function add_sy_process (Request $request)
    { 
        if($request->session()->get('id')==null){
        return redirect('/');
        }

        if ($request->has('submit')) 
        {
            $sy_duration = $request->input('sy_duration');
            $sy_semester = $request->input('sy_semester');
            $sy_code = $request->input('sy_code');
            $status = $request->input('status');
          


            $add_sy_c = new Sy;
            $add_sy_c->syid = NULL;
            $add_sy_c->sy_duration = $sy_duration;
            $add_sy_c->sy_semester = $sy_semester;
            $add_sy_c->sy_code = $sy_code;
            $add_sy_c->status = $status;
            
            $add_sy_c->save() or die('ERROR ADDING NEW STUDENT!');
           
            return redirect()->back()->with('success', 'SCHOOL YEAR SUCCESSFULLY ADDED!');
        }
    }

    public function grade(Request $request)
        {
            if($request->session()->get('id')==null){
            return redirect('/');
            }
            $id = $request->session()->get('id');
            $user_info = DB::table('users')
                        ->where('id', $id)
                        ->first();

            $students = DB::table('student_bed')
                        ->get();
            $department = DB::table('department')
                        ->get();
            $current_period = $request->input('current_period');
            $request->session()->put('current_period',$current_period);
            $syy = DB::table('sy')
                    ->get();

           return View::make('/admin/grade')->with(['user_info' => $user_info, 'department' => $department, 'students' => $students, 'current_period' => $current_period, 'syy' => $syy]);
        }

    public function add_grade(Request $request)
    { 
        if($request->session()->get('id')==null){
        return redirect('/');
        }

        if ($request->has('submit')) 
        {
            $glno = $request->input('glno');
            $add_g = new Grade_level;
            $add_g->glid = NULL;
            $add_g->glno = $glno;
            
            $add_g->save() or die('ERROR ADDING NEW STUDENT!');
           
            return redirect()->back()->with('success', 'SCHOOL YEAR SUCCESSFULLY ADDED!');
        }
    }

    public function section(Request $request)
        {
            if($request->session()->get('id')==null){
            return redirect('/');
            }
            $id = $request->session()->get('id');
            $user_info = DB::table('users')
                        ->where('id', $id)
                        ->first();

            $students = DB::table('student_bed')
                        ->get();
            $department = DB::table('department')
                        ->get();
            $current_period = $request->input('current_period');
            $request->session()->put('current_period',$current_period);
            $syy = DB::table('sy')
                    ->get();
           return View::make('/admin/section')->with(['user_info' => $user_info, 'department' => $department, 'students' => $students, 'current_period' => $current_period, 'syy' => $syy]);
        }

    public function add_section(Request $request)
    { 
        if($request->session()->get('id')==null){
        return redirect('/');
        }

        if ($request->has('submit')) 
        {
            $section_name = $request->input('section_name');
            $glid = $request->input('glid');
            $add_section = new Section;
            $add_section->sectionid = NULL;
            $add_section->section_name = $section_name;
            $add_section->glid = $glid;
            $add_section->save() or die('ERROR ADDING NEW STUDENT!');
           
            return redirect()->back()->with('success', 'SCHOOL YEAR SUCCESSFULLY ADDED!');
        }
    }

    public function department(Request $request)
        {
            if($request->session()->get('id')==null){
            return redirect('/');
            }
            $id = $request->session()->get('id');
            $user_info = DB::table('users')
                        ->where('id', $id)
                        ->first();

            $students = DB::table('student_bed')
                        ->get();
            $department = DB::table('department')
                        ->get();

            $current_period = $request->input('current_period');
            $request->session()->put('current_period',$current_period);
            $syy = DB::table('sy')
                    ->get();
           return View::make('/admin/department')->with(['user_info' => $user_info, 'department' => $department, 'students' => $students, 'current_period' => $current_period, 'syy' => $syy]);
        }

    public function add_department(Request $request)
    { 
        if($request->session()->get('id')==null){
        return redirect('/');
        }

        if ($request->has('submit')) 
        {
            $dept_name = $request->input('dept_name');
            $dept_code = $request->input('dept_code');

            $department = DB::table('department')
                        ->where('dept_name', $dept_name)
                        ->where('dept_code', $dept_code)
                        ->count();
            if($department == 1){
                return redirect()->back()->with('error', 'DEPARTMENT AREADY EXIST!');
            }else{

                $dept = new Department;
                $dept->deptid = NULL;
                $dept->dept_name = $dept_name;
                $dept->dept_code = $dept_code;
                $dept->save() or die('ERROR ADDING NEW STUDENT!');
               
                return redirect()->back()->with('success', 'DEPARTMENT SUCCESSFULLY ADDED!');
            }
        }
    }

    public function course(Request $request)
        {
            if($request->session()->get('id')==null){
            return redirect('/');
            }
            $id = $request->session()->get('id');
            $user_info = DB::table('users')
                        ->where('id', $id)
                        ->first();

            $students = DB::table('student_bed')
                        ->get();
            $department = DB::table('department')
                        ->get();

            $current_period = $request->input('current_period');
            $request->session()->put('current_period',$current_period);
            $syy = DB::table('sy')
                    ->get();
           return View::make('/admin/course')->with(['user_info' => $user_info, 'department' => $department, 'students' => $students, 'current_period' => $current_period, 'syy' => $syy]);
        }

    public function add_course(Request $request)
    { 
        if($request->session()->get('id')==null){
        return redirect('/');
        }

        if ($request->has('submit')) 
        {
            $course_name = $request->input('course_name');
            $course_code = $request->input('course_code');
            $dept_code = $request->input('dept_code');

            $course = DB::table('course')
                        ->where('course_name', $course_name)
                        ->where('dept_code', $dept_code)
                        ->where('course_code', $course_code)
                        ->count();
            if($course == 1){
                return redirect()->back()->with('error', 'DEPARTMENT AREADY EXIST!');
            }else{

                $course = new Course;
                $course->courseid = NULL;
                $course->course_name = $course_name;
                $course->course_code = $course_code;
                $course->dept_code = $dept_code;
                $course->save() or die('ERROR ADDING NEW STUDENT!');
               
                return redirect()->back()->with('success', 'DEPARTMENT SUCCESSFULLY ADDED!');
            }
        }
    }


    public function year(Request $request)
        {
            if($request->session()->get('id')==null){
            return redirect('/');
            }
            $id = $request->session()->get('id');
            $user_info = DB::table('users')
                        ->where('id', $id)
                        ->first();

            $students = DB::table('student_bed')
                        ->get();
            $department = DB::table('department')
                        ->get();

            $current_period = $request->input('current_period');
            $request->session()->put('current_period',$current_period);
            $syy = DB::table('sy')
                    ->get();
           return View::make('/admin/year')->with(['user_info' => $user_info, 'department' => $department, 'students' => $students, 'current_period' => $current_period, 'syy' => $syy]);
        }

    public function add_year(Request $request)
    { 
        if($request->session()->get('id')==null){
        return redirect('/');
        }

        if ($request->has('submit')) 
        {
            $ylno = $request->input('ylno');

            $year = DB::table('year_level')
                        ->where('ylno', $ylno)
                        ->count();
            if($year == 1){
                return redirect()->back()->with('error', 'DEPARTMENT AREADY EXIST!');
            }else{

                $year = new Year_level;
                $year->ylid = NULL;
                $year->ylno = $ylno;
                $year->save() or die('ERROR ADDING NEW STUDENT!');
               
                return redirect()->back()->with('success', 'DEPARTMENT SUCCESSFULLY ADDED!');
            }
        }
    }

    public function strand(Request $request)
        {
            if($request->session()->get('id')==null){
            return redirect('/');
            }
            $id = $request->session()->get('id');
            $user_info = DB::table('users')
                        ->where('id', $id)
                        ->first();

            $students = DB::table('student_bed')
                        ->get();
            $department = DB::table('department')
                        ->get();

            $current_period = $request->input('current_period');
            $request->session()->put('current_period',$current_period);
            $syy = DB::table('sy')
                    ->get();
           return View::make('/admin/strand')->with(['user_info' => $user_info, 'department' => $department, 'students' => $students, 'current_period' => $current_period, 'syy' => $syy]);
        }

    public function add_strand(Request $request)
    { 
        if($request->session()->get('id')==null){
        return redirect('/');
        }

        if ($request->has('submit')) 
        {
            $strand_name = $request->input('strand_name');
            $strand_code = $request->input('strand_code');

            $strand = DB::table('strand')
                        ->where('strand_name', $strand_name)
                        ->where('strand_code', $strand_code)
                        ->count();
            if($strand == 1){
                return redirect()->back()->with('error', 'DEPARTMENT AREADY EXIST!');
            }else{

                $strand = new Strand;
                $strand->strandid = NULL;
                $strand->strand_name = $strand_name;
                $strand->strand_code = $strand_code;
                $strand->save() or die('ERROR ADDING NEW STUDENT!');
               
                return redirect()->back()->with('success', 'DEPARTMENT SUCCESSFULLY ADDED!');
            }
        }
    }

    






















    public function logout(Request $request)
   {
      $request->session()->flush();
      return redirect('/');
   }
}

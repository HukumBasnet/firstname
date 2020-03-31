<?php

namespace App\Http\Controllers;

use App\User;
use App\Inquiry;
use App\Myclass;
use App\Teacher;
use App\Admission;
use App\UserSibling;
use App\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Statement extends Controller
{ 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inquiry(){
        $inquirys = Inquiry::orderBy('created_at', 'desc')->paginate();

        return view('statement.inquiry.index', compact('inquirys'));
    }

    // To create a new user
public function inquiry_add()
{
    // Load user/createOrUpdate.blade.php view
    return View('statement.inquiry.add');
}

// To update an existing user (load to edit)
public function inquiry_edit($id)
{
    $inquiry = Inquiry::find($id);
    // Load user/createOrUpdate.blade.php view
    return View('statement.inquiry.add')->with('inquiry', $inquiry);
}

public function inquiry_save(Request $request, $id=''){
    
     if($id){
        inquiry::find($id)->update($request->all());
        return redirect()->route('statement.inquiry')->with('status', __('Updated'));
     }else{
        Inquiry::create([
            'name'=>$request->name,
            'class'=>$request->class,
            'inquiry_id'=>$request->inquiry_id,
            'father_name'=>$request->father_name,
            'mother_name'=>$request->mother_name,
            'student_class'=>$request->student_class,
            'number'=>$request->number,
     ]);
     return redirect()->route('statement.inquiry')->with('status', __('Created'));
     }
  
  

 
    
}

public function inquiry_delete($id=''){
    Inquiry::find($id)->delete();
    return redirect()->route('statement.inquiry')->with('status', __('Deleted')); 

}



public function registration(){
    $registrations = inquiry::orderBy('created_at', 'desc')->where('fees','!=',null)->paginate();

    return view('statement.registration.index', compact('registrations'));
}

public function new_registration(){
    $registrations = Inquiry::orderBy('created_at', 'desc')->paginate();

    return view('statement.registration.inquiry', compact('registrations'));  

}

// To create a new user
public function registration_add($id)
{
    $inquiry = Inquiry::find($id);
    // Load user/createOrUpdate.blade.php view
    return View('statement.registration.add')->with('registration', $inquiry);
}

// To update an existing user (load to edit)
public function registration_edit($id)
{
$inquiry = Inquiry::find($id);
// Load user/createOrUpdate.blade.php view
return View('statement.registration.add')->with('registration', $inquiry);
}

public function registration_save(Request $request, $id=''){

 if($id){
    Inquiry::find($id)->update($request->all());
    return redirect()->route('statement.registration')->with('status', __('Updated'));
 }else{
    Inquiry::create($request->all());
 return redirect()->route('statement.registration')->with('status', __('Created'));
 }





}

public function registration_delete($id=''){
    Inquiry::find($id)->delete();
return redirect()->route('statement.registration')->with('status', __('Deleted')); 

}

public function admission(){
    // $registrations = inquiry::orderBy('created_at', 'desc')->where('fees','!=',null)->paginate();
    $registrations = User::where('role','=',null)->paginate();

    return view('statement.admission.index', compact('registrations'));
}


public function admission_form($id){
    $students = Inquiry::where('id',$id)->first();
    $classes  = Myclass::groupBy('class_number')->get();
    return view('statement.admission.form',compact(['students','classes']));
}

    public function studentadmission(Request $request)
    {
        DB::beginTransaction();
        $data['email'] = $request->email;
        $data['password'] = bcrypt($request->password);
        $data['school_id'] = auth()->user()->school_id;
        $data['role'] = 'student';
        $data['code'] = auth()->user()->code;
        $data['active'] = 1;
        $data['student_code'] = auth()->user()->school_id.date('y').substr(number_format(time() * mt_rand(), 0, '', ''), 0, 5);

        
        $data['name'] = $request->name;
        $data['d_year'] = $request->d_year;
        $data['d_month'] = $request->d_month;
        $data['d_day'] = $request->d_day;
        $data['class'] = $request->class;
        $data['session'] = $request->session;
        $data['mailing_address'] = $request->mailing_address;
        $data['phone_number'] = $request->phone;
        $data['father_name'] = $request->father_name;
        $data['father_cnic_no'] = $request->father_cnic_no;
        $data['occupation'] = $request->occupation;
        $data['f_address'] = $request->f_address;
        $data['mother_name'] = $request->mother_name;
        $data['mother_cnic_no'] = $request->mother_cnic_no;
        $data['mother_occupation'] = $request->mother_occupation;
        $data['m_address'] = $request->m_address;
        $data['guardian_name'] = $request->guardian_name;
        $data['guardian_cnic_no'] = $request->guardian_cnic_no;
        $data['guardian_occupation'] = $request->guardian_occupation;
        $data['g_address'] = $request->g_address;
        $data['relation'] = $request->relation;
        $data['checklist_one'] = $request->checklist_one;
        $data['checklist_two'] = $request->checklist_two;
        $data['checklist_three'] = $request->checklist_three;
        $data['office_one'] = $request->office_one;
        $data['office_two'] = $request->office_two;
        $data['office_three'] = $request->office_three;
        $data['admission_test_date'] = $request->admission_test_date;
        $data['admission_test_time'] = $request->admission_test_time;
        $data['interview_time'] = $request->interview_time;
        $data['age'] = $request->age;
       
        try{
            $user = User::create($data);  
            for($i=0;$i<4;$i++){
                $sibling['brother'] = $request->brother[$i];
                $sibling['sister'] = $request->sister[$i];
                $sibling['user_id'] = $user->id;
                $sibling['student_id'] = $request->user_id[$i];
                $sibling['campus'] = $request->campus[$i];
                UserSibling::create($sibling);
            }
            DB::commit();
            return redirect()->route('statement.registration');
        } catch (\Exception $e){
            DB::rollback();
            return $e->getMessage();
            return redirect()->back();
        }
        DB::commit();
    }

    public function deleteadmission($id)
    {
       $check = User::find($id);
       if($check != null)
       {
           try{
                $check->delete();
                return redirect()->back();
           } catch (\Exception $e){
               return redirect()->back();
           }
       }else{
           return redirect()->back();
       }
    }

    // teacher registration page
    public function teacherregistrationpage()
    {
       
        return view('statement.registration.teacherregistration');
    }
    public function teacherregistration(Request $request)
    {
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['password'] = bcrypt($request->password);
        $data['address'] = $request->address;
        $data['gender'] = $request->gender;
        $data['subjects'] = $request->subjects;
        $data['experience'] = $request->experience;
        $data['prevschool'] = $request->prevschool;
        $data['school_id'] = auth()->user()->school_id;
        $data['teacher_code'] = auth()->user()->school_id.date('y').substr(number_format(time() * mt_rand(), 0, '', ''), 0, 5);
        try{
            Teacher::create($data);
            return redirect()->back();

        }catch (\Exception $e)  
        {
            return $e->getMessage();
        }
       
    }
    // list
    public function teacherlist()
    {
        $teachers = Teacher::all();
        return view('statement.registration.teacherlist',compact('teachers'));
    }

    public function deleteteacher($id)
    {
        $check = Teacher::find($id);
        if($check != null)
        {
            $check->delete();
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }

    public function teachereditpage($id)
    {
        $edit = Teacher::find($id);
        return view('statement.registration.teacherregistration',compact('edit'));
    }
    public function editteacher(Request $request,$id)
    {
        $check = Teacher::find($id);
        if($check != null)
        {
            try{
                $check->name = $request->name;
                $check->email = $request->email;
                $check->phone = $request->phone;
                $check->address = $request->address;
                $check->gender = $request->gender;
                $check->subjects = $request->subjects;
                $check->experience = $request->experience;
                $check->prevschool = $request->prevschool;
                $check->save();
            return redirect()->route('statement.teacherlist');
            }   catch (\Exception $e){
                return $e->getMessage();
            }
        }else{
            return redirect()->route('statement.teacherlist');
        }
    }

}

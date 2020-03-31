<?php

namespace App\Http\Controllers;

use App\User;
use App\School;
use App\Myclass;
use App\Section;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Requests\SchoolRequest;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      // dd('ok');

      $schools = School::orderBy('created_at', 'desc')->paginate();

      return view('schools.index', compact('schools'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SchoolRequest $request)
    {
    
       $school = School::create([
            'name'        => $request->name,
            'campus_name' => $request->campus_name,
            'email'       => $request->email,
            'fano'      => $request->fano,
            'fno' =>$request->fno,
            'city' =>$request->city,
            'land_line'=>$request->land_line,
            'address' =>$request->address,
            'school_level'=>$request->school_level,
            'code'        => date("y").substr(number_format(time() * mt_rand(), 0, '', ''), 0, 6),
            'theme'       => 'flatly'
        ]);
        
    

        $default_classes = [

        "pre"=> array('PG',"KG"),
        
        "primary"=> array('PG','kG',1,2,3),
        
        'comprehensive'=> array('PG','kG',1,2,3,4,5,6,7,8,9,10)
        ];
        $tb = new Myclass;

        $class = array();
        if(!empty($request->school_level)){
          foreach($default_classes[$request->school_level] as $val){
           $class[]= array(
              'class_number'=>$val,
              'school_id'=>$school->id,
              'group'=>(!empty($request->group))?$request->group:'',


           );
           
          }
        }
        Myclass::insert($class);
       

      
       
        // return back()->with('status', __('Created'));

        return redirect()->route('schools.index')->with('status', __('Created'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($school_id)
    {
      $admins = User::bySchool($school_id)->where('role','admin')->get();
      return view('school.admin-list',compact('admins'));
    }

    public function edit(School $school) {
        // $school = $schoo;
        return view('schools.edit', compact('school'));
    }

    public function update(Request $request, School $school) {
        $school->update($request->all());

        return redirect()->route('schools.index');
    }

    public function addDepartment(Request $request){
      $request->validate([
        'department_name' => 'required|string|max:50',
      ]);
      $s = new Department;
      $s->school_id = \Auth::user()->school_id;
      $s->department_name = $request->department_name;
      $s->save();
      return back()->with('status', __('Created'));
    }

    public function changeTheme(Request $request){
      $tb = School::find($request->s);
      $tb->theme = $request->school_theme;
      $tb->save();
      return back();
    }

	public function setIgnoreSessions(Request $request){
		$request->session()->put('ignoreSessions', $request->ignoreSessions);
		return response()->json([
		  'data' => [
			'success' => "Setting saved"
		  ]
		]);
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // return (School::destroy($id))?response()->json([
      //   'status' => 'success'
      // ]):response()->json([
      //   'status' => 'error'
      // ]);
    }
}

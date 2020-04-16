<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if(\request('search')){
            $students=Student::where('name','like','%'.\request('search') .'%')
            ->orderby('id','desc')->paginate(6);
        }else{
            $students=Student::orderby('id','desc')->paginate(6);
        }
        

        return view('admin.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();

        return view('admin.students.create' ,compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'rollno' =>'required',
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'date' =>'required'
        ]);
  
        Student::create($request->all());
   
           return redirect('/admin/students')->with('success','Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::find($id);

        return view('admin.students.edit',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           'rollno' =>'required',
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'date' =>'required'
        ]);

        $students = Student::findOrFail($id);
  
        $students->update([
            "rollno"=> $request->get('rollno'),
            "name" => $request->get('name'),
            "email" => $request->get('email'),
            "address" => $request->get('address'),
            "phone" => $request->get('phone'),
            "date" => $request->get('date')
        ]);
  
        return redirect('/admin/students')->with('success','Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $students = Student::find($id);

         $students->delete();

        return redirect('/admin/students')->with('success', 'Student deleted!');
    }
}

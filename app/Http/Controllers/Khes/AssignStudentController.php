<?php

namespace KindHubElementrySchool\Http\Controllers\Khes;

use KindHubElementrySchool\Http\Requests;
use KindHubElementrySchool\Http\Controllers\Controller;

use KindHubElementrySchool\AssignStudent;
use KindHubElementrySchool\Classroom;
use KindHubElementrySchool\Student;
use KindHubElementrySchool\Teacher;
use KindHubElementrySchool\Year;    
use Illuminate\Http\Request;



class AssignStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $assignstudent = AssignStudent::where('classroom', 'LIKE', "%$keyword%")
                ->orWhere('teachersname', 'LIKE', "%$keyword%")
                ->orWhere('studentfirstname', 'LIKE', "%$keyword%")
                ->orWhere('studentlastname', 'LIKE', "%$keyword%")
                ->orWhere('gender', 'LIKE', "%$keyword%")
                ->orWhere('joinedyear', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $assignstudent = AssignStudent::latest()->paginate($perPage);
        }

        return view('khes.assign-student.index', compact('assignstudent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $classrooms =Classroom::all();
        $teachers = Teacher::all();
        $students = Student::all();
        $years = Year::all();
        $assignstudents = AssignStudent::all();
               
        return view('khes.assign-student.create', compact('classrooms','teachers','students','years','assignstudents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        AssignStudent::create($requestData);

        return redirect('khes/assign-student')->with('flash_message', 'AssignStudent added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $assignstudent = AssignStudent::findOrFail($id);

        return view('khes.assign-student.show', compact('assignstudent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $classrooms =Classroom::all();
        $teachers = Teacher::all();
        $students = Student::all();
        $years = Year::all();
        $assignstudents = AssignStudent::all();
               
               
        return view('khes.assign-student.edit', compact('classrooms','teachers','students','years','assignstudents'));
  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $assignstudent = AssignStudent::findOrFail($id);
        $assignstudent->update($requestData);

        return redirect('khes/assign-student')->with('flash_message', 'AssignStudent updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        AssignStudent::destroy($id);

        return redirect('khes/assign-student')->with('flash_message', 'AssignStudent deleted!');
    }
}

<?php

namespace KindHubElementrySchool\Http\Controllers\Khes;

use KindHubElementrySchool\Http\Requests;
use KindHubElementrySchool\Http\Controllers\Controller;

use KindHubElementrySchool\Classroom;
use Illuminate\Http\Request;

class ClassroomsController extends Controller
{
    
    /*function __construct(){
        return $$this->middleware('auth:api');
    }*/
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
            $classrooms = Classroom::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $classrooms = Classroom::latest()->paginate($perPage);
        }

        return view('khes.classrooms.index', compact('classrooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('khes.classrooms.create');
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
        
        Classroom::create($requestData);

        return redirect('khes/classrooms')->with('flash_message', 'Classroom added!');
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
        $classroom = Classroom::findOrFail($id);

        return view('khes.classrooms.show', compact('classroom'));
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
        $classroom = Classroom::findOrFail($id);

        return view('khes.classrooms.edit', compact('classroom'));
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
        
        $classroom = Classroom::findOrFail($id);
        $classroom->update($requestData);

        return redirect('khes/classrooms')->with('flash_message', 'Classroom updated!');
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
        Classroom::destroy($id);

        return redirect('khes/classrooms')->with('flash_message', 'Classroom deleted!');
    }
}

<?php

namespace KindHubElementrySchool\Http\Controllers\Khes;

use KindHubElementrySchool\Http\Requests;
use KindHubElementrySchool\Http\Controllers\Controller;

use KindHubElementrySchool\Year;
use Illuminate\Http\Request;

class YearsController extends Controller
{
   /* function __construct(){
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
            $years = Year::where('year', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $years = Year::latest()->paginate($perPage);
        }

        return view('khes.years.index', compact('years'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('khes.years.create');
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
        
        Year::create($requestData);

        return redirect('khes/years')->with('flash_message', 'Year added!');
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
        $year = Year::findOrFail($id);

        return view('khes.years.show', compact('year'));
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
        $year = Year::findOrFail($id);

        return view('khes.years.edit', compact('year'));
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
        
        $year = Year::findOrFail($id);
        $year->update($requestData);

        return redirect('khes/years')->with('flash_message', 'Year updated!');
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
        Year::destroy($id);

        return redirect('khes/years')->with('flash_message', 'Year deleted!');
    }
}

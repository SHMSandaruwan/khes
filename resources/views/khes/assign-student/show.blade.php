@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">AssignStudent {{ $assignstudent->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/khes/assign-student') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/khes/assign-student/' . $assignstudent->id . '/edit') }}" title="Edit AssignStudent"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('khes/assignstudent' . '/' . $assignstudent->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete AssignStudent" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $assignstudent->id }}</td>
                                    </tr>
                                    <tr><th> Classroom </th><td> {{ $assignstudent->classroom }} </td></tr><tr><th> Teachers name </th><td> {{ $assignstudent->teachersname }} </td></tr><tr><th> Student Full Name </th><td>  {{ $assignstudent->studentfirstname }} {{ $assignstudent->studentlastname }}</td></tr><tr><th> Applied Year </th><td>  {{ $assignstudent->joinedyear }}</td></tr><tr><th> Date Joined </th><td>  {{ $assignstudent->created_at }}</td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

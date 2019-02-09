

@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
      @include('admin.sidebar')
      <div class="col-md-9">
         <div class="card">
            <div class="card-header">Teacher {{ $teacher->id }}</div>
            <div class="card-body">
               <a href="{{ url('/khes/teachers') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
               <a href="{{ url('/khes/teachers/' . $teacher->id . '/edit') }}" title="Edit Teacher"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
               <form method="POST" action="{{ url('khes/teachers' . '/' . $teacher->id) }}" accept-charset="UTF-8" style="display:inline">
                  {{ method_field('DELETE') }}
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-danger btn-sm" title="Delete Teacher" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
               </form>
               <br/>
               <br/>
               <div class="table-responsive">
                  <table class="table">
                     <tbody>
                        <tr>
                           <th>ID</th>
                           <td>{{ $teacher->id }}</td>
                        </tr>
                        <tr>
                           <th> Name </th>
                           <td> {{ $teacher->name }} </td>
                        </tr>
                        <tr>
                           <th> Gender </th>
                           <td> @if(($teacher->gender) == 'M') 
                              {{ 'Male' }}                                        
                              @else
                              {{ 'Female' }}       
                              @endif
                           </td>
                        </tr>
                        <tr>
                           <th> Dof </th>
                           <td> {{ $teacher->dof }} </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection




@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
      @include('admin.sidebar')
      <div class="col-md-9">
         <div class="card">
            <div class="card-header">Student {{ $student->id }}</div>
            <div class="card-body">
               <a href="{{ url('/khes/students') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
               <a href="{{ url('/khes/students/' . $student->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
               <form method="POST" action="{{ url('khes/students' . '/' . $student->id) }}" accept-charset="UTF-8" style="display:inline">
                  {{ method_field('DELETE') }}
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
               </form>
               <br/>
               <br/>
               <div class="table-responsive">
                  <table class="table">
                     <tbody>
                        <tr>
                           <th>ID</th>
                           <td>{{ $student->id }}</td>
                        </tr>
                        <tr>
                           <th> Firstname </th>
                           <td> {{ $student->firstname }} </td>
                        </tr>
                        <tr>
                           <th> Lasttname </th>
                           <td> {{ $student->lasttname }} </td>
                        </tr>
                         <tr>
                           <th> Birthdate </th>
                           <td> {{ $student->dof }} </td>
                        </tr>
                        <tr>
                           <th> Gender </th>
                           <td>  @if(($student->gender) == 'M') 
                              {{ 'Male' }}                                        
                              @else
                              {{ 'Female' }}       
                              @endif 
                           </td>
                        </tr>
                        <tr>
                           <th> Address </th>
                           <td> {{ $student->address }} </td>
                        </tr>
                        <tr>
                           <th> Parents mobile No. </th>
                           <td> {{ $student->parentmobile }} </td>
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


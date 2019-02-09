



<div class="form-group {{ $errors->has('classroom') ? 'has-error' : ''}}">
   <label for="classroom" class="control-label">{{ 'Classroom' }}</label>
   <select id="classroom" class="form-control" name="classroom">
 <?php var_dump($assignstudents) ?>
  
      @foreach ($classrooms as $classroom )
   
            
      
     
      <option   value="{{ $classroom->name }}">{{ $classroom->name }}</option>
      
      @endforeach
   </select>
   {!! $errors->first('classroom', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('teachersname') ? 'has-error' : ''}}">
   <label for="teachersname" class="control-label">{{ 'Teachersname' }}</label>
  
   <select id="teachersname" class="form-control" name="teachersname">
      @foreach ($teachers as $teacher )
      <option  value="{{ $teacher->name }}">{{$teacher->name }}</option>
      @endforeach
   </select>
   {!! $errors->first('teachersname', '
   <p class="help-block">:message</p>
   ') !!}
   
</div>
<div class="form-group {{ $errors->has('studentfirstname') ? 'has-error' : ''}}">
   <label for="studentfirstname" class="control-label">{{ 'Student Full Name' }}</label>
 
    <select id="studentfirstname" class="form-control" name="studentfirstname">
      @foreach ($students as $student )
      <option  value="{{ $student->firstname }}">{{$student->firstname }} {{ $student->lasttname }}</option>
      @endforeach
   </select>  
    {!! $errors->first('studentfirstname', '
   <p class="help-block">:message</p>
   ') !!}
</div>
<div class="form-group {{ $errors->has('studentlastname') ? 'has-error' : ''}}">

 {{--}} <label for="studentlastname" class="control-label">{{ 'Studentlastname' }}</label> {{--}}
   
    <select  hidden id="studentlastname" class="form-control" name="studentlastname">
      @foreach ($students as $student )
      <option  value="{{ $student->lasttname }}">{{$student->lasttname }}</option>
      @endforeach
   </select>    {!! $errors->first('studentlastname', '
   <p class="help-block">:message</p>
   ') !!}
</div>
<div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
   <label for="gender" class="control-label">{{ 'Gender' }}</label><br/>
   <input class="" name="gender" type="radio" id="gender" value="M" >{{' Male'}}
   <input class="" name="gender" type="radio" id="gender" value="F" >{{'  Female'}}
   {!! $errors->first('gender', '
   <p class="help-block">:message</p>
   ') !!}
</div>
<div class="form-group {{ $errors->has('joinedyear') ? 'has-error' : ''}}">
   <label for="joinedyear" class="control-label">{{ 'Joinedyear' }}</label>
   <input class="form-control" name="joinedyear" type="date" id="joinedyear" value="{{ isset($assignstudent->joinedyear) ? $assignstudent->joinedyear : ''}}" >
   {!! $errors->first('joinedyear', '
   <p class="help-block">:message</p>
   ') !!}
</div>
<div class="form-group">
   <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>


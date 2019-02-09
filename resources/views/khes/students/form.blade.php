<div class="form-group {{ $errors->has('firstname') ? 'has-error' : ''}}">
    <label for="firstname" class="control-label">{{ 'First name' }}</label>
    <input class="form-control" name="firstname" type="text" id="firstname" value="{{ isset($student->firstname) ? $student->firstname : ''}}" >
    {!! $errors->first('firstname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('lasttname') ? 'has-error' : ''}}">
    <label for="lasttname" class="control-label">{{ 'Last name' }}</label>
    <input class="form-control" name="lasttname" type="text" id="lasttname" value="{{ isset($student->lasttname) ? $student->lasttname : ''}}" >
    {!! $errors->first('lasttname', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('dof') ? 'has-error' : ''}}">
    <label for="dof" class="control-label">{{ 'Date Of Birth' }}</label>
    <input class="form-control" name="dof" type="date" id="dof" value="{{ isset($student->dof) ? $student->dof : ''}}" >
    {!! $errors->first('dof', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
    <label for="address" class="control-label">{{ 'Address' }}</label>
    <input class="form-control" name="address" type="text" id="address" value="{{ isset($student->address) ? $student->address : ''}}" >
    {!! $errors->first('address', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('parentmobile') ? 'has-error' : ''}}">
    <label for="parentmobile" class="control-label">{{ 'Parent\'s mobile' }}</label>
    <input class="form-control" name="parentmobile" type="number" id="parentmobile" value="{{ isset($student->parentmobile) ? $student->parentmobile : ''}}" >
    {!! $errors->first('parentmobile', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
    <label for="gender" class="control-label">{{ 'Gender' }}</label>
    <br/>
 @if ((isset($student->gender)) && (($student->gender) == 'F')   )
   <input   class="" name="gender" type="radio" id="male" value="M" >{{'  Male'}}
   <input  checked  class="" name="gender" type="radio" id="female" value="F" > {{'  Female'}}
   @elseif ((isset($student->gender)))
   <input  checked  class="" name="gender" type="radio" id="male" value="M" > {{'  Male'}}
   <input   class="" name="gender" type="radio" id="female" value="F" > {{'  Female'}}
   @else
   <input required class="" name="gender" type="radio" id="male" value="M" >{{'  Male'}}
   <input required class="ml-3" name="gender" type="radio" id="female" value="F" >{{'  Female'}}
   @endif    {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>

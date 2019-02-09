

<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
   <label for="name" class="control-label">{{ 'Name' }}</label>
   <input required class="form-control" name="name" type="text" id="name" value="{{ isset($teacher->name) ? $teacher->name : ''}}" >
   {!! $errors->first('name', '
   <p class="help-block">:message</p>
   ') !!}
</div>
<div class="form-group {{ $errors->has('dof') ? 'has-error' : ''}}">
   <label for="dof" class="control-label">{{ 'Date Of Birth' }}</label>
   <input required class="form-control" name="dof" type="date" id="dof" value="{{ isset($teacher->dof) ? $teacher->dof : ''}}" >
   {!! $errors->first('dof', '
   <p class="help-block">:message</p>
   ') !!}
</div>
<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
   <label for="address" class="control-label">{{ 'Address' }}</label>
   <input  required class="form-control" name="address" type="text" id="address" value="{{ isset($teacher->address) ? $teacher->address : ''}}" >
   {!! $errors->first('address', '
   <p class="help-block">:message</p>
   ') !!}
</div>
<div class="form-group {{ $errors->has('telephone') ? 'has-error' : ''}}">
   <label for="telephone" class="control-label">{{ 'Telephone' }}</label>
   <input required class="form-control" name="telephone" type="number" id="telephone" value="{{ isset($teacher->telephone) ? $teacher->telephone : ''}}" >
   {!! $errors->first('telephone', '
   <p class="help-block">:message</p>
   ') !!}
</div>
<div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
   <label for="gender" class="control-label">{{ 'Gender' }}</label>
   <br/>
   @if ((isset($teacher->gender)) && (($teacher->gender) == 'F')   )
   <input   class="" name="gender" type="radio" id="male" value="M" >{{'  Male'}}
   <input  checked  class="" name="gender" type="radio" id="female" value="F" > {{'  Female'}}
   @elseif ((isset($teacher->gender)))
   <input  checked  class="" name="gender" type="radio" id="male" value="M" > {{'  Male'}}
   <input   class="" name="gender" type="radio" id="female" value="F" > {{'  Female'}}
   @else
   <input required class="" name="gender" type="radio" id="male" value="M" >{{'  Male'}}
   <input required class="ml-3" name="gender" type="radio" id="female" value="F" >{{'  Female'}}
   @endif
   {!! $errors->first('gender', '
   <p class="help-block">:message</p>
   ') !!}
</div>
<div class="form-group">
   <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>


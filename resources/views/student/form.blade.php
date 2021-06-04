<div class="form-group">
    <label for="studentCode" class="col-sm-2 control-label">Student Code</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="studentCode" id="studentCode" placeholder="Student Code"
            value="{{ old('studentCode', $student->studentCode ?? null) }}" >
    </div>
    @if($errors->get('studentCode'))
    <div class="col-sm-4 has-error">
        @foreach($errors->get('studentCode') as $error)
        <span class="help-block">
            {{ $error }}
        </span>
        @endforeach
    </div>
    @endif
</div>

<div class="form-group">
    <label for="firstName" class="col-sm-2 control-label">First Name</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name"
            value="{{ old('firstName', $student->firstName ??  null )}}">
    </div>
    @if($errors->get('firstName'))
    <div class="col-sm-4 has-error">
        @foreach($errors->get('firstName') as $error)
        <span class="help-block">
            {{ $error }}
        </span>
        @endforeach

    </div>
    @endif
</div>

<div class="form-group">
    <label for="lastName" class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name"
            value="{{ old('lastName', $student->lastName ??  null )}}">
    </div>
    @if($errors->get('lastName'))
    <div class="col-sm-4 has-error">

        @foreach($errors->get('lastName') as $error)
        <span class="help-block">
            {{ $error }}
        </span>
        @endforeach
    </div>
    @endif
</div>

<div class="form-group">
    <label for="photo" class="col-sm-2 control-label">Photo</label>
    <div class="col-sm-4">
        <input type="file" class="form-control" name="photo" id="photo">
    </div>
</div>

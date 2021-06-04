<div class="form-group">
    <label for="FullName" class="col-sm-2 control-label"> FullName </label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="FullName" id="FullName" placeholder="FullName"
            value="{{ old('FullName', $employee->FullName ?? null )}}">
    </div>
    @if($errors->get('FullName'))
    <div class="col-sm-4 has-error">
        @foreach($errors->get('FullName') as $error )
        <span class="help-block">
            {{ $error }}
        </span>
        @endforeach
    </div>
    @endif
</div>

<div class="form-group">
    <label for="Email" class="col-sm-2 control-label"> Email </label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Email" id="Email" placeholder="Email"
            value="{{ old('Email', $employee->Email ?? null )}}">
    </div>
    @if($errors->get('Email'))
    <div class="col-sm-4 has-error">
        @foreach($errors->get('Email') as $error )
        <span class="help-block">
            {{ $error }}
        </span>
        @endforeach
    </div>
    @endif
</div>

<div class="form-group">
    <label for="Adresse" class="col-sm-2 control-label"> Adresse </label>
    <div class="col-sm-4">
        <input type="text" class="form-control" name="Adresse" id="Adresse" placeholder="Adresse"
            value="{{ old('Adresse' , $employee->Adresse ?? null )}}">
    </div>
    @if($errors->get('Adresse'))
    <div class="col-sm-4 has-error">
        @foreach($errors->get('Adresse') as $error )
        <span class="help-block">
            {{ $error }}
        </span>
        @endforeach
    </div>
    @endif
</div>

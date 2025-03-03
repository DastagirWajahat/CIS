<div class="form-group">
    <!-- Registration Date -->
    {!! Form::label('reg_date', 'Date', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('reg_date', null, ["class" => "form-control date-picker border-form input-mask-date", "readonly"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'reg_date'])
    </div>
</div>

<div class="form-group">
    <!-- Department -->
    {!! Form::label('faculty', 'Department', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        <select name="faculty" class="chosen-select form-control" id="form-field-select-3" data-placeholder="Choose a Faculty/Class..." onChange="loadSemesters(this)">
            <option value=""> </option>
            @foreach($data['faculties'] as $key => $faculty)
                <option value="{{ $key }}">{{ $faculty }}</option>
            @endforeach
        </select>
    </div>

    <!-- Semester -->
    {!! Form::label('semester', 'Sem./Sec.', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        <select name="semester" class="form-control semester" required></select>
        @include('includes.form_fields_validation_message', ['name' => 'semester'])
    </div>
</div>


<div class="form-group">
    <!-- Student Name -->
    {!! Form::label('first_name', 'Name of Student', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('first_name', null, ["class" => "form-control border-form upper", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'first_name'])
    </div>
    <div class="col-sm-3">
        {!! Form::text('middle_name', null, ["class" => "form-control border-form upper"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'middle_name'])
    </div>
    <div class="col-sm-4">
        {!! Form::text('last_name', null, ["class" => "form-control border-form upper", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'last_name'])
    </div>
</div>

<div class="form-group">
    <!-- Date of Birth -->
    {!! Form::label('date_of_birth', 'Date of Birth', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('date_of_birth', null, ["class" => "form-control border-form date-picker input-mask-date", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'date_of_birth'])
    </div>

    <!-- Gender -->
    {!! Form::label('gender', 'Gender', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::select('gender', ['' => '', 'MALE' => 'MALE', 'FEMALE' => 'FEMALE', 'OTHER' => 'OTHER'], null, ['class' => 'form-control border-form', "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'gender'])
    </div>
</div>

<div class="form-group">
    <!-- Mobile Number -->
    {!! Form::label('mobile_1', 'Mobile 1', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('mobile_1', null, ["class" => "form-control border-form input-mask-mobile", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'mobile_1'])
    </div>

    <!-- Email -->
    {!! Form::label('email', 'E-mail', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::text('email', null, ["class" => "form-control border-form", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'email'])
    </div>
</div>

<div class="form-group">
    <!-- Password -->
    {!! Form::label('password', 'Password', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::password('password', ["class" => "form-control border-form", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'password'])
    </div>

    <!-- Confirm Password -->
    {!! Form::label('confirmPassword', 'Confirm Password', ['class' => 'col-sm-2 control-label']) !!}
    <div class="col-sm-4">
        {!! Form::password('confirmPassword', ["class" => "form-control border-form", "required"]) !!}
        @include('includes.form_fields_validation_message', ['name' => 'confirmPassword'])
    </div>
</div>

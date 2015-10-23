<div class="form-group @if($errors->has('name')) has-error @endif">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group @if($errors->has('comment')) has-error @endif">
    {{ Form::label('comment', 'Comment') }}
    {{ Form::textarea('comment', null, ['class' => 'form-control']) }}
</div>

<div class="form-group @if($errors->has('gender')) has-error @endif">
    {{ Form::label('gender', 'Gender') }}
    {{ Form::select('gender',['male' => 'Male', 'female' => 'Female'] ,['class' => 'form-control']) }}
</div>

<div class="form-group @if($errors->has('img_url')) has-error @endif">
    {{ Form::label('img_url', 'Image') }}
    {{ Form::file('img_url') }}
</div>

<div class="form-group @if($errors->has('banner')) has-error @endif">
    {{ Form::label('banner', 'Banner') }}
    {{ Form::select('banner',['0' => 'No', '1' => 'Yes'] ,['class' => 'form-control']) }}
</div>

<div class="form-group @if($errors->has('retired')) has-error @endif">
    {{ Form::label('retired', 'Retired') }}
    {{ Form::select('retired',['0' => 'No', '1' => 'Yes'] ,['class' => 'form-control']) }}
</div>

<button class="btn btn-primary btn-block">Submit</button>

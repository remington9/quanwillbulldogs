
<div class="form-group @if($errors->has('name')) has-error @endif">
    {{ Form::label('name', '*Name') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>

<div class="form-group @if($errors->has('comment')) has-error @endif">
    {{ Form::label('comment', 'Comment') }}
    {{ Form::textarea('comment', null, ['class' => 'form-control']) }}
</div>

<div class="form-group col-md-6 col-xs-12 @if($errors->has('banner')) has-error @endif">
    {{ Form::label('banner', 'Banner?') }}
    {{ Form::select('banner',['0'=>'select','0' => 'No', '1' => 'Yes'],null ,['class' => 'form-control']) }}
</div>

<div class="form-group col-md-6 col-xs-12 @if($errors->has('gender')) has-error @endif">
    {{ Form::label('gender', '*Gender') }}
    {{ Form::select('gender',[''=>'select','Male' => 'Male', 'Female' => 'Female'],null ,['class' => 'form-control']) }}
</div>

<div class="form-group col-md-6 @if($errors->has('img_url')) has-error @endif">
    {{ Form::label('img_url', '*Image') }}
    {{ Form::file('img_url' ,['class' => 'form-control']) }}
</div>

<div class="form-group col-md-6 col-xs-12 @if($errors->has('img_url2')) has-error @endif">
    {{ Form::label('img_url2', 'Image 2 (only for puppies)') }}
    {{ Form::file('img_url2' ,['class' => 'form-control']) }}
</div>

<div class="form-group col-md-6 col-xs-12 @if($errors->has('retired')) has-error @endif">
    {{ Form::label('retired', 'Retired?') }}
    {{ Form::select('retired',['0'=>'select','0' => 'No', '1' => 'Yes'],null ,['class' => 'form-control']) }}
</div>

<div class="form-group col-md-6 col-xs-12 @if($errors->has('puppy')) has-error @endif">
    {{ Form::label('puppy', 'Puppy?') }}
    {{ Form::select('puppy',['0'=>'select','0' => 'No', '1' => 'Yes'],null ,['class' => 'form-control']) }}
</div>

<div class="form-group col-md-6 col-xs-12 @if($errors->has('sold')) has-error @endif">
    {{ Form::label('sold', 'Sold? (for current puppies)') }}
    {{ Form::select('sold',['0'=>'select','0' => 'No', '1' => 'Yes'],null ,['class' => 'form-control']) }}
</div>

<div class="form-group col-md-6 col-xs-12 @if($errors->has('past')) has-error @endif">
    {{ Form::label('past', 'Past Puppy?') }}
    {{ Form::select('past',['0'=>'select','0' => 'No', '1' => 'Yes'],null ,['class' => 'form-control']) }}
</div>

<div class="form-group col-md-6 col-xs-12 @if($errors->has('fun')) has-error @endif">
    {{ Form::label('fun', 'Fun Dog Pic?') }}
    {{ Form::select('fun',['0'=>'select','0' => 'No', '1' => 'Yes'],null ,['class' => 'form-control']) }}
</div>

<div class="form-group col-md-6 col-xs-12 @if($errors->has('dad')) has-error @endif">
    {{ Form::label('dad', 'Dogs Dad') }}
    {{ Form::select('dad',$dads,null ,['class' => 'form-control']) }}
</div>

<div class="form-group col-md-6 col-xs-12 @if($errors->has('mom')) has-error @endif">
    {{ Form::label('mom', 'Dogs Mom') }}
    {{ Form::select('mom',$moms,null ,['class' => 'form-control']) }}
</div>

<button class="btn btn-primary btn-block">Submit</button>

@extends('layouts.app')

@section('content')
<h3>Contact</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium quae provident officiis sit repellendus ipsam, veniam voluptate quidem consequuntur possimus ipsa pariatur aperiam dolore ipsum, odio voluptas nobis nihil eius!</p>

{{ Form::open(array('url' => 'contact/submit')) }}
    <div class="form-group">
    {{Form::label('name', 'Name')}}
    {{Form::text('name', '', ['class'=> 'form-control', 'placeholder' => 'Enter Name'])}}
    </div>

    <div class="form-group">
    {{Form::label('email', 'E-mail Address')}}
    {{Form::text('email', '', ['class'=> 'form-control', 'placeholder' => 'Email Address'])}}
    </div>

    <div class="form-group">
    {{form::label('massage','Message')}}
    {{form::textarea('message','', ['class'=> 'form-control', 'placeholder' => 'Email Address'])}}
    </div>

    <div>
    {{form::submit('Submit',['class'=> 'btn btn-primary'])}}
    </div>
{{ Form::close() }}
@endsection
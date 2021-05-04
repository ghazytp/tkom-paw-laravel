@extends('layouts.app')

@section('content')
    <h1>Lets Talk</h1>

    {!! Form::open(['url' => 'contact/submit']) !!}

        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your name'])}}
        </div>

        <div class="form-group">
            {{Form::label('email', 'E-Mail')}}
            {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter email your address'])}}
        </div>

        <div class="form-group">
            {{Form::label('message', 'Message')}}
            {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter your message here'])}}
        </div>
        <div>
            {{Form::submit('Send', ['class' => 'btn btn-primary'])}}
        </div>

    {!! Form::close() !!}
@endsection
@extends('layouts.app')

@section('content')
<html>
<body>
  <hr> Form </hr>

  <form>
    {{ Form::open(['url' => '/send']) }}
    <div class='form-group'>
      {{ Form::label('email', 'To') }}
      {{ Form::text('email', '', ['class' => 'form-control']) }}
      {{ Form::label('subject', 'Subject') }}
      {{ Form::text('subject', '', ['class' => 'form-control']) }}
    </div>

    <div class='form-group'>
      {{ Form::label('content', 'Content') }}
      {{ Form::textarea('content', '', ['class' => 'form-control']) }}
    </div>

    <div class='form-group'>
      {{ Form::submit('Send', ['class' => 'btn btn-primary form-control']) }}
    </div>

    {{ Form::close() }}
  </form>
</body>
</html>
@endsection

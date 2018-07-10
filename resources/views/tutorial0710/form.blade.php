<html>
    <body>
        {{ Form::open(['route' => 'tutorial0710.processform']) }}
            {{ Form::label('name', 'Name: ') }}
            {{ Form::text('name') }}

            {{ Form::label('email', 'E-mail:') }}
            {{ Form::text('email') }}

            {{ Form::submit() }}
        {{ Form::close() }}
    </body>
</html>

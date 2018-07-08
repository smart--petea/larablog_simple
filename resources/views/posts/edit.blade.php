@extends('main')

@section('title', '| Edit Blog Post')

@section('content')
    <div class="row"> <!-- row form -->
        {{ Form::model($post, ['route' => ['post.update', $post->id]]) }}
        <div class="col-md-8">
            {{ Form::label('title', 'Title:', ["class" => "font-weight-bold"]) }}
            {{ Form::text('title', null, ["class" => "form-control input-lg"]) }}

            {{ Form::label('body', 'Body:', ["class" => "font-weight-bold form-spacing-top"]) }}
            {{ Form::textarea('body', null, ["class" => "form-control input-lg"]) }}
            <p class="lead">{{ $post->body }}</p>
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created At:</dt>
                    <dd>{{ date('M j, Y H:ia', strtotime($post->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated At:</dt>
                    <dd>{{ date('M j, Y H:ia', strtotime($post->updated_at)) }}</dd>
                </dl>

                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        {!! Html::linkRoute('post.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Html::linkRoute('post.update', 'Save Changes', array($post->id), array('class' => 'btn btn-success btn-block')) !!}
                    </div>
                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div> <!-- end of row form -->
@stop

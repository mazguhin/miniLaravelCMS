@extends ('templates.amy.layouts.app')

@section ('content')
<div class="panel panel-default">
  <div class="panel-heading">
    Comments Test
  </div>
  <div class="panel-body">
    <ul>
      @foreach($comments as $comment)
        @include ('templates.amy.modules.front.comment.renderComment', $comment)
      @endforeach
    </ul>
  </div>
</div>
@stop

@extends ('templates.amy.layouts.app')

@section ('content')
<div class="panel panel-default">
  <div class="panel-heading">
    {{ $page->title }}
  </div>
  <div class="panel-body">
    {{ $page->content }}
  </div>
</div>
@stop

@extends ('templates.nova.layouts.app')

@section ('content')
<div class="panel panel-danger">
  <div class="panel-heading">
    {{ $page->title }}
  </div>
  <div class="panel-body">
    {{ $page->content }}
  </div>
</div>
@stop

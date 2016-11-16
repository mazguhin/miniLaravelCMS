<li>{{ $comment->title }}
@if($comment->replies->count())
    <ul>
    @foreach($comment->replies as $comment)
      @include ('templates.amy.modules.front.comment.renderComment', $comment)
    @endforeach
    </ul>
@endif
</li>

<li class="medis @if (!$loop->last) border-bottom @endif">
  <div class="media-left">
    <a href="{{ route('users.show', $notification->data['user_id']) }}">
      <img class="media-object img-thumbnail mr-3" alt="{{ $notification->data['user_name'] }}" src="{{ $notification->data['user_avatar'] }}">
    </a>
  </div>

  <div class="media-body">
    <div class="media-heading mt-0 mb-1 text-secondary">
      <a href="{{ route('users.show', $notification->data['user_id']) }}">{{ $notification->data['user_name'] }}</a>
      评论了
      <a href="{{ $notification->data['topic_link'] }}">{{ $notification->data['topic_title'] }}</a>

      {{-- 回复删除按钮 --}}
      <span class="meta float-right" title="{{ $notification }}">
        <i class="far fa-clock"></i>
        {{ $notification->created_at->diffForHumans() }}
      </span>
    </div>
    <div class="reply-content">
      {!! $notification->data['reply_content'] !!}
    </div>
  </div>
</li>

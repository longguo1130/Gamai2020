<?php
/**
 * This is used in full chat page
 */
?>
<ul class="full-chat-area">
    @forelse($messages as $message)
        <li class="{{ $message->from_user == \Auth::user()->id ? 'sent' : 'replies'}}"> {{-- or replies --}}
            {{--<img src="http://emilcarlsson.se/assets/mikeross.png" alt=""/>--}}
            <p>{{$message->content}}</p>
        </li>
    @empty
        <li>There is no history</li>
    @endforelse
</ul>

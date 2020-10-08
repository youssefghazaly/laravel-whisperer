@include('body-tweets')

<div>
    @forelse($tweets as $tweet)

    @include('/tweets.index')
    @empty
    <p class="p-4">No whispers yet</p>
    @endforelse
</div>
</div>
<div class="col-start-4 pt-3 pl-3 self-start bg-red-200 rounded">
    @include('sidebar-friends')
</div>
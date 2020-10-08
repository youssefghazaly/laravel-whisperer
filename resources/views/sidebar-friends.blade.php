<h1 class="font-bold text-lg mb-3 "> Friends</h1>
<ul >
@forelse(auth()->user()->follows as $user)
<a href="{{route('profile',$user)}}">
<li class="mb-3 border-b border-b-grey ">
<div class="flex font-bold mb-1 text-sm pl-4 items-center">
<img 
src="{{asset($user->avatar )}}" class="rounded-full w-10 mr-2">{{$user->name}}
</div>
</li>
</a>
@empty
<p class="p-4">No friends yet</p>
@endforelse
</ul>
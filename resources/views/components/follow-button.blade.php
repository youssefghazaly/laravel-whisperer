@unless(auth()->user()->is($user))
<form method="POST" class="px-2 py-2 mr-10 bg-red-500  shadow rounded-full" action="show/{{$user->username}}">
@csrf
<button type="submit" >{{auth()->user()->following($user)?'unfollow':'follow me'}}</button>

</form>
@endunless
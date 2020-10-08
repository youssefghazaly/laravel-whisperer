@extends('components/master',['tweets'=>$tweets])
@section('content')
<div class="pl-10 relative pr-20">
    <img class="rounded-full h-40 w-40 absolute transform translate-x-1/2 translate-y-1/2 bottom-0 mr-2 " style="left:25%;" src="{{asset($user->avatar )}}" width="200" />

    <img class="pl-1 rounded-lg" src="{{url('images/hiih.png')}}" />

</div>
<div class=" flex pt-3 justify-between">

    <h3 class="flex-1 font-bold text-xl pl-10"></h3>
    <div class="flex w-60"></div>


    <div class="flex-1 flex ml-10 pl-20">

        @if(auth()->user()->is($user))
        
        <form action="{{route('edit',$user->username)}}" method="get">
            <button type="submit" class="px-2  py-2 shadow rounded-full">Edit profile</button>
        </form>
        @endif
        
    </div>
    <x-follow-button :user="$user" ></x-follow-button>
</div>
<div class="mr-10 pl-4 mb-2 pr-0 mt-10 border rounded">
    <p>Consectetur et distinctio sit aut. Eaque aliquam eaque fuga debitis velit consectetur quaerat.
        Commodi et qui temporibus sapiente voluptas minima. Voluptas hic culpa laboriosam.</p>
</div>
@endsection

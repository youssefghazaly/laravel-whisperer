<x-layoutmain>
  <div class="grid grid-cols-3">

   <div class=" pl-10 pt-4">
    @include('/sidebar-links')
  </div>
  <div class="pt-4">
    @foreach($users as $user)


    <a href="{{$user->path()}}">
      <div class="flex font-bold items-center ">
        <img class="mb-4 rounded-full" src="{{$user->avatar}}" width="60">
        <h2 class="ml-2 ">{{'@'.$user->username}}</h2>
      </div>
    </a>

    @endforeach
  </div>
  </div>

</x-layoutmain>
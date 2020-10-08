<x-layoutmain>
  <div class="grid grid-cols-3">
    <div class="pl-10 pt-4">
      @include('/sidebar-links')
    </div>

    <form method="post" action="{{route('update',$user)}}" enctype="multipart/form-data">
      @csrf
      @method('patch')


      <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="name">name</label>

        <input class="border border-grey-400 p-2 w-full" type="text" name="name" id="name" value="{{$user->name}}" reuired>
        @error('name')
        <p class="border border-grey-400 p-2 mt-2">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="username">username</label>

        <input class="border border-grey-400 p-2 w-full" type="text" name="username" id="username" value="{{$user->username}}" reuired>
        @error('username')
        <p class="border border-grey-400 p-2 mt-2">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="avatar">avatar</label>

        <input class="border border-grey-400 p-2 w-full" type="file" name="avatar" id="avatar" value="{{$user->avatar}}" reuired>

      </div>

      <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="email">email</label>

        <input class="border border-grey-400 p-2 w-full" type="email" name="email" id="email" value="{{$user->email}}" reuired>
        @error('email')
        <p class="border border-grey-400 p-2 mt-2">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password">password</label>

        <input class="border border-grey-400 p-2 w-full" type="password" name="password" id="password" reuired>
        @error('password')
        <p class="border border-grey-400 p-2 mt-2">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password_confirmation">password_confirmation</label>

        <input class="border border-grey-400 p-2 w-full" type="password" name="password_confirmation" id="password_confirmation" reuired>
        @error('password_confirmation')
        <p class="border border-grey-400 p-2 mt-2">{{$message}}</p>
        @enderror
      </div>

      <div class="nb-6">
        <button type="submit" class="bg-red-400 rounded py-2 px-2 text-white">submit</button>
        <div>
</div>        
</x-layoutmain>
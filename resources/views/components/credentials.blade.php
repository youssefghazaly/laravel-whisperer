<div class="pt-14" >

  <a href="{{ route('login') }}">
    <div class="mb-4 text-white h-16 w-2/3 content-center text-xl m-2 p-2  text-center  ml-10 hover:bg-red-500 bg-red-400 rounded-lg shadow">
      <p class="mt-2">{{ __('Login') }}</p>
    </div>
  </a>
  @if (Route::has('register'))
  <a href="{{ route('register') }}" class="pt-2">
    <div class=" text-white h-16 w-2/3 text-xl p-2 pt-2 text-center mr-64 ml-10 m-2 hover:bg-red-500 bg-red-400 rounded-lg shadow">
      <p class="mt-2"> {{ __('Register') }}
        <p>
    </div>
  </a>
  <h1 class="ml-40 text-4xl ">
   <div class="ml-8"> 
  Be  <span class="rotate text-4xl text-gray-600 font-Bold">Bold, Funny, Creative, Unique</span>
</div>
  <h1>
  @endif
</div>
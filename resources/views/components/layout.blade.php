<x-master>
<div class="lg:w-1/6  ">  @include('sidebar-links') </div>
          <div class="lg:flex-1"> 
@if(auth()->check())

                     
      @yield('content')

       <div class=" mt-4 mr-10 border border-grey-300 rounded-lg">
      @foreach($tweets as $tweet)
       @include('/tweets.index') 
       @endforeach   
      
     </div>

           </div>
          <section class="lg:w-1/5 pt-3 pl-3 self-start bg-red-200 rounded">  @include('sidebar-friends') </section>

@endif

<x-slot name="cred">

<div class="flex flex-col">
    @if(Route::has('login'))
        <div class="absolute top-2 right-2 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
               
                <a href="{{ route('logout') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Logout') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif
  

   
</div>
</x-slot>
</x-master>

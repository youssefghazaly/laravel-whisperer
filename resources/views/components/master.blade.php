<head>


   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'whisperer') }}</title>

   <!-- Scripts -->
   
   
  
   <!-- Fonts -->


   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   
   <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-text-rotator/1.0.0/simpletextrotator.min.css" rel="stylesheet">
</head>

<body class=" relative h-screen">


   <div class="pt-3">

      <section class="px-14">
         <header class="flex justify-between container mx-auto">
            <div class="relative mt-6 mb-4">
               <div class="w-10 text-center text-2xl h-10 font-bold rounded bg-red-500">W
               </div>

               <h1 class="absolute top-1 font-bold text-xl  left-10 ">hisperer</h1>
            </div>

            @if(auth()->check())
            <a href="{{ route('logout') }}" class=" text-white text-xl mt-5 pb-2 pt-1 pl-2 pr-2 mb-5 m-2 text-center ml-10 hover:bg-red-500 bg-red-400 rounded-lg shadow ">{{ __('Logout') }}</a>
            @endif
            
         </header>
      </section>

      @if(!auth()->check())

      
     









      <div class="grid h-screen bg-pagee h-24 grid-cols-2">
      
      
      @include('components/title')

     
      @include('components/credentials')
         </div>
       @endif
     

  
       @if(auth()->check())
     <div class="grid grid-cols-4 mt-10">
    <div class="pl-4 ">  @include('sidebar-links') </div>
    <div class="col-start-2 col-span-2"> 
     @yield('content')
       @include('/components.loggedinlayout')
     
   
       @endif

       
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/simple-text-rotator/1.0.0/jquery.simple-text-rotator.min.js"></script>
   <script type="text/javascript" >
  
  $(".rotate").textrotator({
  animation: "dissolve",
  separator: ",", 
  speed: 2000 
});


    </script>
        
       
     
</div>

</body>
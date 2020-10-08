<!doctype html>

<head>
  

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'whisperer') }}</title>

    <!-- Scripts -->
   

    <!-- Fonts -->
    

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="pt-3 ">
       
       <section class="px-14 ">
          <header class=" container mx-auto">
             <div class="relative mt-6 mb-4">
                <div class="w-10 text-center text-2xl h-10 font-bold rounded bg-red-500">W
                </div>

                <h1 class="absolute top-1 font-bold text-xl  left-10 ">hisperer</h1>
              </div>
            </header>
        </section>


       
       {{$slot}}
        

        <section class="" >
        
        
      
 
        </section>
        



    </div>
    
</body>
</html>




<div class="lg:w-1/6  ">  @include('sidebar-links') </div>
          <div class="lg:flex-1"> 
                     
       @include('body-tweets')

       <div class=" mt-4 mr-10 border border-grey-300 rounded-lg">
      @foreach($tweets as $tweet)
       @include('/tweets/index') 
       @endforeach   
      
     </div>

           </div>
          <div class="lg:w-1/5 pt-3 pb-3 pl-3 bg-red-200 rounded">  @include('sidebar-friends') </div>




<div class="border border-red-400 rounded-lg mr-10 px-6 py-4">
         <form method="post" action="tweetsc">
         @csrf
          <textarea class="w-full pb-0" name="body" placeholder="tell your secret"></textarea> 
          
          <hr class="ny-4">
          <footer class="flex justify-between mt-1">
          <img class="rounded-full w-14" src="{{asset(auth()->user()->avatar )}}">
          
          @error('body')
          <p class="text-red-600 r-30 text-sm" >
          {{$message}}
          </p>
          @enderror
          <button type="submit" class="bg-red-500 shadow py-2 px-2 text-white rounded-lg">Whisper</button>
          
          
          </footer>

          </form>
</div>




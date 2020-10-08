

  <x-layoutmain>  
  
  <section class="grid grid-cols-3 gap-4 justify-items-stretch " >
<div class="pt-4 pb-20 w-full col-start-2 flex justify-center" width="100">
    <div class=" justify-content-center border-gray-800 border rounded-lg px-4 py-2 bg-red-400 ">
        <div class="col-md-8">
            
                 <div class="text-white font-bold mb-4 ">{{ __('Login') }}</div>

               
            <form method="POST" action="{{ route('login') }}">
             @csrf

                <div class="mb-4">

                       <label class="block mb-2 uppercase font-bold text-xs text-white" for="email">
                       EMAIL
                       </label>
                       <input 
                       type="text" 
                       name="email" 
                       id="email" 
                       autocomplete="email" 
                       value="{{old('email')}}" 
                       required 
                       class="border border-white p-1 rounded w-full">
                       </input >
                       @error('email')
                                    <p class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                               
                </div>

                    <div class="mb-4">

                         <label class="block mb-2 uppercase font-bold text-xs text-white" for="password">
                            PASSWORD
                         </label>
                          <input 
                             type="password" 
                             name="password" 
                             id="password" 
                             autocomplete="current-password"
                             value="{{old('remember')}}" 
                             required 
                             class="border border-white p-1 rounded w-full">
                          </input >
                                         @error('password')
                                             <p class="text-xs text-white">
                                                 <strong>{{ $message }}</strong>
                                             </p>
                                         @enderror
                    </div>  
                    <div class="mb-4">

<div>
<input class="nr-1"
 type="checkbox"
  name="remember" 
  id="remember" 
  {{ old('remember') ? 'checked' : '' }}
  >

<label class ="text-xs text-white font-bold uppercase" for="remember">REMEMBER
</label>
</div>

  </div>

                  

                    <div class="mb-4">

                    <div class="flex">
                    <button class="nr-1 text-white mr-6 text-xs p-2 hover:bg-gray-700 bg-gray-600 rounded-lg shadow "  >
                       SUBMIT</button>
                    
                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    </div>

</div>



                      

                        
            </form>
                
           
        </div>
    </div>
</div>
</section>

</x-layoutmain>
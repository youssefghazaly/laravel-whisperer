
  <x-layoutmain>  
  <section class="grid grid-cols-4 gap-4 justify-items-stretch " >
  
<div class="pt-4 pl-36 pr-36 pb-20 w-full col-start-2 col-span-2 container flex justify-center" width="100">
    <div class=" justify-content-center  w-full px-4 border-gray-800 border rounded-lg  bg-red-400 ">
             
             
              <div class="col-md-8">
                   <div class="text-white font-bold mb-4 mt-4">{{ __('Register') }}</div>

               
            <form method="POST" action="{{ route('register') }}">
             @csrf

                       <div class="mb-4">

                       <label class="block mb-2 uppercase font-bold text-xs text-white" for="username">
                       USERNAME
                       </label>
                       <input 
                       
                       type="text" 
                       name="username" 
                       id="username" 
                       
                       value="{{old('username')}}" 
                       required 
                       class="border border-white p-1 rounded w-full mr-10 w-64">
                       </input >
                               
                       </div>

                       <div class="mb-4">
                        <label for="name" class="block mb-2 uppercase font-bold text-xs text-white">{{ __('Name') }}</label>
                        
                        <input id="name" type="text" class="border  mr-10 w-64 border-white p-1 rounded w-full @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">
                       </div>
                           
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
                        class="border border-white p-1 rounded  mr-10 w-64 w-full">
                        </input >
        
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
                             value="{{old('password')}}" 
                             required 
                             class="border border-white  mr-10 w-64 p-1 rounded w-full">
                          </input >
                                         @error('password')
                                             <p class="text-xs text-black">
                                                 <strong>{{ $message }}</strong>
                                             </p>
                                         @enderror
                    </div>  

                        <div class="mb-4">
                            <label for="password-confirm" class="block mb-2 uppercase font-bold text-xs text-white">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="border border-white p-1 rounded w-full" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        

                        <div class="mb-4">

                        <div class="flex">
                        <button class="nr-1 text-white justify-center mr-6 text-xs p-2 hover:bg-gray-700 bg-gray-600 rounded-lg shadow " type="checkbox" name="remember" id="remember" >
                           REGISTER</button>
                        
                        </div>
                       
            </form>
        </div>
    </div>
</div>
</section>
   
</x-layoutmain>


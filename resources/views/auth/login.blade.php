<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">

            {{-- Bootstrap - css --}}
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

            {{-- Login Css --}}
            <link href="{{ asset('css/login.css') }}" rel="stylesheet">
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">


            <title>XPert</title>
        </head>
        <body class="text-center">

          
        
            <main class="form-signin">
                <div id="login-container">
                  {{-- <x-jet-validation-errors /> --}}
         
          @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
                  <form class="needs-validation" method="POST" action="{{ route('login') }}" novalidate>
                    @csrf
                
                <img class="mb-4" src="{{ asset('img/logo.png') }}" alt="" height="50">
                
                <div class="form-floating">
                  {{-- <x-jet-label for="email" value="{{ __('Email') }}" /> --}}
                  
                  <input id="email" id="floatingInput" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                  <label for="email" value="{{ __('Email') }}">Email</label>
                  
              </div>
                {{-- <div class="form-floating">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div> --}}



                {{-- <div class="form-floating">
                  <x-jet-label for="password" value="{{ __('Password') }}" />
                  <x-jet-input id="password" id="floatingPassword" class="form-controls" type="password" name="password" required autocomplete="current-password" />
              </div> --}}
              <div class="form-floating">
                {{-- <x-jet-label for="password" value="{{ __('Password') }}" /> --}}
                <x-jet-input id="password" id="floatingPassword" class="form-control" type="password" name="password" required autocomplete="current-password" />
                <label for="password" value="{{ __('Password') }}">Password</label>
            </div>
                {{-- <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div> --}}
            

                
                <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                <button class="w-100 btn btn-lg btn-dark" href="{{ __('Log in') }}" type="submit">Log in</button>
                
                {{-- <x-jet-button class="ml-4">
                  {{ __('Log in') }}
              </x-jet-button> --}}
            
            {{-- Validations to login form --}}
              @error('email')
              <div class="text-red-500 mt-2 text-m pt-2">
                {{ $message }}
              </div>
            @enderror
            @error('password')
            <div class="text-red-500 mt-2 text-m">
              {{ $message }}
            </div>
          @enderror

              </form>
            </div> 
            <p class="mt-5 mb-3 text-muted">&copy; Alex Grant 2021 - All Rights Reserved</p>
            </main>
            {{-- <x-jet-button class="ml-4">
              <a href="{{ route('register') }}">Register</a>
          </x-jet-button> --}}
             
            

   
    
{{-- </x-guest-layout> --}}
        
            {{-- Bootstrap js --}}
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        </body>
        </html>

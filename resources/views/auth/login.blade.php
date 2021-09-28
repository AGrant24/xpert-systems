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


            <title>Document</title>
        </head>
        <body class="text-center">
            

            <main class="form-signin">
                <div id="login-container">
              <form>
                <img class="mb-4" src="{{ asset('img/logo.png') }}" alt="" height="50">
                
            
                <div class="form-floating">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                  <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                  <label for="floatingPassword">Password</label>
                </div>
            
                <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                <button class="w-100 btn btn-lg btn-dark" type="submit">Log in</button>
              </form>
            </div> 
            {{-- <p class="mt-5 mb-3 text-muted">&copy; Alex Grant 2021 - All Rights Reserved</p> --}}
            </main>
             
            

   
    {{-- </x-jet-authentication-card> --}}
{{-- </x-guest-layout> --}}
        
            {{-- Bootstrap js --}}
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        </body>
        </html>

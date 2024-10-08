<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
    <nav>
        <div class="navbar bg-white-100 rounded-2xl shadow-xm">
            <div class="flex-1">
                <a class="btn btn-ghost text-2xl font-bold">Meow Coffee</a>
            </div>
            <div class="flex-none">
                <ul class="menu menu-horizontal px-20">
                    <li>
                        <details>
                            <summary class="text-medium">User</summary>
                            <ul class="bg-base-200 rounded-t-none p-3 ">
                                <li class="w-20"><a href="{{ route('login.page') }}">Sign in</a></li>
                                <li class="w-20"><a href="{{ route('register') }}">Sign up</a></li>
                            </ul>
                        </details>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- ! LOGIN FORM --}}
    <form action="{{ route('register') }}" method="POST" >
      @csrf
    <div class="loginform">
        <div class="card lg:card-side bg-base-100 shadow-xl w-1/1 mx-auto" id="bigcard">
            <figure>
                <img src="{{ asset('img/imglogin.gif') }}" alt="Album" class="" id="loginimg"/>
            </figure>
            <div class="card-body">
                <h2 class="card-title font-bold">Welcome to Meow Coffee!</h2>
                <p class="text-sm " id="minitext2">Sign up to enjoy exclusive offers, customize your coffee,<br> and order ahead for pickup.</p>
                <div class="form">
                      <label class="input input-bordered flex items-center gap-2 mb-4">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 16 16"
                          fill="currentColor"
                          class="h-4 w-4 opacity-70">
                          <path
                            d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                          <path
                            d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                        </svg>
                        <input type="text" class="grow" placeholder="Email" name="Email" required/>
                      </label>
                      <label class="input input-bordered flex items-center gap-2 mb-4">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 16 16"
                          fill="currentColor"
                          class="h-4 w-4 opacity-70">
                          <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                        </svg>
                        <input type="text" class="grow" placeholder="Username" name="Username" required/>
                      </label>
                      <label class="input input-bordered flex items-center gap-2 mb-4">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 16 16"
                          fill="currentColor"
                          class="h-4 w-4 opacity-70">
                          <path
                            fill-rule="evenodd"
                            d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                            clip-rule="evenodd" />
                        </svg>
                        <input type="password" class="grow" placeholder="Password" name="password" required/>
                      </label>
                      <label class="input input-bordered flex items-center gap-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 16 16"
                          fill="currentColor"
                          class="h-4 w-4 opacity-70">
                          <path
                            fill-rule="evenodd"
                            d="M14 6a4 4 0 0 1-4.899 3.899l-1.955 1.955a.5.5 0 0 1-.353.146H5v1.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2.293a.5.5 0 0 1 .146-.353l3.955-3.955A4 4 0 1 1 14 6Zm-4-2a.75.75 0 0 0 0 1.5.5.5 0 0 1 .5.5.75.75 0 0 0 1.5 0 2 2 0 0 0-2-2Z"
                            clip-rule="evenodd" />
                        </svg>
                        <input type="password" class="grow" placeholder="Confirm Password" name="password_confirmation" required/>
                      </label>
                </div>  
                  <div class="card-actions justify-center flex flex-col" id="buttons">
                    <button class="btn btn-wide bg-green-300" id="registerbutton" type="submit">Sign up</button>
                </div>
                <div class="bottom-texts">
                    <h1>Already have an Account ? <a href="{{ route('login.page') }}" id="login">Sign in</a></h1>
                </div>
            </div>
        </div>
    </div>
  </form>
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
</body>
<script>

</script>
</html>

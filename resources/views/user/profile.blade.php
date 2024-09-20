<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/user/profile.css') }}">
    @vite('resources/css/app.css')
</head>

<body>
    <nav>
        <div class="navbar bg-white-400 rounded-2xl shadow-xm">
            <div class="flex-1">
                <a class="btn btn-ghost text-2xl font-bold text-black">Meow Coffee</a>
            </div>
            <div class="flex-none">
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                        <div class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="badge badge-sm indicator-item">8</span>
                        </div>
                    </div>
                    <div tabindex="0" class="card card-compact dropdown-content bg-base-100 z-[1] mt-3 w-52 shadow">
                        <div class="card-body">
                            <span class="text-lg font-bold">8 Items</span>
                            <span class="text-info">Subtotal: $999</span>
                            <div class="card-actions">
                                <button class="btn btn-primary btn-block">View cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img alt="Tailwind CSS Navbar component"
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>
                    <ul tabindex="0"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                        <li>
                            <form action="{{ route('user.profile') }}" method="POST" id="user-profile">@csrf</form>
                            <a href="#"
                                onclick="event.preventDefault(); document.getElementById('user-profile').submit();">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>
                        <li><a>Settings</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <li><a href="#"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="profile-container">
        <div class="avatar">
            <div class="ring-primary ring-offset-base-100  rounded-full ring ring-offset-2">
                <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
            </div>
        </div>
    </div>

    <div class="under-profile-container1">
        <div class="flex w-full">
            <div
                class="card bg-base-300 rounded-box grid h-14 w-[30%] flex-grow place-items-center ml-20 bg-neutral-100 text-black font-bold">
                Profile Information</div>
            <div class="divider divider-horizontal divider-default"></div>
            <div
                class="card bg-base-300 rounded-box grid h-14 w-[30%] flex-grow place-items-center  bg-neutral-100 text-black font-bold">
                Security Settings</div>
            <div class="divider divider-horizontal divider-default"></div>
            <div
                class="card bg-base-300 rounded-box grid h-14 w-[30%] flex-grow place-items-center mr-20  bg-neutral-100 text-black font-bold">
                Update Information</div>
        </div>
    </div>

    <div class="under-profile-container2">
        <div class="flex w-full flex-col lg:flex-row">
            <div class="card bg-base-300 rounded-box grid h-52 w-[30%] flex-grow place-items-center ml-20 bg-neutral-100 py-5"
                id="profile-card1">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif
                <form action="{{ route('update.userInformation') }}" method="post" id="update-user-form">
                    @csrf
                    @method('PUT')
                <label class="input input-bordered  input-secondary flex items-center gap-2 w-[100%] bg-neutral-100" id="profile-username">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                        class="h-4 w-4 opacity-70">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                    </svg>
                    @if(Auth::check())
                    <input type="text" class="grow" placeholder="Username" name="updateUsername" value="{{ Auth::user()->Username }}"/>
                    @endif
               
               
                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text font-bold">Profile Picture</span>
                    </div>
                    <input type="file" class="file-input file-input-secondary w-full max-w-xs bg-neutral-100" name="updateProfile"/>
                </label>


            </div>
            <div class="divider lg:divider-horizontal divider-default"></div>
            <div class="card bg-base-300 rounded-box grid h-52 w-[30%] flex-grow place-items-center bg-neutral-100 py-3"
                id="profile-card2">
                <label class="input input-secondary flex items-center gap-2 w-[60%] bg-neutral-100 ">
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
                    @if(Auth::check())
                    <input type="text" class="grow" placeholder="Email" name="updateEmail" value="{{ Auth::user()->Email }}"/>
                    @endif
                  </label>
                <label class="input input-secondary flex items-center gap-2 bg-neutral-100 w-[60%]">
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
                    @if(Auth::check())
                    <input type="password" class="grow" placeholder="Password" name="updatePassword" value="{{ Auth::user()->Password }}"/>
                    @endif
                  </label>
            </div>
            <div class="divider lg:divider-horizontal divider-default"></div>
            <div class="card bg-base-300 rounded-box grid h-52 w-[30%] flex-grow place-items-center mr-20 bg-neutral-100 py-10"
                id="profile-card3">
                {{-- <button class="btn btn-warning btn-wide">Apply</button> --}}
                <button class="btn btn-success btn-wide " type="submit">Save Changes</button></div>
                
        </div>
    </div>
</form>


</body>

</html>

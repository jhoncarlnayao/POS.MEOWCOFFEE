<!DOCTYPE html>
<html lang="en" theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav id="navbar">
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
                                <button class="btn btn-primary btn-block" id="view-cart1">View cart</button>
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
                        <li><a>
                                <div class="form-control">
                                    <label class="label cursor-pointer">
                                        <span class="label-text mr-3">Dark Mode</span>
                                        <input type="checkbox" class="toggle ml-7" checked="checked" />
                                    </label>
                                </div>
                            </a></li>
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
        </div>
    </nav>

    <div id="bigcard-container">
        <div class="bigcard">
            <img src="{{ url('img/bigcard2.gif') }}" alt="">
            <div class="bigcard-text">
                <h1 class="text-5xl font-bold">Welcome to Meow Coffee!</h1>
                <p class="py-6">
                    Take a break, grab a cup, and enjoy the cozy atmosphere with our special blends made just for you.
                </p>
                <div class="tooltip tooltip-right" data-tip="Start Your Day Now!">
                    <form action="{{ route('menupage') }}" method="POST">
                        @csrf
                        <button class="btn btn-neutral">Order Now</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="mini-information-container">
            <div class="stats stats-vertical shadow rounded-l-none bg-white text-black drop-shadow-2xl">
                <div class="stat cursor-pointer">
                    <div class="stat-title text-black">Total Coffees Ordered</div>
                    <div class="stat-value text-indigo-500">10</div>
                    <div class="stat-desc text-black">Cup of Coffee</div>
                </div>

                <div class="stat cursor-pointer">
                    <div class="stat-title text-black">Favorite Coffee</div>
                    <div class="stat-value text-indigo-500">Grind Coffee</div>
                    <div class="stat-desc text-black">meow meow</div>
                </div>

                <div class="stat cursor-pointer">
                    <div class="stat-title text-black">Total Amount Spend</div>
                    <div class="stat-value text-indigo-500">1,200</div>
                    <div class="stat-desc text-black">Meow Currency</div>
                </div>
            </div>
        </div>
        <div class="divider divider-horizontal divider-neutral" id="divider1"></div>
    </div>



    {{-- ! USER BUTTON AND BALANCE --}}
    <div id="userbuttons-container" class="mr-3">
        <div class="userbuttons">
            <div class="stats  bg-white text-black drop-shadow-2xl" id="card-balance">
                <div class="stat">
                    <div class="stat-title text-2xl text-black">Current Balance</div>
                    <div class="stat-value text-8xl text-indigo-500">89,400</div>
                    <div class="stat-desc text-black">Meow Currency</div>
                </div>
            </div>
        </div>
        <div id="user-buttons1">
            <button class="btn btn-active btn-confirm mb-3 mt-3 ">Deposit</button>
            <button class="btn btn-active btn-confirm">Withdraw</button>
        </div>
    </div>
    {{-- ! END --}}

    {{-- ! BUTTONS FOR GRAB A COFFEE, MEOW MERCHANDISE AND DAILY INSPIRATION --}}
    <div id="recommend-container">
        <form action="{{ route('menupage') }} " method="POST" id="menupage-button">@csrf
            <div id="recommend"
                class="drop-shadow-2xl mr-10 bg-gray-100 cursor-pointer transition-all  hover:scale-105 "
                onclick="event.PreventDefault(); document.getElementById('menupage-button')submit();">
                <div id="icon-box" class="bg-indigo-400 mr-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"
                        style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                        <path
                            d="M5 2h2v3H5zm4 0h2v3H9zm4 0h2v3h-2zm6 7h-2V7H3v11c0 1.654 1.346 3 3 3h8c1.654 0 3-1.346 3-3h2c1.103 0 2-.897 2-2v-5c0-1.103-.897-2-2-2zm-4 9a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V9h10v9zm2-2v-5h2l.002 5H17z">
                        </path>
                    </svg>
                </div>
                <div id="recommend-text" class="mb-1 ">
                    <div class="stat-title text-gray-500">Brew My Perfect Cup</div>
                    <div class="text-indigo-500 text-2xl stat-value">Grab a Coffee</div>
                </div>
            </div>
        </form>


        <div id="recommend2" class="drop-shadow-2xl mr-10 bg-gray-100 cursor-pointer transition-all hover:scale-105 ">
            <div id="icon-box" class="bg-indigo-400 mr-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"
                    style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                    <path
                        d="M22 5c0-1.654-1.346-3-3-3H5C3.346 2 2 3.346 2 5v2.831c0 1.053.382 2.01 1 2.746V19c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-8.424c.618-.735 1-1.692 1-2.746V5zm-2 0v2.831c0 1.14-.849 2.112-1.891 2.167L18 10c-1.103 0-2-.897-2-2V4h3c.552 0 1 .449 1 1zM10 4h4v4c0 1.103-.897 2-2 2s-2-.897-2-2V4zM4 5c0-.551.448-1 1-1h3v4c0 1.103-.897 2-2 2l-.109-.003C4.849 9.943 4 8.971 4 7.831V5zm6 14v-3h4v3h-4zm6 0v-3c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v3H5v-7.131c.254.067.517.111.787.125A3.988 3.988 0 0 0 9 10.643c.733.832 1.807 1.357 3 1.357s2.267-.525 3-1.357a3.988 3.988 0 0 0 3.213 1.351c.271-.014.533-.058.787-.125V19h-3z">
                    </path>
                </svg>
            </div>
            <div id="recommend-text" class="mb-1 ">
                <div class="stat-title text-gray-500 text-sm">Browse our exclusive Merch</div>
                <div class="text-indigo-500 text-2xl stat-value">Meow Merchandise</div>
            </div>
        </div>

        <div id="recommend3" class="drop-shadow-2xl  bg-gray-100 cursor-pointer transition-all hover:scale-105">
            <div id="icon-box" class="bg-indigo-400 mr-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24"
                    style="fill: rgb(255, 255, 255);transform: ;msFilter:;">
                    <path
                        d="M8.293 6.293 2.586 12l5.707 5.707 1.414-1.414L5.414 12l4.293-4.293zm7.414 11.414L21.414 12l-5.707-5.707-1.414 1.414L18.586 12l-4.293 4.293z">
                    </path>
                </svg>
            </div>
            <div id="recommend-text" class="mb-1 ">
                <div class="stat-title text-gray-500">Get inspired with Meow quote.</div>
                <div class="text-indigo-500 text-2xl stat-value">Daily Inspiration</div>
            </div>
        </div>
    </div>
    {{-- !END  --}}



    <div class="text-neutral-700 text-4xl stat-value" id="recommend-title">Recommended Meow Coffee's</div>
    {{-- !RECOMMENDED COFFEE'S  1 --}}
    <div id="recommendedCoffee-container" style="display: none;">
        <div id="recommendedCoffee">
            <div id="coffeebox1">
                {{-- ?COFFEE 1 --}}
                <div class="card card-compact bg-base-100 w-96 shadow-xl mr-11 drop-shadow-2xl bg-white">
                    <figure>
                        <img src="https://i.pinimg.com/564x/27/78/0f/27780fc651dff0eb419b06ecf93a3055.jpg"
                            alt="Shoes" />
                    </figure>
                    <div class="card-body text-black">
                        <h2 class="stat-value text-black">Coffee One</h2>
                        <p class="stat-desc text-black">If a dog chews shoes whose shoes does he choose?</p>
                        <div class="badge badge-secondary  badge-outline h-[38px]  mt-2"><img
                                src="{{ asset('img/dog-paw.png') }}" alt=""> &nbsp; 100 Meow Currency</div>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary w-[22rem] mt-5"
                                onclick="addToCart('Coffee1', 'If a dog chews shoes whose shoes does he choose?', 200)">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>

                {{-- ? COFFEE 2 --}}
                <div class="card card-compact bg-base-100 w-96 shadow-xl mr-11 drop-shadow-2xl bg-white">
                    <figure>
                        <img src="https://i.pinimg.com/564x/88/6c/0a/886c0afc6af89cf9302d715a21e69b1e.jpg"
                            alt="Shoes" />
                    </figure>
                    <div class="card-body text-black">
                        <h2 class="stat-value text-black">Coffee Two</h2>
                        <p class="stat-desc text-black">If a dog chews shoes whose shoes does he choose?</p>
                        <div class="badge badge-secondary  badge-outline h-[38px]  mt-2"><img
                                src="{{ asset('img/dog-paw.png') }}" alt=""> &nbsp; 200 Meow Currency</div>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary w-[22rem] mt-5 "
                                onclick="addToCart('Coffee2', 'If a dog chews shoes whose shoes does he choose?', 200)">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>

                {{-- ? COFFEE 3 --}}
                <div class="card card-compact bg-base-100 w-96 shadow-xl drop-shadow-2xl bg-white">
                    <figure>
                        <img src="https://i.pinimg.com/564x/3e/17/9c/3e179ccb4c3f0e0e1f59a02cad16fbb6.jpg"
                            alt="Coffee" />
                    </figure>
                    <div class="card-body text-black">
                        <h2 class="stat-value text-black">Coffee Three</h2>
                        <p class="stat-desc text-black">If a dog chews shoes whose shoes does he choose?</p>
                        <div class="badge badge-secondary  badge-outline h-[38px] mt-2"><img
                                src="{{ asset('img/dog-paw.png') }}" alt=""> &nbsp; 300 Meow Currency</div>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary  w-[22rem] mt-5"
                                onclick="addToCart('Coffee3', 'If a dog chews shoes whose shoes does he choose?', 300)">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- !RECOMMENDED COFFEE'S 2 --}}
    <div id="recommendedCoffee-container2">
        <div id="recommendedCoffee">
            <div id="coffeebox1">
                {{-- ?COFFEE 4 --}}
                <div class="card card-compact bg-base-100 w-96 shadow-xl mr-11 drop-shadow-2xl bg-white">
                    <figure>
                        <img src="https://i.pinimg.com/564x/7f/61/36/7f613636340edbf3abff2f562d4082cd.jpg"
                            alt="Shoes" />
                    </figure>
                    <div class="card-body text-black">
                        <h2 class="stat-value text-black">Coffee Four</h2>
                        <p class="stat-desc text-black">If a dog chews shoes whose shoes does he choose?</p>
                        <div class="badge badge-secondary  badge-outline h-[38px]  mt-2"><img
                                src="{{ asset('img/dog-paw.png') }}" alt=""> &nbsp; 100 Meow Currency</div>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary w-[22rem] mt-5"
                                onclick="addToCart('Coffee4', 'If a dog chews shoes whose shoes does he choose?', 200)">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>

                {{-- ? COFFEE 5 --}}
                <div class="card card-compact bg-base-100 w-96 shadow-xl mr-11 drop-shadow-2xl bg-white">
                    <figure>
                        <img src="https://i.pinimg.com/564x/6c/d7/9a/6cd79abd33db024e7cd4cd63b47907dc.jpg"
                            alt="Shoes" />
                    </figure>
                    <div class="card-body text-black">
                        <h2 class="stat-value text-black">Coffee Five</h2>
                        <p class="stat-desc text-black">If a dog chews shoes whose shoes does he choose?</p>
                        <div class="badge badge-secondary  badge-outline h-[38px]  mt-2"><img
                                src="{{ asset('img/dog-paw.png') }}" alt=""> &nbsp; 200 Meow Currency</div>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary w-[22rem] mt-5 "
                                onclick="addToCart('Coffee5', 'If a dog chews shoes whose shoes does he choose?', 200)">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>

                {{-- ? COFFEE 6 --}}
                <div class="card card-compact bg-base-100 w-96 shadow-xl drop-shadow-2xl bg-white">
                    <figure>
                        <img src="https://i.pinimg.com/564x/b8/54/db/b854db913204a206baf4cd5335b490d6.jpg"
                            alt="Coffee" />
                    </figure>
                    <div class="card-body text-black">
                        <h2 class="stat-value text-black">Coffee Six</h2>
                        <p class="stat-desc text-black">If a dog chews shoes whose shoes does he choose?</p>
                        <div class="badge badge-secondary  badge-outline h-[38px] mt-2"><img
                                src="{{ asset('img/dog-paw.png') }}" alt=""> &nbsp; 300 Meow Currency</div>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary  w-[22rem] mt-5"
                                onclick="addToCart('Coffee6', 'If a dog chews shoes whose shoes does he choose?', 300)">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- !VIEW CART --}}
    <div id="viewcart-display" style="display: none;">
        <div id="viewcart-container">
            <div id="viewcart">
                <div class="overflow-x-auto">
                    <table class="table">
                        <!-- head -->
                        <thead>
                            <tr>
                                <th>
                                    <label>
                                        <input type="checkbox" class="checkbox" />
                                    </label>
                                </th>
                                <th>Item</th>
                                <th>Description Item</th>
                                <th>Price</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- row 1 -->
                            <tr>
                                <th>
                                    <label>
                                        <input type="checkbox" class="checkbox" />
                                    </label>
                                </th>
                                <td>
                                    <div class="flex items-center gap-3">
                                        <div class="avatar">
                                            <div class="mask mask-squircle h-12 w-12">
                                                <img src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                                                    alt="Avatar Tailwind CSS Component" />
                                            </div>
                                        </div>
                                        <div>
                                            {{-- ! ITEM NAME --}}
                                            <div class="font-bold">Hart Hagerty</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    {{-- ! ITEM DESCRIPTION --}}
                                    Zemlak, Daniel and Leannon
                                    <br />
                                </td>
                                {{-- !ITEM PRICE --}}
                                <td>Purple</td>
                                <th>
                                    <button class="btn btn-ghost btn-xs">details</button>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



<div id="donation-container">
  <div id="donation">
    
  </div>
</div>


    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>

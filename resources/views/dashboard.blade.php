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
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="h-5 w-5"
                      fill="none"
                      viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span class="badge badge-sm indicator-item">8</span>
                  </div>
                </div>
                <div
                  tabindex="0"
                  class="card card-compact dropdown-content bg-base-100 z-[1] mt-3 w-52 shadow">
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
                    <img
                      alt="Tailwind CSS Navbar component"
                      src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                  </div>
                </div>
                <ul
                  tabindex="0"
                  class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                  <li>
                    <form action="{{ route('user.profile') }}" method="POST" id="user-profile">@csrf</form>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('user-profile').submit();">
                      Profile
                      <span class="badge">New</span>
                    </a>
                  </li>
                  <li><a><div class="form-control">
                    <label class="label cursor-pointer">
                      <span class="label-text mr-3">Dark Mode</span>
                      <input type="checkbox" class="toggle ml-7" checked="checked" />
                    </label>
                  </div></a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                
                </ul>
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
          <button class="btn btn-neutral">Order Now</button>
          </div>
        </div>
      </div>
      <div id="mini-information-container">
        <div class="stats stats-vertical shadow rounded-l-none bg-white text-black drop-shadow-2xl">
          <div class="stat cursor-pointer">
            <div class="stat-title text-black">Total Coffees Ordered</div>
            <div class="stat-value text-black">10</div>
            <div class="stat-desc text-black">Cup of Coffee</div>
          </div>
        
          <div class="stat cursor-pointer">
            <div class="stat-title text-black">Favorite Coffee</div>
            <div class="stat-value text-black">Grind Coffee</div>
            <div class="stat-desc text-black">meow meow</div>
          </div>
        
          <div class="stat cursor-pointer">
            <div class="stat-title text-black">Total Amount Spend</div>
            <div class="stat-value text-black">1,200</div>
            <div class="stat-desc text-black">Philippine Peso</div>
          </div>
        </div>
      </div>
      <div class="divider divider-horizontal divider-neutral" id="divider1"></div>
    </div>
    


    {{-- ! USER BUTTON AND BALANCE --}}
    <div id="userbuttons-container">
      <div class="userbuttons">
        <div class="stats  bg-white text-black drop-shadow-2xl" id="card-balance">
          <div class="stat">
            <div class="stat-title text-2xl text-black">Current Balance</div>
            <div class="stat-value text-8xl">89,400</div>
            <div class="stat-desc text-black">Philippine Peso</div>
          </div>
        </div>
      </div>
      <div id="user-buttons1">
        <button class="btn btn-active btn-confirm mb-3 mt-3 ">Deposit</button>
        <button class="btn btn-active btn-confirm">Withdraw</button>
      </div>
    </div>


    
</body>
</html>
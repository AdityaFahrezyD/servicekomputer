<nav>
    <div class="navbar bg-base-100 shadow-xl font-montserrat">
        <div class="navbar-start">
          <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden hover:bg-cyan-500 hover:text-white">
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
                  d="M4 6h16M4 12h8m-8 6h16" />
              </svg>
            </div>
            <ul
              tabindex="0"
              class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow-2xl">
                <li><a href="/" class="btn btn-ghost font-semibold text-base py-3 hover:bg-cyan-500 hover:text-white ">Home</a></li>
                <li><a href="/about" class="btn btn-ghost font-semibold text-base py-3 hover:bg-cyan-500 hover:text-white ">About</a></li>
                <li><a href="/service" class="btn btn-ghost font-semibold text-base py-3 hover:bg-cyan-500 hover:text-white ">Service</a></li>
                @if (Route::has('customer.login'))
                    @auth
                    <li><a class="btn btn-ghost font-semibold text-base py-3 hover:bg-cyan-500 hover:text-white ">Booking</a></li>
                    @endauth
                @endif
            </ul>
          </div>
          <a href="/" class="btn btn-ghost hover:bg-white text-lg font-bold">FATH <span class="text-cyan-500">COMP</span></a>
        </div>
        <div class="navbar-end mr-5">
            <div class=" hidden lg:flex mx-1">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="/" class="btn btn-ghost mx-1 font-semibold text-base hover:bg-cyan-500 hover:text-white">Home</a></li>
                    <li><a href="/about" class="btn btn-ghost mx-1 font-semibold text-base hover:bg-cyan-500 hover:text-white">About</a></li>
                    <li><a href="/service" class="btn btn-ghost mx-1 font-semibold text-base hover:bg-cyan-500 hover:text-white">Service</a></li>
                    @if (Route::has('customer.login'))
                        @auth
                        <li><a class="btn btn-ghost mx-1 font-semibold text-base hover:bg-cyan-500 hover:text-white">Booking</a></li>
                        @endauth
                    @endif
                </ul>
            </div>
            @if (Route::has('customer.login'))
                @auth
                {{-- <details>
                    <summary>
                        <button class="inline-flex items-center px-3 py-2">
                            <div class="w-10">
                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="42" height="42" class="fill-current text-cyan-500 hover:text-cyan-600 transition-colors duration-200 ease-in-out rounded-full"><path d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm-4,21.164v-.164c0-2.206,1.794-4,4-4s4,1.794,4,4v.164c-1.226.537-2.578.836-4,.836s-2.774-.299-4-.836Zm9.925-1.113c-.456-2.859-2.939-5.051-5.925-5.051s-5.468,2.192-5.925,5.051c-2.47-1.823-4.075-4.753-4.075-8.051C2,6.486,6.486,2,12,2s10,4.486,10,10c0,3.298-1.605,6.228-4.075,8.051Zm-5.925-15.051c-2.206,0-4,1.794-4,4s1.794,4,4,4,4-1.794,4-4-1.794-4-4-4Zm0,6c-1.103,0-2-.897-2-2s.897-2,2-2,2,.897,2,2-.897,2-2,2Z"/></svg>
                            </div>
                        </button>
                    </summary>
                    <ul class="p-2">
                        <li><a>Profile</a></li>
                        <li><a>Logout</a></li>
                    </ul>
                </details> --}}
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar hover:text-cyan-600 hover:bg-white">
                      <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 24 24" width="42" height="42" class="fill-current text-cyan-500 hover:text-cyan-600 transition-colors duration-200 ease-in-out rounded-full"><path d="m12,0C5.383,0,0,5.383,0,12s5.383,12,12,12,12-5.383,12-12S18.617,0,12,0Zm-4,21.164v-.164c0-2.206,1.794-4,4-4s4,1.794,4,4v.164c-1.226.537-2.578.836-4,.836s-2.774-.299-4-.836Zm9.925-1.113c-.456-2.859-2.939-5.051-5.925-5.051s-5.468,2.192-5.925,5.051c-2.47-1.823-4.075-4.753-4.075-8.051C2,6.486,6.486,2,12,2s10,4.486,10,10c0,3.298-1.605,6.228-4.075,8.051Zm-5.925-15.051c-2.206,0-4,1.794-4,4s1.794,4,4,4,4-1.794,4-4-1.794-4-4-4Zm0,6c-1.103,0-2-.897-2-2s.897-2,2-2,2,.897,2,2-.897,2-2,2Z"/></svg>
                      </div>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 lg:mt-5 w-40 p-2 shadow-2xl">
                        <li><a href="/" class="btn btn-ghost mx-1 font-semibold hover:bg-cyan-500 hover:text-white">Profil</a></li>
                        <li><a href="/" class="btn btn-ghost mx-1 font-semibold hover:bg-cyan-500 hover:text-white">Pesanan</a></li>
                        <li>
                            <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
    
                            <a href="#" class="btn btn-ghost mx-1 font-semibold text-red-500 hover:bg-red-500 hover:text-white" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                        </li>
                    </ul>
                  </div>
                @else
                    <a href="{{ route('customer.login') }}" class="btn text-base border-0 bg-cyan-500 hover:bg-blue-500 text-white">Login</a>
                @endauth
            @endif
        </div>
    </div>
</nav>
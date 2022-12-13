<div class="col-12 col-lg-2 col-xl-1 col-navbar d-block">
            
    <aside class="sidebar">
        <div class="d-flex flex-column justify-content-center align-items-center sidebar-top">

            <a href="">
                <img src="./logo/Ormanan.SVG" width="100px" alt="">
            </a>

        </div>


        <div class="sidebar-item-container d-flex flex-column justify-content-center align-items-center">

            <a href="HomeDashboard" class="sidebar-item" onclick="toggleActive(this)">
                <img src="./logo/Home.SVG" width="30px" alt="">
            </a>
            <a href="home" class="sidebar-item" onclick="toggleActive(this)">
                <img src="./logo/Buy.SVG" width="30px" alt="">
            </a>

            <a href="log" class="sidebar-item" onclick="toggleActive(this)">
                <img src="./logo/User.SVG" width="30px" alt="">
            </a>

            <a href="category" class="sidebar-item" onclick="toggleActive(this)">
                <img src="./logo/Category.SVG" width="30px" alt="">
            </a>

            


                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <svg width="24" height="24  " viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 17L21 12L16 7" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M21 12H9" stroke="black" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M9 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H9"
                                stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </x-responsive-nav-link>
                </form>
            </a>

        </div>

    </aside>

</div>
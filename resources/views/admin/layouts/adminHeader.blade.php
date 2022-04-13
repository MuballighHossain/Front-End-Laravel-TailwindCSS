<header>
    <!--Nav-->
    <nav aria-label="menu nav" class="fixed top-0 z-20 w-full h-auto px-1 pt-2 pb-1 mt-0 bg-gray-800 md:pt-1">

        <div class="flex flex-wrap items-center">
            <div class="flex justify-center flex-shrink text-white md:w-1/3 md:justify-start">
                <a href="#" aria-label="Home">
                    <span class="pl-2 text-xl"><i class="em em-grinning"></i></span>
                </a>
            </div>

            <div class="flex justify-center flex-1 px-2 text-white md:w-1/3 md:justify-start">
                <span class="relative w-full">
                    <input aria-label="search" type="search" id="search" placeholder="Search" class="w-full px-2 py-3 pl-10 leading-normal text-white transition bg-gray-900 border border-transparent rounded appearance-none focus:outline-none focus:border-gray-400">
                    <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                        <svg class="w-4 h-4 text-white pointer-events-none fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        </svg>
                    </div>
                </span>
            </div>

            <div class="flex content-center justify-between w-full pt-2 md:w-1/3 md:justify-end">
                <ul class="flex items-center justify-between flex-1 list-reset md:flex-none">
                    <li class="flex-1 md:flex-none md:mr-3">
                        <a class="inline-block px-4 py-2 text-white no-underline" href="#">Active</a>
                    </li>
                    <li class="flex-1 md:flex-none md:mr-3">
                        <a class="inline-block px-4 py-2 text-gray-400 no-underline hover:text-gray-200 hover:text-underline" href="#">link</a>
                    </li>
                    <li class="flex-1 md:flex-none md:mr-3">
                        <div class="relative inline-block">
                            <button onclick="toggleDD('myDropdown')" class="px-2 py-2 text-white drop-button"> <span class="pr-2"><i class="em em-robot_face"></i></span> Hi, User <svg class="inline h-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" /></svg></button>
                            <div id="myDropdown" class="absolute right-0 z-30 invisible p-3 mt-3 overflow-auto text-white bg-gray-800 dropdownlist">
                                <input type="text" class="p-2 text-gray-600 drop-search" placeholder="Search.." id="myInput" onkeyup="filterDD('myDropdown','myInput')">
                                <a href="#" class="block p-2 text-sm text-white no-underline hover:bg-gray-800 hover:no-underline"><i class="fa fa-user fa-fw"></i> Profile</a>
                                <a href="#" class="block p-2 text-sm text-white no-underline hover:bg-gray-800 hover:no-underline"><i class="fa fa-cog fa-fw"></i> Settings</a>
                                <div class="border border-gray-800"></div>
                                <a href="#" class="block p-2 text-sm text-white no-underline hover:bg-gray-800 hover:no-underline"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</header>

<nav id="sidebar" class="z-10 overflow-auto sidebar fixed h-full flex flex-col justify-between bg-[#fafbfc] ">
<!-- Hamburger Icon -->
    
    <div class="">
        <div class="cursor-pointer text-[#5c5c5c] pl-[28px] mt-[26px] text-[25px] border-b-[2px] border-[#e4dfdf] pb-[25px]">
            <i id="hamburger" class="hamburger-btn fas fa-bars"></i>
        </div>  
        <div class="px-[25px] mt-[10px]">
             
            <ul class="text-[#5c5c5c] sidebar-nav">
                <!-- Dashboard Icon -->
                <li class="sidebar-link-active mb-[10px]">
                    <div class="">
                        <span class=" whitespace-nowrap w-full text-[25px] flex justify-between fill-current">
                            <div class="transition duration-300 ease-in hover:text-[#576cdf]">
                                <a href="../dashboard/dashboard.php" aria-label="Dashboard">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <div class="hidden sidebar-item">
                                        <p class="inline text-[18px] font-medium ml-[10px]">Dashboard</p>
                                    </div>
                                </a>
                            </div>
                        </span>
                    </div>
                </li>
                <!-- Bibliotekari Icon -->
                <li class="ml-[4px] mb-[10px]">
                    <div>
                        <span class="whitespace-nowrap w-full text-[25px] flex justify-between text-[#5c5c5c] fill-current">
                            <div class="transition duration-300 ease-in hover:text-[#576cdf]">
                                <a href="#" aria-label="Bibliotekari">
                                    <i class="far fa-address-book"></i>
                                    <div class="hidden sidebar-item">
                                        <p class="inline text-[18px] font-medium ml-[12px]">Bibliotekari</p>
                                    </div>
                                </a>
                            </div>
                        </span>
                    </div>
                </li>
                <!-- Ucenici Icon -->
                <li class="mb-[10px]">
                    <div>
                        <span class="whitespace-nowrap w-full text-[25px] flex justify-between text-[#5c5c5c] fill-current">
                            <div class="transition duration-300 ease-in hover:text-[#576cdf]">
                                <a href="#" aria-label="Ucenici">
                                    <i class="fas fa-users"></i>
                                    <div class="hidden sidebar-item">
                                        <p class="inline text-[18px] font-medium ml-[8px]">Ucenici</p>
                                    </div>
                                </a>
                            </div>
                        </span>
                    </div>
                </li>
                <!-- Knjige Icon -->
                <li class=" ml-[4px] mb-[10px]">
                    <div>
                        <span class="whitespace-nowrap w-full text-[25px] flex justify-between text-[#5c5c5c] fill-current">
                            <div class="transition duration-300 ease-in hover:text-[#576cdf]">
                                <a href="#" aria-label="Knjige">
                                    <i class="far fa-copy"></i>
                                    <div class="hidden sidebar-item">
                                        <p class="inline text-[18px] font-medium ml-[12px]">Knjige</p>
                                    </div>
                                </a>
                            </div>
                        </span>
                    </div>
                </li>
                <!-- Expand menu example -->
                <li class=" mb-[10px]">
                    <div class="pl-[3px]">
                        <span class="whitespace-nowrap w-full text-[25px] pl-[3px] flex justify-between fill-current">
                            <div class="transition duration-300 ease-in hover:text-[#576cdf]">
                                <a href="#" aria-label="Dashboard">
                                    <i class="fas fa-plus"></i>
                                    <div class="hidden sidebar-item">
                                        <p class="inline text-[18px] font-medium ml-[10px]">Expand</p>
                                    </div>
                                </a>
                            </div>
                            <div id="item-collapse_1"
                                class="asideArrow hidden sidebar-item transition duration-300 ease-in hover:text-[#576cdf] cursor-pointer">
                                <i id="arrow-collapse_1" class="inline arrow fas fa-angle-down"></i>
                            </div>
                        </span>
                    </div>
                    <ul id="aside-item_1" class="aside-item text-[15px] font-medium ml-[45px] hidden">
                        <li class="mt-[5px]">
                            <a href="#" class="transition duration-300 ease-in hover:text-[#576cdf]">
                                Lorem ipsum
                            </a>
                        </li>
                        <li class="mt-[9px]">
                            <a href="#" class="transition duration-300 ease-in hover:text-[#576cdf]">
                                Lorem ipsum
                            </a>
                        </li>
                        <li class="mt-[9px]">
                            <a href="#" class="transition duration-300 ease-in hover:text-[#576cdf]">
                                Lorem ipsum
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="sidebar-nav py-[10px] border-t-[3px] border-white">
        <!-- Settings Icon -->
        <a href="#" aria-label="Settngs">
            <span
                class="whitespace-nowrap text-[25px] px-[15px]  text-black fill-current transition duration-300 ease-in hover:text-[#576cdf]">
                <i class="fas fa-cog"></i>
                <div class="hidden sidebar-item">
                    <p class="inline text-[15px] font-medium ml-[14px]">Settings</p>
                </div>
            </span>
        </a>
    </div>
</nav>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="content-language" content="en" />
    <meta name="description" content="ICT Cortex Library - project for high school students..." />
    <meta name="keywords" content="ict cortex, cortex, bild, bildstudio, highschool, students, coding" />
    <meta name="author" content="bildstudio" />
    <!-- End Meta -->

    <!-- Title -->
    <title>Profile | Library - ICT Cortex student project</title>
    <link rel="shortcut icon" href="img/library-favicon.ico" type="image/vnd.microsoft.icon" />
    <!-- End Title -->

    <!-- Styles -->
    <?php include('includes/layout/styles.php'); ?>
    <!-- End Styles -->
</head>

<body class="small:bg-gradient-to-r small:from-green-400 small:to-blue-500">
    <!-- Header -->
    <?php include('includes/layout/header.php'); ?>
    <!-- Header -->

    <!-- Main content -->
    <main class="flex flex-row small:hidden">
        <!-- Sidebar -->
        <?php include('includes/layout/sidebar.php'); ?>
        <!-- End Sidebar -->

        <!-- Content -->
        <section class="w-screen h-screen pl-[80px] py-4 text-gray-700">
            <!-- Heading of content -->
            <div class="heading mt-[14px]">
                <h1 class="pl-6 pb-[20px] text-[35px] text-[#5c5c5c] font-bold border-b-[2px] border-[#e4dfdf]">
                    Vracanje i iznajmljivanje knjiga
                </h1>
            </div>
            <!-- Space for content -->
            <div class="scroll height-dashboard">
                <div class="flex items-center justify-between px-6 py-4 space-x-3 rounded-lg">
                    <a href="novaKnjiga.php">
                        <button type="button" class="px-4 py-2 text-lg font-semibold tracking-wider text-white bg-blue-500 hover:bg-blue-600 focus:outline-none hover:outline-none w-[250px] border-2 border-black">Nova knjiga</button>
                    </a>
                    <div class="flex items-center">
                        <div class="relative text-gray-600 focus-within:text-gray-400">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                </button>
                            </span>
                            <input type="search" name="q" class="py-2 pl-10 text-sm text-white bg-white rounded-md focus:outline-none focus:bg-white focus:text-gray-900" placeholder="Search..." autocomplete="off">
                        </div>
                        <p class="inline cursor-pointer text-[20px] py-[10px] pl-[30px]">
                            <i class="fas fa-filter"></i>
                        </p>
                    </div>
                </div>
                <div class="overflow-auto ">
                    <!-- Space for content -->
                    <div class="flex justify-start pt-3 overflow-hidden bg-white">
                        <div class="mt-[10px]">
                            <ul class="text-[#5c5c5c]">
                                <li class="mb-[10px] bg-gray-300 py-2">
                                    <div class="w-[300px] pl-6">
                                        <span class=" whitespace-nowrap w-full text-[25px] flex justify-between fill-current">
                                            <div class="transition duration-300 ease-in hover:text-[#576cdf]">
                                                <a href="evidencija.php" aria-label="Sve knjige" class="flex items-center">
                                                    <i class="far fa-copy"></i>
                                                    <div>
                                                        <p class="text-[18px] font-medium ml-[18px]">Sve knjige</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </span>
                                    </div>
                                </li>
                                <li class="mb-[10px] py-2">
                                    <div class="w-[300px] pl-6">
                                        <span class=" whitespace-nowrap w-full text-[25px] flex justify-between fill-current">
                                            <div class="transition duration-300 ease-in hover:text-[#576cdf]">
                                                <a href="evidencijaIzdate.php" aria-label="Izdate knjige" class="flex items-center">
                                                    <i class="fas fa-file"></i>
                                                    <div>
                                                        <p class="text-[18px] font-medium ml-[20px]">Izdate knjige</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </span>
                                    </div>
                                </li>
                                <li class="mb-[10px] py-2">
                                    <div class="w-[300px] pl-6">
                                        <span class=" whitespace-nowrap w-full text-[25px] flex justify-between fill-current">
                                            <div class="transition duration-300 ease-in hover:text-[#576cdf]">
                                                <a href="evidencijaRaspolaganje.php" aria-label="Knjige na raspolaganju" class="flex items-center">
                                                    <i class="far fa-file"></i>
                                                    <div>
                                                        <p class="text-[18px] font-medium ml-[20px]">Knjige na raspolaganju</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </span>
                                    </div>
                                </li>
                                <li class="mb-[10px] py-2">
                                    <div class="w-[300px] pl-6">
                                        <span class=" whitespace-nowrap w-full text-[25px] flex justify-between fill-current">
                                            <div class="transition duration-300 ease-in hover:text-[#576cdf]">
                                                <a href="evidencijaRezervacije.php" aria-label="Rezervacije" class="flex items-center">
                                                    <i class="far fa-check-square"></i>
                                                    <div>
                                                        <p class="text-[18px] font-medium ml-[18px]">Rezervacije</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div> 

                        <div class="w-full mt-[10px] ml-2 px-2">
                            <table class="w-full border-2 border-gray-300" id="myTable">
                                <thead>
                                    <tr class="border-b-2 border-gray-300">
                                        <th class="px-4 py-3 leading-4 tracking-wider text-left text-blue-500">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox">
                                            </label>
                                        </th>
                                        <th class="flex items-center px-4 py-3 leading-4 tracking-wider text-left">Naziv knjige<a href="#"><i class="ml-2 fa-lg fas fa-long-arrow-alt-down" onclick="sortTable()"></i></a></th>
                                        <th class="px-4 py-3 text-sm leading-4 tracking-wider text-left">Autor</th>
                                        <th class="px-4 py-3 text-sm leading-4 tracking-wider text-left">Kategorija</th>
                                        <th class="px-4 py-3 text-sm leading-4 tracking-wider text-left">Status</th>
                                        <th class="px-4 py-3"> </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    <tr class="border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 h-11" src="img/tomsojer.jpg" alt=""/>
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="ml-2 font-semibold text-center">Geografija Crne Gore</span>
                                            </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Maksimovic Darinka, Dercanin...</td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Udzbenici</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                            <span aria-hidden class="absolute inset-0 bg-yellow-600"></span>
                                            <span class="relative text-xs text-white">Na raspolaganju</span>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300" id="dropdownBookRow1">
                                            <i class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                        </p>
                                        <div class="hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-book-row1">
                                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                                <div class="py-1">
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Pogledaj detalje</span>
                                                </a>

                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="far fa-hand-scissors mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Izdaj knjigu</span>
                                                </a>

                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="fas fa-redo-alt mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Vrati knjigu</span>
                                                </a>

                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Izbrisi knjigu</span>
                                                </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </td>
                                    </tr>
                                    <tr class="border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 h-11" src="img/tomsojer.jpg" alt=""/>
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="ml-2 font-semibold text-center">Muzicka kultura I Razred Gi...</span>
                                            </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Bubalo Zivkovic, Milka Barjaktarevi...</td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Udzbenici</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                            <span aria-hidden class="absolute inset-0 bg-yellow-600"></span>
                                            <span class="relative text-xs text-white">Na raspolaganju</span>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300" id="dropdownBookRow2">
                                            <i class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                        </p>
                                        <div class="hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-book-row2">
                                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                                <div class="py-1">
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Pogledaj detalje</span>
                                                </a>

                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="far fa-hand-scissors mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Izdaj knjigu</span>
                                                </a>

                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="fas fa-redo-alt mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Vrati knjigu</span>
                                                </a>

                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Izbrisi knjigu</span>
                                                </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </td>
                                    </tr>
                                    <tr class="border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 h-11" src="img/tomsojer.jpg" alt=""/>
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="ml-2 font-semibold text-center">Tom Sojer</span>
                                            </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Mark Twain</td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Romani</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                            <span aria-hidden class="absolute inset-0 bg-blue-600"></span>
                                            <span class="relative text-xs text-white">Izdato</span>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300" id="dropdownBookRow3">
                                            <i class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                        </p>
                                        <div class="relative z-20 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-book-row3">
                                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                                <div class="py-1">
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Pogledaj detalje</span>
                                                </a>

                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="far fa-hand-scissors mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Izdaj knjigu</span>
                                                </a>

                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="fas fa-redo-alt mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Vrati knjigu</span>
                                                </a>

                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Izbrisi knjigu</span>
                                                </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </td>
                                    </tr>
                                    <tr class="border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 h-11" src="img/tomsojer.jpg" alt=""/>
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="ml-2 font-semibold text-center">Robinson Kruso</span>
                                            </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Daniel Defoe</td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Romani</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                            <span aria-hidden class="absolute inset-0 bg-blue-600"></span>
                                            <span class="relative text-xs text-white">Izdato</span>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300" id="dropdownBookRow4">
                                            <i class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                        </p>
                                        <div class="relative z-20 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-book-row4">
                                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                                <div class="py-1">
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Pogledaj detalje</span>
                                                </a>

                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="far fa-hand-scissors mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Izdaj knjigu</span>
                                                </a>

                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="fas fa-redo-alt mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Vrati knjigu</span>
                                                </a>

                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Izbrisi knjigu</span>
                                                </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="flex flex-row items-center justify-end mt-2">
                                <div>
                                    <p class="inline text-md">
                                        Rows per page:
                                    </p>
                                    <select
                                        class=" text-gray-700 bg-white rounded-md w-[46px] focus:outline-none focus:ring-primary-500 focus:border-primary-500 text-md"
                                        name="ucenici">
                                        <option value="">
                                            20
                                        </option>
                                        <option value="">
                                            Option1
                                        </option>
                                        <option value="">
                                            Option2
                                        </option>
                                        <option value="">
                                            Option3
                                        </option>
                                        <option value="">
                                            Option4
                                        </option>
                                    </select>
                                </div>

                                <div>
                                    <nav class="relative z-0 inline-flex">
                                        <div>
                                            <a href="#" class="relative inline-flex items-center px-4 py-2 -ml-px font-medium leading-5 transition duration-150 ease-in-out bg-white text-md focus:z-10 focus:outline-none">
                                                1 of 1
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#" class="relative inline-flex items-center px-2 py-2 font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white text-md rounded-l-md hover:text-gray-400 focus:z-10 focus:outline-none" aria-label="Previous" v-on:click.prevent="changePage(pagination.current_page - 1)">
                                                <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div v-if="pagination.current_page < pagination.last_page">
                                            <a href="#" class="relative inline-flex items-center px-2 py-2 -ml-px font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white text-md rounded-r-md hover:text-gray-400 focus:z-10 focus:outline-none" aria-label="Next">
                                                <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </nav>
                                </div>  
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- End Content -->
    </main>
    <!-- End Main content -->

    <!-- Notification for small devices -->
    <?php include('includes/layout/inProgress.php'); ?>


    <!-- Scripts -->
    <?php include('includes/layout/scripts.php'); ?>
    <!-- End Scripts -->

</body>

</html>
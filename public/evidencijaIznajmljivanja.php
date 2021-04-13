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
    <title>Osnovni detalji | Library - ICT Cortex student project</title>
    <link rel="shortcut icon" href="/img/library-favicon.ico" type="image/vnd.microsoft.icon" />
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
            <div class="heading">
                <div class="flex flex-row justify-between border-b-[2px] border-gray-300">
                    <div class="flex flex-row">
                        <div class="w-[80px] pl-[30px]">
                            <img src="img/tomsojer.jpg" alt="">
                        </div>
                        <div class="pl-[15px] pb-[10px] flex flex-col">
                            <div>
                                <h1 class=" text-[35px] font-bold">
                                    Tom Sojer
                                </h1>
                            </div>
                            <div>
                                <nav class="w-full rounded">
                                    <ol class="flex list-reset">
                                        <li>
                                            <a href="evidencija.php" class="font-medium text-blue-600 hover:text-blue-800">
                                                Evidencija knjiga
                                            </a>
                                        </li>
                                        <li>
                                            <span class="mx-2">/</span>
                                        </li>
                                        <li>
                                            <a href="../knjige/osnovniDetalji.php" class="font-medium text-blue-600 hover:text-blue-800">
                                                KNJIGA-467
                                            </a>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[15px] mr-[30px]">
                        <a href="izdajKnjigu.php" class="inline hover:text-blue-600">
                            <i class="far fa-hand-scissors mr-[3px]"></i>
                            Izdaj knjigu
                        </a>
                        <a href="vratiKnjigu.php" class="hover:text-blue-600 inline ml-[20px] pr-[10px]">
                            <i class="fas fa-redo-alt mr-[3px] "></i>
                            Vrati knjigu
                        </a>
                        <a href="rezervisiKnjigu.php" class="hover:text-blue-600 inline ml-[20px] pr-[10px]">
                            <i class="far fa-calendar-check mr-[3px] "></i>
                            Rezervisi knjigu
                        </a>
                        <p class="inline cursor-pointer text-[25px] py-[10px] pl-[30px] border-l-[2px] border-gray-300">
                            <i class="fas fa-ellipsis-v"></i>
                        </p>
                    </div>
                </div>

            </div>
            <div class="flex flex-row h-full overflow-auto">
                <div class="w-[80%]">
                    <div class="border-b-[2px] py-4 text-gray-500 border-gray-300 pl-[30px]">
                        <a href="knjigaOsnovniDetalji.php" class="inline hover:text-blue-800">
                            Osnovni detalji
                        </a>
                        <a href="knjigaSpecifikacija.php" class="inline ml-[70px] hover:text-blue-800 ">
                            Specifikacija
                        </a>
                        <a href="evidencijaIznajmljivanja.php" class="inline ml-[70px] active-book-nav hover:text-blue-800">
                            Evidencija iznajmljivanja
                        </a>
                        <a href="evidencijaKnjigaMultimedija.php" class="inline ml-[70px] hover:text-blue-800">
                            Multimedija
                        </a>
                    </div>
                        <!-- Space for content -->
                    <div class="px-[30px] mt-[20px]">
                        <table class="min-w-full border-2 border-gray-300">
                        <thead>
                            <tr class="border-b-2 border-gray-300">
                                <th class="px-4 py-3 leading-4 tracking-wider text-left text-blue-500">
                                    <label class="inline-flex items-center">
                                    <input type="checkbox" class="form-checkbox"></label>
                                </th>
                                <th class="px-4 py-3 text-sm leading-4 tracking-wider text-left">Datum akcije<a href="#"><i class="ml-3 fa-lg fas fa-long-arrow-alt-down"></i></a></th>
                                <th class="px-4 py-3 text-sm leading-4 tracking-wider text-left">Tip akcije</th>
                                <th class="px-4 py-3 text-sm leading-4 tracking-wider text-left">Bibliotekar</th>
                                <th class="px-4 py-3 text-sm leading-4 tracking-wider text-left">Ucenik</th>
                                <th class="px-4 py-3"> </th>
                                <th class="px-4 py-3"> </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                                <tr class="bg-gray-200 border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox"></label>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">21.02.2021</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                        <span aria-hidden class="absolute inset-0 bg-transparent border-2 border-yellow-400"></span>
                                        <span class="relative text-xs text-yellow-400">Rezervacija</span>
                                    </span>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Valentina Kascelan</td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Pero Perovic</td>
                                    <td class="px-4 py-2">
                                            <a href="#" class="hover:text-green-500 mr-[5px]">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="#" class="hover:text-red-500 ">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px]" id="dropdownRentalRecordRow1">
                                            <i class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                        </p>
                                        <div class="relative z-20 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-rental-record-row1">
                                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                                <div class="py-1">
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Pogledaj detalje</span>
                                                </a>
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Izbrisi zapis</span>
                                                </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </td>
                                </tr>
                                <tr class="bg-gray-200 border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox"></label>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">12.05.2020</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                        <span aria-hidden class="absolute inset-0 bg-transparent border-2 border-yellow-400"></span>
                                        <span class="relative text-xs text-yellow-400">Rezervacija</span>
                                    </span>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Valentina Kascelan</td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Nina Bulatovic</td>
                                    <td class="px-4 py-2">
                                            <a href="#" class="hover:text-green-500 mr-[5px]">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="#" class="hover:text-red-500 ">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </td>
                                    <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px]" id="dropdownRentalRecordRow2">
                                            <i class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                        </p>
                                        <div class="relative z-20 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-rental-record-row2">
                                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                                <div class="py-1">
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Pogledaj detalje</span>
                                                </a>
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Izbrisi zapis</span>
                                                </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </td>
                                </tr>
                                <tr class="border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox"></label>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">12.05.2020</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                        <span aria-hidden class="absolute inset-0 bg-blue-600"></span>
                                        <span class="relative text-xs text-white">Izdavanje knjige</span>
                                    </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">Valentina Kascelan</td>
                                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">Milos Milosevic</td>
                                    <td class="px-2 py-2"></td>
                                    <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px]" id="dropdownRentalRecordRow3">
                                            <i class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                        </p>
                                        <div class="relative z-20 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-rental-record-row3">
                                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                                <div class="py-1">
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Pogledaj detalje</span>
                                                </a>
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Izbrisi zapis</span>
                                                </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </td>
                                </tr>
                                <tr class="border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox"></label>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">25.05.2020</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                        <span aria-hidden class="absolute inset-0 bg-red-600"></span>
                                        <span class="relative text-xs text-white">Vracanje knjige</span>
                                    </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">Nina Bracovic</td>
                                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">Nenad Novovic</td>
                                    <td class="px-2 py-2"></td>
                                    <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px]" id="dropdownRentalRecordRow4">
                                            <i class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                        </p>
                                        <div class="relative z-20 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-rental-record-row4">
                                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                                <div class="py-1">
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Pogledaj detalje</span>
                                                </a>
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Izbrisi zapis</span>
                                                </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </td>
                                </tr>
                                <tr class="border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox"></label>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">12.05.2020</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                        <span aria-hidden class="absolute inset-0 bg-yellow-400"></span>
                                        <span class="relative text-xs text-white">Rezervisano</span>
                                    </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">Nina Bracovic</td>
                                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">Tarik Zaimovic</td>
                                    <td class="px-2 py-2"></td>
                                    <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px]" id="dropdownRentalRecordRow5">
                                            <i class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                        </p>
                                        <div class="relative z-20 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-rental-record-row5">
                                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                                <div class="py-1">
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Pogledaj detalje</span>
                                                </a>
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Izbrisi zapis</span>
                                                </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </td>
                                </tr>
                                <tr class="border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox"></label>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">12.05.2020</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                        <span aria-hidden class="absolute inset-0 bg-red-600"></span>
                                        <span class="relative text-xs text-white">Vracanje knjige</span>
                                    </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">Nina Bracovic</td>
                                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">Dejan Petkovic</td>
                                    <td class="px-2 py-2"></td>
                                    <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px]" id="dropdownRentalRecordRow6">
                                            <i class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                        </p>
                                        <div class="relative z-20 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-rental-record-row6">
                                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                                <div class="py-1">
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Pogledaj detalje</span>
                                                </a>
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Izbrisi zapis</span>
                                                </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </td>
                                </tr>
                                <tr class="border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox"></label>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">12.05.2020</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                        <span aria-hidden class="absolute inset-0 bg-red-600"></span>
                                        <span class="relative text-xs text-white">Odbijeno</span>
                                    </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">Valentina Kascelan</td>
                                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">Ivica Tartar</td>
                                    <td class="px-2 py-2"></td>
                                    <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px]" id="dropdownRentalRecordRow7">
                                            <i class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                        </p>
                                        <div class="relative z-20 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-rental-record-row7">
                                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                                <div class="py-1">
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Pogledaj detalje</span>
                                                </a>
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Izbrisi zapis</span>
                                                </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox"></label>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">12.05.2020</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <span class="relative inline-block px-3 py-1 font-semibold leading-tight text-green-900">
                                        <span aria-hidden class="absolute inset-0 bg-red-600"></span>
                                        <span class="relative text-xs text-white">Vracanje knjige</span>
                                    </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">Valentina Kascelan</td>
                                    <td class="px-6 py-4 text-sm leading-5 whitespace-no-wrap">Sanja Gardasevic</td>
                                    <td class="px-2 py-2"></td>
                                    <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px]" id="dropdownRentalRecordRow8">
                                            <i class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                        </p>
                                        <div class="relative z-20 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-rental-record-row8">
                                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                                <div class="py-1">
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Pogledaj detalje</span>
                                                </a>
                                                <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                                    <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                    <span class="px-4 py-0">Izbrisi zapis</span>
                                                </a>
                                                </div>
                                            </div>
                                        </div> 
                                    </td>
                                </tr>
                        </tbody>
                        </table>
    
                        <div class="flex flex-row items-center justify-end mt-2">
                        <div class="">
                            <p class="inline text-md">
                                Rows per page:
                            </p>
                            <select
                                class=" text-gray-700 bg-white rounded-md w-[46px] focus:outline-none focus:ring-primary-500 focus:border-primary-500 text-md"
                                name="ucenici">
                                <option value="">
                                    8
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
                                        1 of 35
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
                <div class="min-w-[20%] border-l-[2px] border-gray-300px ">
                    <div class="border-b-[2px] border-gray-300">
                        <div class="mx-[30px] mt-[20px] flex flex-row justify-between">
                            <div class="text-gray-500 ">
                                <p>Status:</p>
                                <p class="mt-[20px]">Datum izdavanja:</p>
                                <p class="mt-[20px]">Izdato korisniku:</p>
                                <p class="mt-[20px]">Knjiga zadrzana:</p>
                                <p class="mt-[20px]">Izdao bibliotekar:</p>
                            </div>
                            <div class="font-medium text-left pb-[30px]">
                                <span class="bg-blue-600 text-white text-center px-[15px] py-[5px]">Knjiga je
                                    izdata</span>
                                <p class="mt-[20px]">21.02.2021</p>
                                <a href="../ucenici/profile.php" class="block hover:text-blue-800 text-blue-500 mt-[20px]">Pero Perovic</a>
                                <p class="mt-[20px]">2 mjeseca i 3 dana</p>
                                <a href="../bibliotekari/profile.php" class="block hover:text-blue-800 text-blue-500 mt-[20px]">Valentina
                                    Kascelan</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[55px] mx-[30px]">
                        <div class="flex flex-col">
                            <div class="text-gray-500 ">
                                <p class="inline uppercase">
                                    Izdavanja knjige
                                </p>
                                <span>
                                    - 4 days ago
                                </span>
                            </div>
                            <div>
                                <p>
                                    <a href="../bibliotekari/profile.php" class="text-blue-500 hover:text-blue-800">
                                        Valentina K.
                                    </a>
                                    je izdala knjigu
                                    <a href="../ucenici/profile.php" class="text-blue-500 hover:text-blue-800">
                                        Peru Perovicu
                                    </a>
                                    dana
                                    <span class="font-bold">
                                        21.02.2021.
                                    </span>
                                </p>
                            </div>
                            <div>
                                <a href="../knjige/izdavanjeDetalji.php" class="text-blue-500 hover:text-blue-800">
                                    pogledaj detaljnije >>
                                </a>
                            </div>
                        </div>
                        <div class="mt-[55px] flex flex-col">
                            <div class="text-gray-500 ">
                                <p class="inline uppercase">
                                    Izdavanja knjige
                                </p>
                                <span>
                                    - 4 days ago
                                </span>
                            </div>
                            <div>
                                <p>
                                    <a href="../bibliotekari/profile.php" class="text-blue-500 hover:text-blue-800">
                                        Valentina K.
                                    </a>
                                    je izdala knjigu
                                    <a href="../ucenici/profile.php" class="text-blue-500 hover:text-blue-800">
                                        Peru Perovicu
                                    </a>
                                    dana
                                    <span class="font-bold">
                                        21.02.2021.
                                    </span>
                                </p>
                            </div>
                            <div>
                                <a href="../knjige/izdavanjeDetalji.php" class="text-blue-500 hover:text-blue-800">
                                    pogledaj detaljnije >>
                                </a>
                            </div>
                        </div>
                        <div class="mt-[55px] flex flex-col">
                            <div class="text-gray-500 ">
                                <p class="inline uppercase">
                                    Izdavanja knjige
                                </p>
                                <span>
                                    - 4 days ago
                                </span>
                            </div>
                            <div>
                                <p>
                                    <a href="../bibliotekari/profile.php" class="text-blue-500 hover:text-blue-800">
                                        Valentina K.
                                    </a>
                                    je izdala knjigu
                                    <a href="../ucenici/profile.php" class="text-blue-500 hover:text-blue-800">
                                        Peru Perovicu
                                    </a>
                                    dana
                                    <span class="font-bold">
                                        21.02.2021.
                                    </span>
                                </p>    
                            </div>
                            <div>
                                <a href="../knjige/izdavanjeDetalji.php" class="text-blue-500 hover:text-blue-800">
                                    pogledaj detaljnije >>
                                </a>
                            </div>
                        </div>
                        <div class="mt-[55px]">
                            <a href="#" class="text-blue-500 hover:text-blue-800">
                                <i class="fas fa-history"></i> Prikazi sve
                            </a>
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
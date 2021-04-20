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
            <div class="heading mt-[7px]">
                <h1 class="pl-[30px] pb-[21px] border-b-[1px] border-[#e4dfdf] ">
                    Knjige
                </h1>
            </div>
            <!-- Space for content -->
            <div class="scroll height-content">
                <div class="flex items-center justify-between px-[30px] py-4 space-x-3 rounded-lg">
                    <a href="novaKnjiga.php"
                        class="inline-flex items-center text-sm py-2.5 px-5 transition duration-300 ease-in rounded-[5px] tracking-wider text-white bg-[#3f51b5] rounded hover:bg-[#4558BE]">
                        <i class="fas fa-plus mr-[15px]"></i> Nova knjiga
                    </a>
                    <div class="flex items-center">
                        <div class="relative text-gray-600 focus-within:text-gray-400">
                            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                                <button type="submit" class="p-1 focus:outline-none focus:shadow-outline">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round"
                                        stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6">
                                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </button>
                            </span>
                            <input type="search" name="q"
                                class="py-2 pl-10 text-sm text-white bg-white rounded-md focus:outline-none focus:bg-white focus:text-gray-900"
                                placeholder="Search..." autocomplete="off">
                        </div>
                    </div>
                </div>
                    <!-- Space for content -->
                    <div class="px-[30px] pt-2 bg-white">
                        <div class="w-full mt-2">
                            <table class="w-full border-[1px] border-[#e4dfdf]" id="myTable">
                                <thead class="bg-[#EFF3F6]">
                                    <tr class="border-b-[1px] border-[#e4dfdf]">
                                        <th class="px-4 py-4 leading-4 tracking-wider text-left text-blue-500">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox">
                                            </label>
                                        </th>
                                        <th class="flex items-center px-4 py-4 leading-4 tracking-wider text-left">
                                            Naziv knjige
                                            <a href="#"><i class="ml-2 fa-lg fas fa-long-arrow-alt-down"
                                                    onclick="sortTable()"></i>
                                            </a>
                                        </th>
                                        <th class="px-4 py-4 text-sm leading-4 tracking-wider text-left">Autor<i class="ml-2 fas fa-filter"></i></th>
                                        <th class="px-4 py-4 text-sm leading-4 tracking-wider text-left">Kategorija<i class="ml-2 fas fa-filter"></i></th>
                                        <th class="px-4 py-4 text-sm leading-4 tracking-wider text-left">Na raspolaganju</th>
                                        <th class="px-4 py-4 text-sm leading-4 tracking-wider text-left">Rezervisano</th>
                                        <th class="px-4 py-4 text-sm leading-4 tracking-wider text-left">Izdato</th>
                                        <th class="px-4 py-4 text-sm leading-4 tracking-wider text-left">U prekoracenju</th>
                                        <th class="px-4 py-4 text-sm leading-4 tracking-wider text-left">Ukupna kolicina</th>
                                        <th class="px-4 py-4"> </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    <tr class="border-b-[1px] border-[#e4dfdf]">
                                        <td class="px-4 py-4 whitespace-no-wrap">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox">
                                            </label>
                                        </td>
                                        <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 mr-2 h-11" src="img/tomsojer.jpg" alt="" />
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="font-medium text-center">Geografija Crne Gore</span>
                                            </a>
                                        </td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Maksimovic Darinka,
                                            Dercanin...</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Udzbenici</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">6</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="aktivneRezervacije.php">5</a></td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="izdateKnjige.php">5</a></td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="knjigePrekoracenje.php">2</a></td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">11</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                            <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300"
                                                id="dropdownBookRow1">
                                                <i
                                                    class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                            </p>
                                            <div
                                                class="hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-book-row1">
                                                <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                                    aria-labelledby="headlessui-menu-button-1"
                                                    id="headlessui-menu-items-117" role="menu">
                                                    <div class="py-1">
                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Pogledaj detalje</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="far fa-hand-scissors mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Izdaj knjigu</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="fas fa-redo-alt mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Vrati knjigu</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Izbrisi knjigu</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b-[1px] border-[#e4dfdf]">
                                        <td class="px-4 py-4 whitespace-no-wrap">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox">
                                            </label>
                                        </td>
                                        <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 mr-2 h-11" src="img/tomsojer.jpg" alt="" />
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="font-medium text-center">Muzicka kultura I Razred
                                                    Gi...</span>
                                            </a>
                                        </td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Bubalo Zivkovic,
                                            Milka Barjaktarevi...</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Udzbenici</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">20</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="aktivneRezervacije.php">0</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="izdateKnjige.php">0</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="knjigePrekoracenje.php">0</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">20</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                            <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300"
                                                id="dropdownBookRow2">
                                                <i
                                                    class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                            </p>
                                            <div
                                                class="hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-book-row2">
                                                <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                                    aria-labelledby="headlessui-menu-button-1"
                                                    id="headlessui-menu-items-117" role="menu">
                                                    <div class="py-1">
                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Pogledaj detalje</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="far fa-hand-scissors mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Izdaj knjigu</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="fas fa-redo-alt mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Vrati knjigu</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Izbrisi knjigu</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b-[1px] border-[#e4dfdf]">
                                        <td class="px-4 py-4 whitespace-no-wrap">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox">
                                            </label>
                                        </td>
                                        <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 mr-2 h-11" src="img/tomsojer.jpg" alt="" />
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="font-medium text-center">Tom Sojer</span>
                                            </a>
                                        </td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Mark Twain</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Romani</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">3</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="aktivneRezervacije.php">2</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="izdateKnjige.php">7</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="knjigePrekoracenje.php">1</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">10</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                            <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300"
                                                id="dropdownBookRow3">
                                                <i
                                                    class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                            </p>
                                            <div
                                                class="relative z-20 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-book-row3">
                                                <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                                    aria-labelledby="headlessui-menu-button-1"
                                                    id="headlessui-menu-items-117" role="menu">
                                                    <div class="py-1">
                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Pogledaj detalje</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="far fa-hand-scissors mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Izdaj knjigu</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="fas fa-redo-alt mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Vrati knjigu</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Izbrisi knjigu</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b-[1px] border-[#e4dfdf]">
                                        <td class="px-4 py-4 whitespace-no-wrap">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox">
                                            </label>
                                        </td>
                                        <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 mr-2 h-11" src="img/tomsojer.jpg" alt="" />
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="font-medium text-center">Robinson Kruso</span>
                                            </a>
                                        </td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Daniel Defoe</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Romani</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">0</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="aktivneRezervacije.php">0</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="izdateKnjige.php">10</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="knjigePrekoracenje.php">2</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">10</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                            <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300"
                                                id="dropdownBookRow4">
                                                <i
                                                    class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                            </p>
                                            <div
                                                class="relative z-20 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-book-row4">
                                                <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                                    aria-labelledby="headlessui-menu-button-1"
                                                    id="headlessui-menu-items-117" role="menu">
                                                    <div class="py-1">
                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Pogledaj detalje</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="far fa-hand-scissors mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Izdaj knjigu</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="fas fa-redo-alt mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Vrati knjigu</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Izbrisi knjigu</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b-[1px] border-[#e4dfdf]">
                                        <td class="px-4 py-4 whitespace-no-wrap">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox">
                                            </label>
                                        </td>
                                        <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 mr-2 h-11" src="img/tomsojer.jpg" alt="" />
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="font-medium text-center">Geografija Crne Gore</span>
                                            </a>
                                        </td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Maksimovic Darinka,
                                            Dercanin...</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Udzbenici</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">6</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="aktivneRezervacije.php">5</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="izdateKnjige.php">5</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="knjigePrekoracenje.php">1</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">11</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                            <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300"
                                                id="dropdownBookRow1">
                                                <i
                                                    class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                            </p>
                                            <div
                                                class="hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-book-row1">
                                                <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                                    aria-labelledby="headlessui-menu-button-1"
                                                    id="headlessui-menu-items-117" role="menu">
                                                    <div class="py-1">
                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Pogledaj detalje</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="far fa-hand-scissors mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Izdaj knjigu</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="fas fa-redo-alt mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Vrati knjigu</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Izbrisi knjigu</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b-[1px] border-[#e4dfdf]">
                                        <td class="px-4 py-4 whitespace-no-wrap">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox">
                                            </label>
                                        </td>
                                        <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 mr-2 h-11" src="img/tomsojer.jpg" alt="" />
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="font-medium text-center">Muzicka kultura I Razred
                                                    Gi...</span>
                                            </a>
                                        </td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Bubalo Zivkovic,
                                            Milka Barjaktarevi...</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Udzbenici</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">20</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="aktivneRezervacije.php">0</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="izdateKnjige.php">0</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="knjigePrekoracenje.php">0</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">20</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                            <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300"
                                                id="dropdownBookRow2">
                                                <i
                                                    class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                            </p>
                                            <div
                                                class="hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-book-row2">
                                                <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                                    aria-labelledby="headlessui-menu-button-1"
                                                    id="headlessui-menu-items-117" role="menu">
                                                    <div class="py-1">
                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Pogledaj detalje</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="far fa-hand-scissors mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Izdaj knjigu</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="fas fa-redo-alt mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Vrati knjigu</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Izbrisi knjigu</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b-[1px] border-[#e4dfdf]">
                                        <td class="px-4 py-4 whitespace-no-wrap">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox">
                                            </label>
                                        </td>
                                        <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 mr-2 h-11" src="img/tomsojer.jpg" alt="" />
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="font-medium text-center">Tom Sojer</span>
                                            </a>
                                        </td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Mark Twain</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Romani</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">3</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="aktivneRezervacije.php">2</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="izdateKnjige.php">7</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="knjigePrekoracenje.php">2</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">10</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                            <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300"
                                                id="dropdownBookRow3">
                                                <i
                                                    class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                            </p>
                                            <div
                                                class="relative z-20 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-book-row3">
                                                <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                                    aria-labelledby="headlessui-menu-button-1"
                                                    id="headlessui-menu-items-117" role="menu">
                                                    <div class="py-1">
                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Pogledaj detalje</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="far fa-hand-scissors mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Izdaj knjigu</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="fas fa-redo-alt mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Vrati knjigu</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Izbrisi knjigu</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b-[1px] border-[#e4dfdf]">
                                        <td class="px-4 py-4 whitespace-no-wrap">
                                            <label class="inline-flex items-center">
                                                <input type="checkbox" class="form-checkbox">
                                            </label>
                                        </td>
                                        <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 mr-2 h-11" src="img/tomsojer.jpg" alt="" />
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="font-medium text-center">Robinson Kruso</span>
                                            </a>
                                        </td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Daniel Defoe</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Romani</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">0</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="aktivneRezervacije.php">0</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="izdateKnjige.php">10</td>
                                        <td class="px-4 py-4 text-sm leading-5 text-blue-800 whitespace-no-wrap"><a href="knjigePrekoracenje.php">1</td>
                                        <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">10</td>
                                        <td class="px-6 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                            <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300"
                                                id="dropdownBookRow4">
                                                <i
                                                    class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                                            </p>
                                            <div
                                                class="relative z-20 hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-book-row4">
                                                <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                                    aria-labelledby="headlessui-menu-button-1"
                                                    id="headlessui-menu-items-117" role="menu">
                                                    <div class="py-1">
                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="far fa-file mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Pogledaj detalje</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="far fa-hand-scissors mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Izdaj knjigu</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
                                                            <i class="fas fa-redo-alt mr-[10px] ml-[5px] py-1"></i>
                                                            <span class="px-4 py-0">Vrati knjigu</span>
                                                        </a>

                                                        <a href="javascript:void(0)" tabindex="0"
                                                            class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                                            role="menuitem">
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

                            <div class="flex flex-row items-center justify-end my-3">
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
                                            <a href="#"
                                                class="relative inline-flex items-center px-4 py-2 -ml-px font-medium leading-5 transition duration-150 ease-in-out bg-white text-md focus:z-10 focus:outline-none">
                                                1 of 1
                                            </a>
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="relative inline-flex items-center px-2 py-2 font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white text-md rounded-l-md hover:text-gray-400 focus:z-10 focus:outline-none"
                                                aria-label="Previous"
                                                v-on:click.prevent="changePage(pagination.current_page - 1)">
                                                <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div v-if="pagination.current_page < pagination.last_page">
                                            <a href="#"
                                                class="relative inline-flex items-center px-2 py-2 -ml-px font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white text-md rounded-r-md hover:text-gray-400 focus:z-10 focus:outline-none"
                                                aria-label="Next">
                                                <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </nav>
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
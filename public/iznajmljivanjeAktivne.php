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
        <section class="w-screen h-screen pl-[80px] pb-2 text-gray-700">
            <!-- Heading of content -->
            <div class="heading">
                <div class="flex flex-row justify-between border-b-[1px] border-[#e4dfdf]">
                    <div class="py-[10px] flex flex-row">
                        <div class="w-[77px] pl-[30px]">
                            <img src="img/tomsojer.jpg" alt="">
                        </div>
                        <div class="pl-[15px]  flex flex-col">
                            <div>
                                <h1>
                                    Tom Sojer
                                </h1>
                            </div>
                            <div>
                                <nav class="w-full rounded">
                                    <ol class="flex list-reset">
                                        <li>
                                            <a href="evidencija.php" class="text-[#2196f3] hover:text-blue-600">
                                                Evidencija knjiga
                                            </a>
                                        </li>
                                        <li>
                                            <span class="mx-2">/</span>
                                        </li>
                                        <li>
                                            <a href="knjigaOsnovniDetalji.php"
                                                class="text-[#2196f3] hover:text-blue-600">
                                                KNJIGA-467
                                            </a>
                                        </li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="pt-[24px] mr-[30px]">
                        <a href="otpisiKnjigu.php" class="inline hover:text-blue-600">
                            <i class="fas fa-level-up-alt mr-[3px]"></i>
                            Otpisi knjigu
                        </a>
                        <a href="izdajKnjigu.php" class="inline hover:text-blue-600 ml-[20px] pr-[10px]">
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
                        <p class="inline cursor-pointer text-[25px] py-[10px] pl-[30px] border-l-[1px] border-[#e4dfdf]"
                            id="dropdownBookDetail">
                            <i
                                class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                        </p>
                        <div
                            class="hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-book-detail">
                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-[#e4dfdf] divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                <div class="py-1">
                                    <a href="javascript:void(0)" tabindex="0"
                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                        role="menuitem">
                                        <i class="fas fa-edit mr-[6px] ml-[5px] py-1"></i>
                                        <span class="px-4 py-0">Izmijeni knjigu</span>
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
                    </div>
                </div>
            </div>
            <div class="flex flex-row h-full overflow-auto">
                <div class="w-[80%]">
                    <div class="border-b-[1px] border-[#e4dfdf] py-4  border-gray-300 pl-[30px]">
                        <a href="knjigaOsnovniDetalji.php" class="inline hover:text-blue-800">
                            Osnovni detalji
                        </a>
                        <a href="knjigaSpecifikacija.php" class="inline ml-[70px] hover:text-blue-800 ">
                            Specifikacija
                        </a>
                        <a href="evidencijaIznajmljivanja.php"
                            class="inline ml-[70px] active-book-nav hover:text-blue-800">
                            Evidencija iznajmljivanja
                        </a>
                        <a href="evidencijaKnjigaMultimedija.php" class="inline ml-[70px] hover:text-blue-800">
                            Multimedija
                        </a>
                    </div>
                    <div class="py-4 pl-[30px]">
                    <a href="IznajmljivanjeIzdate.php" class="inline hover:text-blue-600 pr-[10px]">
                            <i class="far fa-copy mr-[3px]"></i>
                            Izdate knjige
                        </a>
                        <a href="iznajmljivanjeVracene.php" class="inline hover:text-blue-600 ml-[20px] pr-[10px]">
                            <i class="fas fa-file mr-[3px]"></i>
                            Vracene knjige
                        </a>
                        <a href="iznajmljivanjePrekoracenje.php" class="inline hover:text-blue-600 ml-[20px] pr-[10px]">
                            <i class="fas fa-exclamation-triangle mr-[3px]"></i>
                            Knjige u prekoracenju
                        </a>
                        <a href="iznajmljivanjeAktivne.php" class="inline hover:text-blue-600 pr-[10px] ml-[20px] border-l-2 border-gray-200 bg-gray-200">
                            <i class="far fa-calendar-check ml-[30px] mr-[3px]"></i>
                            Aktivne rezervacije
                        </a>
                        <a href="iznajmljivanjeArhivirane.php" class="inline hover:text-blue-600 ml-[20px] pr-[10px]">
                            <i class="fas fa-calendar-alt mr-[3px] "></i>
                            Arhivirane rezervacije
                        </a>
                    </div>
                    <!-- Space for content -->
                    <div class="w-full mt-[10px] ml-2 px-4">
                    <table class="w-full border-[1px] border-[#e4dfdf] rezervacije" id="myTable">
                                <thead class="bg-[#EFF3F6]">
                                        <tr class="border-b-[1px] border-[#e4dfdf]">
                                            <th class="px-4 py-3 leading-4 tracking-wider text-left text-blue-500">
                                                <label class="inline-flex items-center">
                                                    <input type="checkbox" class="form-checkbox">
                                                </label>
                                            </th>
                                            <th class="px-4 py-3 text-sm leading-4 tracking-wider text-left">Datum rezervacije<i class="ml-2 fas fa-filter"></i></th>
                                            <th class="px-4 py-3 text-sm leading-4 tracking-wider text-left">Rezervacija istice<i class="ml-2 fas fa-filter"></i></th>
                                            <th class="px-4 py-3 text-sm leading-4 tracking-wider text-left">Rezervaciju podnio<i class="ml-2 fas fa-filter"></i></th>
                                            <th class="px-4 py-3 text-sm leading-4 tracking-wider text-left">Status<i class="ml-2 fas fa-filter"></i></th>
                                            <th class="px-4 py-3"> </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                        <tr class="bg-gray-200 border-b-[1px] border-[#e4dfdf] changeBg">
                                            <td class="px-4 py-3 whitespace-no-wrap">
                                                <label class="inline-flex items-center">
                                                    <input type="checkbox" class="form-checkbox">
                                                </label>
                                            </td>
                                            <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">31.04.2019</td>
                                            <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">10.05.2019</td>
                                            <td class="flex flex-row items-center px-4 py-3">
                                                <img class="object-cover w-8 h-8 rounded-full" src="img/profileStudent.jpg" alt=""/>
                                                <a href="ucenikProfile.php" class="ml-2 font-medium text-center">Pero Perovic</a>
                                            </td>
                                            <td class="px-4 py-3 changeStatus">
                                                <a href="#" class="hover:text-green-500 mr-[5px]">
                                                    <i class="fas fa-check reservedStatus"></i>
                                                </a>
                                                <a href="#" class="hover:text-red-500 ">
                                                    <i class="fas fa-times deniedStatus"></i>
                                                </a>
                                            </td>
                                            <td class="hidden px-4 py-3 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                                <div class="inline-block px-3 py-1 font-medium bg-yellow-200 rounded-[5px]">
                                                    <span class="text-xs text-yellow-700">Rezervisano</span>
                                                </div>
                                            </td>
                                            <td class="hidden px-4 py-3 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                                <div class="inline-block px-[6px] py-[2px] font-medium bg-red-200 rounded-[5px]">
                                                    <span class="text-xs text-red-800">Odbijeno</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm leading-5 text-right whitespace-no-wrap">
                                                <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-200 border-b-[1px] border-[#e4dfdf] changeBg">
                                            <td class="px-4 py-3 whitespace-no-wrap">
                                                <label class="inline-flex items-center">
                                                    <input type="checkbox" class="form-checkbox">
                                                </label>
                                            </td>
                                            <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">05.11.2020</td> 
                                            <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">25.11.2020</td>
                                            <td class="flex flex-row items-center px-4 py-3">
                                                <img class="object-cover w-8 h-8 rounded-full" src="img/profileStudent.jpg" alt=""/>
                                                <a href="ucenikProfile.php" class="ml-2 font-medium text-center">Pero Perovic</a>
                                            </td>
                                            <td class="px-4 py-3 changeStatus">
                                                <a href="#" class="hover:text-green-500 mr-[5px]">
                                                    <i class="fas fa-check reservedStatus"></i>
                                                </a>
                                                <a href="#" class="hover:text-red-500 ">
                                                    <i class="fas fa-times deniedStatus"></i>
                                                </a>
                                            </td>
                                            <td class="hidden px-4 py-3 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                                <div class="inline-block px-3 py-1 font-medium bg-yellow-200 rounded-[5px]">
                                                    <span class="text-xs text-yellow-700">Rezervisano</span>
                                                </div>
                                            </td>
                                            <td class="hidden px-4 py-3 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                                <div class="inline-block px-[6px] py-[2px] font-medium bg-red-200 rounded-[5px]">
                                                    <span class="text-xs text-red-800">Odbijeno</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm leading-5 text-right whitespace-no-wrap">
                                                <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-200 border-b-[1px] border-[#e4dfdf] changeBg">
                                            <td class="px-4 py-3 whitespace-no-wrap">
                                                <label class="inline-flex items-center">
                                                    <input type="checkbox" class="form-checkbox">
                                                </label>
                                            </td>
                                            <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">31.02.2021</td>
                                            <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">10.03.2021</td>
                                            <td class="flex flex-row items-center px-4 py-3">
                                                <img class="object-cover w-8 h-8 rounded-full" src="img/profileStudent.jpg" alt=""/>
                                                <a href="ucenikProfile.php" class="ml-2 font-medium text-center">Pero Perovic</a>
                                            </td>
                                            <td class="px-4 py-3 changeStatus">
                                                <a href="#" class="hover:text-green-500 mr-[5px]">
                                                    <i class="fas fa-check reservedStatus"></i>
                                                </a>
                                                <a href="#" class="hover:text-red-500 ">
                                                    <i class="fas fa-times deniedStatus"></i>
                                                </a>
                                            </td>
                                            <td class="hidden px-4 py-3 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                                <div class="inline-block px-3 py-1 font-medium bg-yellow-200 rounded-[5px]">
                                                    <span class="text-xs text-yellow-700">Rezervisano</span>
                                                </div>
                                            </td>
                                            <td class="hidden px-4 py-3 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                                <div class="inline-block px-[6px] py-[2px] font-medium bg-red-200 rounded-[5px]">
                                                    <span class="text-xs text-red-800">Odbijeno</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm leading-5 text-right whitespace-no-wrap">
                                                <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-[#e4dfdf]">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="bg-gray-200 border-b-[1px] border-[#e4dfdf] changeBg">
                                            <td class="px-4 py-3 whitespace-no-wrap">
                                                <label class="inline-flex items-center">
                                                    <input type="checkbox" class="form-checkbox">
                                                </label>
                                            </td>
                                            <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">31.04.2019</td>
                                            <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">10.05.2019</td>
                                            <td class="flex flex-row items-center px-4 py-3">
                                                <img class="object-cover w-8 h-8 rounded-full" src="img/profileStudent.jpg" alt=""/>
                                                <a href="ucenikProfile.php" class="ml-2 font-medium text-center">Pero Perovic</a>
                                            </td>
                                            <td class="px-4 py-3 changeStatus">
                                                <a href="#" class="hover:text-green-500 mr-[5px]">
                                                    <i class="fas fa-check reservedStatus"></i>
                                                </a>
                                                <a href="#" class="hover:text-red-500 ">
                                                    <i class="fas fa-times deniedStatus"></i>
                                                </a>
                                            </td>
                                            <td class="hidden px-4 py-3 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                                <div class="inline-block px-3 py-1 font-medium bg-yellow-200 rounded-[5px]">
                                                    <span class="text-xs text-yellow-700">Rezervisano</span>
                                                </div>
                                            </td>
                                            <td class="hidden px-4 py-3 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                                <div class="inline-block px-[6px] py-[2px] font-medium bg-red-200 rounded-[5px]">
                                                    <span class="text-xs text-red-800">Odbijeno</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm leading-5 text-right whitespace-no-wrap">
                                                <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="border-b-[1px] border-[#e4dfdf]">
                                            <td class="px-4 py-3 whitespace-no-wrap">
                                                <label class="inline-flex items-center">
                                                    <input type="checkbox" class="form-checkbox">
                                                </label>
                                            </td>
                                            <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">31.04.2019</td> 
                                            <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">10.05.2019</td>
                                            <td class="flex flex-row items-center px-4 py-3">
                                                <img class="object-cover w-8 h-8 rounded-full" src="img/profileStudent.jpg" alt=""/>
                                                <a href="ucenikProfile.php" class="ml-2 font-medium text-center">Pero Perovic</a>
                                            </td>
                                            <td class="px-4 py-3 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                                <div class="inline-block px-3 py-1 font-medium bg-yellow-200 rounded-[5px]">
                                                    <span class="text-xs text-yellow-700">Rezervisano</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm leading-5 text-right whitespace-no-wrap">
                                                <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="border-b-[1px] border-[#e4dfdf]">
                                            <td class="px-4 py-3 whitespace-no-wrap">
                                                <label class="inline-flex items-center">
                                                    <input type="checkbox" class="form-checkbox">
                                                </label>
                                            </td>
                                            <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">31.04.2019</td>
                                            <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">10.05.2019</td>
                                            <td class="flex flex-row items-center px-4 py-3">
                                                <img class="object-cover w-8 h-8 rounded-full" src="img/profileStudent.jpg" alt=""/>
                                                <a href="ucenikProfile.php" class="ml-2 font-medium text-center">Pero Perovic</a>
                                            </td>
                                            <td class="px-4 py-3 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                                <div class="inline-block px-3 py-1 font-medium bg-yellow-200 rounded-[5px]">
                                                    <span class="text-xs text-yellow-700">Rezervisano</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm leading-5 text-right whitespace-no-wrap">
                                                <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </p>
                                            </td>
                                        </tr>
                                        <tr class="border-b-[1px] border-[#e4dfdf]">
                                            <td class="px-4 py-3 whitespace-no-wrap">
                                                <label class="inline-flex items-center">
                                                    <input type="checkbox" class="form-checkbox">
                                                </label>
                                            </td>
                                            <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">31.04.2019</td>
                                            <td class="px-4 py-3 text-sm leading-5 whitespace-no-wrap">10.05.2019</td>
                                            <td class="flex flex-row items-center px-4 py-3">
                                                <img class="object-cover w-8 h-8 rounded-full" src="img/profileStudent.jpg" alt=""/>
                                                <a href="ucenikProfile.php" class="ml-2 font-medium text-center">Pero Perovic</a>
                                            </td>
                                            <td class="px-4 py-3 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                                <div class="inline-block px-[6px] py-[2px] font-medium bg-red-200 rounded-[5px]">
                                                    <span class="text-xs text-red-800">Odbijeno</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm leading-5 text-right whitespace-no-wrap">
                                                <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                            </table>

                            <div class="flex flex-row items-center justify-end my-2">
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
                <div class="min-w-[20%] border-l-[1px] border-[#e4dfdf] ">
                    <div class="border-b-[1px] border-[#e4dfdf]">
                        <div class="ml-[30px] mr-[70px] mt-[20px] flex flex-row justify-between">
                            <div class="text-gray-500 ">
                                <p>Na raspolaganju:</p>
                                <p class="mt-[20px]">Rezervisano:</p>
                                <p class="mt-[20px]">Izdato:</p>
                                <p class="mt-[20px]">U prekoracenju:</p>
                                <p class="mt-[20px]">Ukupna kolicina:</p>
                            </div>
                            <div class="text-center pb-[30px]">
                                <p class=" bg-green-200 text-green-700 rounded-[10px] px-[6px] py-[2px] text-[14px]">5
                                    primjeraka</p>
                                <a href="aktivneRezervacije.php">
                                    <p class=" mt-[16px] bg-yellow-200 text-yellow-700 rounded-[10px] px-[6px] py-[2px] text-[14px]">2 primjerka</p>
                                </a>
                                <a href="izdateKnjige.php">
                                    <p class=" mt-[16px] bg-blue-200 text-blue-800 rounded-[10px] px-[6px] py-[2px] text-[14px]">102 primjerka</p>
                                </a>
                                <a href="knjigePrekoracenje.php">
                                    <p class=" mt-[16px] bg-red-200 text-red-800 rounded-[10px] px-[6px] py-[2px] text-[14px]">2 primjerka</p>
                                </a>
                                <p
                                    class=" mt-[16px] border-[1px] border-green-700 text-green-700 rounded-[10px] px-[6px] py-[2px] text-[14px]">
                                    15 primjeraka</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[40px] mx-[30px]">
                        <div class="flex flex-col max-w-[304px]">
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
                                    <a href="bibliotekarProfile.php" class="text-[#2196f3] hover:text-blue-600">
                                        Valentina K.
                                    </a>
                                    je izdala knjigu
                                    <a href="ucenikProfile.php" class="text-[#2196f3] hover:text-blue-600">
                                        Peru Perovicu
                                    </a>
                                    dana
                                    <span class="font-medium">
                                        21.02.2021.
                                    </span>
                                </p>
                            </div>
                            <div>
                                <a href="izdavanjeDetalji.php" class="text-[#2196f3] hover:text-blue-600">
                                    pogledaj detaljnije >>
                                </a>
                            </div>
                        </div>
                        <div class="mt-[40px] flex flex-col max-w-[304px]">
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
                                    <a href="bibliotekarProfile.php" class="text-[#2196f3] hover:text-blue-600">
                                        Valentina K.
                                    </a>
                                    je izdala knjigu
                                    <a href="ucenikProfile.php" class="text-[#2196f3] hover:text-blue-600">
                                        Peru Perovicu
                                    </a>
                                    dana
                                    <span class="font-medium">
                                        21.02.2021.
                                    </span>
                                </p>
                            </div>
                            <div>
                                <a href="izdavanjeDetalji.php" class="text-[#2196f3] hover:text-blue-600">
                                    pogledaj detaljnije >>
                                </a>
                            </div>
                        </div>
                        <div class="mt-[40px] flex flex-col max-w-[304px]">
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
                                    <a href="bibliotekarProfile.php" class="text-[#2196f3] hover:text-blue-600">
                                        Valentina K.
                                    </a>
                                    je izdala knjigu
                                    <a href="ucenikProfile.php" class="text-[#2196f3] hover:text-blue-600">
                                        Peru Perovicu
                                    </a>
                                    dana
                                    <span class="font-medium">
                                        21.02.2021.
                                    </span>
                                </p>
                            </div>
                            <div>
                                <a href="izdavanjeDetalji.php" class="text-[#2196f3] hover:text-blue-600">
                                    pogledaj detaljnije >>
                                </a>
                            </div>
                        </div>
                        <div class="mt-[40px]">
                            <a href="dashboardAktivnost.php" class="text-[#2196f3] hover:text-blue-600">
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
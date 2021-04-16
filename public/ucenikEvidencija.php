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
        <section class="w-screen h-screen pl-[80px] pb-4 text-gray-700">
            <!-- Heading of content -->
            <div class="heading">
                <div class="flex flex-row justify-between border-b-[1px] border-[#e4dfdf]">
                    <div class="pl-[30px] py-[10px] flex flex-col">
                        <div>
                            <h1>
                                Pero Perovic
                            </h1>
                        </div>
                        <div>
                            <nav class="w-full rounded">
                                <ol class="flex list-reset">
                                    <li>
                                        <a href="ucenik.php" class="text-[#2196f3] hover:text-blue-600">
                                            Svi ucenici
                                        </a>
                                    </li>
                                    <li>
                                        <span class="mx-2">/</span>
                                    </li>
                                    <li>
                                        <a href="ucenikProfile.php" class="text-[#2196f3] hover:text-blue-600">
                                            ID-354
                                        </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pt-[24px] pr-[30px]">
                        <a href="#" class="inline hover:text-blue-600">
                            <i class="fas fa-redo-alt mr-[3px]"></i>
                            Resetuj sifru
                        </a>
                        <a href="#" class="hover:text-blue-600 inline ml-[20px] pr-[10px]">
                            <i class="fas fa-edit mr-[3px] "></i>
                            Izmjeni podatke
                        </a>
                        <p class="inline cursor-pointer text-[25px] py-[10px] pl-[30px] border-l-[1px] border-gray-300" id="dropdownStudent">
                            <i class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                        </p>
                        <div class="hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-student">
                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                <div class="py-1">
                                    <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                        <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                        <span class="px-4 py-0">Izbrisi korisnika</span>
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="border-b-[1px] py-4 text-gray-500 border-[#e4dfdf] pl-[30px]">
                <a href="ucenikProfile.php" class="inline hover:text-blue-800">
                    Osnovni detalji
                </a>
                <a href="ucenikEvidencija.php" class="inline ml-[70px] active-book-nav">
                    Evidencija iznajmljivanja
                </a>
            </div>
             <!-- Space for content -->
            <div class="height-ucenikEvidencija scroll">
                <div class="inline-block min-w-full px-[30px] pt-3 mt-10 align-middle bg-white rounded-bl-lg rounded-br-lg shadow-dashboard">
                    <table class="min-w-full border-[1px] border-[#e4dfdf] sortTableDate">
                        <thead class="bg-[#EFF3F6]">
                            <tr class="border-b-[2px] border-[#e4dfdf]">
                                <th class="px-4 py-4 leading-4 tracking-wider text-left text-blue-500">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox">
                                    </label>
                                </th>
                                <th class="px-4 py-4 leading-4 tracking-wider text-left">Naziv knjige</th>
                                <th class="flex items-center px-4 py-4 leading-4 tracking-wider text-left">Datum transakcije<a href="#"><i class="ml-2 fa-lg fas fa-long-arrow-alt-down" onclick="sortTableDate(2)"></i></a></th>
                                <th class="px-4 py-4 leading-4 tracking-wider text-left">Tip akcije</th>
                                <th class="px-4 py-4 leading-4 tracking-wider text-left">Bibliotekar</th>
                                <th class="px-4 py-4 leading-4 tracking-wider text-left">Ucenik</th>
                                <th class="px-4 py-4"> </th>
                                <th class="px-4 py-4"> </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                                <tr class="bg-gray-200 border-b-[1px] border-[#e4dfdf] backgroundStyle">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 mr-2 h-11" src="img/tomsojer.jpg" alt=""/>
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="font-medium text-center">Geografija Crne Gore</span>
                                            </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">21.02.2021</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <div class="inline-block px-[6px] py-[1px] font-medium bg-transparent border-[1px] rounded-[10px] border-yellow-500 borderColor">
                                            <span class="relative text-xs text-yellow-500 borderText">Otvorene rezervacije</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Valentina Kascelan</td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Pero Perovic</td>
                                    <td class="px-4 py-2">
                                        <a href="#" class="hover:text-green-500 mr-[5px] reservedBook" >
                                            <i class="fas fa-check"></i>
                                        </a>
                                        <a href="#" class="hover:text-red-500 deniedBook">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                    <td class="hidden px-4 py-2"></td>
                                    <td class="px-4 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-[#e4dfdf]">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </p>
                                    </td>
                                </tr>
                                <tr class="border-b-[1px] border-[#e4dfdf]">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 mr-2 h-11" src="img/tomsojer.jpg" alt=""/>
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="font-medium text-center">Tom Sojer</span>
                                            </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">12.05.2020</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <div class="inline-block px-[6px] py-[2px] font-medium bg-blue-200 rounded-[10px]">
                                            <span class="relative text-xs text-blue-800">Izdata knjiga</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Valentina Kascelan</td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Pero Perovic</td>
                                    <td class="px-4 py-2"></td>
                                    <td class="px-4 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </p>
                                    </td>
                                </tr>
                                <tr class="border-b-[1px] border-[#e4dfdf]">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 mr-2 h-11" src="img/tomsojer.jpg" alt=""/>
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="font-medium text-center">Robinson Kruso</span>
                                            </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">25.05.2020</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <div class="inline-block px-[6px] py-[2px] font-medium bg-green-200 rounded-[10px]">
                                            <span class="relative text-xs text-green-800">Vracena knjiga</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Nina Bracovic</td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Pero Perovic</td>
                                    <td class="px-4 py-2"></td>
                                    <td class="px-4 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </p>
                                    </td>
                                </tr>
                                <tr class="border-b-[1px] border-gray-[#e4dfdf]">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 mr-2 h-11" src="img/tomsojer.jpg" alt=""/>
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="font-medium text-center">Galebova stijena</span>
                                            </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">12.05.2020</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <div class="inline-block px-[6px] py-[2px] font-medium bg-yellow-200 rounded-[10px]">
                                            <span class="relative text-xs text-yellow-700">Potvrdjene rezervacije</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Nina Bracovic</td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Pero Perovic</td>
                                    <td class="px-4 py-2"></td>
                                    <td class="px-4 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </p>
                                    </td>
                                </tr>
                                <tr class="border-b-[1px] border-[#e4dfdf]">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 mr-2 h-11" src="img/tomsojer.jpg" alt=""/>
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="font-medium text-center">Sa druge strane ljuske</span>
                                            </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">12.05.2020</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <div class="inline-block px-[6px] py-[2px] font-medium bg-green-200 rounded-[10px]">
                                            <span class="relative text-xs text-green-800">Vracena knjiga</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Nina Bracovic</td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Pero Perovic</td>
                                    <td class="px-4 py-2"></td>
                                    <td class="px-4 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </p>
                                    </td>
                                </tr>
                                <tr class="border-b-[1px] border-[#e4dfdf]">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="flex flex-row items-center px-4 py-4">
                                            <img class="object-cover w-8 mr-2 h-11" src="img/tomsojer.jpg" alt=""/>
                                            <a href="knjigaOsnovniDetalji.php">
                                                <span class="font-medium text-center">Umjetnici kao djeca</span>
                                            </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">12.05.2020</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-blue-900 whitespace-no-wrap">
                                        <div class="inline-block px-[6px] py-[2px] font-medium bg-red-200 rounded-[10px]">
                                            <span class="relative text-xs text-red-800">Odbijene rezervacije</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Valentina Kascelan</td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Pero Perovic</td>
                                    <td class="px-4 py-2"></td>
                                    <td class="px-4 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-[#e4dfdf]">
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
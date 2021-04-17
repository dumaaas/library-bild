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
    <title>Vrati knjigu | Library - ICT Cortex student project</title>
    <link rel="shortcut icon" href="library-favicon.ico" type="image/vnd.microsoft.icon" />
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
                            <i class="fas fa-power-off mr-[3px]"></i>
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

            <div class="ml-[30px]  flex flex-col height-vratiKnjigu pb-[40px] scroll">
                <div class=" mt-[30px]">
                    <h3 class="mb-[10px]">Vrati knjigu</h3>
                    <p>
                        Da bi proces vracanja knjige uspjesno obavili, potrebno je da cekirate informacije kome je ona
                        prethodno izdata.
                    </p>
                </div>
                <div class="w-[350px] border-[1px] border-[#e4dfdf] mt-[30px]">
                    <!-- Space for content -->
                    <div class=" pl-[30px] mt-[30px]">
                        <div class="flex flex-row justify-between">
                            <div class="">
                                <div class="">
                                    <span class="text-gray-500">
                                        Datum izdavanja
                                    </span>
                                    <p class="font-medium">
                                        12.05.2020
                                    </p>
                                </div>
                                <div class="mt-[40px]">
                                    <span class="text-gray-500">
                                        Bibliotekar
                                    </span> <br>
                                    <a href="bibliotekarProfile.php"
                                        class="block font-medium text-[#2196f3] hover:text-blue-600">
                                        Valentina Kascelan
                                    </a>
                                </div>
                                <div class="mt-[40px]">
                                    <span class="text-gray-500">
                                        Ucenik
                                    </span>
                                    <a href="ucenikProfile.php"
                                        class="block font-medium text-[#2196f3] hover:text-blue-600">
                                        Milos Milosevic
                                    </a>
                                </div>
                                <div class="mt-[40px]">
                                    <span class="text-gray-500">
                                        Zadrzavanje knjige
                                    </span>
                                    <p class="font-medium">
                                        2 nedelje i 3 dana
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="text-right mr-[20px] mb-[10px] mt-[40px]">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="text-blue-500 form-checkbox" checked><span
                                class="ml-2 text-blue-500">Izaberi</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 w-full">
                <div class="flex flex-row">
                    <div class="inline-block w-full text-right py-[7px] mr-[100px] text-white">
                        <button type="button"
                            class="shadow-lg mr-[15px] w-[150px] focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in bg-[#F44336] hover:bg-[#F55549] rounded-[5px]">
                            Ponisti <i class="fas fa-times ml-[4px]"></i>
                        </button>
                        <button id="vratiKnjigu" type="submit"
                            class="shadow-lg w-[150px] disabled:opacity-50 focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in rounded-[5px] hover:bg-[#46A149] bg-[#4CAF50]"
                            onclick="validacijaUcenik()">
                            Vrati knjigu <i class="fas fa-check ml-[4px]"></i>
                        </button>
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
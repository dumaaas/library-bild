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
    <title>Detalji o transakciji | Library - ICT Cortex student project</title>
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
                                            <a href="evidencijaKnjiga.php" class="text-[#2196f3] hover:text-blue-600">
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
                                        <li>
                                            <span class="mx-2">/</span>
                                        </li>
                                        <li>
                                            <a href="izdavanjeDetalji.php"
                                                class="text-[#2196f3] hover:text-blue-600">
                                                IZDAVANJE-421
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
            <div class="flex flex-row height-detaljiIzdavanje scroll pb-[20px]">
                <div class="">
                    <!-- Space for content -->
                    <div class="pl-[30px] section- mt-[20px]">
                        <div class="flex flex-row justify-between">
                            <div class="mr-[30px]">
                                <div class="mt-[20px]">
                                    <span class="text-gray-500">Tip transakcije</span><br>
                                    <p
                                        class="inline-block bg-blue-200 text-blue-800 rounded-[10px] text-center px-[6px] py-[2px]">
                                        Izdavanje knjiga
                                    </p>
                                </div>
                                <div class="mt-[40px]">
                                    <span class="text-gray-500">Datum akcije</span>
                                    <p class="font-medium">12.05.2020</p>
                                </div>
                                <div class="mt-[40px]">
                                    <span class="text-gray-500">Trenutno zadrzavanje knjige</span>
                                    <p class="font-medium">1 nedelja i 4 dana</p>
                                </div>
                                <div class="mt-[40px]">
                                    <span class="text-gray-500">Prekoracenje</span>
                                    <p class="font-medium">Nema prekoracenja</p>
                                </div>
                                <div class="mt-[40px]">
                                    <span class="text-gray-500">Bibliotekar</span>
                                    <a href="bibliotekarProfile.php"
                                        class="block font-medium text-[#2196f3] hover:text-blue-600">Valentina
                                        Kascelan</a>
                                </div>
                                <div class="mt-[40px]">
                                    <span class="text-gray-500">Ucenik</span>
                                    <a href="ucenikProfile.php"
                                        class="block font-medium text-[#2196f3] hover:text-blue-600">Milos Milosevic</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="absolute bottom-0 w-full">
                <div class="flex flex-row">
                    <div class="inline-block w-full text-white text-right py-[7px] mr-[100px]">
                        <button type="submit"
                            class="show-otpisiModal shadow-lg w-[150px] disabled:opacity-50 focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in rounded-[5px] hover:bg-[#FF470E] bg-[#FF5722]">
                            <i class="fas fa-level-up-alt mr-[4px] "></i> Otpisi knjigu
                        </button>
                        <button type="submit"
                            class="show-vratiModal shadow-lg w-[150px] disabled:opacity-50 focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in rounded-[5px] hover:bg-[#46A149] bg-[#4CAF50]">
                            <i class="fas fa-redo-alt mr-[4px] "></i> Vrati knjigu
                        </button>
                        <button type="button"
                            class="show-izbrisiModal shadow-lg mr-[15px] w-[150px] focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in bg-[#F44336] hover:bg-[#F55549] rounded-[5px]">
                            <i class="fas fa-trash mr-[4px]"></i> Izbrisi zapis
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Content -->
    </main>
    <!-- End Main content -->

    <!-- Modal - Vrati Knjigu -->
    <div
        class="fixed top-0 left-0 flex items-center justify-center hidden w-full h-screen bg-black bg-opacity-50 vrati-modal">
        <!-- Modal -->
        <div class="w-[500px] bg-white rounded shadow-lg md:w-1/3">
            <!-- Modal Header -->
            <div class="flex items-center justify-between px-[30px] py-[20px] border-b">
                <h3>Da li zelite da vratite knjigu "Tom Sojer" za ucenika "Milos Milosevic"</h3>
            </div>
            <!-- Modal Body -->
            <div class="flex items-center justify-end px-[30px] py-[20px] border-t w-100 text-white">
                <button type="button"
                    class="close-modal shadow-lg mr-[15px] w-[150px] focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in bg-[#F44336] hover:bg-[#F55549] rounded-[5px]">
                    Ponisti <i class="fas fa-times ml-[4px]"></i>
                </button>
                <button type="submit"
                    class="shadow-lg w-[150px] disabled:opacity-50 focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in rounded-[5px] hover:bg-[#46A149] bg-[#4CAF50]"">
                    Potvrdi <i class="fas fa-check ml-[4px]"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Modal - Otpisi Knjigu -->
    <div
        class="fixed top-0 left-0 flex items-center justify-center hidden w-full h-screen bg-black bg-opacity-50 otpisi-modal">
        <!-- Modal -->
        <div class="w-[500px] bg-white rounded shadow-lg md:w-1/3">
            <!-- Modal Header -->
            <div class="flex items-center justify-between px-[30px] py-[20px] border-b">
                <h3>Da li zelite da otpisete knjigu "Tom Sojer" za ucenika "Milos Milosevic?"</h3>
            </div>
            <!-- Modal Body -->
            <div class="flex items-center justify-end px-[30px] py-[20px] border-t w-100 text-white">
                <button type="button"
                    class="close-modal shadow-lg mr-[15px] w-[150px] focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in bg-[#F44336] hover:bg-[#F55549] rounded-[5px]">
                    Ponisti <i class="fas fa-times ml-[4px]"></i>
                </button>
                <button type="submit"
                    class="shadow-lg w-[150px] disabled:opacity-50 focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in rounded-[5px] hover:bg-[#46A149] bg-[#4CAF50]"">
                    Potvrdi <i class="fas fa-check ml-[4px]"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Modal - Izbrisi Zapis -->
    <div
        class="fixed top-0 left-0 flex items-center justify-center hidden w-full h-screen bg-black bg-opacity-50 izbrisi-modal">
        <!-- Modal -->
        <div class="w-[500px] bg-white rounded shadow-lg md:w-1/3">
            <!-- Modal Header -->
            <div class="flex items-center justify-between px-[30px] py-[20px] border-b">
                <h3>Da li zelite da izbrisete zapis knjige "Tom Sojer" za ucenika "Milos Milosevic?"</h3>
            </div>
            <!-- Modal Body -->
            <div class="flex items-center justify-end px-[30px] py-[20px] border-t w-100 text-white">
                <button type="button"
                    class="close-modal shadow-lg mr-[15px] w-[150px] focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in bg-[#F44336] hover:bg-[#F55549] rounded-[5px]">
                    Ponisti <i class="fas fa-times ml-[4px]"></i>
                </button>
                <button type="submit"
                    class="shadow-lg w-[150px] disabled:opacity-50 focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in rounded-[5px] hover:bg-[#46A149] bg-[#4CAF50]"">
                    Potvrdi <i class="fas fa-check ml-[4px]"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Notification for small devices -->
    <?php include('includes/layout/inProgress.php'); ?>


    <!-- Scripts -->
    <?php include('includes/layout/scripts.php'); ?>
    <!-- End Scripts -->

</body>

</html>
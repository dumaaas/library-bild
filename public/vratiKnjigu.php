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
        <section class=" w-screen h-screen pl-[80px] py-4 text-gray-700">
            <!-- Heading of content -->
            <div class="heading ">
                <div class="flex flex-row justify-between border-b-[2px] border-gray-300">
                    <div class="flex flex-row">
                        <div class="w-[80px] pl-[30px]">
                            <img src="img/tomsojer.jpg" alt="">
                        </div>
                        <div class=" pl-[15px] pb-[10px] flex flex-col">
                            <div>
                                <h1 class=" text-[35px] font-bold">
                                    Tom Sojer
                                </h1>
                            </div>
                            <div>
                                <nav class="w-full rounded">
                                    <ol class="flex list-reset">
                                        <li>
                                            <a href="#" class="font-medium text-blue-600 hover:text-blue-800">
                                                Evidencija knjiga
                                            </a>
                                        </li>
                                        <li>
                                            <span class="mx-2">/</span>
                                        </li>
                                        <li>
                                            <a href="knjigaOsnovniDetalji.php" class="font-medium text-blue-600 hover:text-blue-800">
                                                KNJIGA-467
                                            </a>
                                        </li>
                                        <li>
                                            <span class="mx-2">/</span>
                                        </li>
                                        <li>
                                            <a href="vratiKnjigu.php" class="font-medium text-gray-600 hover:text-gray-800">
                                                Vrati knjigu
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
                        <a href="#" class="hover:text-blue-600 inline ml-[20px] pr-[10px]">
                            <i class="far fa-calendar-check mr-[3px] "></i>
                            Rezervisi knjigu
                        </a>
                        <p class="inline cursor-pointer text-[25px] py-[10px] pl-[30px] border-l-[2px] border-gray-300">
                            <i class="fas fa-ellipsis-v"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="ml-[30px]  flex flex-col height-vratiKnjigu pb-[40px] scroll">
                <div class=" mt-[30px]">
                    <h2 class="font-bold text-[20px] mb-[10px]">Vrati knjigu</h2>
                    <p>
                        Da bi proces vracanja knjige uspjesno obavili, potrebno je da cekirate informacije kome je ona prethodno izdata.
                    </p>
                </div>
                <div class="w-[350px] border-2 border-gray-300 mt-[30px]">
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
                                    <a href="bibliotekarProfile.php" class="block font-medium text-blue-500 hover:text-blue-800">
                                        Valentina Kascelan
                                    </a>
                                </div>
                                <div class="mt-[40px]">
                                    <span class="text-gray-500">
                                        Ucenik
                                    </span>
                                    <a href="ucenikProfile.php" class="block font-medium text-blue-500 hover:text-blue-800">
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
                            <input type="checkbox" class="text-blue-500 form-checkbox" checked><span class="ml-2 text-blue-500">Izaberi</span>
                        </label>            
                    </div>
                </div>
            </div>
            <div class="w-full absolute border-t-[2px] border-gray-300 bottom-0">
                <div class="flex flex-row">
                    <div class="inline-block w-full py-[7px] ml-[30px]">
                        <button type="button"
                            class="w-[220px] focus:outline-none text-black text-sm py-2.5 px-5 rounded-md border transition duration-300 ease-in border-black hover:bg-gray-600 hover:text-white">
                            Knjiga je izgubljena
                        </button>
                    </div>
                    <div class="inline-block w-full text-right py-[7px] mr-[90px]">
                        <button type="button"
                            class="mr-[15px] w-[150px] focus:outline-none text-black text-sm py-2.5 px-5 rounded-md border transition duration-300 ease-in border-black hover:bg-gray-600 hover:text-white">
                            Ponisti
                        </button>
                        <button id="vratiKnjigu" type="button"
                            class="w-[150px] disabled:opacity-50 focus:outline-none text-white text-sm py-2.5 px-5 rounded-md border transition duration-300 ease-in border-gray-600 bg-blue-500 hover:bg-blue-800">
                            Vrati knjigu
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
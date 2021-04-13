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
        <section class="w-screen h-screen py-4 pl-[80px] text-gray-700">
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
                                            <a href="knjigaOsnovniDetalji.php" class="font-medium text-blue-600 hover:text-blue-800">
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
            <div class="flex flex-row overflow-auto height-osnovniDetalji">
                <div class="w-[80%]">
                    <div class="border-b-[2px] py-4 text-gray-500 border-gray-300 pl-[30px]">
                        <a href="knjigaOsnovniDetalji.php" class="inline hover:text-blue-800">
                            Osnovni detalji
                        </a>
                        <a href="knjigaSpecifikacija.php" class="inline ml-[70px] active-book-nav hover:text-blue-800">
                            Specifikacija
                        </a>
                        <a href="evidencijaIznajmljivanja.php" class="inline ml-[70px] hover:text-blue-800">
                            Evidencija iznajmljivanja
                        </a>
                        <a href="evidencijaKnjigaMultimedija.php" class="inline ml-[70px] hover:text-blue-800">
                            Multimedija
                        </a>
                    </div>
                    <div class="">
                        <!-- Space for content -->
                        <div class="pl-[30px] section- mt-[20px]">
                            <div class="flex flex-row justify-between">
                                <div class="mr-[30px]">
                                    <div class="mt-[20px]">
                                        <span class="text-gray-500">Broj strana</span>
                                        <p class="font-medium">264</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500">Pismo</span>
                                        <p class="font-medium">Cirilica</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500">Jezik</span>
                                        <p class="font-medium">Crnogorski</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500">Povez</span>
                                        <p class="font-medium">Tvrd</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500">Format</span>
                                        <p class="font-medium">21 cm</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500">International Standard Book Number (ISBN)</span>
                                        <p class="font-medium">1546213456878</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="min-w-[20%] border-l-[2px] border-gray-300px ">
                    <div class="border-b-[2px] border-gray-300">
                        <div class="mx-[30px] mt-[20px] flex flex-row justify-between">
                            <div class="text-gray-500 ">
                                <p>Status:</p>
                                <p class="mt-[20px]">
                                    Datum izdavanja:
                                </p>
                                <p class="mt-[20px]">
                                    Izdato korisniku:
                                </p>
                                <p class="mt-[20px]">
                                    Knjiga zadrzana:
                                </p>
                                <p class="mt-[20px]">
                                    Izdao bibliotekar:
                                </p>
                            </div>
                            <div class="font-medium text-left pb-[30px]">
                                <span class="bg-blue-600 text-white text-center px-[15px] py-[5px]">
                                    Knjiga je izdata
                                </span>
                                <p class="mt-[20px]">
                                    21.02.2021
                                </p>
                                <a href="ucenikProfile.php" class="block hover:text-blue-800 text-blue-500 mt-[20px]">
                                    Pero Perovic
                                </a>
                                <p class="mt-[20px]">
                                    2 mjeseca i 3 dana
                                </p>
                                <a href="bibliotekarProfile" class="block hover:text-blue-800 text-blue-500 mt-[20px]">
                                    Valentina Kascelan
                                </a>
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
                                    <a href="bibliotekarProfile.php" class="text-blue-500 hover:text-blue-800">
                                        Valentina K.
                                    </a>
                                    je izdala knjigu
                                    <a href="ucenikProfile.php" class="text-blue-500 hover:text-blue-800">
                                        Peru Perovicu
                                    </a>
                                    dana
                                    <span class="font-bold">
                                        21.02.2021.
                                    </span>
                                </p>
                            </div>
                            <div>
                                <a href="izdavanjeDetalji.php" class="text-blue-500 hover:text-blue-800">
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
                                    <a href="bibliotekarProfile.php" class="text-blue-500 hover:text-blue-800">
                                        Valentina K.
                                    </a>
                                    je izdala knjigu
                                    <a href="ucenikProfile.php" class="text-blue-500 hover:text-blue-800">
                                        Peru Perovicu
                                    </a>
                                    dana
                                    <span class="font-bold">
                                        21.02.2021.
                                    </span>
                                </p>
                            </div>
                            <div>
                                <a href="izdavanjeDetalji.php" class="text-blue-500 hover:text-blue-800">
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
                                    <a href="bibliotekarProfile.php" class="text-blue-500 hover:text-blue-800">
                                        Valentina K.
                                    </a>
                                    je izdala knjigu
                                    <a href="ucenikProfile.php" class="text-blue-500 hover:text-blue-800">
                                        Peru Perovicu
                                    </a>
                                    dana
                                    <span class="font-bold">
                                        21.02.2021.
                                    </span>
                                </p>    
                            </div>
                            <div>
                                <a href="izdavanjeDetalji.php" class="text-blue-500 hover:text-blue-800">
                                    pogledaj detaljnije >>
                                </a>
                            </div>
                        </div>
                        <div class="mt-[55px]">
                            <a href="dashboardAktivnost.php" class="text-blue-500 hover:text-blue-800">
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
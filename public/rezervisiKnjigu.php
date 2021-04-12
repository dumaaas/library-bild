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
    <title>Rezervisi knjigu | Library - ICT Cortex student project</title>
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
                                            <a href="evidencijaKnjiga.php" class="font-medium text-blue-600 hover:text-blue-800">
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
                                            <a href="#" class="font-medium text-gray-600 hover:text-gray-800">
                                                Rezervisi knjigu
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

            <!-- Space for content -->
            <div class="scroll height-content section-content">
                <form class="text-gray-700">
                    <div class="flex flex-row ml-[30px]">
                        <div class="w-[50%]">
                            <span class="inline-block mt-[20px] mb-[10px] font-bold text-xl">Rezervisi knjigu</span>
                            <div class="mt-[20px]">
                                <span>Izaberi ucenika za koga se knjiga rezervise</span>
                                <select class="flex w-[90%] mt-2 px-2 py-2 border bg-white border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-[#576cdf]" name="ucenik">
                                    <option value="">
                                        Pero Perovic
                                    </option>
                                    <option value="">
                                        Ucenik 2
                                    </option>
                                </select>
                            </div>
                            <div class="mt-[20px]">
                                <span>Datum rezervisanja</span>
                                <label class="text-gray-700" for="date">
                                    <input type="date" class="flex w-[50%] mt-2 px-4 py-2 text-base placeholder-gray-400 bg-white border border-gray-300 appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"/>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="w-full absolute border-t-[2px] border-gray-300 bottom-0">
                        <div class="flex flex-row">
                            <div class="inline-block w-full text-right py-[7px] mr-[100px]">
                                <button type="button"
                                        class="mr-[15px] w-[150px] focus:outline-none text-black text-sm py-2.5 px-5 rounded-md border transition duration-300 ease-in border-black hover:bg-gray-600 hover:text-white">
                                            Ponisti
                                </button>
                                <button id="vratiKnjigu" type="button"
                                        class="w-[150px] focus:outline-none text-white text-sm py-2.5 px-5 rounded-md border transition duration-300 ease-in border-gray-600 bg-blue-500 hover:bg-blue-800">
                                            Rezervisi knjigu
                                </button>
                            </div>
                        </div>        
                    </div>
                </form>
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
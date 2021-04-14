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
    <title>New book | Library - ICT Cortex student project</title>
    <link rel="shortcut icon" href="img/library-favicon.ico" type="image/vnd.microsoft.icon" />
    <!-- End Title -->

    <!-- Styles -->
    <?php include('includes/layout/styles.php'); ?>
    <!-- End Styles -->
</head>

<body class="overflow-hidden small:bg-gradient-to-r small:from-green-400 small:to-blue-500">
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
                <div class="flex border-b-[2px] border-gray-300">
                    <div class="pl-[30px] pb-[10px] flex flex-col">
                        <div>
                            <h1 class=" text-[35px] font-bold">
                                Nova knjiga
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
                                        <a href="#" class="font-medium text-gray-500 hover:text-blue-800">
                                            Nova knjiga
                                        </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-b-[2px] py-4 text-gray-500 border-gray-300 pl-[30px]">
                        <a href="#" class="inline active-book-nav hover:text-blue-800">
                            Osnovni detalji
                        </a>
                        <a href="novaKnjigaSpecifikacija.php" class="inline ml-[70px] hover:text-blue-800 ">
                            Specifikacija
                        </a>
                        <a href="novaKnjigaMultimedija.php" class="inline ml-[70px] hover:text-blue-800">
                            Multimedija
                        </a>
                    </div>
            <!-- Space for content -->
            <div class="scroll height-content section-content">
                <form class="text-gray-700 forma">
                    <div class="flex flex-row ml-[30px] mb-[150px]">
                        <div class="w-[50%]">
                            <div class="mt-[20px]">
                                <span>Naziv knjige <span class="text-red-500">*</span></span>
                                <input type="text" name="nazivKnjiga" id="nazivKnjiga" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" onkeydown="clearErrorsNazivKnjiga()"/>
                                <div id="validateNazivKnjiga"></div>
                            </div>

                            <div class="mt-[20px]">
                                <span class="inline-block mb-2">Kratki sadrzaj</span>
                                <textarea name="kratki_sadrzaj" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]">
                                
                                </textarea>
                            </div>

                            <div class="mt-[20px]">
                                <span>Kategorija <span class="text-red-500">*</span></span>
                                <select class="flex w-[45%] mt-2 px-2 py-2 border bg-white border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-[#576cdf]" name="kategorija" id="kategorija" onclick="clearErrorsKategorija()">
                                    <option disabled selected></option>
                                    <option value="">
                                        Kategorija 1
                                    </option>
                                </select>
                                <div id="validateKategorija"></div>
                            </div>

                            <div class="mt-[20px]">
                                <span>Zanr <span class="text-red-500">*</span></span>
                                <select class="flex w-[45%] mt-2 px-2 py-2 border bg-white border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-[#576cdf]" name="zanr" id="zanr" onclick="clearErrorsZanr()">
                                    <option disabled selected></option>
                                    <option value="">
                                        Zanr 1
                                    </option>
                                </select>
                                <div id="validateZanr"></div>
                            </div>
                        </div>

                        <div class="w-[50%]">
                            <div class="mt-[20px]">
                                <span>Izaberite autore <span class="text-red-500">*</span></span>
                                <select class="flex w-[90%] mt-2 px-2 py-2 border bg-white border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-[#576cdf]" name="autori" id="autori" onclick="clearErrorsAutori()">
                                    <option disabled selected></option>
                                    <option value="">
                                        Autor 1
                                    </option>
                                </select>
                                <div id="validateAutori"></div>
                            </div>

                            <div class="mt-[20px]">
                                <span class="inline-block mb-2">O autoru/ima</span>
                                <textarea name="o_autoru" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]">
                                    
                                </textarea>
                            </div>

                            <div class="mt-[20px]">
                                <span>Izdavac <span class="text-red-500">*</span></span>
                                <select class="flex w-[45%] mt-2 px-2 py-2 border bg-white border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-[#576cdf]" name="izdavac" id="izdavac" onclick="clearErrorsIzdavac()">
                                    <option disabled selected></option>
                                    <option value="">
                                        Izdavac 1
                                    </option>
                                </select>
                                <div id="validateIzdavac"></div>
                            </div>

                            <div class="mt-[20px]">
                                <span>Godina izdavanja <span class="text-red-500">*</span></span>
                                <select class="flex w-[45%] mt-2 px-2 py-2 border bg-white border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-[#576cdf]" name="godinaIzdavanja" id="godinaIzdavanja" onclick="clearErrorsGodinaIzdavanja()">
                                    <option disabled selected></option>
                                    <option value="">
                                        Godina izdavanja 1
                                    </option>
                                </select>
                                <div id="validateGodinaIzdavanja"></div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full absolute border-t-[2px] border-gray-300 bottom-0 bg-white">
                        <div class="flex flex-row">
                            <div class="inline-block w-full text-right py-[7px] mr-[100px]">
                                <button type="button"
                                        class="mr-[15px] w-[150px] focus:outline-none text-black text-sm py-2.5 px-5 rounded-md border transition duration-300 ease-in border-black hover:bg-gray-600 hover:text-white">
                                            Ponisti
                                </button>
                                <button id="sacuvajKnjigu" type="submit"
                                        class="w-[150px] disabled:opacity-50 focus:outline-none text-white text-sm py-2.5 px-5 rounded-md border transition duration-300 ease-in border-gray-600 bg-blue-500 hover:bg-blue-800" onclick="validacijaKnjiga()">
                                            Sacuvaj
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

    <script>
        CKEDITOR.replace( 'kratki_sadrzaj',
            {
                width: "90%",
                height: "150px"
            });

        CKEDITOR.replace( 'o_autoru',
            {
                width: "90%",
                height: "150px"
            });
    </script>
</body>

</html>
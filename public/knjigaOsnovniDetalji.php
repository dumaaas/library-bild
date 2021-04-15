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

    <!-- Font Awesome -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
    <!-- End Font Awesome -->
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
                        <p class="inline cursor-pointer text-[25px] py-[10px] pl-[30px] border-l-[2px] border-gray-300" id="dropdownBookDetail">
                            <i class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                        </p>
                        <div class="hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-book-detail">
                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                <div class="py-1">
                                    <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                        <i class="fa fa-pencil-square-o ml-[9px] py-1"></i>
                                        <span class="px-4 py-0">Izmijeni knjigu</span>
                                    </a>
                                    <a href="javascript:void(0)" tabindex="0" class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"  role="menuitem" >
                                        <i class="fa fa-trash-o ml-[10px] mr-[2px] py-1"></i>
                                        <span class="px-4 py-0">Izbrisi knjigu</span>
                                    </a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>

            </div>
            <div class="flex flex-row overflow-auto height-osnovniDetalji">
                <div class="w-[80%]">
                    <div class="border-b-[2px] py-4 text-gray-500 border-gray-300 pl-[30px]">
                        <a href="knjigaOsnovniDetalji.php" class="inline active-book-nav hover:text-blue-800">
                            Osnovni detalji
                        </a>
                        <a href="knjigaSpecifikacija.php" class="inline ml-[70px] hover:text-blue-800 ">
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
                                        <span class="text-gray-500">Naziv knjige</span>
                                        <p class="font-medium">Tom Sojer</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500">Kategorija</span>
                                        <p class="font-medium">Romani</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500">Zanr</span>
                                        <p class="font-medium">Knjige za djecu</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500">Autor/ri</span>
                                        <p class="font-medium">Mark Twain</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500">Izdavac</span>
                                        <p class="font-medium">Delfi Knjizare</p>
                                    </div>
                                    <div class="mt-[40px]">
                                        <span class="text-gray-500">Godina izdavanja</span>
                                        <p class="font-medium">30.03.2011</p>
                                    </div>
                                </div>
                                <div class="mr-[70px] mt-[20px] flex flex-col w-[600px]">
                                    <div>
                                        <h3 class="font-medium text-gray-500 ">
                                            Storyline (Kratki sadrzaj)
                                        </h3>
                                        <p class="addReadMore showlesscontent my-[10px]">
                                            Tom Sojer je roman koji možemo da smatramo i autobiografijom jer je
                                            utemeljen na
                                            doživljajima samog Marka Tvena. Autor ga je pisao u nekoliko navrata: prvi
                                            deo
                                            napisan je u zimu 1872. godine, drugi deo u proljeće 1875. godine, a treći
                                            na
                                            leto te iste godine. Napisan je jednostavnim stilom i uz mnogo pripovedanja
                                            i
                                            humora pa je jednako interesantan i deci i odraslima. Tven je ovim romanom
                                            hteo
                                            da odrasle čitaoce podseti na detinjstvo.Pripovedanje u romanu Tom Sojer
                                            odvija
                                            se linearno, bez paralelnih radnji. Sva dešavanja u romanu vrte se oko
                                            jednog
                                            lika, a to je Tom Sojer. On se ističe svojom inteligencijom, neobuzdanošću i
                                            humorističnom naravi.
                                        </p>
                                        <!-- <a class="text-blue-500 " href="#">
                                            Prikazi vise &#8681;
                                        </a> -->
                                    </div>
                                    <div class="mt-[100px]">
                                        <h3 class="font-medium text-gray-500">
                                            O autoru
                                        </h3>
                                        <p class="addReadMore showlesscontent my-[10px]">
                                            Rođen je 30. novembra 1835. u Floridi, Misuri. Pravo ime mu je bilo Samjuel
                                            Langhorn Klemens. Bio je američki pisac, humorista i predavač. Odrastao je u
                                            Hanibalu, Misuri, na reci Misisipi. Već sa trinaest godina počeo je da uči
                                            zanat
                                            kod mesnog štampara. Godine 1856. postao je pomoćnik krmara parobroda na
                                            Misisipiju, kojim je plovio četiri godine pre nego što je otišao u
                                            Kaliforniju,
                                            u potragu za zlatom. Nakon toga se odselio u Nevadu, gde je 1863. počeo da
                                            piše
                                            za novine Territorial enterprise i tada je uzeo pseudonim Mark Tven (mark
                                            twain
                                            je izraz koji se u to vreme upotrebljavao prilikom rečne plovidbe, a
                                            označavao
                                            je vodu duboku dva..
                                        </p>
                                        <!-- <a class="text-blue-500" href="#">
                                            Prikazi vise &#8681;
                                        </a> -->
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
                                <p class="mt-[20px]">Datum izdavanja:</p>
                                <p class="mt-[20px]">Izdato korisniku:</p>
                                <p class="mt-[20px]">Knjiga zadrzana:</p>
                                <p class="mt-[20px]">Izdao bibliotekar:</p>
                            </div>
                            <div class="font-medium text-left pb-[30px]">
                                <span class="bg-blue-600 text-white text-center px-[15px] py-[5px]">Knjiga je
                                    izdata</span>
                                <p class="mt-[20px]">21.02.2021</p>
                                <a href="ucenikProfile.php" class="block hover:text-blue-800 text-blue-500 mt-[20px]">Pero Perovic</a>
                                <p class="mt-[20px]">2 mjeseca i 3 dana</p>
                                <a href="bibliotekarProfile.php" class="block hover:text-blue-800 text-blue-500 mt-[20px]">Valentina
                                    Kascelan</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-[40px] mx-[30px]">
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
                        <div class="mt-[40px] flex flex-col">
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
                        <div class="mt-[40px] flex flex-col">
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
                        <div class="mt-[40px]">
                            <a href="dashboardAktivnosti.php" class="text-blue-500 hover:text-blue-800">
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
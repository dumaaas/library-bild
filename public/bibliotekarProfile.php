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
        <section class="w-screen h-screen pl-[80px] pb-2 text-gray-700">
            <!-- Heading of content -->
            <div class="heading">
                <div class="flex flex-row justify-between border-b-[1px] border-[#e4dfdf]">
                    <div class="pl-[30px] py-[10px] flex flex-col">
                        <div>
                            <h1>
                                Valentina Kascelan
                            </h1>
                        </div>
                        <div>
                            <nav class="w-full rounded">
                                <ol class="flex list-reset">
                                    <li>
                                        <a href="bibliotekari.php" class="text-[#2196f3] hover:text-blue-600">
                                            Svi bibliotekari
                                        </a>
                                    </li>
                                    <li>
                                        <span class="mx-2">/</span>
                                    </li>
                                    <li>
                                        <a href="bibliotekarProfile.php" class="text-[#2196f3] hover:text-blue-600">
                                            ID-242
                                        </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="pt-[24px] pr-[30px]">
                        <a href="#" class="inline hover:text-blue-600 show-modal">
                            <i class="fas fa-redo-alt mr-[3px]"></i>
                            Resetuj sifru
                        </a>
                        <a href="#" class="hover:text-blue-600 inline ml-[20px] pr-[10px]">
                            <i class="fas fa-edit mr-[3px] "></i>
                            Izmjeni podatke
                        </a>
                        <p class="inline cursor-pointer text-[25px] py-[10px] pl-[30px] border-l-[1px] border-gray-300"
                            id="dropdownStudent">
                            <i
                                class="fas fa-ellipsis-v hover:text-gray-500 focus:outline-none active:text-gray-800"></i>
                        </p>

                        <div
                            class="hidden transition-all duration-300 origin-top-right transform scale-95 -translate-y-2 dropdown-menu-student">
                            <div class="absolute right-0 w-56 mt-2 origin-top-right bg-white border border-gray-200 divide-y divide-gray-100 rounded-md shadow-lg outline-none"
                                aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                                <div class="py-1">
                                    <a href="javascript:void(0)" tabindex="0"
                                        class="flex w-full px-4 py-2 text-sm leading-5 text-left text-gray-700"
                                        role="menuitem">
                                        <i class="fa fa-trash mr-[10px] ml-[5px] py-1"></i>
                                        <span class="px-4 py-0">Izbrisi korisnika</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Space for content -->
            <div class="pl-[30px] height-profile pb-[30px] scroll mt-[20px]">
                <div class="flex flex-row">
                    <div class="mr-[30px]">
                        <div class="mt-[20px]">
                            <span class="text-gray-500">Ime i prezime</span>
                            <p class="font-medium">Valentina Kascelan</p>
                        </div>
                        <div class="mt-[40px]">
                            <span class="text-gray-500">Tip korisnika</span>
                            <p class="font-medium">Bibliotekar</p>
                        </div>
                        <div class="mt-[40px]">
                            <span class="text-gray-500">JMBG</span>
                            <p class="font-medium">1546213456878</p>
                        </div>
                        <div class="mt-[40px]">
                            <span class="text-gray-500">Email</span>
                            <a
                                class="cursor-pointer block font-medium text-[#2196f3] hover:text-blue-600">valentina.kascelan@domain.net</a>
                        </div>
                        <div class="mt-[40px]">
                            <span class="text-gray-500">Korisnicko ime</span>
                            <p class="font-medium">valentina.kascelan</p>
                        </div>
                        <div class="mt-[40px]">
                            <span class="text-gray-500">Broj logovanja</span>
                            <p class="font-medium">30</p>
                        </div>
                        <div class="mt-[40px]">
                            <span class="text-gray-500">Poslednji put logovan/a</span>
                            <p class="font-medium">Juce 11:57 AM</p>
                        </div>

                    </div>
                    <div class="ml-[100px]  mt-[20px]">
                        <img class="p-2 border-2 border-gray-300" width="300px" src="img/profileExample.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Content -->
    </main>
    <!-- End Main content -->

    <!-- This code will show up when we press reset password -->
    <div
        class="fixed top-0 left-0 flex items-center justify-center hidden w-full h-screen bg-black bg-opacity-50 modal">
        <!-- Modal -->
        <div class="w-[500px] bg-white rounded shadow-lg md:w-1/3">
            <!-- Modal Header -->
            <div class="flex items-center justify-between px-[30px] py-[20px] border-b">
                <h3>Resetuj sifru: Valentina Kascelan</h3>
                <button class="text-black close-modal">&cross;</button>
            </div>
            <!-- Modal Body -->
            <div class="flex flex-col px-[30px] py-[30px]">
                <div class="flex flex-col pb-[30px]">
                    <span>Unesi novu sifru</span>
                    <input class="h-[40px] border-[1px] border-[#e4dfdf]" type="password">
                </div>
                <div class="flex flex-col pb-[30px]">
                    <span>Ponovi sifru</span>
                    <input class="h-[40px] border-[1px] border-[#e4dfdf]" type="password">
                </div>
            </div>
            <div class="flex items-center justify-end px-[30px] py-[20px] border-t w-100 text-white">
                <button type="button"
                    class="shadow-lg mr-[15px] w-[150px] focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in bg-[#F44336] hover:bg-[#F55549] rounded-[5px]">
                    Ponisti <i class="fas fa-times ml-[4px]"></i>
                </button>
                <button id="resetujSifru" type="submit"
                    class="shadow-lg w-[150px] disabled:opacity-50 focus:outline-none text-sm py-2.5 px-5 transition duration-300 ease-in rounded-[5px] hover:bg-[#46A149] bg-[#4CAF50]"
                    onclick="validacijaSifra()">
                    Sacuvaj <i class="fas fa-check ml-[4px]"></i>
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
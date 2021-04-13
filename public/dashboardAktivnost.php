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
    <title>Activity | Library - ICT Cortex student project</title>
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
            <div class="heading mt-[14px]">
                <h1 class="pl-[30px] pb-[20px] text-[35px] font-bold border-b-[2px] border-gray-300">
                    Prikaz aktivnosti
                </h1>
            </div>
            <!-- Space for content -->
            <div class="pl-[30px] overflow-auto scroll height-dashboard pb-[30px] mt-[20px]">
                <div class="flex flex-row justify-between">
                    <div class="mr-[30px]">
                        <div class="flex flex-row mb-[30px]">
                            <div class="">
                                <p class="inline text-[17px]">
                                    Ucenici:
                                </p>
                                <select
                                    class="text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm w-[46px] focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                                    name="ucenici">
                                    <option value="">
                                        Svi
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
                            <div class="ml-[25px]">
                                <p class="inline text-[17px]">
                                    Bibliotekar:
                                </p>
                                <select
                                    class=" text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm w-[46px] focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                                    name="ucenici">
                                    <option value="">
                                        Svi
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
                            <div class="ml-[25px]">
                                <p class="inline text-[17px]">
                                    Knjige:
                                </p>
                                <select
                                    class=" text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm w-[46px] focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                                    name="ucenici">
                                    <option value="">
                                        Svi
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
                            <div class="ml-[25px]">
                                <p class="inline text-[17px]">
                                    Kategorije:
                                </p>
                                <select
                                    class=" text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm w-[46px] focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                                    name="ucenici">
                                    <option value="">
                                        Svi
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
                            <div class="ml-[25px]">
                                <p class="inline text-[17px]">
                                    Datum:
                                </p>
                                <select
                                    class=" text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm w-[46px] focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                                    name="ucenici">
                                    <option value="">
                                        Svi
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
                            <div class="ml-[25px]">
                                <p class="inline text-[17px]">
                                    Ucenici:
                                </p>
                                <select
                                    class=" text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm w-[46px] focus:outline-none focus:ring-primary-500 focus:border-primary-500"
                                    name="ucenici">
                                    <option value="">
                                        Svi
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
                            <div class="ml-[35px] cursor-pointer hover:text-blue-600">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                        </div>
                        <!-- Activity Cards -->
                        <div class="activity-card flex flex-row mb-[30px]">
                            <div class="w-[60px] h-[60px]">
                                <img class="rounded-full" src="img/profileStudent.jpg" alt="">
                            </div>
                            <div class="ml-[15px] mt-[5px] flex flex-col">
                                <div class="text-gray-500 mb-[5px]">
                                    <p class="uppercase">
                                        Izdavanje knjige
                                        <span class="inline lowercase">
                                            - 4 days ago
                                        </span>
                                    </p>
                                </div>
                                <div class="">
                                    <p>
                                        <a href="bibliotekarProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Valentina K.
                                        </a>
                                        je izdala knjigu <span class="font-bold">Tom Sojer </span>
                                        <a href="ucenikProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Peru Perovicu
                                        </a>
                                        dana <span class="font-bold">21.02.2021.</span>
                                        <a href="izdavanjeDetalji.php" class="text-blue-600 hover:text-blue-800">
                                            pogledaj detaljnije >>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="activity-card flex flex-row mb-[30px]">
                            <div class="w-[60px] h-[60px]">
                                <img class="rounded-full" src="img/profileExample.jpg" alt="">
                            </div>
                            <div class="ml-[15px] mt-[5px] flex flex-col">
                                <div class="text-gray-500 mb-[5px]">
                                    <p class="uppercase">
                                        Izdavanje knjige
                                        <span class="inline lowercase">
                                            - 4 mounths ago
                                        </span>
                                    </p>
                                </div>
                                <div class="">
                                    <p>
                                        <a href="bibliotekarProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Valentina K.
                                        </a>
                                        je izdala knjigu <span class="font-bold">Robinson Kruso</span>
                                        <a href="ucenikProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Petru Njegosu
                                        </a>
                                        dana <span class="font-bold">12.03.2020.</span>
                                        <a href="izdavanjeDetalji.php" class="text-blue-600 hover:text-blue-800">
                                            pogledaj detaljnije >>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="activity-card flex flex-row mb-[30px]">
                            <div class="w-[60px] h-[60px]">
                                <img class="rounded-full" src="img/profileStudent.jpg" alt="">
                            </div>
                            <div class="ml-[15px] mt-[5px] flex flex-col">
                                <div class="text-gray-500 mb-[5px]">
                                    <p class="uppercase">
                                        Izdavanje knjige
                                        <span class="inline lowercase">
                                            - 4 days ago
                                        </span>
                                    </p>
                                </div>
                                <div class="">
                                    <p>
                                        <a href="bibliotekarProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Valentina K.
                                        </a>
                                        je izdala knjigu <span class="font-bold">Tom Sojer </span>
                                        <a href="ucenikProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Peru Perovicu
                                        </a>
                                        dana <span class="font-bold">21.02.2021.</span>
                                        <a href="izdavanjeDetalji.php" class="text-blue-600 hover:text-blue-800">
                                            pogledaj detaljnije >>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="activity-card flex flex-row mb-[30px]">
                            <div class="w-[60px] h-[60px]">
                                <img class="rounded-full" src="img/profileExample.jpg" alt="">
                            </div>
                            <div class="ml-[15px] mt-[5px] flex flex-col">
                                <div class="text-gray-500 mb-[5px]">
                                    <p class="uppercase">
                                        Izdavanje knjige
                                        <span class="inline lowercase">
                                            - 4 mounths ago
                                        </span>
                                    </p>
                                </div>
                                <div class="">
                                    <p>
                                        <a href="bibliotekarProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Valentina K.
                                        </a>
                                        je izdala knjigu <span class="font-bold">Robinson Kruso</span>
                                        <a href="ucenikProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Petru Njegosu
                                        </a>
                                        dana <span class="font-bold">12.03.2020.</span>
                                        <a href="izdavanjeDetalji.php" class="text-blue-600 hover:text-blue-800">
                                            pogledaj detaljnije >>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="activity-card flex flex-row mb-[30px]">
                            <div class="w-[60px] h-[60px]">
                                <img class="rounded-full" src="img/profileStudent.jpg" alt="">
                            </div>
                            <div class="ml-[15px] mt-[5px] flex flex-col">
                                <div class="text-gray-500 mb-[5px]">
                                    <p class="uppercase">
                                        Izdavanje knjige
                                        <span class="inline lowercase">
                                            - 4 days ago
                                        </span>
                                    </p>
                                </div>
                                <div class="">
                                    <p>
                                        <a href="bibliotekarProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Valentina K.
                                        </a>
                                        je izdala knjigu <span class="font-bold">Tom Sojer </span>
                                        <a href="ucenikProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Peru Perovicu
                                        </a>
                                        dana <span class="font-bold">21.02.2021.</span>
                                        <a href="izdavanjeDetalji.php" class="text-blue-600 hover:text-blue-800">
                                            pogledaj detaljnije >>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="activity-card flex flex-row mb-[30px]">
                            <div class="w-[60px] h-[60px]">
                                <img class="rounded-full" src="img/profileExample.jpg" alt="">
                            </div>
                            <div class="ml-[15px] mt-[5px] flex flex-col">
                                <div class="text-gray-500 mb-[5px]">
                                    <p class="uppercase">
                                        Izdavanje knjige
                                        <span class="inline lowercase">
                                            - 4 mounths ago
                                        </span>
                                    </p>
                                </div>
                                <div class="">
                                    <p>
                                        <a href="bibliotekarProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Valentina K.
                                        </a>
                                        je izdala knjigu <span class="font-bold">Robinson Kruso</span>
                                        <a href="ucenikProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Petru Njegosu
                                        </a>
                                        dana <span class="font-bold">12.03.2020.</span>
                                        <a href="izdavanjeDetalji.php" class="text-blue-600 hover:text-blue-800">
                                            pogledaj detaljnije >>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="activity-card flex flex-row mb-[30px]">
                            <div class="w-[60px] h-[60px]">
                                <img class="rounded-full" src="img/profileStudent.jpg" alt="">
                            </div>
                            <div class="ml-[15px] mt-[5px] flex flex-col">
                                <div class="text-gray-500 mb-[5px]">
                                    <p class="uppercase">
                                        Izdavanje knjige
                                        <span class="inline lowercase">
                                            - 4 days ago
                                        </span>
                                    </p>
                                </div>
                                <div class="">
                                    <p>
                                        <a href="bibliotekarProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Valentina K.
                                        </a>
                                        je izdala knjigu <span class="font-bold">Tom Sojer </span>
                                        <a href="ucenikProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Peru Perovicu
                                        </a>
                                        dana <span class="font-bold">21.02.2021.</span>
                                        <a href="izdavanjeDetalji.php" class="text-blue-600 hover:text-blue-800">
                                            pogledaj detaljnije >>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="activity-card flex flex-row mb-[30px]">
                            <div class="w-[60px] h-[60px]">
                                <img class="rounded-full" src="img/profileExample.jpg" alt="">
                            </div>
                            <div class="ml-[15px] mt-[5px] flex flex-col">
                                <div class="text-gray-500 mb-[5px]">
                                    <p class="uppercase">
                                        Izdavanje knjige
                                        <span class="inline lowercase">
                                            - 4 mounths ago
                                        </span>
                                    </p>
                                </div>
                                <div class="">
                                    <p>
                                        <a href="bibliotekarProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Valentina K.
                                        </a>
                                        je izdala knjigu <span class="font-bold">Robinson Kruso</span>
                                        <a href="ucenikProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Petru Njegosu
                                        </a>
                                        dana <span class="font-bold">12.03.2020.</span>
                                        <a href="izdavanjeDetalji.php" class="text-blue-600 hover:text-blue-800">
                                            pogledaj detaljnije >>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="activity-card flex flex-row mb-[30px]">
                            <div class="w-[60px] h-[60px]">
                                <img class="rounded-full" src="img/profileStudent.jpg" alt="">
                            </div>
                            <div class="ml-[15px] mt-[5px] flex flex-col">
                                <div class="text-gray-500 mb-[5px]">
                                    <p class="uppercase">
                                        Izdavanje knjige
                                        <span class="inline lowercase">
                                            - 4 days ago
                                        </span>
                                    </p>
                                </div>
                                <div class="">
                                    <p>
                                        <a href="bibliotekarProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Valentina K.
                                        </a>
                                        je izdala knjigu <span class="font-bold">Tom Sojer </span>
                                        <a href="ucenikProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Peru Perovicu
                                        </a>
                                        dana <span class="font-bold">21.02.2021.</span>
                                        <a href="izdavanjeDetalji.php" class="text-blue-600 hover:text-blue-800">
                                            pogledaj detaljnije >>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="activity-card flex flex-row mb-[30px]">
                            <div class="w-[60px] h-[60px]">
                                <img class="rounded-full" src="img/profileExample.jpg" alt="">
                            </div>
                            <div class="ml-[15px] mt-[5px] flex flex-col">
                                <div class="text-gray-500 mb-[5px]">
                                    <p class="uppercase">
                                        Izdavanje knjige
                                        <span class="inline lowercase">
                                            - 4 mounths ago
                                        </span>
                                    </p>
                                </div>
                                <div class="">
                                    <p>
                                        <a href="bibliotekarProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Valentina K.
                                        </a>
                                        je izdala knjigu <span class="font-bold">Robinson Kruso</span>
                                        <a href="ucenikProfile.php" class="text-blue-600 hover:text-blue-800">
                                            Petru Njegosu
                                        </a>
                                        dana <span class="font-bold">12.03.2020.</span>
                                        <a href="izdavanjeDetalji.php" class="text-blue-600 hover:text-blue-800">
                                            pogledaj detaljnije >>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="inline-block w-full mt-6">
                            <button type="button"
                                class="activity-showMore w-full focus:outline-none text-gray-600 text-sm py-2.5 px-5 rounded-md border transition duration-300 ease-in border-gray-600 hover:bg-[#576CDF] hover:text-white">Show more</button>
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
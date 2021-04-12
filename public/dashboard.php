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
    <title>Dashboard | Library - ICT Cortex student project</title>
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
                <h1 class="pl-[30px] pb-[20px] text-[35px] font-bold border-b-[2px] border-gray-300">
                    Dashboard
                </h1>
            </div>
            <!-- Space for content -->
            <div class="pl-[30px] scroll height-dashboard overflow-auto mt-[20px] pb-[30px]">
                <div class="flex flex-row justify-between">
                    <div class="mr-[30px]">
                        <h2 class="text-[20px] font-medium uppercase mb-[20px]">Aktivnosti</h2>
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
                                class="activity-showMore w-full focus:outline-none text-gray-600 text-sm py-2.5 px-5 rounded-md border transition duration-300 ease-in border-gray-600 hover:bg-gray-600 hover:text-white">Show more</button>
                        </div>
                    </div>
                    <div class="mr-[25px] ">
                        <h2 class="text-[20px] font-medium uppercase mb-[20px] text-left">
                            Zahtjevi za iznajmljivanje knjiga
                        </h2>

                        <div>
                            <table class="w-[560px] table-auto">
                                <tbody class="bg-gray-200">
                                    <tr class="bg-white border-b-[2px] border-gray-200">
                                        <td class="flex flex-row items-center px-2 py-4">
                                            <img class="object-cover w-8 h-8 rounded-full "
                                                src="img/profileImg-default.jpg" alt="" />
                                            <span class="ml-2 font-semibold text-center">Pero Perovic</span>
                                        <td>
                                        </td>
                                        <td class="px-2 py-2">
                                            Ep o Gilgamesu
                                        </td>
                                        <td class="px-2 py-2">
                                            <span class="px-[10px] py-[3px] bg-gray-300">05.11.2020</span>
                                        </td>
                                        <td class="px-2 py-2">
                                            <a href="#" class="hover:text-green-500 mr-[5px]">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="#" class="hover:text-red-500 ">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b-[2px] border-gray-200">
                                        <td class="flex flex-row items-center px-2 py-4">
                                            <img class="object-cover w-8 h-8 rounded-full "
                                                src="img/profileImg-default.jpg" alt="" />
                                            <span class="ml-2 font-semibold text-center">Pero Perovic</span>
                                        <td>
                                        </td>
                                        <td class="px-2 py-2">
                                            Ep o Gilgamesu
                                        </td>
                                        <td class="px-2 py-2">
                                            <span class="px-[10px] py-[3px] bg-gray-300">31.04.2019</span>
                                        </td>
                                        <td class="px-2 py-2">
                                            <a href="#" class="hover:text-green-500 mr-[5px]">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="#" class="hover:text-red-500 ">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b-[2px] border-gray-200">
                                        <td class="flex flex-row items-center px-2 py-4">
                                            <img class="object-cover w-8 h-8 rounded-full "
                                                src="img/profileImg-default.jpg" alt="" />
                                            <span class="ml-2 font-semibold text-center">Pero Perovic</span>
                                        <td>
                                        </td>
                                        <td class="px-2 py-2">
                                            Ilijada
                                        </td>
                                        <td class="px-2 py-2">
                                            <span class="px-[10px] py-[3px] bg-gray-300">05.11.2020</span>
                                        </td>
                                        <td class="px-2 py-2">
                                            <a href="#" class="hover:text-green-500 mr-[5px]">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="#" class="hover:text-red-500 ">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr class="bg-white border-b-[2px] border-gray-200">
                                        <td class="flex flex-row items-center px-2 py-4">
                                            <img class="object-cover w-8 h-8 rounded-full "
                                                src="img/profileImg-default.jpg" alt="" />
                                            <span class="ml-2 font-semibold text-center">Pero Perovic</span>
                                        <td>
                                        </td>
                                        <td class="px-2 py-2">
                                            Ep o Gilgamesu
                                        </td>
                                        <td class="px-2 py-2">
                                            <span class="px-[10px] py-[3px] bg-gray-300">31.02.2021</span>
                                        </td>
                                        <td class="px-2 py-2">
                                            <a href="#" class="hover:text-green-500 mr-[5px]">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="#" class="hover:text-red-500 ">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-right mt-[5px]">
                                <a href="#" class="text-blue-600 hover:text-blue-800">
                                    <i class="fas fa-calendar-alt mr-[4px]" aria-hidden="true"></i>
                                    Prikazi sve
                                </a>
                            </div>
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
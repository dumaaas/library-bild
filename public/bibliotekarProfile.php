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
        <section class="w-screen h-screen pl-[80px] py-4 text-gray-700">
            <!-- Heading of content -->
            <div class="heading">
                <div class="flex flex-row justify-between border-b-[2px] border-gray-300">
                    <div class="pl-[30px] pb-[10px] flex flex-col">
                        <div>
                            <h1 class=" text-[35px] font-bold">
                                Valentina Kascelan
                            </h1>
                        </div>
                        <div>
                            <nav class="w-full rounded">
                                <ol class="flex list-reset">
                                    <li>
                                        <a href="bibliotekari.php" class="font-medium text-blue-600 hover:text-blue-800">
                                            Svi bibliotekari
                                        </a>
                                    </li>
                                    <li>
                                        <span class="mx-2">/</span>
                                    </li>
                                    <li>
                                        <a href="bibliotekarProfile.php" class="font-medium text-blue-600 hover:text-blue-800">
                                            ID-242
                                        </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="mt-[15px] mr-[30px]">
                        <a href="#" class="inline hover:text-blue-600">
                            <i class="fas fa-redo-alt mr-[3px]"></i>
                            Resetuj sifru
                        </a>
                        <a href="#" class="hover:text-blue-600 inline ml-[20px] pr-[10px]">
                            <i class="fas fa-edit mr-[3px] "></i>
                            Izmjeni podatke
                        </a>
                        <p class="inline cursor-pointer text-[25px] py-[10px] pl-[30px] border-l-[2px] border-gray-300">
                            <i class="fas fa-ellipsis-v"></i>
                        </p>
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
                            <p class="font-medium text-blue-500">valentina.kascelan@domain.net</p>
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

    <!-- Notification for small devices -->
    <?php include('includes/layout/inProgress.php'); ?>


    <!-- Scripts -->
    <?php include('includes/layout/scripts.php'); ?>
    <!-- End Scripts -->

</body>

</html>
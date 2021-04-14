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
    <title>New student | Library - ICT Cortex student project</title>
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
                                Novi ucenik
                            </h1>
                        </div>
                        <div>
                            <nav class="w-full rounded">
                                <ol class="flex list-reset">
                                    <li>
                                        <a href="ucenik.php" class="font-medium text-blue-600 hover:text-blue-800">
                                            Svi ucenici
                                        </a>
                                    </li>
                                    <li>
                                        <span class="mx-2">/</span>
                                    </li>
                                    <li>
                                        <a href="#" class="font-medium text-gray-500 hover:text-blue-800">
                                            Novi ucenik
                                        </a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Space for content -->
            <div class="scroll height-content section-content">
                <form class="text-gray-700">
                    <div class="flex flex-row ml-[30px]">
                        <div class="w-[50%] mb-[100px]">
                            <div class="mt-[20px]">
                                <span>Ime i prezime</span>
                                <input type="text" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"/>
                            </div>

                            <div class="mt-[20px]">
                                <span>Tip korisnika</span>
                                <select class="flex w-[90%] mt-2 px-2 py-2 border bg-gray-300 border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-[#576cdf]" name="tip_korisnika" disabled>
                                    <option value="">
                                        Ucenik
                                    </option>
                                </select>
                            </div>

                            <div class="mt-[20px]">
                                <span>JMBG</span>
                                <input type="text" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"/>
                            </div>

                            <div class="mt-[20px]">
                                <span>E-mail</span>
                                <input type="email" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"/>
                            </div>

                            <div class="mt-[20px]">
                                <span>Korisnicko ime</span>
                                <input type="text" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"/>
                            </div>

                            <div class="mt-[20px]">
                                <span>Sifra</span>
                                <input type="password" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"/>
                            </div>

                            <div class="mt-[20px]">
                                <span>Ponovi sifru</span>
                                <input type="password" class="flex w-[90%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]"/>
                            </div>
                        </div>

                        <div class="mt-[50px]">
                            <div id="empty-cover-art" class="w-48 h-48 py-16 text-center border-2 border-gray-300 border-solid">
                                <svg class="mx-auto feather feather-image" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                    <polyline points="21 15 16 10 5 21"></polyline>
                                </svg>
                                <div class="py-4">
                                    <label class="mt-6 cursor-pointer">
                                        <span class="px-4 py-2 mt-2 leading-normal">Add photo</span>
                                        <input type='file' class="hidden" :multiple="multiple" :accept="accept" onchange="loadFileStudent(event)" />
                                    </label>
                                </div>
                                <img id="image-output-student" class="hidden w-48 h-48 absolute top-[215px]" />	
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
                                <button id="vratiKnjigu" type="button"
                                        class="w-[150px] disabled:opacity-50 focus:outline-none text-white text-sm py-2.5 px-5 rounded-md border transition duration-300 ease-in border-gray-600 bg-blue-500 hover:bg-blue-800">
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


</body>

</html>
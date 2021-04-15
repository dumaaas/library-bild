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
                                <div class="rounded">
                                    <div class="relative">
                                        <button class="w-auto rounded focus:outline-none" id="uceniciMenu">
                                            <span class="float-left">Ucenici: Svi <i
                                                    class="px-[7px] fas fa-angle-down"></i></span>
                                        </button>
                                        <div id="uceniciDropdown"
                                            class="uceniciMenu hidden absolute rounded bg-white min-w-[310px] p-[10px] shadow-md pin-t pin-l border-2 border-gray-300">
                                            <ul class="border-b-2 border-gray-300 list-reset">
                                                <li class="p-2 pb-[15px] border-b-[2px] relative border-gray-300">
                                                    <input class="w-full h-10 px-2 border-2 rounded focus:outline-none"
                                                        placeholder="Search"
                                                        onkeyup="filterFunction('searchUcenici', 'uceniciDropdown')"
                                                        id="searchUcenici"><br>
                                                    <button
                                                        class="absolute block text-xl text-center text-gray-400 transition-colors w-7 h-7 leading-0 top-[14px] right-4 focus:outline-none hover:text-gray-900">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </li>
                                                <div class="h-[200px] scroll">
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="40px" height="30px" class="ml-[15px] rounded-full"
                                                            src="img/profileStudent.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Ucenik Ucenikovic
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="40px" height="30px" class="ml-[15px] rounded-full"
                                                            src="img/profileStudent.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Pero Perovic
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="40px" height="30px" class="ml-[15px] rounded-full"
                                                            src="img/profileStudent.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Marko Markovic
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="40px" height="30px" class="ml-[15px] rounded-full"
                                                            src="img/profileStudent.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Nikola Nikolic
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="40px" height="30px" class="ml-[15px] rounded-full"
                                                            src="img/profileStudent.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Zivko Zivkovic
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="40px" height="30px" class="ml-[15px] rounded-full"
                                                            src="img/profileStudent.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Petar Petrovic
                                                        </p>
                                                    </li>
                                                </div>
                                            </ul>
                                            <div class="flex pt-[10px]">
                                                <a href="#"
                                                    class="py-2 px-[20px] transition duration-300 ease-in hover:bg-gray-400 bg-gray-300 rounded-[10px]">Sacuvaj</a>
                                                <a href="#"
                                                    class="ml-[20px] py-2 px-[20px] transition duration-300 ease-in bg-red-500 hover:bg-red-600 text-white rounded-[10px]">Ponisti</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-[25px]">
                                <div class="rounded">
                                    <div class="relative">
                                        <button class="w-auto rounded focus:outline-none" id="bibliotekariMenu">
                                            <span class="float-left">Bibliotekari: Svi <i
                                                    class="px-[7px] fas fa-angle-down"></i></span>
                                        </button>
                                        <div id="bibliotekariDropdown"
                                            class="bibliotekariMenu hidden absolute rounded bg-white min-w-[310px] p-[10px] shadow-md pin-t pin-l border-2 border-gray-300">
                                            <ul class="border-b-2 border-gray-300 list-reset">
                                                <li class="p-2 pb-[15px] border-b-[2px] relative border-gray-300">
                                                    <input class="w-full h-10 px-2 border-2 rounded focus:outline-none"
                                                        placeholder="Search"
                                                        onkeyup="filterFunction('searchBibliotekari', 'bibliotekariDropdown')"
                                                        id="searchBibliotekari"><br>
                                                    <button
                                                        class="absolute block text-xl text-center text-gray-400 transition-colors w-7 h-7 leading-0 top-[14px] right-4 focus:outline-none hover:text-gray-900">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </li>
                                                <div class="h-[200px] scroll">
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="40px" height="30px" class="ml-[15px] rounded-full"
                                                            src="img/profileExample.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Bibliotekar Bulatovic
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="40px" height="30px" class="ml-[15px] rounded-full"
                                                            src="img/profileExample.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Pero Perovic
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="40px" height="30px" class="ml-[15px] rounded-full"
                                                            src="img/profileExample.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Marko Markovic
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="40px" height="30px" class="ml-[15px] rounded-full"
                                                            src="img/profileExample.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Nikola Nikolic
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="40px" height="30px" class="ml-[15px] rounded-full"
                                                            src="img/profileExample.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Zivko Zivkovic
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="40px" height="30px" class="ml-[15px] rounded-full"
                                                            src="img/profileExample.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Petar Petrovic
                                                        </p>
                                                    </li>
                                                </div>
                                            </ul>
                                            <div class="flex pt-[10px]">
                                                <a href="#"
                                                    class="py-2 px-[20px] transition duration-300 ease-in hover:bg-gray-400 bg-gray-300 rounded-[10px]">Sacuvaj</a>
                                                <a href="#"
                                                    class="ml-[20px] py-2 px-[20px] transition duration-300 ease-in bg-red-500 hover:bg-red-600 text-white rounded-[10px]">Ponisti</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-[25px]">
                                <div class="rounded">
                                    <div class="relative">
                                        <button class="w-auto rounded focus:outline-none" id="knjigeMenu">
                                            <span class="float-left">Knjige: Sve <i
                                                    class="px-[7px] fas fa-angle-down"></i></span>
                                        </button>
                                        <div id="knjigeDropdown"
                                            class="knjigeMenu hidden absolute rounded bg-white min-w-[310px] p-[10px] shadow-md pin-t pin-l border-2 border-gray-300">
                                            <ul class="border-b-2 border-gray-300 list-reset">
                                                <li class="p-2 pb-[15px] border-b-[2px] relative border-gray-300">
                                                    <input class="w-full h-10 px-2 border-2 rounded focus:outline-none"
                                                        placeholder="Search"
                                                        onkeyup="filterFunction('searchKnjige', 'knjigeDropdown')"
                                                        id="searchKnjige"><br>
                                                    <button
                                                        class="absolute block text-xl text-center text-gray-400 transition-colors w-7 h-7 leading-0 top-[14px] right-4 focus:outline-none hover:text-gray-900">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </li>
                                                <div class="h-[200px] scroll">
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="30px" height="30px" class="ml-[15px]"
                                                            src="img/tomsojer.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Tom Sojer
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="30px" height="30px" class="ml-[15px]"
                                                            src="img/tomsojer.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Ilijada
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="30px" height="30px" class="ml-[15px]"
                                                            src="img/tomsojer.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Robinson Kruso
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="30px" height="30px" class="ml-[15px]"
                                                            src="img/tomsojer.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Orlovi rano lete
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="30px" height="30px" class="ml-[15px]"
                                                            src="img/tomsojer.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Tom Sojer
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <img width="30px" height="30px" class="ml-[15px]"
                                                            src="img/tomsojer.jpg">
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Hari Poter
                                                        </p>
                                                    </li>
                                                </div>
                                            </ul>
                                            <div class="flex pt-[10px]">
                                                <a href="#"
                                                    class="py-2 px-[20px] transition duration-300 ease-in hover:bg-gray-400 bg-gray-300 rounded-[10px]">Sacuvaj</a>
                                                <a href="#"
                                                    class="ml-[20px] py-2 px-[20px] transition duration-300 ease-in bg-red-500 hover:bg-red-600 text-white rounded-[10px]">Ponisti</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-[25px]">
                                <div class="rounded">
                                    <div class="relative">
                                        <button class="w-auto rounded focus:outline-none" id="transakcijeMenu">
                                            <span class="float-left">Transakcije: Sve <i
                                                    class="px-[7px] fas fa-angle-down"></i></span>
                                        </button>
                                        <div id="transakcijeDropdown"
                                            class="transakcijeMenu hidden absolute rounded bg-white min-w-[310px] p-[10px] shadow-md pin-t pin-l border-2 border-gray-300">
                                            <ul class="border-b-2 border-gray-300 list-reset">
                                                <li class="p-2 pb-[15px] border-b-[2px] relative border-gray-300">
                                                    <input class="w-full h-10 px-2 border-2 rounded focus:outline-none"
                                                        placeholder="Search"
                                                        onkeyup="filterFunction('searchTransakcije', 'transakcijeDropdown')"
                                                        id="searchTransakcije"><br>
                                                    <button
                                                        class="absolute block text-xl text-center text-gray-400 transition-colors w-7 h-7 leading-0 top-[14px] right-4 focus:outline-none hover:text-gray-900">
                                                        <i class="fas fa-search"></i>
                                                    </button>
                                                </li>
                                                <div class="h-[200px] scroll">
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Izdavanje knjiga
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Vracanje knjiga
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Unos nove knjige
                                                        </p>
                                                    </li>
                                                    <li class="flex p-2 mt-[2px] pt-[15px] group hover:bg-gray-200">
                                                        <label class="flex items-center justify-start">
                                                            <div
                                                                class="flex items-center justify-center flex-shrink-0 w-6 h-6 mr-2 bg-white border-2 border-gray-400 rounded focus-within:border-blue-500">
                                                                <input type="checkbox" class="absolute opacity-0">
                                                                <svg class="hidden w-4 h-4 text-green-500 pointer-events-none fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M0 11l2-2 5 5L18 3l2 2L7 18z" />
                                                                </svg>
                                                            </div>
                                                        </label>
                                                        <p
                                                            class="block p-2 text-black cursor-pointer group-hover:text-blue-600">
                                                            Brisanje knjige
                                                        </p>
                                                    </li>
                                                </div>
                                            </ul>
                                            <div class="flex pt-[10px]">
                                                <a href="#"
                                                    class="py-2 px-[20px] transition duration-300 ease-in hover:bg-gray-400 bg-gray-300 rounded-[10px]">Sacuvaj</a>
                                                <a href="#"
                                                    class="ml-[20px] py-2 px-[20px] transition duration-300 ease-in bg-red-500 hover:bg-red-600 text-white rounded-[10px]">Ponisti</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ml-[25px]">

                                <input type="date" value="today" class="cursor-pointer focus:outline-none">
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
                                class="activity-showMore w-full focus:outline-none text-gray-600 text-sm py-2.5 px-5 rounded-md border transition duration-300 ease-in border-gray-600 hover:bg-[#576CDF] hover:text-white">Show
                                more</button>
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
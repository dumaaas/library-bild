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
    <title>Knjiga | Multimedija | Library - ICT Cortex student project</title>
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
                                            <a href="#" class="font-medium text-blue-600 hover:text-blue-800">
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
            <div class="flex flex-row overflow-auto height-osnovniDetalji">
                <div class="w-[80%]">
                    <div class="border-b-[2px] py-4 text-gray-500 border-gray-300 pl-[30px]">
                        <a href="knjigaOsnovniDetalji.php" class="inline hover:text-blue-800">
                            Osnovni detalji
                        </a>
                        <a href="knjigaSpecifikacija.php" class="inline ml-[70px] hover:text-blue-800">
                            Specifikacija
                        </a>
                        <a href="#" class="inline ml-[70px] hover:text-blue-800">
                            Evidencija iznajmljivanja
                        </a>
                        <a href="#" class="inline ml-[70px] active-book-nav hover:text-blue-800">
                            Multimedija
                        </a>
                    </div>
                    <div class="">
                        <!-- Space for content -->
                        <div class="mt-[20px] mx-0 w-[100%]">
                            <div class="flex flex-row">
                                <div class="w-[100%]">
                                    <div class="w-[90%] mx-auto bg-white rounded p7 mt-[20px]">
                                        <div x-data="dataFileDnD()" class="relative flex flex-col p-4 text-gray-400 border border-gray-200 rounded">
                                            <div x-ref="dnd"
                                                class="relative flex flex-col text-gray-400 border border-gray-200 border-dashed rounded cursor-pointer">
                                                <input accept="*" type="file" multiple
                                                    class="absolute inset-0 z-50 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
                                                    @change="addFiles($event)"
                                                    @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
                                                    @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                                                    @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                                                    title="" />

                                                <div class="flex flex-col items-center justify-center py-10 text-center">
                                                    <svg class="w-6 h-6 mr-1 text-current-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                    </svg>
                                                    <p class="m-0">Drag your files here or click in this area.</p>
                                                </div>
                                            </div>

                                            <!-- <template x-if="files.length > 0"> -->
                                                <div class="grid grid-cols-2 gap-4 mt-4 2xl:grid-cols-4" @drop.prevent="drop($event)"
                                                    @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
                                                    <!-- Image 1 -->
                                                    <div class="relative flex flex-col p-2 text-xs bg-white bg-opacity-50">
                                                        <img src="img/tomsojer.jpg" alt="" class="h-[300px]">
                                                        <!-- Checkbox -->
                                                        <input class="absolute top-[10px] right-[10px] z-50 p-1 bg-white rounded-bl focus:outline-none" type="radio" name="chosen_image" checked/>
                                                            <!-- End checkbox -->
                                                        <button class="absolute bottom-[5px] right-[6px] z-50 p-1 bg-white rounded-bl focus:outline-none" type="button">
                                                            <svg class="w-[25px] h-[25px] text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                nviewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </button>
                                                        <div class="absolute bottom-[20px] left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50 text-center">
                                                            <span class="w-full font-bold text-gray-900 truncate">tomsojer.jpg</span>
                                                            <span class="text-xs text-gray-900">89kB</span>
                                                        </div>
                                                    </div>
                                                    <!-- End of image 1 -->
                                                    <!-- Image 2 -->
                                                    <div class="relative flex flex-col p-2 text-xs bg-white bg-opacity-50">
                                                        <img src="img/tomsojer2.jpg" alt="" class="h-[300px]">
                                                        <!-- Checkbox -->
                                                        <input class="absolute top-[10px] right-[10px] z-50 p-1 bg-white rounded-bl focus:outline-none" type="radio" name="chosen_image"/>
                                                            <!-- End checkbox -->
                                                        <button class="absolute bottom-[5px] right-[6px] z-50 p-1 bg-white rounded-bl focus:outline-none" type="button">
                                                            <svg class="w-[25px] h-[25px] text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                nviewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </button>
                                                        <div class="absolute bottom-[20px] left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50 text-center">
                                                            <span class="w-full font-bold text-gray-900 truncate">tomsojer2.jpg</span>
                                                            <span class="text-xs text-gray-900">41kB</span>
                                                        </div>
                                                    </div>
                                                    <!-- End of image 2 -->

                                                    <template x-for="(_, index) in Array.from({ length: files.length })">
                                                        <div class="relative flex flex-col items-center overflow-hidden text-center bg-gray-100 border rounded cursor-move select-none"
                                                            style="padding-top: 100%;" @dragstart="dragstart($event)" @dragend="fileDragging = null"
                                                            :class="{'border-blue-600': fileDragging == index}" draggable="true" :data-index="index">
                                                            <!-- Checkbox -->
                                                            <input class="absolute top-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none" type="radio" name="chosen_image"/>
                                                            <!-- End checkbox -->
                                                            <button class="absolute bottom-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none" type="button" @click="remove(index)">
                                                                <svg class="w-[25px] h-[25px] text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    nviewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                                </svg>
                                                            </button>
                                                            <template x-if="files[index].type.includes('audio/')">
                                                                <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                        d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                                                </svg>
                                                            </template>
                                                            <template x-if="files[index].type.includes('application/') || files[index].type === ''">
                                                                <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                                                </svg>
                                                                </template>
                                                            <template x-if="files[index].type.includes('image/')">
                                                                <img class="absolute inset-0 z-0 object-cover w-full h-full border-4 border-white preview"
                                                                    x-bind:src="loadFile(files[index])" />
                                                            </template>
                                                            <template x-if="files[index].type.includes('video/')">
                                                                <video
                                                                    class="absolute inset-0 object-cover w-full h-full border-4 border-white pointer-events-none preview">
                                                                    <fileDragging x-bind:src="loadFile(files[index])" type="video/mp4">
                                                                </video>
                                                                </template>

                                                            <div class="absolute bottom-0 left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50">
                                                                <span class="w-full font-bold text-gray-900 truncate"
                                                                    x-text="files[index].name">Loading</span>
                                                                <span class="text-xs text-gray-900" x-text="humanFileSize(files[index].size)">...</span>
                                                            </div>

                                                            <div class="absolute inset-0 z-40 transition-colors duration-300" @dragenter="dragenter($event)"
                                                                @dragleave="fileDropping = null"
                                                                :class="{'bg-blue-200 bg-opacity-80': fileDropping == index && fileDragging != index}">
                                                            </div>
                                                            
                                                        </div>
                                                    </template>
                                                </div>
                                            <!-- </template> -->
                                        </div>
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
                            <a href="#" class="text-blue-500 hover:text-blue-800">
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
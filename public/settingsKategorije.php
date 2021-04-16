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
    <title>Polisa | Library - ICT Cortex student project</title>
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
                <div class="border-b-[2px] border-gray-300">
                    <div class="pl-[30px] pb-[10px]">
                            <h1 class=" text-[35px] font-bold">
                                Settings
                            </h1>
                    </div>
                </div>
            </div>
            <div class="border-b-[2px] py-4 text-gray-500 border-gray-300 pl-[30px]">
                <a href="settingsPolisa.php" class="inline">
                    Polisa
                </a>
                <a href="settingsKategorije.php" class="inline ml-[70px] hover:text-blue-800 active-book-nav">
                    Kategorije
                </a>
                <a href="#" class="inline ml-[70px] hover:text-blue-800">
                    Zanrovi
                </a>
                <a href="#" class="inline ml-[70px] hover:text-blue-800">
                    Izdavac
                </a>
                <a href="#" class="inline ml-[70px] hover:text-blue-800">
                    Povez
                </a>
                <a href="#" class="inline ml-[70px] hover:text-blue-800">
                    Format
                </a>
                <a href="#" class="inline ml-[70px] hover:text-blue-800">
                    Pismo
                </a>
            </div>
            <div class="height-ucenikProfile pb-[30px] scroll">
                    <div class="flex items-center px-[50px] py-8 space-x-3 rounded-lg">
                        <a href="novaKategorija.php">
                            <button type="button" class="px-4 py-2 text-lg font-semibold tracking-wider text-white bg-blue-500 hover:bg-blue-600 focus:outline-none hover:outline-none w-[250px] border-2 border-black">Novi kategorija</button>
                        </a>
                    </div>
          
                    <div class="inline-block min-w-full px-[50px] pt-3 overflow-hidden align-middle bg-white rounded-bl-lg rounded-br-lg shadow-dashboard">
                        <table class="min-w-full border-2 border-gray-300" id="myTable">
                            <thead>
                                <tr class="border-b-4 border-gray-300">
                                    <th class="px-4 py-3 leading-4 tracking-wider text-left text-blue-500">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </th>
                                    <th class="px-4 py-3 leading-4 tracking-wider text-left">Naziv kategorije<a href="#"><i class="ml-3 fa-lg fas fa-long-arrow-alt-down" onclick="sortTable()"></i></a></th>
                                    <th class="px-4 py-3 text-sm leading-4 tracking-wider text-left">Opis</th>
                                    <th class="px-4 py-3"> </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr class="border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="flex flex-row items-center px-4 py-4">
                                        <i class="fas fa-utensils fa-lg"></i>
                                        <a href="ucenikProfile.php">
                                            <span class="ml-4 font-semibold text-center">Hrana i pice</span>
                                        </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Lorem ipsum dolor sit amet consectetur adipisicing elit,</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </p>
                                    </td>
                                </tr>
                                <tr class="border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="flex flex-row items-center px-4 py-4">
                                        <i class="fas fa-child fa-lg"></i>
                                        <a href="ucenikProfile.php">
                                            <span class="ml-4 font-semibold text-center">Djecije knjige</span>
                                        </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Lorem ipsum dolor sit amet consectetur adipisicing elit,</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </p>
                                    </td>
                                </tr>
                                <tr class="border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="flex flex-row items-center px-4 py-4">
                                        <i class="far fa-clock fa-lg"></i>
                                        <a href="ucenikProfile.php">
                                            <span class="ml-3 font-semibold text-center">Istorija</span>
                                        </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Lorem ipsum dolor sit amet consectetur adipisicing elit,</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </p>
                                    </td>
                                </tr>
                                <tr class="border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="flex flex-row items-center px-4 py-4">
                                        <i class="fas fa-book fa-lg"></i>
                                        <a href="ucenikProfile.php">
                                            <span class="ml-4 font-semibold text-center">Skolske knjige</span>
                                        </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Lorem ipsum dolor sit amet consectetur adipisicing elit,</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </p>
                                    </td>
                                </tr>
                                <tr class="border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="flex flex-row items-center px-4 py-4">
                                        <i class="fas fa-sort-numeric-down fa-lg"></i>
                                        <a href="ucenikProfile.php">
                                            <span class="ml-4 font-semibold text-center">Nauka, priroda i matematika</span>
                                        </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Lorem ipsum dolor sit amet consectetur adipisicing elit,</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </p>
                                    </td>
                                </tr>
                                <tr class="border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="flex flex-row items-center px-4 py-4">
                                        <i class="fas fa-balance-scale fa-lg"></i>
                                        <a href="ucenikProfile.php">
                                            <span class="ml-2 font-semibold text-center">Pravo</span>
                                        </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Lorem ipsum dolor sit amet consectetur adipisicing elit,</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </p>
                                    </td>
                                </tr>
                                <tr class="border-b-2 border-gray-300">
                                    <td class="px-4 py-4 whitespace-no-wrap">
                                        <label class="inline-flex items-center">
                                            <input type="checkbox" class="form-checkbox">
                                        </label>
                                    </td>
                                    <td class="flex flex-row items-center px-4 py-4">
                                        <i class="fas fa-utensils fa-lg"></i>
                                        <a href="ucenikProfile.php">
                                            <span class="ml-4 font-semibold text-center">Hrana i pice</span>
                                        </a>
                                    </td>
                                    <td class="px-4 py-4 text-sm leading-5 whitespace-no-wrap">Lorem ipsum dolor sit amet consectetur adipisicing elit,</td>
                                    <td class="px-4 py-4 text-sm leading-5 text-right whitespace-no-wrap">
                                        <p class="inline cursor-pointer text-[20px] py-[10px] px-[30px] border-gray-300">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="flex flex-row items-center justify-end mt-2">
                            <div>
                                <p class="inline text-md">
                                    Rows per page:
                                </p>
                                <select
                                    class=" text-gray-700 bg-white rounded-md w-[46px] focus:outline-none focus:ring-primary-500 focus:border-primary-500 text-md"
                                    name="ucenici">
                                    <option value="">
                                        20
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

                            <div>
                                <nav class="relative z-0 inline-flex">
                                    <div>
                                        <a href="#" class="relative inline-flex items-center px-4 py-2 -ml-px font-medium leading-5 transition duration-150 ease-in-out bg-white text-md focus:z-10 focus:outline-none">
                                            1 of 1
                                        </a>
                                    </div>
                                    <div>
                                        <a href="#" class="relative inline-flex items-center px-2 py-2 font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white text-md rounded-l-md hover:text-gray-400 focus:z-10 focus:outline-none" aria-label="Previous" v-on:click.prevent="changePage(pagination.current_page - 1)">
                                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </div>
                                    <div v-if="pagination.current_page < pagination.last_page">
                                        <a href="#" class="relative inline-flex items-center px-2 py-2 -ml-px font-medium leading-5 text-gray-500 transition duration-150 ease-in-out bg-white text-md rounded-r-md hover:text-gray-400 focus:z-10 focus:outline-none" aria-label="Next">
                                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </div>
                                </nav>
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
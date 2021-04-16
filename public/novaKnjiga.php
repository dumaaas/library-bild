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
                                <span>Izaberite kategorije <span class="text-red-500">*</span></span>
                                    <select x-cloak id="kategorija">
                                        <option value="1">Udzbenici</option>
                                        <option value="2">Romani</option>
                                    </select>

                                    <div x-data="dropdown()" x-init="loadOptions()" class="flex flex-col w-[90%]">
                                        <input name="values" id="kategorijaInput" type="hidden" x-bind:value="selectedValues()">
                                        <div class="relative inline-block w-[100%]">
                                            <div class="relative flex flex-col items-center">
                                                <div x-on:click="open" class="w-full svelte-1l8159u">
                                                    <div class="flex p-1 my-2 bg-white border border-gray-300 shadow-sm svelte-1l8159u focus-within:ring-2 focus-within:ring-[#576cdf]" onclick="clearErrorsKategorija()">
                                                        <div class="flex flex-wrap flex-auto">
                                                            <template x-for="(option,index) in selected" :key="options[option].value">
                                                                <div class="flex items-center justify-center px-2 py-1 m-1 font-medium text-[#576cdf] bg-white border border-[#576cdf] rounded-full ">
                                                                    <div class="text-xs font-normal leading-none max-w-full flex-initial x-model=" options[option] x-text="options[option].text"></div>
                                                                        <div class="flex flex-row-reverse flex-auto">
                                                                            <div x-on:click="remove(index,option)">
                                                                                <svg class="w-6 h-6 fill-current " role="button" viewBox="0 0 20 20">
                                                                                    <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                                                                            c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                                                                            l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                                                                            C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </template>
                                                            <div x-show="selected.length    == 0" class="flex-1">
                                                                <input class="w-full h-full p-1 px-2 text-gray-800 bg-transparent outline-none appearance-none" x-bind:value="selectedValues()">
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center w-8 py-1 pl-2 pr-1 text-gray-300 svelte-1l8159u">
                                                            <button type="button" x-show="isOpen() === true" x-on:click="open" class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
                                                                <svg version="1.1" class="w-[10px] h-[9px] ml-[15px]" viewBox="0 0 20 20" stroke="#374151" stroke-width="3">
                                                                    <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
                                                                            c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
                                                                            L17.418,6.109z" />
                                                                </svg>
                                                            </button>
                                                            <button type="button" x-show="isOpen() === false" @click="close" class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
                                                                <svg version="1.1" class="w-[10px] h-[9px] ml-[15px]" viewBox="0 0 20 20" stroke="#374151" stroke-width="3">
                                                                    <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
                                                                            c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
                                                                            L17.418,6.109z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full px-4">
                                                    <div x-show.transition.origin.top="isOpen()" class="absolute left-0 z-40 w-full overflow-y-auto bg-white rounded shadow top-100 max-h-select svelte-5uyqqj" x-on:click.away="close">
                                                        <div class="flex flex-col w-full">
                                                            <template x-for="(option,index) in options" :key="option">
                                                                <div>
                                                                    <div class="w-full border-b border-gray-100 rounded-t cursor-pointer hover:bg-teal-100" @click="select(index,$event)">
                                                                        <div x-bind:class="option.selected ? 'border-teal-600' : ''" class="relative flex items-center w-full p-2 pl-2 border-l-2 border-transparent">
                                                                            <div class="flex items-center w-full">
                                                                                <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </template>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div id="validateKategorija"></div>
                            </div>

                            <div class="mt-[20px]">
                                <span>Izaberite zanrove <span class="text-red-500">*</span></span>
                                    <select x-cloak id="zanr">
                                        <option value="1">Poezija</option>
                                        <option value="2">Strucna literatura</option>
                                    </select>

                                    <div x-data="dropdown()" x-init="loadOptionsZanrovi()" class="flex flex-col w-[90%]">
                                        <input name="values" id="zanroviInput" type="hidden" x-bind:value="selectedValues()">
                                        <div class="relative inline-block w-[100%]">
                                            <div class="relative flex flex-col items-center">
                                                <div x-on:click="open" class="w-full svelte-1l8159u">
                                                    <div class="flex p-1 my-2 bg-white border border-gray-300 shadow-sm svelte-1l8159u focus-within:ring-2 focus-within:ring-[#576cdf]" onclick="clearErrorsZanr()">
                                                        <div class="flex flex-wrap flex-auto">
                                                            <template x-for="(option,index) in selected" :key="options[option].value">
                                                                <div class="flex items-center justify-center px-2 py-1 m-1 font-medium text-[#576cdf] bg-white border border-[#576cdf] rounded-full ">
                                                                    <div class="text-xs font-normal leading-none max-w-full flex-initial x-model=" options[option] x-text="options[option].text"></div>
                                                                        <div class="flex flex-row-reverse flex-auto">
                                                                            <div x-on:click="remove(index,option)">
                                                                                <svg class="w-6 h-6 fill-current " role="button" viewBox="0 0 20 20">
                                                                                    <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                                                                            c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                                                                            l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                                                                            C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </template>
                                                            <div x-show="selected.length    == 0" class="flex-1">
                                                                <input class="w-full h-full p-1 px-2 text-gray-800 bg-transparent outline-none appearance-none" x-bind:value="selectedValues()">
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center w-8 py-1 pl-2 pr-1 text-gray-300 svelte-1l8159u">
                                                            <button type="button" x-show="isOpen() === true" x-on:click="open" class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
                                                                <svg version="1.1" class="w-[10px] h-[9px] ml-[15px]" viewBox="0 0 20 20" stroke="#374151" stroke-width="3">
                                                                    <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
                                                                            c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
                                                                            L17.418,6.109z" />
                                                                </svg>
                                                            </button>
                                                            <button type="button" x-show="isOpen() === false" @click="close" class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
                                                                <svg version="1.1" class="w-[10px] h-[9px] ml-[15px]" viewBox="0 0 20 20" stroke="#374151" stroke-width="3">
                                                                    <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
                                                                            c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
                                                                            L17.418,6.109z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full px-4">
                                                    <div x-show.transition.origin.top="isOpen()" class="absolute left-0 z-40 w-full overflow-y-auto bg-white rounded shadow top-100 max-h-select svelte-5uyqqj" x-on:click.away="close">
                                                        <div class="flex flex-col w-full">
                                                            <template x-for="(option,index) in options" :key="option">
                                                                <div>
                                                                    <div class="w-full border-b border-gray-100 rounded-t cursor-pointer hover:bg-teal-100" @click="select(index,$event)">
                                                                        <div x-bind:class="option.selected ? 'border-teal-600' : ''" class="relative flex items-center w-full p-2 pl-2 border-l-2 border-transparent">
                                                                            <div class="flex items-center w-full">
                                                                                <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </template>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div id="validateZanr"></div>
                            </div>
                        </div>

                        <div class="w-[50%]">
                            <div class="mt-[20px]">
                                <span>Izaberite autore <span class="text-red-500">*</span></span>
                                    <select x-cloak id="autori">
                                        <option value="1">Mark Twain</option>
                                        <option value="2">Pero Peric</option>
                                    </select>

                                    <div x-data="dropdown()" x-init="loadOptionsAutori()" class="flex flex-col w-[90%]">
                                        <input name="values" id="autoriInput" type="hidden" x-bind:value="selectedValues()">
                                        <div class="relative inline-block w-[100%]">
                                            <div class="relative flex flex-col items-center">
                                                <div x-on:click="open" class="w-full svelte-1l8159u">
                                                    <div class="flex p-1 my-2 bg-white border border-gray-300 shadow-sm svelte-1l8159u focus-within:ring-2 focus-within:ring-[#576cdf]" onclick="clearErrorsAutori()">
                                                        <div class="flex flex-wrap flex-auto">
                                                            <template x-for="(option,index) in selected" :key="options[option].value">
                                                                <div class="flex items-center justify-center px-2 py-1 m-1 font-medium text-[#576cdf] bg-white border border-[#576cdf] rounded-full ">
                                                                    <div class="text-xs font-normal leading-none max-w-full flex-initial x-model=" options[option] x-text="options[option].text"></div>
                                                                        <div class="flex flex-row-reverse flex-auto">
                                                                            <div x-on:click="remove(index,option)">
                                                                                <svg class="w-6 h-6 fill-current " role="button" viewBox="0 0 20 20">
                                                                                    <path d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                                                                            c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                                                                            l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                                                                            C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </template>
                                                            <div x-show="selected.length    == 0" class="flex-1">
                                                                <input class="w-full h-full p-1 px-2 text-gray-800 bg-transparent outline-none appearance-none" x-bind:value="selectedValues()">
                                                            </div>
                                                        </div>
                                                        <div class="flex items-center w-8 py-1 pl-2 pr-1 text-gray-300 svelte-1l8159u">
                                                            <button type="button" x-show="isOpen() === true" x-on:click="open" class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
                                                                <svg version="1.1" class="w-[10px] h-[9px] ml-[15px]" viewBox="0 0 20 20" stroke="#374151" stroke-width="3">
                                                                    <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
                                                                            c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
                                                                            L17.418,6.109z" />
                                                                </svg>
                                                            </button>
                                                            <button type="button" x-show="isOpen() === false" @click="close" class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
                                                                <svg version="1.1" class="w-[10px] h-[9px] ml-[15px]" viewBox="0 0 20 20" stroke="#374151" stroke-width="3">
                                                                    <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
                                                                            c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
                                                                            L17.418,6.109z" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full px-4">
                                                    <div x-show.transition.origin.top="isOpen()" class="absolute left-0 z-40 w-full overflow-y-auto bg-white rounded shadow top-100 max-h-select svelte-5uyqqj" x-on:click.away="close">
                                                        <div class="flex flex-col w-full">
                                                            <template x-for="(option,index) in options" :key="option">
                                                                <div>
                                                                    <div class="w-full border-b border-gray-100 rounded-t cursor-pointer hover:bg-teal-100" @click="select(index,$event)">
                                                                        <div x-bind:class="option.selected ? 'border-teal-600' : ''" class="relative flex items-center w-full p-2 pl-2 border-l-2 border-transparent">
                                                                            <div class="flex items-center w-full">
                                                                                <div class="mx-2 leading-6" x-model="option" x-text="option.text"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </template>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div id="validateAutori"></div>
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

                            <div class="mt-[20px]">
                                <span>Kolicina <span class="text-red-500">*</span></span>
                                <input type="text" name="knjigaKolicina" id="knjigaKolicina" class="flex w-[45%] mt-2 px-2 py-2 text-base bg-white border border-gray-300 shadow-sm appearance-none focus:outline-none focus:ring-2 focus:ring-[#576cdf]" onkeydown="clearErrorsKnjigaKolicina()"/>
                                <div id="validateKnjigaKolicina"></div>
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
    </script>
</body>

</html>
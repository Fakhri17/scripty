{{-- @php
    $sidebarMhsList = [
        [
            'name' => 'Dashboard',
            'route' => 'mhs.dashboard',
            'icon' => 'bx bx-home',
        ],
        [
            'name' => 'Documentation',
            'route' => 'mhs.documentation',
            'icon' => 'bx bx-book',
        ],
    ];
@endphp --}}
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scripty</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-gray-50">
    <header
        class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-[48] w-full bg-main-color border-b text-sm py-2.5 sm:py-4 lg:pl-64 shadow-md">
        <nav class="flex items-center w-full px-4 mx-auto basis-full sm:px-6 md:px-8" aria-label="Global">
            <div class="mr-5 lg:mr-0 lg:hidden">
                <a class="flex-none text-xl font-semibold text-white" href="#" aria-label="Brand">Brand</a>
            </div>

            <div class="flex items-center justify-end w-full ml-auto sm:justify-between sm:gap-x-3 sm:order-3">

                <div class="hidden sm:block">

                </div>

                <div class="flex flex-row items-center justify-end gap-2">
                    <div class="px-3 text-base text-white">
                        <span class="font-bold">Welcome, </span>{{ Auth::user()->name }}
                    </div>
                    <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                        <button id="hs-dropdown-with-header" type="button"
                            class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-white align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-main-color focus:ring-offset-2 focus:ring-offset-white transition-all text-xs">
                            <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full ring-2 ring-white"
                                src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                                alt="Image Description">
                        </button>

                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden min-w-[15rem] bg-white shadow-md rounded-lg p-2"
                            aria-labelledby="hs-dropdown-with-header">
                            <div class="px-5 py-3 -m-2 bg-gray-100 rounded-t-lg">
                                <p class="text-sm text-gray-500">Signed in as</p>
                                <p class="text-sm font-medium text-gray-800 ">
                                    {{ Auth::user()->name }}@student.ittelkom-sby.ac.id</p>
                            </div>
                            <div class="py-2 mt-2 first:pt-0 last:pb-0">
                                <form action="/logout" method="POST" class="inline">
                                    @csrf
                                    <button type="submit"
                                        class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm hover:bg-gray-200">
                                        <iconify-icon icon="material-symbols:logout" class="text-lg"></iconify-icon>
                                        Log Out
                                    </button>
                                </form>
                                {{-- <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm hover:bg-gray-200"
                                    href="#">
                                    <iconify-icon icon="material-symbols:logout" class="text-lg"></iconify-icon>
                                    Log Out
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="sticky inset-x-0 top-0 z-20 px-4 bg-white shadow-md border-y sm:px-6 md:px-8 lg:hidden">
        <div class="flex items-center py-4">
            <!-- Navigation Toggle -->
            <button type="button" class="text-gray-500 hover:text-gray-600" data-hs-overlay="#application-sidebar"
                aria-controls="application-sidebar" aria-label="Toggle navigation">
                <span class="sr-only">Toggle Navigation</span>
                <svg class="w-5 h-5" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </button>
            <!-- End Navigation Toggle -->

            <!-- Breadcrumb -->
            <ol class="flex items-center min-w-0 ml-3 whitespace-nowrap" aria-label="Breadcrumb">
                <li class="flex items-center text-sm text-gray-800">
                    Application Layout
                    <svg class="flex-shrink-0 mx-3 overflow-visible h-2.5 w-2.5 text-gray-400" width="16"
                        height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 1L10.6869 7.16086C10.8637 7.35239 10.8637 7.64761 10.6869 7.83914L5 14"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </li>
                <li class="text-sm font-semibold text-gray-800 truncate" aria-current="page">
                    Dashboard
                </li>
            </ol>
            <!-- End Breadcrumb -->
        </div>
    </div>
    <div id="application-sidebar"
        class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed top-0 left-0 bottom-0 z-[60] w-64 bg-white border-r border-gray-200 pt-7 pb-10 overflow-y-auto scrollbar-y lg:block lg:translate-x-0 lg:right-auto lg:bottom-0">
        <div class="px-12 py-6">
            <h1 class="flex-none text-4xl font-black font-poppins text-main-color">Scriptsy</h1>
        </div>

        <nav class="flex flex-col flex-wrap w-full p-6 hs-accordion-group" data-hs-accordion-always-open>
            <ul class="space-y-1.5">
                <li>
                    <a class="flex items-center font-semibold gap-x-3.5 py-2 px-2.5 dashboard-list-active text-base rounded-md"
                        href="javascript:;">
                        <iconify-icon icon="radix-icons:dashboard" class="text-xl"></iconify-icon>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a class="flex items-center font-semibold gap-x-3.5 py-2 px-2.5 text-base rounded-md hover:bg-main-color hover:text-white"
                        href="javascript:;">
                        <iconify-icon icon="ic:baseline-people" class="text-xl"></iconify-icon>
                        List Dosen
                    </a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="w-full px-4 pt-10 sm:px-6 md:px-8 lg:pl-72">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>

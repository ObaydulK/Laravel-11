<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <body class="bg-gray-100 font-sans">
                        <div class="flex h-screen">

                            <!-- Sidebar -->
                            <div class="w-64 bg-blue-900 text-white p-6">
                                <h2 class="text-2xl font-bold mb-6">Dashboard</h2>
                                <ul>
                                    <li class="mb-4"><a href="#"
                                            class="block py-2 px-4 rounded hover:bg-blue-700">Home</a></li>
                                    <li class="mb-4"><a href="#"
                                            class="block py-2 px-4 rounded hover:bg-blue-700">Analytics</a></li>
                                    <li class="mb-4"><a href="#"
                                            class="block py-2 px-4 rounded hover:bg-blue-700">Reports</a></li>
                                    <li class="mb-4"><a href="#"
                                            class="block py-2 px-4 rounded hover:bg-blue-700">Settings</a></li>
                                </ul>
                            </div>

                            <!-- Main Content -->
                            <div class="flex-1 p-6">
                                <header class="mb-8">
                                    <h1 class="text-3xl font-bold text-gray-800 mb-2">Welcome to Your Dashboard</h1>
                                    <p class="text-gray-600">Overview of your activities</p>
                                </header>

                                <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                                    <div class="bg-white p-6 rounded-lg shadow">
                                        <h3 class="text-xl font-semibold mb-2">Analytics</h3>
                                        <p class="text-gray-600">Some data or charts here...</p>
                                    </div>
                                    <div class="bg-white p-6 rounded-lg shadow">
                                        <h3 class="text-xl font-semibold mb-2">Reports</h3>
                                        <p class="text-gray-600">Some data or charts here...</p>
                                    </div>
                                    <div class="bg-white p-6 rounded-lg shadow">
                                        <h3 class="text-xl font-semibold mb-2">Settings</h3>
                                        <p class="text-gray-600">Adjust your preferences here...</p>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </body>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

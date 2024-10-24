<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Additional Meta Tags -->
    <meta name="description" content="Your application description">
    <meta name="theme-color" content="#ECF5F4">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
</head>

<body class="font-sans antialiased bg-gray-50">
    <div class="min-h-screen flex flex-col">
        @include('layouts.navigation')

        <!-- Quick Access Navigation -->
        <div class="bg-white shadow-sm mt-1 border-t">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <!-- Orders Button -->
                    <a href="{{ url('orders') }}"
                        class="flex items-center p-4 bg-white rounded-xl border hover:border-blue-500 transition-all duration-300 group">
                        <div
                            class="flex items-center justify-center w-12 h-12 bg-blue-100 rounded-lg group-hover:bg-blue-500 transition-colors duration-300">
                            <svg class="w-6 h-6 text-blue-500 group-hover:text-white" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">My Orders</h3>
                            <p class="text-sm text-gray-500">View and track your orders</p>
                        </div>
                        <svg class="w-5 h-5 ml-auto text-gray-400 group-hover:text-blue-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>

                    <!-- Shipping Addresses Button -->
                    <a href="{{ url('addresses') }}"
                        class="flex items-center p-4 bg-white rounded-xl border hover:border-green-500 transition-all duration-300 group">
                        <div
                            class="flex items-center justify-center w-12 h-12 bg-green-100 rounded-lg group-hover:bg-green-500 transition-colors duration-300">
                            <svg class="w-6 h-6 text-green-500 group-hover:text-white" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Shipping Addresses</h3>
                            <p class="text-sm text-gray-500">Manage delivery locations</p>
                        </div>
                        <svg class="w-5 h-5 ml-auto text-gray-400 group-hover:text-green-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>

                    <!-- Payment Methods Button -->
                    <a href="{{ url('payment-methods') }}"
                        class="flex items-center p-4 bg-white rounded-xl border hover:border-purple-500 transition-all duration-300 group">
                        <div
                            class="flex items-center justify-center w-12 h-12 bg-purple-100 rounded-lg group-hover:bg-purple-500 transition-colors duration-300">
                            <svg class="w-6 h-6 text-purple-500 group-hover:text-white" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg font-semibold text-gray-900">Payment Methods</h3>
                            <p class="text-sm text-gray-500">Manage payment options</p>
                        </div>
                        <svg class="w-5 h-5 ml-auto text-gray-400 group-hover:text-purple-500" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>

                <!-- Quick Stats -->
                <div class="mt-8 grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div
                        class="bg-white p-4 rounded-xl border border-gray-200 hover:border-blue-500 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-lg">
                                <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm text-gray-500">Active Orders</div>
                                <div class="text-lg font-semibold"></div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white p-4 rounded-xl border border-gray-200 hover:border-green-500 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-10 h-10 bg-green-100 rounded-lg">
                                <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm text-gray-500">Saved Addresses</div>
                                <div class="text-lg font-semibold"></div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white p-4 rounded-xl border border-gray-200 hover:border-purple-500 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-10 h-10 bg-purple-100 rounded-lg">
                                <svg class="w-6 h-6 text-purple-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm text-gray-500">Payment Methods</div>
                                <div class="text-lg font-semibold"></div>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white p-4 rounded-xl border border-gray-200 hover:border-yellow-500 transition-all duration-300">
                        <div class="flex items-center">
                            <div class="flex items-center justify-center w-10 h-10 bg-yellow-100 rounded-lg">
                                <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <div class="text-sm text-gray-500">Total Orders</div>
                                <div class="text-lg font-semibold"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <main class="flex-1 py-6">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-white shadow-sm mt-auto">
            <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-8 w-auto">
                        <p class="text-sm text-gray-500">&copy; {{ date('Y') }}
                            {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Clock Card -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6">
                    <div class="flex flex-col md:flex-row md:items-center justify-between">
                        <!-- Digital Clock -->
                        <div class="flex flex-col space-y-2">
                            <div class="text-5xl font-bold text-gray-800 font-mono tracking-wider" id="digital-clock">
                                00:00:00
                            </div>
                            <div class="text-2xl text-gray-500 font-mono" id="milliseconds">
                                .000
                            </div>
                            <div class="text-gray-600" id="date">
                                Loading date...
                            </div>
                            <div class="text-sm text-gray-500" id="timezone">
                                Loading timezone...
                            </div>
                        </div>

                        <!-- Weather Information -->
                        <div class="mt-6 md:mt-0 p-4 bg-gray-50 rounded-lg">
                            <div class="text-lg font-semibold mb-2">Local Weather</div>
                            <div id="weather-info" class="text-gray-600">
                                <div class="flex items-center space-x-2 mb-2">
                                    <div id="weather-icon" class="w-8 h-8"></div>
                                    <span id="weather-temp">Loading...</span>
                                </div>
                                <div id="weather-desc" class="text-sm">Fetching weather...</div>
                                <div id="weather-location" class="text-sm text-gray-500 mt-1">Detecting location...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Info Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- World Clock -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-3">World Clock</h3>
                        <div id="world-clocks" class="space-y-2">
                            <div class="flex justify-between items-center">
                                <span>New York</span>
                                <span class="font-mono" id="ny-time">--:--</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>London</span>
                                <span class="font-mono" id="london-time">--:--</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>Tokyo</span>
                                <span class="font-mono" id="tokyo-time">--:--</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- System Status -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-3">System Status</h3>
                        <div class="space-y-2">
                            <div class="flex items-center space-x-2">
                                <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                                <span class="text-sm">All systems operational</span>
                            </div>
                            <div id="last-login" class="text-sm text-gray-500">
                                Last login: {{ Auth::user()->last_login_at ?? 'First login' }}
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold mb-3">Quick Links</h3>
                        <div class="space-y-2">
                            <a href="{{ route('profile.edit') }}" class="block text-blue-600 hover:text-blue-800">
                                Edit Profile
                            </a>
                            <a href="contact" class="block text-blue-600 hover:text-blue-800">
                                Support Center
                            </a>
                            <a href="/" class="block text-blue-600 hover:text-blue-800">
                                Homepage
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add this before closing body tag -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize clock
            function updateClock() {
                const now = new Date();

                // Main clock
                const hours = String(now.getHours()).padStart(2, '0');
                const minutes = String(now.getMinutes()).padStart(2, '0');
                const seconds = String(now.getSeconds()).padStart(2, '0');
                const milliseconds = String(now.getMilliseconds()).padStart(3, '0');

                document.getElementById('digital-clock').textContent = `${hours}:${minutes}:${seconds}`;
                document.getElementById('milliseconds').textContent = `.${milliseconds}`;

                // Date
                const options = {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                };
                document.getElementById('date').textContent = now.toLocaleDateString(undefined, options);

                // Timezone
                document.getElementById('timezone').textContent = Intl.DateTimeFormat().resolvedOptions().timeZone;

                // World clocks
                const nyTime = new Date(now.toLocaleString('en-US', {
                    timeZone: 'America/New_York'
                }));
                const londonTime = new Date(now.toLocaleString('en-US', {
                    timeZone: 'Europe/London'
                }));
                const tokyoTime = new Date(now.toLocaleString('en-US', {
                    timeZone: 'Asia/Tokyo'
                }));

                document.getElementById('ny-time').textContent = nyTime.toLocaleTimeString('en-US', {
                    hour: '2-digit',
                    minute: '2-digit'
                });
                document.getElementById('london-time').textContent = londonTime.toLocaleTimeString('en-US', {
                    hour: '2-digit',
                    minute: '2-digit'
                });
                document.getElementById('tokyo-time').textContent = tokyoTime.toLocaleTimeString('en-US', {
                    hour: '2-digit',
                    minute: '2-digit'
                });
            }

            // Update clock every millisecond
            setInterval(updateClock, 1);
            updateClock(); // Initial call

            // Get weather information
            function getWeather() {
                if ("geolocation" in navigator) {
                    navigator.geolocation.getCurrentPosition(async function(position) {
                            const lat = position.coords.latitude;
                            const lon = position.coords.longitude;

                            try {
                                // Replace with your weather API endpoint and key
                                const response = await fetch(
                                    `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=YOUR_API_KEY&units=metric`
                                );
                                const data = await response.json();

                                document.getElementById('weather-temp').textContent =
                                    `${Math.round(data.main.temp)}°C`;
                                document.getElementById('weather-desc').textContent = data.weather[0]
                                    .description;
                                document.getElementById('weather-location').textContent = data.name;

                                // Weather icon
                                const iconCode = data.weather[0].icon;
                                document.getElementById('weather-icon').innerHTML = `
                                <img src="http://openweathermap.org/img/w/${iconCode}.png" alt="Weather icon">
                            `;
                            } catch (error) {
                                console.error('Error fetching weather:', error);
                                document.getElementById('weather-info').textContent =
                                    'Weather information unavailable';
                            }
                        },
                        function(error) {
                            console.error('Error getting location:', error);
                            document.getElementById('weather-info').textContent = 'Location access denied';
                        });
                } else {
                    document.getElementById('weather-info').textContent = 'Geolocation not supported';
                }
            }

            // Get weather initially and update every 30 minutes
            getWeather();
            setInterval(getWeather, 30 * 60 * 1000);
        });
    </script>
</x-app-layout>

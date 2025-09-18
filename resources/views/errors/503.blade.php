<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>We'll be back soon!</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
        <style>
            @keyframes float {
                0% { transform: translateY(0px); }
                50% { transform: translateY(-15px); }
                100% { transform: translateY(0px); }
            }
            .float-animation {
                animation: float 3s ease-in-out infinite;
            }
            .gradient-background {
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            }
            .loading-bubble {
                animation: bounce 1.5s infinite ease-in-out;
            }
        </style>
    </head>
    <body class=" min-h-screen flex items-center justify-center p-4">

        <div class="bg-white rounded-2xl shadow-2xl p-8 md:p-12 max-w-2xl w-full mx-4 animate__animated animate__fadeIn">
            <!-- Main Icon with Animation -->
            <div class="float-animation mb-8">
                <svg class="w-24 h-24 mx-auto text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 01-1.91 1.572H6.482a2 2 0 01-1.91-1.572l-1.571-3.428a2 2 0 010-1.572l1.571-3.428A2 2 0 016.482 6h11.036a2 2 0 011.91 1.572l1.571 3.428a2 2 0 010 1.572l-1.571 3.428z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01"></path>
                </svg>
            </div>

            <!-- Content Section -->
            <div class="text-center">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">We're upgrading our system</h1>
                <p class="text-lg text-gray-600 mb-8">Our website is currently undergoing maintenance to bring you a better experience. We’ll be back shortly! Thank you for your patience and understanding.</p>

                <!-- Estimated Maintenance Time -->
                <div class="bg-indigo-50 rounded-lg p-4 mb-8 shadow-md">
                    <p class="text-indigo-800">Estimated maintenance time:</p>
                    <p class="text-2xl font-semibold text-indigo-900">30 minutes</p>
                </div>
            </div>

            <!-- Loading Animation -->
            <div class="mt-8 flex justify-center">
                <div class="flex space-x-2">
                    <div class="w-3 h-3 bg-indigo-600 rounded-full loading-bubble" style="animation-delay: 0s"></div>
                    <div class="w-3 h-3 bg-indigo-600 rounded-full loading-bubble" style="animation-delay: 0.2s"></div>
                    <div class="w-3 h-3 bg-indigo-600 rounded-full loading-bubble" style="animation-delay: 0.4s"></div>
                </div>
            </div>
        </div>
    </body>
</html>

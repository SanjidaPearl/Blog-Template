<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IBlog  | Modern Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-gray-50 font-sans">
   @include('partials.header')

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-500 to-purple-600 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-5xl font-bold mb-4">Welcome to IBlog</h2>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Discover the latest in technology, programming, and digital innovation</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <input type="text" placeholder="Search articles..." class="px-4 py-3 rounded-md text-gray-800 w-full sm:w-96">
                <button class="bg-white text-blue-600 px-6 py-3 rounded-md font-medium hover:bg-gray-100 transition">
                    <i class="fas fa-search mr-2"></i> Search
                </button>
            </div>
        </div>
    </section>

    <!-- Featured Posts -->
    <section class="py-12">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-gray-800 border-b pb-2">Featured Posts</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Featured Post 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="https://placehold.co/480x200/png" alt="Web Development" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Web Development</span>
                            <span class="mx-2">•</span>
                            <span>May 15, 2023</span>
                            <span class="mx-2">•</span>
                            <span>5 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">The Future of Web Development in 2023</h3>
                        <p class="text-gray-600 mb-4">Explore the latest trends and technologies shaping the future of web development this year.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                    </div>
                </div>
                
                <!-- Featured Post 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="https://placehold.co/480x200/png" alt="Artificial Intelligence" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Artificial Intelligence</span>
                            <span class="mx-2">•</span>
                            <span>June 2, 2023</span>
                            <span class="mx-2">•</span>
                            <span>8 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Getting Started with AI and Machine Learning</h3>
                        <p class="text-gray-600 mb-4">A beginner's guide to understanding and implementing AI and machine learning concepts.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                    </div>
                </div>
                
                <!-- Featured Post 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="https://placehold.co/480x200/png" alt="Cloud Computing" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-500 mb-2">
                            <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Cloud Computing</span>
                            <span class="mx-2">•</span>
                            <span>June 10, 2023</span>
                            <span class="mx-2">•</span>
                            <span>6 min read</span>
                        </div>
                        <h3 class="text-xl font-bold mb-2 text-gray-800">Cloud Computing: Best Practices for 2023</h3>
                        <p class="text-gray-600 mb-4">Learn the most effective strategies for leveraging cloud computing in your projects.</p>
                        <a href="#" class="text-blue-600 font-medium hover:text-blue-800 transition">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    @yield('content')
    @include('partials.footer')

<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
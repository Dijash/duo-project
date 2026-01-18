@extends('site.layouts.app')
@section('content')
  <main class="mt-10 mb-20">
    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-6 py-20 md:py-32">
        <div class="max-w-3xl">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">Share Your Ideas With The World</h1>
            <p class="text-lg text-gray-600 dark:text-gray-400 mb-8">A minimalist platform for writers to publish thoughts, stories, and ideas. Join our community of thinkers and creators.</p>
            
            <div class="flex gap-4">
                <button class="btn-primary px-8 py-3 bg-indigo-500 text-white rounded-lg font-medium hover:bg-indigo-600 transition">Start Writing →</button>
                <button class="btn-secondary px-8 py-3 border-2 border-indigo-500 text-indigo-500 rounded-lg font-medium hover:bg-indigo-50 dark:hover:bg-indigo-950 transition">Explore Blogs</button>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="max-w-7xl mx-auto px-6 py-16 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="text-center">
            <div class="text-4xl font-bold text-indigo-500 mb-2"><span class="counter" data-target="1245">0</span></div>
            <p class="text-gray-600 dark:text-gray-400">Published Blogs</p>
        </div>
        <div class="text-center">
            <div class="text-4xl font-bold text-pink-500 mb-2"><span class="counter" data-target="542">0</span></div>
            <p class="text-gray-600 dark:text-gray-400">Active Writers</p>
        </div>
        <div class="text-center">
            <div class="text-4xl font-bold text-purple-500 mb-2"><span class="counter" data-target="28956">0</span></div>
            <p class="text-gray-600 dark:text-gray-400">Monthly Readers</p>
        </div>
    </section>

    <!-- Featured Blogs -->
    <section id="blogs" class="max-w-7xl mx-auto px-6 py-20">
        <h2 class="text-4xl font-bold mb-4">Featured Blogs</h2>
        <p class="text-gray-600 dark:text-gray-400 mb-12">Discover thought-provoking articles from our community of writers.</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Blog Card 1 -->
            <div class="group bg-white dark:bg-gray-800 rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300">
                <div class="h-48 bg-gradient-to-br from-blue-400 to-blue-600"></div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-blue-500 uppercase">Technology</span>
                    <h3 class="text-xl font-bold mt-2 mb-3">The Future of AI in Everyday Life</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Exploring how artificial intelligence is reshaping our daily routines and what it means for the future.</p>
                    <div class="flex items-center gap-3 pt-4 border-t border-gray-200 dark:border-gray-700">
                        <div class="w-8 h-8 rounded-full bg-blue-500"></div>
                        <div class="text-sm">
                            <p class="font-medium">Sarah Chen</p>
                            <p class="text-gray-500 dark:text-gray-400">5 min read</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 2 -->
            <div class="group bg-white dark:bg-gray-800 rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300">
                <div class="h-48 bg-gradient-to-br from-purple-400 to-purple-600"></div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-purple-500 uppercase">Life</span>
                    <h3 class="text-xl font-bold mt-2 mb-3">Finding Purpose in a Digital World</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">A deep dive into personal growth and how to maintain authenticity in our hyperconnected society.</p>
                    <div class="flex items-center gap-3 pt-4 border-t border-gray-200 dark:border-gray-700">
                        <div class="w-8 h-8 rounded-full bg-purple-500"></div>
                        <div class="text-sm">
                            <p class="font-medium">Marcus Lee</p>
                            <p class="text-gray-500 dark:text-gray-400">8 min read</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Blog Card 3 -->
            <div class="group bg-white dark:bg-gray-800 rounded-xl overflow-hidden hover:shadow-xl transition-all duration-300">
                <div class="h-48 bg-gradient-to-br from-pink-400 to-pink-600"></div>
                <div class="p-6">
                    <span class="text-xs font-semibold text-pink-500 uppercase">Creativity</span>
                    <h3 class="text-xl font-bold mt-2 mb-3">Unlocking Your Creative Potential</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-4">Learn practical tips and techniques to break through creative blocks and express yourself authentically.</p>
                    <div class="flex items-center gap-3 pt-4 border-t border-gray-200 dark:border-gray-700">
                        <div class="w-8 h-8 rounded-full bg-pink-500"></div>
                        <div class="text-sm">
                            <p class="font-medium">Alex Rivera</p>
                            <p class="text-gray-500 dark:text-gray-400">6 min read</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="write" class="max-w-7xl mx-auto px-6 py-20">
        <div class="bg-gradient-to-r from-indigo-500 to-pink-500 rounded-2xl p-12 text-center text-white">
            <h2 class="text-4xl font-bold mb-4">Ready to Share Your Story?</h2>
            <p class="text-lg mb-8 opacity-90">Join thousands of writers and start publishing today.</p>
            <button class="btn-primary px-8 py-3 bg-white text-indigo-500 rounded-lg font-medium hover:bg-gray-100 transition">Start Writing Now →</button>
        </div>
    </section>
</main>
@endsection

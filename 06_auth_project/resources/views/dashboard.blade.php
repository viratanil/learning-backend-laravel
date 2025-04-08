<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ViratPanel - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 font-sans">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-blue-900 text-white hidden md:flex flex-col p-6">
        <h1 class="text-2xl font-bold mb-10">ViratPanel</h1>
        <nav class="flex flex-col space-y-4 text-sm">
            <a href="#" class="hover:text-blue-300">🏠 Dashboard</a>
            <a href="#" class="hover:text-blue-300">📁 Projects</a>
            <a href="#" class="hover:text-blue-300">👤 Profile</a>
            <a href="#" class="hover:text-blue-300">⚙️ Settings</a>
        </nav>
        <div class="mt-auto pt-6 border-t border-blue-700 text-sm">
            <a href="#" class="hover:text-red-400">🚪 Logout</a>
        </div>
    </aside>

    <!-- Main -->
    <main class="flex-1 bg-white dark:bg-gray-800 overflow-y-auto">
        
        <!-- Topbar -->
        <header class="flex justify-between items-center px-6 py-4 border-b dark:border-gray-700">
            <h2 class="text-xl font-semibold">Dashboard</h2>
            <div class="flex items-center gap-4">
                <img src="https://i.pravatar.cc/40?img=15" class="w-10 h-10 rounded-full border-2 border-blue-500" />
                <span class="text-sm">Virat Anil</span>
            </div>
        </header>

        <!-- Welcome Section -->
        <section class="px-6 py-4 border-b dark:border-gray-700">
            <h3 class="text-2xl font-bold">Welcome, Virat Anil 👋</h3>
            <p class="text-gray-500 dark:text-gray-300 text-sm">Here’s your overview today.</p>
        </section>

        <!-- Stat Cards -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
            <div class="bg-blue-100 dark:bg-blue-900 p-4 rounded-lg">
                <p class="text-sm text-blue-700 dark:text-blue-300">Total Projects</p>
                <h4 class="text-2xl font-bold">14</h4>
            </div>
            <div class="bg-blue-100 dark:bg-blue-900 p-4 rounded-lg">
                <p class="text-sm text-blue-700 dark:text-blue-300">Tasks Completed</p>
                <h4 class="text-2xl font-bold">42</h4>
            </div>
            <div class="bg-blue-100 dark:bg-blue-900 p-4 rounded-lg">
                <p class="text-sm text-blue-700 dark:text-blue-300">Pending Reviews</p>
                <h4 class="text-2xl font-bold">5</h4>
            </div>
        </section>

        <!-- Profile Card -->
        <section class="p-6">
            <div class="bg-gray-100 dark:bg-gray-700 rounded-lg flex flex-col md:flex-row items-center gap-6 p-6">
                <img src="https://i.pravatar.cc/100?img=15" class="w-24 h-24 rounded-full border-4 border-blue-500">
                <div>
                    <h3 class="text-xl font-bold">Virat Anil</h3>
                    <p class="text-gray-600 dark:text-gray-300 text-sm">Full Stack Developer</p>
                    <div class="mt-3 flex gap-3">
                        <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Edit</button>
                        <button class="px-4 py-2 bg-gray-300 dark:bg-gray-600 rounded hover:bg-gray-400 dark:hover:bg-gray-500">Settings</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Activity Table -->
        <section class="p-6">
            <div class="bg-white dark:bg-gray-700 rounded-lg shadow p-6">
                <h3 class="text-lg font-semibold mb-4">Recent Activity</h3>
                <table class="w-full text-sm">
                    <thead class="text-left text-gray-500 dark:text-gray-300 border-b dark:border-gray-600">
                        <tr>
                            <th class="py-2">#</th>
                            <th class="py-2">Activity</th>
                            <th class="py-2">Date</th>
                            <th class="py-2 text-right">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-600">
                        <tr>
                            <td class="py-2">1</td>
                            <td class="py-2">Updated profile</td>
                            <td class="py-2">2025-04-04</td>
                            <td class="py-2 text-right text-green-500">✓ Done</td>
                        </tr>
                        <tr>
                            <td class="py-2">2</td>
                            <td class="py-2">New Task Created</td>
                            <td class="py-2">2025-04-03</td>
                            <td class="py-2 text-right text-yellow-500">⏳ Pending</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </main>
</div>

</body>
</html>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <style>
    body { font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; }
    .glass { background: rgba(255,255,255,0.7); backdrop-filter: blur(10px); }
  </style>

   
  <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="min-h-screen bg-gradient-to-br from-indigo-50 to-slate-100 flex">
    @section('content')
    <aside class="w-64 bg-white shadow-lg min-h-screen p-6">
        <h2 class="text-2xl font-bold text-indigo-600 mb-8">User Panel</h2>
        <nav class="space-y-3">
            <a href="{{ route('admin') }}" class="block px-4 py-2 rounded-lg hover:bg-indigo-50 text-slate-700 font-medium">Dashboard</a>
            <a href="{{ route('profile') }}" class="block px-4 py-2 rounded-lg hover:bg-indigo-50 text-slate-700 font-medium">Profile</a>
            <a href="#" class="block px-4 py-2 rounded-lg hover:bg-indigo-50 text-slate-700 font-medium">Settings</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
        <button type="submit" class="w-full text-left px-4 py-2 rounded-lg hover:bg-red-50 text-red-600 font-medium">Logout</button>
    </form>
</nav>

</aside>
<main class="flex-1 p-10">
    @yield('content')

</main>
</body>
</html>

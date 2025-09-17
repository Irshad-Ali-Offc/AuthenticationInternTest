<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body { font-family: Inter, ui-sans-serif, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial; }
    .glass { background: rgba(255,255,255,0.7); backdrop-filter: blur(10px); }
    input:focus { outline: none; box-shadow: 0 0 0 3px rgba(99,102,241,0.25); }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-gradient-to-br from-indigo-50 to-slate-100 p-6">
  <div class="max-w-md w-full">
    <div class="glass rounded-2xl shadow-xl p-8">
      <h1 class="text-3xl font-bold text-slate-800 mb-2 text-center">Welcome Back</h1>
      <p class="text-sm text-slate-600 mb-6 text-center">Login to your account</p>

      <form class="space-y-5" method="POST" action="{{ route('logindata') }}">
        @csrf

        <div>
          <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email</label>
          <input id="email" type="email" name="email" value="{{ old('email') }}"
                 class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-indigo-500" placeholder="example@domain.com">
@error('email')
<small  class="text-red-600 font-medium block mt-1">{{ $message }} </small>

@enderror


                </div>


        <div>
          <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Password</label>
          <input id="password" type="password" name="password"
                 class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-indigo-500" placeholder="Enter password">

                </div>


        <div class="flex items-center justify-between text-sm">
          <label class="flex items-center">
            <input type="checkbox" class="h-4 w-4 text-indigo-600 border-slate-300 rounded">
            <span class="ml-2 text-slate-600">Remember me</span>
          </label>
          <a href="#" class="text-indigo-600 hover:underline">Forgot password?</a>
        </div>


        <div>
          <button type="submit" class="w-full py-3 rounded-lg text-white font-medium bg-indigo-600 hover:bg-indigo-700 transition">Login</button>
        </div>

        <p class="text-center text-sm text-slate-600">Don't have an account? <a href="/signup" class="text-indigo-600 hover:underline">Sign up</a></p>
      </form>
    </div>

    <p class="mt-4 text-center text-xs text-slate-500">Protected by reCAPTCHA and subject to our <a href="#" class="underline">Privacy Policy</a>.</p>
  </div>
</body>
</html>

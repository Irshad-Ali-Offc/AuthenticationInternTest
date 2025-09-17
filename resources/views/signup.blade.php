<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Signup</title>

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
      <h1 class="text-3xl font-bold text-slate-800 mb-2 text-center">Create Account</h1>
      <p class="text-sm text-slate-600 mb-6 text-center">Sign up to get started with our services</p>

      <form class="space-y-5" method="POST" action="{{ route('signupdata') }}">
        @csrf

        <div>
          <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Full name</label>
          <input id="name" name="name" type="text" value="{{ old('name') }}"
                 class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-indigo-500" placeholder="Your full name">
@error('name')
<small  class="text-red-600 font-medium block mt-1">{{ $message }} </small>

@enderror


        </div>


        <div>
          <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email</label>
          <input id="email" type="email" name="email" value="{{ old('email') }}"
                 class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-indigo-500" placeholder="example@domain.com">
@error('email')
<small class="text-red-600 font-medium block mt-1">{{ $message }}</small>
@enderror
                </div>


        <div>
          <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Password</label>
          <input id="password" type="password" name="password"
                 class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-indigo-500" placeholder="Enter password">
@error('password')
<small class="text-red-600 font-medium block mt-1">{{ $message }}</small>

@enderror

                </div>


        <div>
          <label for="password_confirmation" class="block text-sm font-medium text-slate-700 mb-1">Confirm password</label>
          <input id="password_confirmation" type="password" name="password_confirmation"
                 class="w-full px-4 py-3 rounded-lg border border-slate-200 focus:border-indigo-500" placeholder="Re-enter password">
        </div>


        <div>
          <button type="submit" class="w-full py-3 rounded-lg text-white font-medium bg-indigo-600 hover:bg-indigo-700 transition">Sign up</button>
        </div>

        <p class="text-center text-sm text-slate-600">Already have an account? <a href="/login" class="text-indigo-600 hover:underline">Log in</a></p>
      </form>
    </div>

    <p class="mt-4 text-center text-xs text-slate-500">By signing up, you agree to our <a href="#" class="underline">Terms</a> & <a href="#" class="underline">Privacy Policy</a>.</p>
  </div>
</body>
</html>

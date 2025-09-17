@extends('layout.adminlayout')
@section('title','Dashboard')


@section('content')
    <div class="glass rounded-2xl shadow-xl p-8">
        <h1 class="text-3xl font-bold text-slate-800 mb-4">Welcome, {{ Auth::user()->name }} 🎉</h1>
        <p class="text-slate-600 mb-6">You are logged in successfully. Explore your dashboard below.</p>

        <!-- Dashboard Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl shadow p-6 text-center">
                <h2 class="text-lg font-semibold text-slate-700 mb-2">My Profile</h2>
                <p class="text-sm text-slate-500 mb-4">Update your personal details</p>
                <a href="{{ route('profile') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">View</a>
            </div>

            <div class="bg-white rounded-xl shadow p-6 text-center">
          <h2 class="text-lg font-semibold text-slate-700 mb-2">Settings</h2>
          <p class="text-sm text-slate-500 mb-4">Manage your preferences</p>
          <a href="#" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Manage</a>
        </div>

        <div class="bg-white rounded-xl shadow p-6 text-center">
          <h2 class="text-lg font-semibold text-slate-700 mb-2">Support</h2>
          <p class="text-sm text-slate-500 mb-4">Get help and support</p>
          <a href="#" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">Contact</a>
        </div>
      </div>
    </div>




@endsection

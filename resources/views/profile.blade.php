@extends('layout.adminlayout')
@section('title','Profile')
@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-6">

    <!-- Profile Info -->
    <form class="grid grid-cols-1 md:grid-cols-2 gap-6" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" >
    @method('PUT')
      @csrf
      <div class="flex items-center space-x-6">
          <!-- Profile Image -->
         <div class="w-50 h-50 rounded-full overflow-hidden border-4 border-indigo-400 shadow">
    <img src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : 'https://via.placeholder.com/150' }}"
         alt="Admin Photo" class="w-full h-full object-cover">
</div>

        <!-- Basic Info -->
        <div>
            <h3 class="text-2xl font-semibold text-gray-800">{{Auth::user()->name}}</h3>
            <p class="text-gray-600">{{ Auth::user()->email }}</p>
            <p class="text-sm text-gray-500 mt-1">Admin Role</p>
            <div>
          <label class="block">
              <span class="sr-only">Choose profile photo</span>
              <input type="file" name="image" accept="image/*"
              class="block w-full text-sm text-gray-500
                         file:mr-4 file:py-2 file:px-4
                         file:rounded-lg file:border-0
                         file:text-sm file:font-semibold
                         file:bg-indigo-600 file:text-white
                         hover:file:bg-indigo-700">
                      </label>

        </div>
             @error('image')
<small  class="text-red-600 font-medium block mt-1">{{ $message }} </small>

@enderror
        </div>
    </div>



      <!-- Profile Form -->
      <div class="mt-8">
        <h4 class="text-lg font-semibold text-gray-700 mb-4">Update Profile</h4>
          <!-- Name -->
          <div>
            <label class="block text-gray-700 mb-2">Full Name</label>
            <input type="text" value="{{ Auth::user()->name }}" name="name" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400">
     @error('name')
<small  class="text-red-600 font-medium block mt-1">{{ $message }} </small>

@enderror
        </div>

          <!-- Email -->
          <div>
            <label class="block text-gray-700 mb-2">Email</label>
            <input type="email" value="{{ Auth::user()->email }}" name="email" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400">
             @error('email')
<small  class="text-red-600 font-medium block mt-1">{{ $message }} </small>

@enderror
        </div>

          <!-- Password -->
          <div>
            <label class="block text-gray-700 mb-2">Password</label>
            <input type="password" placeholder="New Password" name="password" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400">
             @error('password')
<small  class="text-red-600 font-medium block mt-1">{{ $message }} </small>

@enderror
        </div>

          <!-- Confirm Password -->
          <div>
            <label class="block text-gray-700 mb-2">Confirm Password</label>
            <input type="password" placeholder="Confirm Password" name="password_confirmation" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400">
          </div>

          <!-- Buttons -->
          <div class="col-span-2 flex justify-end space-x-4 mt-4">
              <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">Update</button>
            </div>
        </form>
        <form method="POST" action="{{ route('profile.delete') }}"
      onsubmit="return confirm('⚠️ Are you sure you want to delete your account? This action cannot be undone.');">
    @csrf
    @method('DELETE')

    <button type="submit"
            class="px-6 py-2 bg-red-600 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
        Delete Account
    </button>
</form>


      </div>
    </div>

@endsection



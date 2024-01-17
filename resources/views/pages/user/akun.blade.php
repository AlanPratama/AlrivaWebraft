@extends('layouts.main')

@section('content')
    <div class="bg-gray-100 dark:bg-gray-800 transition-colors duration-300 md:px-12 px-4" style="margin-top: 130px;">
        <div class="container mx-auto p-4">
            <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
                <h1 class="font-semibold mb-4 text-gray-900 dark:text-gray-100"
                    style="font-size: 24px; text-transform: uppercase;">Personal Information</h1>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p class="text-red-400 dark:text-gray-300 mb-2">* {{ $error }}</p>
                    @endforeach
                @endif

                <form action="{{ route('edit.akun', ['slug' => Auth::user()->slug]) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                        <input type="text" placeholder="Nama Lengkap" value="{{ Auth::user()->name }}" name="name"
                            class="border shadow p-2 rounded w-full" required>
                        <input type="text" placeholder="Phone" value="{{ Auth::user()->phone }}" name="phone"
                            class="border shadow p-2 rounded w-full" required>
                        <input type="text" placeholder="Email" value="{{ Auth::user()->email }}" name="email"
                            class="border shadow p-2 rounded w-full" required>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                        <input type="text" placeholder="Username" value="{{ Auth::user()->username }}" name="username"
                            class="border shadow p-2 rounded w-full" required>
                        <input type="password" placeholder="Password" name="password"
                            class="border shadow p-2 rounded w-full">
                        <input type="password" placeholder="Confirm Password" name="confirm_password"
                            class="border shadow p-2 rounded w-full">
                    </div>
                    <button type="submit" id="theme-toggle"
                        class="px-4 py-2 rounded bg-blue-500 text-white hover:bg-blue-600 focus:outline-none transition-colors">
                        Ubah Profile
                    </button>
                </form>
            </div>
        </div>

    </div>
@endsection

@extends('layouts.app')

@section('title', 'Classify App')

@section('content')
<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md mx-auto">
        <div class="text-center">
            <h1 class="text-3xl font-bold text-gray-900 mb-8">Classify App</h1>
        </div>

        <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
            <form action="{{ route('home') }}" method="POST" class="space-y-6">
                @csrf

                <!-- Berat Input -->
                <div>
                    <label for="berat" class="block text-sm font-medium text-gray-700 mb-2">
                        Berat
                    </label>
                    <input
                        type="text"
                        id="berat"
                        name="berat"
                        value="{{ old('berat') }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out"
                        placeholder="Masukkan berat..."
                    >
                    @error('berat')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Bentuk Input -->
                <div>
                    <label for="bentuk" class="block text-sm font-medium text-gray-700 mb-2">
                        Bentuk
                    </label>
                    <input
                        type="text"
                        id="bentuk"
                        name="bentuk"
                        value="{{ old('bentuk') }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out"
                        placeholder="Masukkan bentuk..."
                    >
                    @error('bentuk')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Crane Input -->
                <div>
                    <label for="crane" class="block text-sm font-medium text-gray-700 mb-2">
                        Crane
                    </label>
                    <input
                        type="text"
                        id="crane"
                        name="crane"
                        value="{{ old('crane') }}"
                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out"
                        placeholder="Masukkan crane..."
                    >
                    @error('crane')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div>
                    <button
                        type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out"
                    >
                        Submit
                    </button>
                </div>
            </form>

            <!-- Display Results from Session -->
            @if(session('success'))
                <div class="mt-6 p-4 bg-green-50 border border-green-200 rounded-md">
                    <h3 class="text-sm font-medium text-green-800 mb-2">Data yang dimasukkan:</h3>
                    <div class="text-sm text-green-700 space-y-1">
                        <p><strong>Berat:</strong> {{ session('berat') }}</p>
                        <p><strong>Bentuk:</strong> {{ session('bentuk') }}</p>
                        <p><strong>Crane:</strong> {{ session('crane') }}</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Jetty')

@section('content')
    <div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto">
            <!-- Page Header -->
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Jetty</h1>
                <p class="mt-2 text-gray-600">Classify based on Weight, Shape, and Crane Capacity</p>
            </div>

            <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8 mb-4">
                <!-- Alert -->
                @if(session('alert'))
                    <div class="mb-6 p-4 bg-red-50 border border-red-200 rounded-md">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-red-800">Tidak Tersedia</h3>
                                <div class="mt-2 text-sm text-red-700">
                                    <p>{{ session('alert') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <form action="{{ route('jetty.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Berat Input -->
                    <div>
                        <label for="berat" class="block text-sm font-medium text-gray-700 mb-2">
                            Berat (Ton)
                        </label>
                        <input type="number" id="berat" name="berat" value="{{ old('berat') }}" step="0.01" min="0"
                            max="9999.99"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out"
                            placeholder="Contoh: 25.5">
                        @error('berat')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Bentuk Dropdown -->
                    <div>
                        <label for="bentuk" class="block text-sm font-medium text-gray-700 mb-2">
                            Bentuk
                        </label>
                        <select id="bentuk" name="bentuk"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out">
                            <option value="">Pilih bentuk...</option>
                            @foreach($shapes as $shape)
                                <option value="{{ $shape->value }}" {{ old('bentuk') == $shape->value ? 'selected' : '' }}>
                                    {{ $shape->label() }}
                                </option>
                            @endforeach
                        </select>
                        @error('bentuk')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Crane Dropdown -->
                    <div>
                        <label for="crane" class="block text-sm font-medium text-gray-700 mb-2">
                            Crane
                        </label>
                        <select id="crane" name="crane"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-150 ease-in-out">
                            <option value="">Pilih crane...</option>
                            @foreach($cranes as $crane)
                                <option value="{{ $crane->value }}" {{ old('crane') == $crane->value ? 'selected' : '' }}>
                                    {{ $crane->label() }}
                                </option>
                            @endforeach
                        </select>
                        @error('crane')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-150 ease-in-out">
                            Classify
                        </button>
                    </div>
                </form>

                <!-- Display Results from Session -->
                @if(session('withData'))
                    <div class="mt-6 mb-6 p-4 bg-green-50 border border-green-200 rounded-md">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-green-800">Available</h3>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 p-4 bg-blue-50 border border-blue-200 rounded-md">
                        <h3 class="text-sm font-medium mb-2">Data yang dimasukkan:</h3>
                        <div class="text-sm space-y-1">
                            <p><strong>Berat:</strong> {{ session('data.berat') }} Ton</p>
                            <p><strong>Bentuk:</strong>
                                {{ session('data.bentuk')->label() }}
                            </p>
                            <p><strong>Crane:</strong>
                                {{ session('data.crane')->label() }}
                            </p>
                            <p><strong>Result:</strong>
                                @foreach(session('data.inventory_variants') as $inventoryVariant)
                                    <p>{{ $inventoryVariant }}</p>
                                @endforeach
                            </p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

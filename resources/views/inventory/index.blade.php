@extends('layouts.app')

@section('title', 'Inventory Asset')

@push('styles')
    @vite(['resources/css/inventory.css'])
@endpush

@section('content')
<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <!-- Page Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Inventory Asset</h1>
            <p class="mt-2 text-gray-600">Complete List of Inventory Assets</p>
        </div>

        @if($inventoriesByType->isEmpty())
            @include('inventory.partials.empty-state')
        @else
            <div class="space-y-4">
                @foreach($inventoryTypes as $enumType)
                    @if($inventoriesByType->has($enumType->value))
                        @include('inventory.partials.type-section', [
                            'enumType' => $enumType,
                            'inventories' => $inventoriesByType->get($enumType->value),
                            'index' => $loop->index
                        ])
                    @endif
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection

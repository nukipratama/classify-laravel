@extends('layouts.app')

@section('title', 'Gear')

@section('content')
    <div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Gear Inventory</h1>
                <p class="mt-2 text-gray-600">Complete list of available lifting gear</p>
            </div>

            @if($gearsByType->isEmpty())
                <div class="text-center">
                    <div class="bg-white shadow-md rounded-lg px-8 pt-6 pb-8">
                        <p class="text-gray-500">No gear data available.</p>
                    </div>
                </div>
            @else
                <div class="space-y-8">
                    @foreach($gearsByType as $type => $gears)
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <div class="bg-blue-50 px-6 py-4 border-b border-gray-200">
                                <h2 class="text-xl font-semibold text-gray-900">
                                    {{ $gears->first()->type_label }}
                                </h2>
                            </div>

                            <div class="overflow-x-auto">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                SWL (Ton)
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Quantity
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($gears as $gear)
                                            <tr class="hover:bg-gray-50">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $gear->name }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $gear->formatted_swl }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $gear->qty }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
@endsection

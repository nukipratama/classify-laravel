<div class="bg-white shadow-md rounded-lg overflow-hidden">
    <input type="checkbox" id="accordion-{{ $index }}" class="accordion-checkbox">

    <label for="accordion-{{ $index }}" class="accordion-header bg-blue-50 px-6 py-4 border-b border-gray-200 flex justify-between items-center">
        <h2 class="text-xl font-semibold text-gray-900">
            {{ $enumType->getDisplayName() }}
        </h2>
        @include('inventory.partials.chevron-icon')
    </label>

    <div class="accordion-content">
        @include('inventory.partials.inventory-table', ['inventories' => $inventories])
    </div>
</div>

<div class="overflow-x-auto">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    SWL (Ton)
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Length (m)
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Quantity
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Expired At
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($inventories as $inventory)
                @php
                    $isWarning = $inventory->expired_at && $inventory->expired_at->lt(now()->startOfDay()->addDays(10));
                    $isExpired = $inventory->expired_at && $inventory->expired_at->lt(now()->startOfDay());
                    $color = match (true) {
                        $isExpired => 'red',
                        $isWarning => 'yellow',
                        default => 'gray',
                    };
                @endphp
                <tr class="bg-{{ $color }}-50 hover:bg-{{ $color }}-100">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-{{ $color }}-900">
                        {{ $inventory->variant->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-{{ $color }}-900">
                        {{ $inventory->variant->swl }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-{{ $color }}-900">
                        {{ $inventory->variant->length }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-{{ $color }}-900">
                        {{ $inventory->quantity }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-{{ $color }}-900 font-medium">
                        {{ $inventory->expired_at ? $inventory->expired_at->format('d M Y') : '-' }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

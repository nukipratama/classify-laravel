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
                    $isExpired = $inventory->expired_at && $inventory->expired_at->lt(now()->startOfDay());
                @endphp
                <tr class="{{ $isExpired ? 'bg-red-50 hover:bg-red-100' : 'hover:bg-gray-50' }}">
                    <td class="px-6 py-4 whitespace-nowrap text-sm {{ $isExpired ? 'text-red-900' : 'text-gray-900' }}">
                        {{ $inventory->variant->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm {{ $isExpired ? 'text-red-900' : 'text-gray-900' }}">
                        {{ $inventory->variant->swl }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm {{ $isExpired ? 'text-red-900' : 'text-gray-900' }}">
                        {{ $inventory->variant->length }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm {{ $isExpired ? 'text-red-900' : 'text-gray-900' }}">
                        {{ $inventory->quantity }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm {{ $isExpired ? 'text-red-900 font-medium' : 'text-gray-900' }}">
                        {{ $inventory->expired_at ? $inventory->expired_at->format('d M Y') : '-' }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

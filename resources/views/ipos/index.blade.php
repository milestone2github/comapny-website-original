<x-wrapper>
  <div class="container mx-auto px-4 py-6">
    <div class="text-center pb-8 mb-4">
      <h1 class="text-5xl font-extrabold text-gray-900 gradient-text mb-4">
        Upcoming & Recent IPOs
      </h1>
      <p class="text-lg text-gray-600">
        Browse upcoming and recently listed public offerings.
      </p>
    </div>
    <form method="GET" class="flex items-center justify-end mb-4 space-x-2">
      <label for="perpage" class="text-sm font-medium text-gray-700">
        Show:
      </label>
      <select
        id="perpage"
        name="perpage"
        onchange="this.form.submit()"
        class="block w-24 px-2 py-1 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 transition"
      >
        @foreach([10, 25, 50, 100] as $size)
          <option value="{{ $size }}" {{ $perPage == $size ? 'selected' : '' }}>
            {{ $size }}
          </option>
        @endforeach
      </select>
      <span class="text-sm text-gray-600">
        records per page
      </span>
    </form>

    <div class="overflow-x-auto shadow-lg rounded-lg">
      <table class="min-w-full bg-white">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Company Name</th>
            @php
              $nextSort = $sort === 'asc' ? 'desc' : 'asc';
              $query    = array_merge(request()->only('perpage'), ['sort' => $nextSort]);
            @endphp
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase"><a href="{{ route('ipos.index', $query) }}" class="flex items-center hover:text-blue-600">
              Open Date
              @if($sort === 'asc')
                <svg style="margin: 2px; margin-top: 4px;" height="10" width="10" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="50,10 90,70 10,70" fill="black" />
                </svg>

              @else
                <svg style="margin: 2px;" width="10" height="10" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                  <polygon points="10,30 90,30 50,90" fill="black" />
                </svg>

              @endif
            </a></th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-600 uppercase">Close Date</th>
            <th class="px-6 py-3 text-right text-xs font-medium text-gray-600 uppercase" style="min-width: 120px;">Min Order Qty</th>
            <th class="px-6 py-3 text-right text-xs font-medium text-gray-600 uppercase">Min Lot</th>
            <th class="px-6 py-3 text-right text-xs font-medium text-gray-600 uppercase">Max Lot</th>
            <th class="px-6 py-3 text-right text-xs font-medium text-gray-600 uppercase">Min Share</th>
            <th class="px-6 py-3 text-right text-xs font-medium text-gray-600 uppercase">Max Share</th>
            <th class="px-6 py-3 text-right text-xs font-medium text-gray-600 uppercase">Min Amount</th>
            <th class="px-6 py-3 text-right text-xs font-medium text-gray-600 uppercase">Max Amount</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          @foreach($ipos as $ipo)
            <tr class="hover:bg-gray-50">
            <td class="px-6 py-4">
            <a href="{{ route('ipos.read', $ipo->slug) }}" class="text-blue-600 hover:underline">
              {{ $ipo->company }}
            </a>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                {{ \Carbon\Carbon::parse($ipo->open_date)->format('d-M-Y') }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                {{ \Carbon\Carbon::parse($ipo->close_date)->format('d-M-Y') }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-right">
                {{ number_format($ipo->min_order_quantity) }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-right">
                {{ number_format($ipo->min_lot) }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-right">
                {{ number_format($ipo->max_lot) }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-right">
                {{ number_format($ipo->min_share) }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-right">
                {{ number_format($ipo->max_share) }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-right">
                ₹{{ number_format($ipo->min_amount, 2) }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700 text-right">
                ₹{{ number_format($ipo->max_amount, 2) }}
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <div class="mt-6 flex justify-center">
      {{ $ipos->links() }}
    </div>
  </div>
</x-wrapper>

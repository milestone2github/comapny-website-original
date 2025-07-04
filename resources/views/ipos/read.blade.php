<x-wrapper>
  <div class="container mx-auto px-4 py-6">
    
    {{-- BACK button on its own line --}}
    <div class="w-full mb-6">
      <button
        type="button"
        onclick="window.history.go(-1)"
        class="block w-max px-4 py-2 bg-gray-100 text-gray-700 hover:bg-gray-200 
               focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 
               rounded-lg transition"
      >
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" fill="none"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M15 19l-7-7 7-7" />
        </svg>
        Back
      </button>
    </div>

    {{-- Page title --}}
    <h2 class="text-3xl font-bold mb-6">{{ $ipo->company }}</h2>

    {{-- two-column grid for the first two cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
      
      {{-- Basic Info --}}
      <div class="bg-white shadow rounded-lg p-5">
        <h3 class="text-xl font-semibold mb-4">Basic Info</h3>
        <dl class="grid grid-cols-2 gap-y-6">  <!-- increased gap-y -->
          <dt class="text-sm text-gray-600">Company</dt>
          <dd class="text-sm font-medium text-gray-900">{{ $ipo->company }}</dd>

          <dt class="text-sm text-gray-600">Type</dt>
          <dd class="text-sm font-medium text-gray-900">{{ $ipo->type ?? '—' }}</dd>

          <dt class="text-sm text-gray-600">Face Value</dt>
          <dd class="text-sm font-medium text-gray-900">
            @if($ipo->face_value)
              ₹{{ preg_replace('/[^\d\.]/', '', $ipo->face_value) }}
            @else
              —  
            @endif
          </dd>

          <dt class="text-sm font-medium text-gray-600">Market Lot</dt>
          <dd class="text-sm font-medium text-gray-900">{{ $ipo->market_lot ?? '—' }}</dd>
        </dl>
      </div>

      {{-- Important Dates --}}
      <div class="bg-white shadow rounded-lg p-5">
        <h3 class="text-xl font-semibold mb-4">Important Dates</h3>
        <dl class="grid grid-cols-2 gap-y-6">  <!-- increased gap-y -->
          <dt class="text-sm text-gray-600">Open Date</dt>
          <dd class="text-sm font-medium text-gray-900">{{ optional($ipo->open_date)->format('d M Y') ?? '—' }}</dd>

          <dt class="text-sm text-gray-600">Close Date</dt>
          <dd class="text-sm font-medium text-gray-900">{{ optional($ipo->close_date)->format('d M Y') ?? '—' }}</dd>

          <dt class="text-sm text-gray-600">Allotment Date</dt>
          <dd class="text-sm font-medium text-gray-900">{{ optional($ipo->allotment_date)->format('d M Y') ?? '—' }}</dd>

          <dt class="text-sm text-gray-600">Listing Date</dt>
          <dd class="text-sm font-medium text-gray-900">{{ optional($ipo->listing_date)->format('d M Y') ?? '—' }}</dd>
        </dl>
      </div>
    </div>

    {{-- full-width Investment Details --}}
    <div class="bg-white shadow rounded-lg p-5">
      <h3 class="text-xl font-semibold mb-4">Investment Details</h3>
      <dl class="grid grid-cols-2 md:grid-cols-4 gap-y-6 gap-x-6">  <!-- gap-y-6 -->
        <dt class="text-sm text-gray-600">Min Order Quantity</dt>
        <dd class="text-sm font-medium text-gray-900">{{ number_format($ipo->min_order_quantity) }}</dd>

        <dt class="text-sm text-gray-600">Min Lot</dt>
        <dd class="text-sm font-medium text-gray-900">{{ number_format($ipo->min_lot) }}</dd>

        <dt class="text-sm text-gray-600">Max Lot</dt>
        <dd class="text-sm font-medium text-gray-900">{{ number_format($ipo->max_lot) }}</dd>

        <dt class="text-sm text-gray-600">Min Share</dt>
        <dd class="text-sm font-medium text-gray-900">{{ number_format($ipo->min_share) }}</dd>

        <dt class="text-sm text-gray-600">Max Share</dt>
        <dd class="text-sm font-medium text-gray-900">{{ number_format($ipo->max_share) }}</dd>

        <dt class="text-sm text-gray-600">Min Amount</dt>
        <dd class="text-sm font-medium text-gray-900">₹{{ number_format($ipo->min_amount,2) }}</dd>

        <dt class="text-sm text-gray-600">Max Amount</dt>
        <dd class="text-sm font-medium text-gray-900">₹{{ number_format($ipo->max_amount,2) }}</dd>

        <dt class="text-sm text-gray-600">Issue Size</dt>
        <dd class="text-sm font-medium text-gray-900">{{ $ipo->issue_size ?? '—' }}</dd>

        <dt class="text-sm text-gray-600">Demat Account</dt>
        <dd class="text-sm font-medium text-gray-900">{{ optional($ipo->demat_account)->format('d M Y') ?? '—' }}</dd>

        <dt class="text-sm text-gray-600">Initiation Refund</dt>
        <dd class="text-sm font-medium text-gray-900">{{ optional($ipo->initiation_refund)->format('d M Y') ?? '—' }}</dd>
      </dl>
    </div>

  </div>
</x-wrapper>

<x-wrapper>
  <main class="container mx-auto py-0 px-3">

    <div class="page-title-section">
      <div class="container mx-auto">
        <ul class="flex space-x-2 text-sm text-gray-600" aria-label="breadcrumb">
          <li><a href="{{url('/')}}" class="hover:text-gray-900">Home</a></li>
          <li>/</li>
          <li>Fixed Deposit</li>
        </ul>
        <h2 class="text-2xl font-bold text-gray-800 my-3"><span>Fixed </span> Deposit</h2>
      </div>
    </div>
    <!-- End Page Title Section -->

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container pt-0 mb-2">
      <div class="container mx-auto">
        <div class="flex flex-wrap">
          <!-- Content Side -->

          <div class="content-side w-full">
            <div class="ipo-page-wrapper overflow-x-auto">
              <table class="table-auto border-collapse border border-gray-300 w-full text-sm">
                <tbody>
                  @foreach($data as $val)
                  <tr class="border-b border-gray-200">
                    <td class="p-2">
                      <a href="{{url('/fd-calculator/'.$val->slug)}}" title="">
                        <img src="{{asset('storage/deposit/'.$val->logo)}}" alt="Logo" class="w-24 h-12">
                      </a>
                    </td>
                    <td class="p-2">
                      <a href="{{url('/fd-calculator/'.$val->slug)}}" class="text-blue-600 hover:underline">
                        <span>{{$val->name}}</span>
                      </a>
                    </td>
                    <td class="p-2 text-gray-800">{{$val->roi}} %</td>
                    <td class="p-2">
                      <a href="{{ url('fd-calculator/'.$val->slug.'') }}" class="bg-blue-500 text-white text-sm px-3 py-1 rounded hover:bg-blue-600 mr-2">View Details</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</x-wrapper>

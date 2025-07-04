<x-wrapper>
  <!-- Page Title Section -->
  <div class="page-title-section bg-white shadow-md py-4">
    <div class="container mx-auto">
      <ul class="flex space-x-2 text-sm text-gray-600">
        <li><a href="{{url('/')}}" class="hover:text-blue-500">Home</a></li>
        <li class="text-gray-800">/</li>
        <li><a href="{{url('/fixed-deposit')}}" class="hover:text-blue-500">Fixed Deposit</a></li>
        <li class="text-gray-800">/</li>
        <li class="text-gray-800">{{$data->name}}</li>
      </ul>
      <h2 class="text-2xl font-bold text-gray-800 mt-2"><span>Fixed </span> Deposit</h2>
    </div>
  </div>
  <!-- End Page Title Section -->

  <!-- Sidebar Page Container -->
  <div class="sidebar-page-container pt-0">
    <div class="container mx-auto">
      <div class="flex flex-wrap">
        <!-- Content Side -->
        <div class="content-side w-full lg:w-7/12 md:w-7/12 sm:w-full p-4">
          <div class="fd-single-wrapper p-4 bg-white rounded-lg shadow">
            <div class="banks-detail-wrapper mb-4">
              <ul class="banks-details flex items-center">
                <li class="bank-logo-holder mr-4">
                  <img src="{{asset('storage/deposit/'.$data->logo)}}" alt="" class="h-16">
                </li>
                <li class="bank-full-name">
                  <span class="text-lg font-semibold">{{$data->name}}</span>
                </li>
                <li class="public-bond-centers ml-4">
                  <span class="text-sm text-gray-500">{{$data->rating}}</span>
                </li>
              </ul>
            </div>
            <div class="form-container">
              <div class="form-section mb-4">
                <div class="sec-heading text-lg font-semibold">Tenure (12 Months)</div>
                <input type="range" class="payout-frequency w-full" id="tenure" min="0" max="4" step="1" value="0">
                <ul class="range-label flex justify-between text-sm">
                  <li>12</li>
                  <li>24</li>
                  <li>36</li>
                  <li>48</li>
                  <li>60</li>
                </ul>
              </div>

              <div class="form-section payout-frequency-wrapper mb-4">
                <div class="sec-heading text-lg font-semibold">Payout Frequency</div>
                <div class="flex space-x-2">
                  <input type="radio" class="btn-check payout" name="frequency" id="monthly" autocomplete="off" value="1">
                  <label class="btn btn-secondary" for="monthly">Monthly</label>

                  <input type="radio" class="btn-check payout" name="frequency" id="quarterly" autocomplete="off" value="4">
                  <label class="btn btn-secondary" for="quarterly">Quarterly</label>

                  <input type="radio" class="btn-check payout" name="frequency" id="semi-annually" autocomplete="off" value="6">
                  <label class="btn btn-secondary" for="semi-annually">Semi-Annually</label>

                  <input type="radio" class="btn-check payout" name="frequency" id="annually" autocomplete="off" value="12" checked>
                  <label class="btn btn-secondary" for="annually">Annually</label>

                  <input type="radio" class="btn-check payout" name="frequency" id="at-maturity" autocomplete="off" value="100">
                  <label class="btn btn-secondary" for="at-maturity">At Maturity</label>
                </div>
              </div>

              <div class="form-section payout-frequency-wrapper mb-4">
                <div class="sec-heading text-lg font-semibold">Senior Citizen (60+ Years)</div>
                <div class="flex space-x-2">
                  <input type="radio" class="btn-check senior" name="senior" id="yes" autocomplete="off" value="1">
                  <label class="btn btn-secondary" for="yes">Yes</label>

                  <input type="radio" class="btn-check senior" name="senior" id="no" autocomplete="off" checked value="0">
                  <label class="btn btn-secondary" for="no">No</label>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Result Side -->
        <div class="result-side w-full lg:w-5/12 md:w-5/12 sm:w-full p-4">
          <div class=" p-4 bg-white rounded-lg shadow">
            <h3 class="text-xl font-bold mb-4">Result Based On Selection</h3>
            <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
              <div class="col mb-2">
                <div class="value-label text-sm font-semibold">Tenure</div>
                <div class="label-value text-lg" id="show_tenure">12 Months</div>
              </div>
              <div class="col mb-2">
                <div class="value-label text-sm font-semibold">Senior Citizen (60+)</div>
                <div class="label-value text-lg" id="show_senior">No</div>
              </div>
              <div class="col mb-2">
                <div class="value-label text-sm font-semibold">Payout Frequency</div>
                <div class="label-value text-lg" id="show_frequency">Monthly</div>
              </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
              <div class="final-value-label value-label text-lg font-semibold">Interest Rate</div>
              <div class="final-label-value label-value text-2xl"><span id="show_intrest">{{$data->roi}}</span>%</div>
            </div>
            <a href="{{url('contact-us')}}" class="mt-8 text-blue-500 py-2 px-4 rounded hover:underline">Click Here for more details</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" charset="utf-8">
    document.addEventListener("DOMContentLoaded", function() {
      const data = @json($data); //ignore this red line
      const monthData = {
        1: data.month_12.split(';'),
        2: data.month_24.split(';'),
        3: data.month_36.split(';'),
        4: data.month_48.split(';'),
        5: data.month_60.split(';'),
      };
      const seniorBonus = parseFloat(data.senior);
      const baseInterest = parseFloat(data.roi);

      let frequency = 1,
        no_of_year = 1,
        senior_value = 0;

      function getInterestRate() {
        const monthsArray = monthData[no_of_year];
        switch (parseInt(frequency)) {
          case 1:
            return monthsArray[0];
          case 4:
            return monthsArray[1];
          case 6:
            return monthsArray[2];
          case 12:
            return monthsArray[3];
          default:
            return monthsArray[4];
        }
      }

      function calculateInterest() {
        let interestRate = parseFloat(getInterestRate());
        if (senior_value == 1) {
          interestRate += seniorBonus;
        }
        document.getElementById('show_intrest').textContent = interestRate.toFixed(2);
      }

      // Update tenure and calculate interest
      document.getElementById('tenure').addEventListener('change', function() {
        no_of_year = parseInt(this.value) + 1;
        document.getElementById('show_tenure').textContent = `${no_of_year * 12} Months`;
        calculateInterest();
      });

      // Update frequency and calculate interest
      document.querySelectorAll('.payout').forEach((element) => {
        element.addEventListener('change', function() {
          frequency = this.value;
          document.getElementById('show_frequency').textContent = this.nextElementSibling.textContent;
          calculateInterest();
        });
      });

      // Update senior status and calculate interest
      document.querySelectorAll('.senior').forEach((element) => {
        element.addEventListener('change', function() {
          senior_value = document.querySelector("input[name='senior']:checked").value;
          document.getElementById('show_senior').textContent = senior_value == 1 ? 'Yes' : 'No';
          calculateInterest();
        });
      });
    });
  </script>

</x-wrapper>
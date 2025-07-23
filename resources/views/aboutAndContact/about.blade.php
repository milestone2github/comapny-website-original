@section('title', 'About Us – mNivesh')
<head>
  @stack('page-icons')
  <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
</head>


<x-wrapper>
  <section style="
      background-image: url('https://mfdatafeed.blob.core.windows.net/company-website-images/about-1.png');
      background-size: cover;
      background-position: center;
      overflow: hidden;
      "
      class="hero-section">
    <!-- dark overlay -->
    <div style="
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background-color: rgba(0, 0, 0, 0.6);
        "></div>
  
  <!-- content -->
  <div style="
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        height: 100%;
        padding: 5rem;    /* 5rem all around */
        color: #FFF;
        ">
      <h1 style="font-size: 2.5rem; margin-bottom: 0.5rem; font-weight: bold;">
          Welcome to mNivesh™
      </h1>
      <p style="max-width: 600px; line-height: 1.5; margin-bottom: 1rem;">
          Your financial ally since 2006, mNivesh™ (Milestone Global Moneymart Private Limited)
          is an AMFI-registered Mutual Fund Distributor (ARN-37133), dedicated to simplifying
          finance.
      </p>
      <a href="https://mnivesh.investwell.app/app/#/kycOnBoarding/mobileSignUp" style="
          display: inline-block;
          background: #FFF;
          color: #1F2937;
          padding: 0.5rem 1rem;
          border-radius: 4px;
          font-weight: 500;
          text-decoration: none;
          box-shadow: 0 2px 6px rgba(0,0,0,0.2);
          transition: transform 0.2s;
          "
         onmouseover="this.style.transform='scale(1.05)'" 
         onmouseout="this.style.transform='scale(1)'">
         Start Investing
      </a>
  </div>
  </section>
{{-- After your hero section, inside @section('content') --}}
<div style="max-width: 1200px; margin: 0 auto; padding: 20px; box-sizing: border-box;">

  {{-- Our Services --}}
  <div style="
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      margin-bottom: 60px;
    ">
    {{-- Text --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <h2 style="font-size: 1.75rem; font-weight: 700; margin-bottom: 12px; color: #111827;">
        Our Services
      </h2>
      <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563;">
        Offering Mutual Funds, Stock Market investments, Insurance (Life, Health, etc.), 
        Loans, and Corporate Fixed Deposits, tailored for you.
      </p>
    </div>
    {{-- Image --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <img
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/about-2.png"
        alt="Our Services"
        style="
          width: 100%;
          height: auto;
          border-radius: 8px;
          box-shadow: 0 4px 12px rgba(0,0,0,0.1);
          display: block;
        ">
    </div>
  </div>

  <hr style="border: none; border-top: 1px solid #E5E7EB; margin: 0 -24px 60px;">

  {{-- Our Impact (image left, text right) --}}
  <div class="mobile-flip" 
      style="
      display: flex;
    ">
    {{-- Image --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <img
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/about-3.png"
        alt="Our Impact"
        style="
          width: 100%;
          height: auto;
          border-radius: 8px;
          box-shadow: 0 4px 12px rgba(0,0,0,0.1);
          display: block;
        ">
    </div>
    {{-- Text --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <h2 style="font-size: 1.75rem; font-weight: 700; margin-bottom: 12px; color: #111827; text-align: right;">
        Our Impact
      </h2>
      <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563; text-align: right;">
        Managing ₹600 Crore in Mutual Funds, ₹2.5 Crore in Health Insurance, and ₹7 Crores in Fixed Deposits.
        Trusted by over 6,700+ clients with 60% referrals.
      </p>
    </div>
  </div>
</div>

{{-- After your hero section, inside @section('content') --}}
<div style="max-width: 1200px; margin: 0 auto; padding: 40px 24px; box-sizing: border-box;">

  {{-- Our Services --}}
  <div style="
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      margin-bottom: 60px;
    ">
    {{-- Text --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <h2 style="font-size: 1.75rem; font-weight: 700; margin-bottom: 12px; color: #111827;">
        Our Team
      </h2>
      <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563;">
        30+ committed professionals, available 24/7, ensuring top-tier customer service.
      </p>
    </div>
    {{-- Image --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <img
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/about-4.png"
        alt="Our Team"
        style="
          width: 100%;
          height: auto;
          border-radius: 8px;
          box-shadow: 0 4px 12px rgba(0,0,0,0.1);
          display: block;
        ">
    </div>
  </div>

  <hr style="border: none; border-top: 1px solid #E5E7EB; margin: 0 -24px 60px;">

  {{-- Our Impact (image left, text right) --}}
  <div class="mobile-flip" style="
      display: flex;
    ">
    {{-- Image --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <img
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/about-5.png"
        alt="Technology and Innovation"
        style="
          width: 100%;
          height: auto;
          border-radius: 8px;
          box-shadow: 0 4px 12px rgba(0,0,0,0.1);
          display: block;
        ">
    </div>
    {{-- Text --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <h2 style="font-size: 1.75rem; font-weight: 700; margin-bottom: 12px; color: #111827; text-align: right;">
        Technology and Innovation
      </h2>
      <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563; text-align: right;">
        Pioneering in technology for efficient, high-quality financial services.
      </p>
    </div>
  </div>
</div>
{{-- After your hero section, inside @section('content') --}}
<div style="max-width: 1200px; margin: 0 auto; padding: 40px 24px; box-sizing: border-box;">

  {{-- Our Services --}}
  <div style="
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      margin-bottom: 60px;
    ">
    {{-- Text --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <h2 style="font-size: 1.75rem; font-weight: 700; margin-bottom: 12px; color: #111827;">
        Our Commitment
      </h2>
      <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563;">
        Aligning our goals with yours for lasting relationships and continual service improvement
      </p>
    </div>
    {{-- Image --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <img
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/about-6.png"
        alt="Our Commitment"
        style="
          width: 100%;
          height: auto;
          border-radius: 8px;
          box-shadow: 0 4px 12px rgba(0,0,0,0.1);
          display: block;
        ">
    </div>
  </div>

  <hr style="border: none; border-top: 1px solid #E5E7EB; margin: 0 -24px 60px;">

  {{-- Our Impact (image left, text right) --}}
  <div class="mobile-flip" style="
      display: flex;
    ">
    {{-- Image --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <img
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/about-7.png"
        alt="Join Us"
        style="
          width: 100%;
          height: auto;
          border-radius: 8px;
          box-shadow: 0 4px 12px rgba(0,0,0,0.1);
          display: block;
        ">
    </div>
    {{-- Text --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <h2 style="font-size: 1.75rem; font-weight: 700; margin-bottom: 12px; color: #111827; text-align: right;">
        Join Us
      </h2>
      <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563; text-align: right;">
        Begin your financial journey with mNivesh™, your guide to financial success
      </p>
    </div>
  </div>
</div>

{{-- Achievements Section --}}
<div style="max-width: 1200px; margin: 0 auto; padding: 40px 24px; box-sizing: border-box;">

  <div style="
      display: flex;
      flex-wrap: wrap;
      align-items: center;
    ">
    {{-- Text/List --}}
    <div style="flex: 1 1 300px; padding: 16px; box-sizing: border-box;">
      <h2 style="font-size: 1.75rem; font-weight: 700; margin-bottom: 16px; color: #111827;">
        Achievements
      </h2>
      <ul style="list-style: none; margin: 0; padding: 0; color: #4B5563; line-height: 1.6;">
        @php
          $achievements = [
            'Join a growing community of 6700+ clients, a testament to our commitment and service quality.',
            'Record-holder for registering 2058 SIPs in a single day in 2018.',
            'Managing over ₹600 Crores in Mutual Funds, with significant holdings in Fixed Deposits and Health Insurance.',
            'Ranked 382nd All India among top banks and wealth management firms.',
            'Recipient of the prestigious MFRT (Mutual Fund Round Table) TAJ qualifier – a mark of industry excellence.',
            'Over ₹3 Crore in monthly SIPs from our satisfied investors.',
            'Maintaining a 97% renewal retention rate in Health Insurance.',
          ];
        @endphp

        @foreach($achievements as $item)
          <li style="display: flex; align-items: flex-start; margin-bottom: 12px;">
            <span style="
                display: inline-block;
                min-width: 20px;
                color: #10B981;
                font-size: 1.25rem;
                line-height: 1;
                margin-right: 8px;
              ">
              &#10003;
            </span>
            <span style="flex: 1; font-size: 1.2rem;">
              {{ $item }}
            </span>
          </li>
        @endforeach
      </ul>
    </div>

    {{-- Image --}}
    <div style="flex: 1 1 300px; padding: 16px; box-sizing: border-box;">
      <img
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/about-8.png"
        alt="Achievements Trophy"
        style="
          width: 100%;
          height: auto;
          border-radius: 8px;
          box-shadow: 0 4px 12px rgba(0,0,0,0.1);
          display: block;
        ">
    </div>
  </div>
</div>
</x-wrapper>
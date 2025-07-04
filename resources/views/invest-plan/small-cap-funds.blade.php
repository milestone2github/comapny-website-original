<head>
  @stack('page-icons')
  <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
</head>


<x-wrapper>
  <section style="
      position: relative;
      margin-top: 3rem;
      width: 100.5%;    
      height: 15rem;    
      left: 50%;           
      margin-left: -50vw;
      background-image: url('https://mfdatafeed.blob.core.windows.net/company-website-images/small-1.jpeg');
      background-size: cover;
      background-position: center;
      overflow: hidden;
      ">
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
        Small-cap Funds
      </h2>
      <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563;">
        Small-cap mutual funds are a category of equity mutual funds that
        invest at least 65% of their assets in small-cap companies—those
        ranked 251st and beyond in terms of market capitalisation, as per SEBI
        (Securities and Exchange Board of India) classification. These
        companies are typically in the early stages of their business cycle
        and have significant room for growth, though they are also more
        volatile and risk-prone compared to large-cap and mid-cap firms.
      </p>
    </div>
    {{-- Image --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <img
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/small-2.png"
        alt="Small-cap Funds"
        style="
          width: 100%;
          height: auto;
          border-radius: 8px;
          box-shadow: 0 4px 12px rgba(0,0,0,0.1);
          display: block;
        ">
    </div>
  </div>


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
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/small-3.png"
        alt="How Small-Cap Funds Work"
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
        How Small-Cap Funds Work
      </h2>
      <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563; text-align: right;">
        Small-cap equity funds focus on investing in equity or equity-related
        instruments of small-sized businesses. Their primary goal is to
        achieve long-term capital appreciation. Due to their smaller size,
        these companies can expand more aggressively, and the mutual
        funds that invest in them aim to capture this growth potential.
        However, with limited operating history and resources, these
        companies may be more vulnerable to market downturns or
        economic uncertainties.
      </p>
    </div>
  </div>
</div>

{{-- Features & Advantages --}}
<div style="max-width: 1000px; margin: 3rem auto; padding: 0 1rem; box-sizing: border-box;">
  <h2 style="font-size: 1.75rem; font-weight: 700; text-align: center; margin-bottom: 2rem; color: #111827;">
    Features and Advantages
  </h2>

  <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
    {{-- Card 1 --}}
    <div style="
        flex: 1 1 300px;
        background-color: #14247F;
        color: #FFFFFF;
        border-radius: 8px;
        padding: 1.5rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
      ">
      <!-- Circle icon container -->
      <div style="
          width: 48px;
          height: 48px;
          background: #FFFFFF;
          border-radius: 50%;
          display: flex;
          align-items: center;
          justify-content: center;
          margin-bottom: 1rem;
        ">
        <img src="/images/smallcappg/Frame1.svg" alt="Diversification" style="width: 24px; height: 24px;">
      </div>
      <p style="font-size: 1rem; line-height: 1.6; margin: 0; font-weight: bold; text-align: center;">
        Another advantage is portfolio diversification. Small-cap funds expose investors to sectors or businesses that might not be present in large or mid-cap funds, offering a broader mix of opportunities. These funds also provide access to undiscovered opportunities, as many small-cap firms are under-researched or undervalued due to limited analyst coverage.
      </p>
    </div>

    {{-- Card 2 --}}
    <div style="
        flex: 1 1 300px;
        background-color: #14247F;
        color: #FFFFFF;
        border-radius: 8px;
        padding: 1.5rem;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        display: flex;
        flex-direction: column;
        align-items: center;
      ">
      <div style="
          width: 48px;
          height: 48px;
          background: #FFFFFF;
          border-radius: 50%;
          display: flex;
          align-items: center;
          justify-content: center;
          margin-bottom: 1rem;
        ">
        <img src="/images/smallcappg/Frame2.svg" alt="Growth Potential" style="width: 24px; height: 24px;">
      </div>
      <p style="font-size: 1rem; line-height: 1.6; margin: 0; font-weight: bold; text-align: center;">
        One of the main attractions of small-cap funds is their high growth potential. Since they invest in emerging businesses, there’s a chance to gain substantial returns if the companies succeed and grow into mid or large-cap firms over time.
      </p>
    </div>
  </div>
</div>

<div style="max-width: 1200px; margin: 0 auto; padding: 40px 24px; box-sizing: border-box;">

  <div style="
      display: flex;
      flex-wrap: wrap;
      align-items: center;
    ">
    {{-- Text/List --}}
    <div style="flex: 1 1 300px; padding: 16px; box-sizing: border-box;">
      <h2 style="font-size: 1.75rem; font-weight: 700; margin-bottom: 16px; color: #111827;">
        Who Should Invest
      </h2>
      <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563;">
        Small-cap funds are best suited for:
      </p>
      <ul style="list-style: none; margin: 0; padding: 0; color: #4B5563; line-height: 1.6;">
        @php
          $achievements = [
            'Investors with a high-risk appetite, as these funds are more volatile.',
            'Long-term investors with financial goals like retirement or children’s education, where the investment horizon is ideally over 5–7 years.',
            'Value-seeking investors looking to invest in future mid-cap or large-cap companies while they are still in the early stages and available at lower valuations.',
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

    <div style="flex: 1 1 300px; padding: 16px; box-sizing: border-box;">
      <img
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/small-4.png"
        alt="Who Should Invest"
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
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/small-5.png"
        alt="Points to Consider Before Investing"
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
        Points to Consider Before Investing
      </h2>
      <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563; text-align: right;">
        While the returns can be attractive, small-cap funds come with several risks
      </p>
      <ul style="list-style: none; margin: 0; padding: 0; color: #4B5563; line-height: 1.6;">
        @php
          $achievements = [
            'They are highly volatile and react quickly to market changes.',
            'Short-term investments (less than 3–5 years) may not be sufficient to offset market fluctuations.',
            'Not every small-cap company succeeds. Some may fail due to weak business models, poor management, or inability to cope with market challenges.',
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
  </div>
</div>

{{-- Tax Implication Section --}}
<div style="
    position: relative;
    margin: 3rem auto;
    padding: 2rem;
    max-width: 1000px;
    border-radius: 8px;
    background: url('/images/smallcappg/h2.png') center/cover no-repeat;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
">
  {{-- Translucent overlay --}}
  <div style="
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(4px);
  "></div>

  {{-- Text content --}}
  <div style="
      position: relative;
      color: #FFF;
      text-align: center;
      line-height: 1.6;
  ">
    <h2 style="font-size: 2rem; font-weight: 700; margin-bottom: 1rem;">
      Tax Implication
    </h2>
    <p style="font-size: 1rem; max-width: 800px; margin: 0 auto; font-weight: bold;">
      Understanding the tax implications of investing in small-cap mutual funds is essential for maximizing post-tax returns. In India, if fund units are sold within one year, gains are taxed as Short-Term Capital Gains (STCG) at 20%. For units held for more than a year, Long-Term Capital Gains (LTCG) tax applies at 12.5% on profits exceeding ₹1.25 lakh annually, without indexation benefits. Dividends from mutual funds, previously subject to Dividend Distribution Tax (DDT), are now added to the investor’s income and taxed according to their income tax slab. To enhance tax efficiency, investors should consider holding investments long-term and opting for growth plans over dividend payouts.
    </p>
  </div>
</div>


<div style="max-width: 1200px; margin: 0 auto; padding: 40px 24px; box-sizing: border-box;">
  <div style="
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      margin-bottom: 60px;
    ">
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <h2 style="font-size: 1.75rem; font-weight: 700; margin-bottom: 12px; color: #111827;">
        How to Invest
      </h2>
      <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563;">
        Investing in small-cap mutual funds is simple once
        compliance is done. You can invest directly through fund
        house websites or via mutual fund distributors. Investment modes
        include lump sum and Systematic Investment Plans (SIPs).
      </p>
    </div>
    {{-- Image --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <img
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/small-6.png"
        alt="How to Invest"
        style="
          width: 100%;
          height: auto;
          border-radius: 8px;
          box-shadow: 0 4px 12px rgba(0,0,0,0.1);
          display: block;
        ">
    </div>
  </div>


  {{-- Our Impact (image left, text right) --}}
  <div style="
      display: flex;
      flex-wrap: wrap;
      align-items: center;
    ">
    {{-- Image --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <img
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/small-7.png"
        alt="Conclusion"
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
        Conclusion
      </h2>
      <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563; text-align: right;">
        Small-cap mutual funds offer an exciting opportunity for long-term
        investors willing to accept higher risk for potentially higher rewards.
        With proper due diligence and a long-term horizon, they can play a
        valuable role in wealth creation
      </p>
    </div>
  </div>
</div>

</x-wrapper>
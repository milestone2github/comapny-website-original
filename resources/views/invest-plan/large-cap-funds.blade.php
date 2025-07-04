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
      background-image: url('https://mfdatafeed.blob.core.windows.net/company-website-images/large-1.png');
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
        Large-cap Mutual Funds
      </h2>
      <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563;">
        Large-cap Mutual Funds are a category of equity mutual funds that
        invest primarily in companies with large market capitalisations. In
        India, as defined by the Securities and Exchange Board of India (SEBI),
        large-cap companies include the top 100 listed firms by market
        capitalisation. These companies are typically well-established,
        financially sound, and leaders in their respective sectors. Due to their
        stability and consistent performance over time, large-cap funds are
        considered a relatively safer option within the equity mutual fund
        category.
      </p>
    </div>
    {{-- Image --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <img
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/large-2.png"
        alt="Large-cap Mutual Funds"
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
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563; text-align: center;">
        One of the key reasons investors choose large-cap mutual funds is the lower level of risk they offer compared to mid-cap and small-cap
        funds. Since these funds invest in blue-chip companies with proven track records, they are less susceptible to extreme market volatility.
        Although the returns may not be as high as those from riskier funds, they tend to be more predictable and stable. This makes them suitable for
        conservative investors or those new to equity investing. These funds also offer long-term growth potential, making them ideal for goals like
        retirement planning, children’s education, or wealth accumulation over a 5–7 year horizon. Another advantage of large-cap funds is their
        ability to provide diversification. They typically invest across various sectors, helping reduce the impact of poor performance in any single
        industry. Additionally, large-cap companies often pay regular dividends, which can provide a steady income stream alongside capital
        appreciation.     
      </p>
    </div>
  </div>
</div>


{{-- Tax Implication Section --}}
<div style="
    position: relative;
    margin: 2rem auto;
    padding: 2rem;
    border-radius: 8px;
    background: url('/images/smallcappg/h2.png') center/cover no-repeat;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    max-width: 90%;
">
  {{-- Translucent overlay --}}
  <div style="
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(4px);
      width: 100%;
  "></div>

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
      Understanding the tax implications of investing in large-cap mutual funds is essential for maximizing post-tax returns. In India, if fund
      units are sold within one year, gains are taxed as Short-Term Capital Gains (STCG) at 20%. For units held for more than a year, LongTerm Capital Gains (LTCG) tax applies at 12.5% on profits exceeding ₹1.25 lakh annually, without indexation benefits. Dividends from
      mutual funds, previously subject to Dividend Distribution Tax (DDT), are now added to the investor’s income and taxed according to
      their income tax slab. To enhance tax efficiency, investors should consider holding investments long-term and opting for growth plans
      over dividend payouts.
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
      <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563;">
        Investors can begin investing in large-cap mutual funds through
        multiple channels. One can invest directly via the fund house’s
        website or use any broker services. For those seeking personalized
        advice, financial advisors can help craft a strategy aligned with
        specific goals. Another popular route is the Systematic Investment
        Plan (SIP), which allows regular monthly investments, encouraging
        disciplined saving and reducing the impact of market fluctuations
        through rupee-cost averaging.
      </p>
    </div>
    {{-- Image --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <img
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/large-3.png"
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
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/large-4.png"
        alt="How Large-Cap Funds Work"
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
      <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563; text-align: right;">
        While large-cap mutual funds are considered relatively safe, they are
        not entirely risk-free. Market downturns can still affect their
        performance, though typically to a lesser extent. Therefore, investors
        must align their expectations with their risk tolerance and investment
        horizon. In conclusion, large-cap mutual funds are a balanced
        investment option, offering the growth potential of equities with the
        relative safety of large, established companies. They are particularly
        suitable for long-term investors seeking steady returns,
        diversification, and tax efficiency.
    </div>
  </div>
</div>

</x-wrapper>
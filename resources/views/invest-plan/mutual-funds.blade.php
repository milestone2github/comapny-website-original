<head>
  @stack('page-icons')
  <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
</head>


<x-wrapper>
  <section style="
      background-image: url('https://mfdatafeed.blob.core.windows.net/company-website-images/mutual-7.png');
      background-size: cover;
      background-position: center;
      overflow: hidden;
      "
      class="hero-section">
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
        Understanding Mutual Funds: A Gateway to Diversified Investing
      </h2>
      <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563;">
          Mutual funds have emerged as a highly popular investment avenue
          for individuals seeking professional management, diversification, and
          accessibility in the financial markets. Essentially, a mutual fund pools
          money from multiple investors to invest in a diversified portfolio of
          securities like stocks, bonds, and other assets, managed by
          professional fund managers. This collective investment approach
          offers several advantages, especially for those who may not have the
          time, expertise, or capital to invest directly in a wide range of
          securities.
    </p>
    </div>
    {{-- Image --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <img
      src="https://mfdatafeed.blob.core.windows.net/company-website-images/mutual-1.png"
      alt="overview"
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
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/mutual-2.png"
        alt="benifits"
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
        One of the primary benefits of mutual funds is <strong> professional management</strong>.
        Experienced fund managers, backed by research teams, make informed
        decisions on where to invest the pooled money, aiming to generate
        returns aligned with the fund's stated objectives. This expertise takes the
        burden of constant market tracking and individual stock/bond selection
        off the investor's shoulders.</p>
    </div>
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
          Diversification
        </h2>
        <p style="font-size: 1.2rem; line-height: 1.6; color: #4B5563; text-align: left;">
            Diversification is another key advantage. By investing in a mutual
            fund, you automatically gain exposure to a basket of securities
            across various industries or asset classes. This diversification helps
            mitigate risk, as the poor performance of one security is often offset
            by the better performance of others, making the overall portfolio less
            volatile than holding individual stocks.</p>
</div>
{{-- Image --}}
    <div style="
        flex: 1 1 300px;
        padding: 16px;
        box-sizing: border-box;
      ">
      <img
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/mutual-3.png"
        alt="Diversification"
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
      src="https://mfdatafeed.blob.core.windows.net/company-website-images/mutual-4.png"
      alt="description"
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
        Mutual funds also offer affordability and convenience. You can start
        investing with relatively small amounts through Systematic Investment
        Plans (SIPs), which allow you to invest a fixed sum at regular intervals
        (e.g., monthly). This promotes disciplined investing and leverages the
        power of rupee cost averaging, where you buy more units when prices
        are low and fewer when high. Furthermore, mutual funds offer liquidity,
        allowing investors to buy or sell units on any business day, making them
        more accessible than some other long term investments
    </p>
    </div>
</div>
</div>

<div class="py-12 px-4 sm:px-8 lg:px-16">
  <div class="text-center mb-10">
    <h2 class="text-2xl sm:text-3xl font-bold mb-2">
      There are various types of mutual funds to suit different financial goals and risk appetites.
    </h2>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    <!-- Card 1: Equity Funds -->
    <div class="flex items-start space-x-4">
      <div class="flex-shrink-0 w-10 h-10 bg-indigo-500 rounded p-1 flex items-center justify-center">
        <img
          src="{{ asset('images/Equity Fund.png') }}"
          alt="Equity fund"
          class="w-full h-full object-contain"
        />
      </div>
      <div>
        <h3 class="font-semibold text-lg mb-1">Equity funds</h3>
        <p>
          Primarily invest in stocks and aim for capital appreciation, carrying higher risk but also
          higher return potential.
        </p>
      </div>
    </div>

    <!-- Card 2: Debt Funds -->
    <div class="flex items-start space-x-4">
      <div class="flex-shrink-0 w-10 h-10 bg-indigo-500 rounded p-1 flex items-center justify-center">
        <img
          src="{{ asset('images/Debt Fund.png') }}"
          alt="Debt fund"
          class="w-full h-full object-contain"
        />
      </div>
      <div>
        <h3 class="font-semibold text-lg mb-1">Debt funds</h3>
        <p>
          Invest in fixed income instruments like bonds, offering more stability and income generation.
        </p>
      </div>
    </div>

    <!-- Card 3: Hybrid Funds -->
    <div class="flex items-start space-x-4">
      <div class="flex-shrink-0 w-10 h-10 bg-indigo-500 rounded p-1 flex items-center justify-center">
        <img
          src="{{ asset('images/Hybrid Fund.png') }}"
          alt="Hybrid fund"
          class="w-full h-full object-contain"
        />
      </div>
      <div>
        <h3 class="font-semibold text-lg mb-1">Hybrid funds</h3>
        <p>
          Strike a balance by investing in both equity and debt. Other specialized funds include ELSS
          (Equity Linked Savings Schemes) for tax benefits, liquid funds for short‐term parking of
          funds, and index funds that track specific market indices.
        </p>
      </div>
    </div>
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
              Subject to market risks
            </h2>
            <p style="text-align: left;">
              While mutual funds offer numerous benefits, it's crucial to remember
              that they are subject to market risks. Their returns are not guaranteed
              and can fluctuate with market conditions. It's essential for investors to
              understand the fund's investment objective, risk profile, and expense
              ratio (the annual fee charged by the fund house) before investing.
            </p>
            
      </div>
      {{-- Image --}}
      <div style="
          flex: 1 1 300px;
          padding: 16px;
          box-sizing: border-box;
        ">
        <img
        src="https://mfdatafeed.blob.core.windows.net/company-website-images/mutual-5.png"
        alt="risk"
        style="
            width: 100%;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            display: block;
          ">
      </div>
    </div>
    
    {{-- blur Section --}}
    <div style="
    position: relative;
    margin: 2rem auto;
    padding: 2rem;
    border-radius: 8px;
    background: url('https://mfdatafeed.blob.core.windows.net/company-website-images/mutual-6.png') center/cover no-repeat;
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

{{-- Text content --}}
<div style="
      position: relative;
      color: #FFF;
      text-align: center;
      line-height: 1.6;
  ">
   <h2 style="font-size: 1.75rem; font-weight: 700; margin-bottom: 12px; color: #111827; text-align: center; color:white">
     Securities and Exchange Board of India
   </h2>
   
   <p style="font-size: 1rem; max-width: 800px; margin: 0 auto; font-weight: bold;">
     In India, mutual funds are strictly regulated by the Securities and Exchange Board of India (SEBI), which ensures transparency and
      investor protection. This regulatory framework, coupled with the inherent advantages of professional management and diversification,
      makes mutual funds a compelling option for wealth creation and achieving diverse financial goals.
    </p>
  </div>
</div>

</x-wrapper>

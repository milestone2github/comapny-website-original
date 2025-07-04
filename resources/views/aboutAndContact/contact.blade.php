<x-wrapper>

 <!-- Spacer wrapper -->
<div class="pt-0 relative z-0">

  <!-- Contact Section Main -->
  <section
    class="relative min-h-[80vh] bg-cover bg-center bg-no-repeat pt-[px] -mt-1 contact-desktop"
    style="background-image: url('https://mfdatafeed.blob.core.windows.net/company-website-images/contact-1.png'); margin-top:3rem; width: 98.8vw;"
  >
   
  <div class="absolute inset-0 bg-black bg-opacity-50 z-0"></div>

    <div class="relative z-10 flex flex-col md:flex-row items-center justify-between min-h-[80vh] px-6 md:px-20 py-6 text-white">
    <!-- Left Side Content -->
    <div class="relative w-full md:w-1/2 flex flex-col justify-center">
      

      <!-- Headline Content -->
      <div class="ml-0 md:ml-12 mt-4 md:mt-0">
        <h2 class="text-4xl md:text-5xl font-extrabold leading-tight mb-3">
          Take the First Step Towards<br>
          <span class="text-yellow-400">Financial Growth</span>
        </h2>
        <p class="text-base md:text-lg text-gray-200 mb-4">
          Get all your questions answered by our<br>
          Business Development Team.
        </p>

        <!-- Horizontal Social Icons -->
        <div class="flex space-x-4 mt-4">
          <a href="https://www.linkedin.com/company/mnivesh/posts/?feedView=all" target="_blank" rel="noopener">
            <img src="https://mfdatafeed.blob.core.windows.net/company-website-images/contact-2.png" class="w-10 h-10" alt="LinkedIn" />
          </a>
          <a href="https://youtube.com/@mnivesh_team?si=HzZe4Ks7Ot9Rmp9w" target="_blank" rel="noopener">
            <img src="https://mfdatafeed.blob.core.windows.net/company-website-images/contact-4.png" class="w-10 h-10" alt="YouTube" />
          </a>
          <a href="https://www.facebook.com/share/16iKDCXR1X/?mibextid=wwXIfr" target="_blank" rel="noopener">
            <img src="https://mfdatafeed.blob.core.windows.net/company-website-images/contact-5.png" class="w-10 h-10" alt="Facebook" />
          </a>
          <a href="https://www.instagram.com/mnivesh_team?igsh=NnhxNDdwejlyaTln&utm_source=qr" target="_blank" rel="noopener">
            <img src="https://mfdatafeed.blob.core.windows.net/company-website-images/contact-6.png" class="w-10 h-10" alt="Instagram" />
          </a>
        </div>

      </div>
    </div>

    <!-- Right Side Form -->
    <div class="w-full md:w-1/2 mt-10 md:mt-11 flex justify-center">

    @if(session('success'))
    <div 
        id="successMessage"
        class="fixed top-20 right-4 z-50 max-w-sm px-4 py-3 bg-green-600 text-white border-l-4 border-green-400 rounded shadow-lg transition duration-500 ease-in-out"
    >
        {{ session('success') }}
    </div>

    <script>
        setTimeout(() => {
            const msg = document.getElementById('successMessage');
            if (msg) {
                msg.style.opacity = '0';
                setTimeout(() => msg.remove(), 500); // fade out then remove
            }
        }, 4000);
    </script>
@endif


      <form method="POST" action="{{ route('contact.submit') }}"
      style="height:25rem;" 
      class="w-full max-w-lg border border-white rounded-xl p-2 bg-transparent backdrop-filter backdrop-blur-0 text-white">

  @csrf
  <h3 class="text-lg font-bold mb-3">Get in touch</h3>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
    <div>
      <label class="block text-sm mb-1">First name</label>
      <input type="text" name="first_name" required placeholder="First name"
        class="w-full px-3 py-1.5 text-sm bg-transparent text-white placeholder-gray-300 border border-white rounded focus:outline-none">
    </div>
    <div>
      <label class="block text-sm mb-1">Last name</label>
      <input type="text" name="last_name" required placeholder="Last name"
        class="w-full px-3 py-1.5 text-sm bg-transparent text-white placeholder-gray-300 border border-white rounded focus:outline-none">
    </div>
  </div>

  <div class="mb-2">
    <label class="block text-sm mb-1">Email</label>
    <input type="email" name="email" required placeholder="you@company.com"
      class="w-full px-3 py-1.5 text-sm bg-transparent text-white placeholder-gray-300 border border-white rounded focus:outline-none">
  </div>

  <div class="mb-2">
    <label class="block text-sm mb-1">Phone number</label>
    <input type="text" name="phone" required placeholder="+91..."
      class="w-full px-3 py-1.5 text-sm bg-transparent text-white placeholder-gray-300 border border-white rounded focus:outline-none">
  </div>

  <div class="mb-2">
    <label class="block text-sm mb-1">Message</label>
    <textarea name="message" rows="2" required placeholder="Your message..."
      class="w-full px-3 py-1.5 text-sm bg-transparent text-white placeholder-gray-300 border border-white rounded focus:outline-none resize-none"></textarea>
  </div>

  <button type="submit"
    class="mt-2 w-full py-1.5 text-sm font-semibold text-white border border-white rounded-full hover:bg-white hover:text-black transition duration-300">
    Send
  </button>
</form>
      
    </div>
    
  </div>
</section>
<section
  class="contact-mobile w-full min-h-screen bg-cover bg-center bg-no-repeat px-4 py-8 text-white"
  style="background-image: url('https://mfdatafeed.blob.core.windows.net/company-website-images/contact-1.png'); margin-top: 2rem;"
>
  <div class="bg-black bg-opacity-60 p-4 rounded-xl">
    <!-- Heading -->
    <div class="text-center mb-6">
      <h2 class="text-3xl font-bold leading-snug">
        Start Your<br><span class="text-yellow-400">Financial Journey</span>
      </h2>
      <p class="mt-2 text-sm text-gray-300">Get in touch with our Business Development Team.</p>
    </div>

    <!-- Contact Form -->
    <form method="POST" action="{{ route('contact.submit') }}"
      class="w-full border border-white rounded-xl p-4 backdrop-filter backdrop-blur-sm text-white">
      @csrf
      <div class="grid grid-cols-1 gap-3">
        <div>
          <label class="block text-sm mb-1">First name</label>
          <input type="text" name="first_name" required placeholder="First name"
            class="w-full px-3 py-2 text-sm bg-transparent text-white placeholder-gray-300 border border-white rounded focus:outline-none">
        </div>
        <div>
          <label class="block text-sm mb-1">Last name</label>
          <input type="text" name="last_name" required placeholder="Last name"
            class="w-full px-3 py-2 text-sm bg-transparent text-white placeholder-gray-300 border border-white rounded focus:outline-none">
        </div>
        <div>
          <label class="block text-sm mb-1">Email</label>
          <input type="email" name="email" required placeholder="you@company.com"
            class="w-full px-3 py-2 text-sm bg-transparent text-white placeholder-gray-300 border border-white rounded focus:outline-none">
        </div>
        <div>
          <label class="block text-sm mb-1">Phone number</label>
          <input type="text" name="phone" required placeholder="+91..."
            class="w-full px-3 py-2 text-sm bg-transparent text-white placeholder-gray-300 border border-white rounded focus:outline-none">
        </div>
        <div>
          <label class="block text-sm mb-1">Message</label>
          <textarea name="message" rows="2" required placeholder="Your message..."
            class="w-full px-3 py-2 text-sm bg-transparent text-white placeholder-gray-300 border border-white rounded focus:outline-none resize-none"></textarea>
        </div>
      </div>

      <button type="submit"
        class="mt-4 w-full py-2 text-sm font-semibold text-white border border-white rounded-full hover:bg-white hover:text-black transition duration-300">
        Send
      </button>
    </form>

    <!-- Social Icons -->
    <!-- Social Icons -->
<div class="flex mt-6 mb-10">
  <a href="https://www.linkedin.com/company/mnivesh/posts/?feedView=all" target="_blank">
    <img src="https://mfdatafeed.blob.core.windows.net/company-website-images/contact-2.png" class="w-8 h-8" alt="LinkedIn" />
  </a>
  <a href="https://youtube.com/@mnivesh_team?si=HzZe4Ks7Ot9Rmp9w" target="_blank">
    <img src="https://mfdatafeed.blob.core.windows.net/company-website-images/contact-4.png" class="w-8 h-8" alt="YouTube" />
  </a>
  <a href="https://www.facebook.com/share/16iKDCXR1X/?mibextid=wwXIfr" target="_blank">
    <img src="https://mfdatafeed.blob.core.windows.net/company-website-images/contact-5.png" class="w-8 h-8" alt="Facebook" />
  </a>
  <a href="https://www.instagram.com/mnivesh_team?igsh=NnhxNDdwejlyaTln&utm_source=qr" target="_blank">
    <img src="https://mfdatafeed.blob.core.windows.net/company-website-images/contact-6.png" class="w-8 h-8" alt="Instagram" />
  </a>
</div>

  </div>
</section>
  </div>

  <!-- Contact Details Section -->
  <section class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Contact Details</h2>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
      <!-- Head Office -->
      <div class="bg-white rounded-xl shadow-md p-6 text-center flex flex-col items-center">
        <img src="https://mfdatafeed.blob.core.windows.net/company-website-images/contact-7.png" alt="India Flag" class="w-10 h-auto mb-4">
        <p class="text-gray-800 text-base font-medium leading-relaxed mb-2">
          Head Office: 702, Crown Heights, Near Rithala Metro, Sector 10, Rohini, Delhi-110085
        </p>
        <a href="https://www.google.com/maps/search/?api=1&query=Milestone+Money+Mart+Private+Limited" target="_blank"
           class="text-blue-500 font-semibold text-sm inline-flex items-center space-x-1 mt-2">
          <span>View on Map</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M14 3h7v7m0 0L10 21l-7-7L21 10z"/>
          </svg>
        </a>
      </div>

      <!-- Delhi Office -->
      <div class="bg-white rounded-xl shadow-md p-6 text-center flex flex-col items-center">
        <img src="https://mfdatafeed.blob.core.windows.net/company-website-images/contact-7.png" alt="India Flag" class="w-10 h-auto mb-4">
        <p class="text-gray-800 text-base font-medium leading-relaxed mb-2">
          Delhi Office: 101-G, Crown Heights, Near Rithala Metro, Sector 10, Rohini, Delhi-110085
        </p>
        <a href="https://www.google.com/maps/search/?api=1&query=Milestone+Money+Mart+Private+Limited" target="_blank"
         class="text-blue-500 font-semibold text-sm inline-flex items-center space-x-1 mt-2">
          <span>View on Map</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M14 3h7v7m0 0L10 21l-7-7L21 10z"/>
          </svg>
        </a>
      </div>

      <!-- Sonipat Office -->
      <div class="bg-white rounded-xl shadow-md p-6 text-center flex flex-col items-center">
        <img src="https://mfdatafeed.blob.core.windows.net/company-website-images/contact-7.png" alt="India Flag" class="w-10 h-auto mb-4">
        <p class="text-gray-800 text-base font-medium leading-relaxed mb-2">
          Sonipat Office: SCO 177, Sector 14, Sonepat, near Milk Point, Haryana 131001
        </p>
        <a href="https://www.google.com/maps?q=SCO+177,+Sector+14,+Sonepat,+near+Milk+Point,+Haryana+131001" target="_blank"
          class="text-blue-500 font-semibold text-sm inline-flex items-center space-x-1 mt-2">
          <span>View on Map</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M14 3h7v7m0 0L10 21l-7-7L21 10z"/>
          </svg>
        </a>
      </div>
      <!-- Other Office -->
      <div class="bg-white rounded-xl shadow-md p-6 text-center flex flex-col items-center">
        <img src="https://mfdatafeed.blob.core.windows.net/company-website-images/contact-7.png" alt="India Flag" class="w-10 h-auto mb-4">
        <p class="text-gray-800 text-base font-medium leading-relaxed mb-2">
          Other Office: 166-P, Railway Road, Ferozepur Cantonment, Punjab-152001
        </p>
        <a href="https://www.google.com/maps?q=166-P,+Railway+Road,+Ferozepur+Cantonment,+Punjab-152001" target="_blank"
         class="text-blue-500 font-semibold text-sm inline-flex items-center space-x-1 mt-2">
          <span>View on Map</span>
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
               viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M14 3h7v7m0 0L10 21l-7-7L21 10z"/>
          </svg>
        </a>
      </div>

    </div>

      <!-- Email and Phone -->
      <div class="grid grid-cols-1 md:grid-cols-2 text-center gap-8 text-gray-700 text-sm md:text-base">
        <div>
          <p class="mb-2">Prefer Email? You Can Also Reach Us At:</p>
          <a href="#" id="supportEmailLink" class="text-blue-600 font-semibold text-base md:text-lg supportemail">
                <span id="supportEmailText" class="supportemailtext">loading…</span>
        </a>
        </div>
        <div>
          <p class="mb-2">Contact Number? You Can Also Reach Us At:</p>
          <a href="tel:+918269135135" class="text-blue-600 font-semibold text-base md:text-lg">
            +91 8269135135
          </a>
        </div>
      </div>
    </div>
  </section>
</x-wrapper>
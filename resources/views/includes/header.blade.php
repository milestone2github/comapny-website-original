<!-- resources/views/includes/header.blade.php -->
<header class="fixed top-0 w-full z-10 bg-gray-900 p-5 shadow-md header-mobile">

    <div class="container mx-auto flex items-center relative">
        <!-- Mobile Menu Button -->
        <button class="mr-4 md:hidden" onclick="toggleMobileMenu()">
            <!-- Hamburger Icon -->
            <svg style="color:white;" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Logo -->
        <a href="/" class="flex-shrink-0">
            <img src="{{ asset('images/LOGOfinal.png') }}" alt="mNivesh Logo" class="w-32 h-auto mobile-w">
        </a>

        <!-- Navigation Menu -->
        <nav class="desktop-menu hidden md:flex ml-8 relative">
            <div class="flex space-x-6">
                <!-- Mutual Funds -->
                <div class="menu-item group">
                    <a href="#" class="menu-link transition-all duration-300">Mutual Funds</a>
                    <!-- Submenu -->
                    <div class="submenu-modal rounded-lg">
                        <div class="flex flex-wrap justify-start gap-4 p-4">
                            <!-- Submenu Items -->
                            <a href="/Equity-Mutual-Funds" class="submenu-item text-black flex-shrink-0">Equity MF</a>
                            <a href="/Debt-Mutual-Funds" class="submenu-item text-black flex-shrink-0">Debt MF</a>
                            <a href="/Hybrid-Mutual-Funds" class="submenu-item text-black flex-shrink-0">Hybrid MF</a>
                            <!-- </div><div class="flex flex-wrap justify-start gap-4 p-4">
                                <a href="#" class="submenu-item text-black flex-shrink-0">Latest NFO</a>
                                <a href="#" class="submenu-item text-black flex-shrink-0">Check KYC</a>
                                <a href="#" class="submenu-item text-black flex-shrink-0">Top Schemes</a> -->
                        </div>
                    </div>
                </div>
                <!-- Fixed Deposits -->
                <div class="menu-item group">
                    <a href="#" class="menu-link transition-all duration-300">FD and Bonds</a>
                    <!-- Submenu -->
                    <div class="submenu-modal rounded-lg">
                        <div class="flex flex-wrap justify-start gap-4 p-4">
                            <!-- Submenu Items -->
                            <a href="/fixed-deposit" class="submenu-item text-black flex-shrink-0">Fixed Deposit</a>
                            <a href="https://mnivesh.aspero.in" target="_blank" class="submenu-item text-black flex-shrink-0">Bonds</a>
                            <a href="/govt-bond" class="submenu-item text-black flex-shrink-0">Government</a>
                        </div>
                        <div class="flex flex-wrap justify-start gap-4 p-4">
                            <a href="/corp-bond" class="submenu-item text-black flex-shrink-0">Corporate</a>
                            <a href="/taxfree-bond" class="submenu-item text-black flex-shrink-0">Tax-Free</a>
                        </div>
                    </div>
                </div>
                <!-- Insurance -->
                <div class="menu-item group">
                    <a href="#" class="menu-link transition-all duration-300">Insurance</a>
                    <!-- Submenu -->
                    <div class="submenu-modal rounded-lg">
                        <div class="flex flex-wrap justify-start gap-4 p-4">
                            <!-- Submenu Items -->
                            <a href="/life-insurance" class="submenu-item text-black flex-shrink-0">Life Insurance</a>
                            <a href="/health-insurance" class="submenu-item text-black flex-shrink-0">Health Insurance</a>
                            <a href="/corporate-insurance" class="submenu-item text-black flex-shrink-0">Corporate Insurance</a>
                        </div>
                    </div>
                </div>
                <!-- Stock market -->
                <div class="menu-item group">
                    <a href="#" class="menu-link transition-all duration-300">Stock Market</a>
                    <!-- Submenu -->
                    <div class="submenu-modal rounded-lg">
                        <div class="flex flex-wrap justify-start gap-4 p-4">
                            <!-- Submenu Items -->
                            <a href="/international-stock-market" class="submenu-item text-black flex-shrink-0">Intn'l Stock Market</a>
                            <a href="/domestic-stock-market" class="submenu-item text-black flex-shrink-0">Domestic Stock Market</a>
                            <a href="/ipo" class="submenu-item text-black flex-shrink-0">IPO</a>
                        </div>
                    </div>
                </div>
                <!-- Contact Us -->
                <div class="menu-item group">
                    <a href="/contact-us" class="menu-link transition-all duration-300">Contact Us</a>
                </div>
            </div>
        </nav>

        <!-- Spacer to push buttons to the right -->
        <div class="flex-grow"></div>

        <!-- Buttons -->
        <div class="space-x-4 flex">
            <button
                onclick="openSignInModal()"
                class="bg-[rgba(255,255,255,0.08)] text-white rounded-lg border border-white
                        hover-increase-font transition-all duration-300
                        px-2 py-1 md:px-4 md:py-2 text-sm md:text-base"
                >
                Sign In
                </button>

            <a href="https://mnivesh.investwell.app/app/#/kycOnBoarding/mobileSignUp"
                target="_blank"
                class="get-started-button rounded-lg shadow-md transition-all duration-300 px-2 py-1 md:px-4 md:py-2 text-sm md:text-base">
                Get Started
            </a>
        </div>
    </div>

    <!-- Mobile Navigation Menu -->
    <nav id="mobileMenu"
     class="hidden md:hidden bg-gray-900 text-white w-full absolute top-full left-0 z-40 shadow-lg">

        <!-- Mutual Funds -->
        <div class="border-b border-gray-700">
            <button onclick="toggleSubmenu('mobile-submenu-mutual-funds')" class="w-full text-left px-4 py-2 menu-link flex justify-between items-center">
                Mutual Funds
                <!-- Arrow Icon -->
                <svg class="w-4 h-4 transition-transform" id="arrow-mobile-submenu-mutual-funds" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414L10 13.414 5.293 8.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div id="mobile-submenu-mutual-funds" class="submenu-hidden bg-yellow-500 bg-opacity-50">
                <div class="flex flex-col p-2">
                    <!-- Submenu Items -->
                    <a href="/Equity-Mutual-Funds" class="text-black px-2 py-1">Equity</a>
                    <a href="/Debt-Mutual-Funds" class="text-black px-2 py-1">Debt</a>
                    <a href="/Hybrid-Mutual-Funds" class="text-black px-2 py-1">Hybrid</a>
                </div>
            </div>
        </div>
        <!-- FD and Bonds -->
        <div class="border-b border-gray-700">
            <button onclick="toggleSubmenu('mobile-submenu-fd-bonds')" class="w-full text-left px-4 py-2 menu-link flex justify-between items-center">
                FD and Bonds
                <!-- Arrow Icon -->
                <svg class="w-4 h-4 transition-transform" id="arrow-mobile-submenu-fd-bonds" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414L10 13.414 5.293 8.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div id="mobile-submenu-fd-bonds" class="submenu-hidden bg-yellow-500 bg-opacity-50">
                <div class="flex flex-col p-2">
                    <!-- Submenu Items -->
                    <a href="/fixed-deposit" class="submenu-item text-black flex-shrink-0">Fixed Deposit</a>
                    <a href="https://mnivesh.aspero.in" target="_blank" class="submenu-item text-black flex-shrink-0">Bonds</a>
                    <a href="/govt-bond" class="submenu-item text-black flex-shrink-0">Government</a>
                    <a href="/corp-bond" class="submenu-item text-black flex-shrink-0">Corporate</a>
                    <a href="/taxfree-bond" class="submenu-item text-black flex-shrink-0">Tax-Free</a>
                </div>
            </div>
        </div>

        <!-- Insurance -->
        <div class="border-b border-gray-700">
            <button onclick="toggleSubmenu('mobile-submenu-insurance')" class="w-full text-left px-4 py-2 menu-link flex justify-between items-center">
                Insurance
                <!-- Arrow Icon -->
                <svg class="w-4 h-4 transition-transform" id="arrow-mobile-submenu-insurance" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414L10 13.414 5.293 8.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div id="mobile-submenu-insurance" class="submenu-hidden bg-yellow-500 bg-opacity-50">
                <div class="flex flex-col p-2">
                    <!-- Submenu Items -->
                    <a href="/life-insurance" class="submenu-item text-black flex-shrink-0">Life Insurance</a>
                    <a href="/health-insurance" class="submenu-item text-black flex-shrink-0">Health Insurance</a>
                    <a href="/corporate-insurance" class="submenu-item text-black flex-shrink-0">Corporate Insurance</a>
                </div>
            </div>
        </div>

        <!-- Stock market -->
        <div class="border-b border-gray-700">
            <button onclick="toggleSubmenu('mobile-submenu-stock-market')" class="w-full text-left px-4 py-2 menu-link flex justify-between items-center">
                Stock Market
                <!-- Arrow Icon -->
                <svg class="w-4 h-4 transition-transform" id="arrow-mobile-submenu-stock-market" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 011.414 1.414L10 13.414 5.293 8.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
            <div id="mobile-submenu-stock-market" class="submenu-hidden bg-yellow-500 bg-opacity-50">
                <div class="flex flex-col p-2">
                    <!-- Submenu Items -->
                    <a href="/international-stock-market" class="submenu-item text-black flex-shrink-0">Intn'l Stock Market</a>
                    <a href="/domestic-stock-market" class="submenu-item text-black flex-shrink-0">Domestic Stock Market</a>
                    <a href="/ipo" class="submenu-item text-black flex-shrink-0">IPO</a>
                </div>
            </div>
        </div>
        <!-- Contact Us -->
        <div class="border-b border-gray-700">
            <a href="/contact-us" class="w-full text-left px-4 py-2 menu-link flex justify-between items-center">Contact Us</a>
        </div>
        <!-- Repeat similar structure for other mobile submenus -->
        <!-- Fixed Deposits, Insurance, Bonds -->
    </nav>
</header>
<div id="signInOverlay"
     style="display:none;
            position:fixed;
            inset:0;
            background:rgba(0,0,0,0.5);
            z-index:999;"
     onclick="closeSignInModal()"></div>

<!-- 2) your modal -->
<div
  id="signInModal"
  style="
    width: 30rem;
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-90%, -10%);
    z-index: 1000;
  "
>

  <div class="relative rounded-lg p-6 max-h-[80vh] overflow-y-auto">
    
    <div style="padding: 20px;" class="modal-content">
        <span style="margin-top:20px; margin-right:20px;" class="modal-close" onclick="closeSignInModal()">&times;</span>
        <div id="signInFields">
                <h2 style="margin-bottom: 10px; font-size: 25px" class="font-bold">Sign In</h2>
            <!-- Country Code Input -->
            <div class="flex items-center space-x-0 mb-4 relative">
                <!-- Country Code Dropdown -->
                <div class="relative w-24" id="countryCodeWrapper">
                    <details class="group">
                        <summary
                            style="background-color: #393939; border-color: #393939;"
                            class="flex items-center justify-between px-3 py-2 rounded-s-md cursor-pointer list-none"
                        >
                            <span id="countryCodeInput">+91</span>
                            <svg
                                class="w-4 h-4 group-open:rotate-180 transition-transform"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            >
                                <path d="M19 9l-7 7-7-7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </summary>

                        <ul id="countryCodeList"
                            style="background-color: #393939;"
                            class="absolute left-0 right-0 mt-1 max-h-48 overflow-auto rounded-md shadow-lg z-10">
                        </ul>
                    </details>
                </div>

                <!-- Mobile or Email Input -->
                <input
                    type="text"
                    placeholder="Sign with email or mobile number"
                    id="mobileOrEmail"
                    style="background-color: #393939;"
                    class="w-full p-2" />
            </div>


            
            <div class="mb-8">
                <label class="block text-sm font-medium text-gray-300 mb-2">Receive OTP via:</label>
                <div class="flex items-center space-x-4">
                    <label style="background-color:#36F85647; border-color:#00AB0E;" class="delivery-channel-labels relative text-center border border-gray-500 rounded-md py-1 px-2 w-full focus-within:bg-blue-950 focus-within:border-blue-700">
                        <input type="radio" name="otpDeliveryChannel" value="whatsapp" class="absolute invisible accent-blue-600"  checked>
                        WhatsApp
                    </label>
                    <label class="delivery-channel-labels relative text-center border border-gray-500 rounded-md py-1 px-2 w-full">
                        <input type="radio" name="otpDeliveryChannel" value="sms" class="absolute invisible accent-blue-600">
                        SMS
                    </label>
                    <label id="emailOption" class="delivery-channel-labels relative text-center border border-gray-500 rounded-md py-1 w-full hidden">
                        <input type="radio" name="otpDeliveryChannel" value="email" class="absolute invisible accent-blue-600">
                        Email
                    </label>
                </div>
            </div>
            <script>
                const inputField = document.getElementById("mobileOrEmail");
                const countryCodeWrapper = document.getElementById("countryCodeWrapper");

                const whatsappInput = document.querySelector('input[value="whatsapp"]');
                const smsInput = document.querySelector('input[value="sms"]');
                const emailInput = document.querySelector('input[value="email"]');

                const whatsappLabel = whatsappInput.closest("label");
                const smsLabel = smsInput.closest("label");
                const emailLabel = emailInput.closest("label");

                function updateSelectionStyles() {
                    const allLabels = [whatsappLabel, smsLabel, emailLabel];
                    const selectedInput = document.querySelector('input[name="otpDeliveryChannel"]:checked');

                    allLabels.forEach(label => {
                        label.style.backgroundColor = "";
                        label.style.borderColor = "";
                    });

                    if (selectedInput) {
                        const selectedLabel = selectedInput.closest("label");
                        selectedLabel.style.backgroundColor = "#36F85647"; // Light green with opacity
                        selectedLabel.style.borderColor = "#00AB0E";        // Green border
                    }
                }

                inputField.addEventListener("input", () => {
                    const value = inputField.value.trim();
                    const containsAlphabet = /[a-zA-Z]/.test(value);
                    countryCodeWrapper.style.display = containsAlphabet ? "none" : "block";

                    if (containsAlphabet) {
                        whatsappLabel.classList.add("hidden");
                        smsLabel.classList.add("hidden");
                        emailLabel.classList.remove("hidden");
                        emailInput.checked = true;
                    } else {
                        whatsappLabel.classList.remove("hidden");
                        smsLabel.classList.remove("hidden");
                        emailLabel.classList.add("hidden");
                        whatsappInput.checked = true;
                    }

                    updateSelectionStyles();
                });

                // Also update styles on manual click
                document.querySelectorAll('input[name="otpDeliveryChannel"]').forEach(input => {
                    input.addEventListener("change", updateSelectionStyles);
                });

                // Initial style update on page load
                window.addEventListener("DOMContentLoaded", updateSelectionStyles);
            </script>


            <button onclick="sendOTP(event)" class="bg-yellow-500 text-black w-full py-2 rounded-md disabled:text-gray-400 disabled:cursor-auto">Send OTP</button>

            <div class="text-center mt-4">or</div>
            <div class="text-center mt-4">
                <div class="space-y-3 mb-5">
                    <a href="{{ url('/auth/google') }}"
                    class="w-full flex items-center justify-center py-2 border border-gray-700 rounded-md hover:bg-gray-700 transition"
                    style="background-color: #393939; border: 1px solid #4a4a4a;">
                        <img src="{{ asset('images/google-logo.png') }}" class="w-5 h-5 mr-2" alt="Google"/> Continue with Google
                    </a>
                    <a href="{{ url('/auth/yahoo') }}"
                    class="w-full flex items-center justify-center py-2 border border-gray-700 rounded-md hover:bg-gray-700 transition"
                    style="background-color: #393939; border: 1px solid #4a4a4a;">       
                        <img src="{{ asset('images/yahoo-logo.svg') }}" class="w-5 h-5 mr-2" alt="Yahoo"/> Continue with Yahoo
                    </a>
                </div>
                <p class="block text-sm font-medium text-gray-300 mb-2 mt-4">Don’t have an account? <a style='color: #55B6FF; font-family: "Public Sans"; font-size: 14px; font-style: normal; font-weight: 600; line-height: normal; letter-spacing: 0.28px;' target="_blank" href='https://mnivesh.investwell.app/app/#/kycOnBoarding/mobileSignUp'>Sign Up!</a></p>
            </div>
        </div>

        <div id="otpFields" class="hidden">
            <!-- Back Button (Mirror Image of Close Button) -->
            <button style="margin-top:20px; margin-left:10px;" class="otp-back-button" onclick="goBackToSignIn()">&#8592;</button>
            <p id="signin-modal-alert" class="text-green-500 text-sm mt-4 mb-1 text-center hidden"></p>
            <!-- Enter OTP Header (Center-Aligned) -->
            <h2 class="text-2xl otp-header mt-1 mb-4">Enter OTP</h2>

            <div class="flex justify-center mb-4">
                <input type="text" inputmode="numeric" pattern="[0-9]*" maxlength="1" class="otp-input text-gray-800" placeholder="*">
                <input type="text" inputmode="numeric" pattern="[0-9]*" maxlength="1" class="otp-input text-gray-800" placeholder="*">
                <input type="text" inputmode="numeric" pattern="[0-9]*" maxlength="1" class="otp-input text-gray-800" placeholder="*">
                <input type="text" inputmode="numeric" pattern="[0-9]*" maxlength="1" class="otp-input text-gray-800" placeholder="*">
            </div>
            <button id="verify-otp" class="bg-yellow-500 text-black w-full py-2 rounded-md mb-2 disabled:text-gray-400 disabled:cursor-auto" onclick="verifyOTP()">Verify OTP</button>
            <button id="resend-otp" class="bg-gray-500 text-white w-full py-2 rounded-md disabled:text-gray-200 disabled:cursor-auto" onclick="resendOTP()">Resend OTP</button>
        </div>
    </div>
</div>
</div>
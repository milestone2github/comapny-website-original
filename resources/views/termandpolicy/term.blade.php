{{-- Terms & Conditions Page --}}
<head>
    @stack('page-icons')
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
</head>

<x-wrapper>

    <div style="
        max-width: 1050px;
        margin: 50px auto;
        padding: 30px 25px;
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 18px rgba(0,0,0,0.06);
        box-sizing: border-box;
    ">

        {{-- Page Title --}}
        <h1 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 25px; text-align:center; color:#111827;">
            Terms & Conditions
        </h1>

        <p style="font-size:1.08rem; line-height:1.75; color:#374151;">
            Welcome to <strong>niveshonline.com</strong>, a digital platform owned and operated by
            <strong>Milestone Global Moneymart Private Limited</strong>.
            By accessing or using this Website, you agree to abide by the Terms & Conditions outlined below.
            If you disagree with any part, please discontinue using the Website immediately.
        </p>

        <hr style="margin: 40px 0; border: none; border-top: 1px solid #E5E7EB;">

        <!-- 1. Introduction -->
        <h2 class="section-title">1. Introduction</h2>
        <p class="section-text">
            These Terms govern your use of the Website and Services provided by Milestone Global Moneymart Private Limited.
            By continuing to use our Website, you acknowledge that you have read, understood, and agreed to be bound by these Terms.
        </p>

        <!-- 2. Scope of Services -->
        <h2 class="section-title">2. Scope of Services</h2>
        <p class="section-text">
            niveshonline.com provides financial information, investment tools, insurance-related insights,
            and general educational content.  
            Nothing on this Website constitutes professional financial advice. Users are encouraged to consult
            certified financial advisors before making investment decisions.
        </p>

        <!-- 3. Eligibility -->
        <h2 class="section-title">3. Eligibility</h2>
        <ul class="section-list">
            <li>You must be at least 18 years of age.</li>
            <li>You must be legally competent to enter into contracts as per Indian laws.</li>
            <li>Your use of the Website must comply with all applicable regulations.</li>
        </ul>

        <!-- 4. User Responsibilities -->
        <h2 class="section-title">4. User Responsibilities</h2>
        <ul class="section-list">
            <li>Provide accurate and truthful information.</li>
            <li>Refrain from unlawful, fraudulent, or malicious activities.</li>
            <li>Do not attempt unauthorized access to servers or systems.</li>
            <li>Do not upload harmful files, viruses, or malicious code.</li>
            <li>Use Website content solely for personal and lawful purposes.</li>
        </ul>
        <p class="section-text">Violating these rules may result in suspension or permanent termination of access.</p>

        <!-- 5. Intellectual Property -->
        <h2 class="section-title">5. Intellectual Property</h2>
        <p class="section-text">
            All intellectual property including text, graphics, logos, images, and software is owned by
            Milestone Global Moneymart Private Limited.  
            Unauthorized reproduction, distribution, or modification of our content is strictly prohibited.
        </p>

        <!-- 6. Accuracy of Information -->
        <h2 class="section-title">6. Accuracy of Information</h2>
        <p class="section-text">
            While we strive to maintain accurate and updated content, we do not guarantee the reliability or completeness
            of any information provided.  
            Users should independently verify data before relying on it.
        </p>

        <!-- 7. Third Party Links -->
        <h2 class="section-title">7. Third-Party Links</h2>
        <p class="section-text">
            Our Website may contain links to external third-party websites for your convenience.
            These websites operate independently, and we assume no responsibility for their policies, content, or practices.
        </p>

        <!-- 8. Limitation of Liability -->
        <h2 class="section-title">8. Limitation of Liability</h2>
        <ul class="section-list">
            <li>We are not liable for direct, indirect, incidental, or consequential damages.</li>
            <li>No warranties are provided regarding uptime, performance, or suitability.</li>
            <li>The Website is offered on an “as is” and “as available” basis.</li>
        </ul>

        <!-- 9. Indemnification -->
        <h2 class="section-title">9. Indemnification</h2>
        <p class="section-text">
            You agree to indemnify and hold harmless Milestone Global Moneymart Private Limited from any claims,
            losses, damages, or liabilities arising out of your misuse of the Website or violation of these Terms.
        </p>

        <!-- 10. Privacy & Data Protection -->
        <h2 class="section-title">10. Privacy and Data Protection</h2>
        <p class="section-text">
            Your use of this Website is also governed by our Privacy Policy, which complies with the
            Digital Personal Data Protection Act (DPDP Act), 2023.  
            Your continued use signals acceptance of our data practices.
        </p>

        <!-- 11. Payments -->
        <h2 class="section-title">11. Payments and Transactions</h2>
        <ul class="section-list">
            <li>Payments are processed through secure PCI-DSS-compliant gateways.</li>
            <li>We are not responsible for technical failures of payment providers.</li>
            <li>Refunds, if applicable, follow specific product/service policies.</li>
        </ul>

        <!-- 12. Disclaimer -->
        <h2 class="section-title">12. Disclaimer of Warranties</h2>
        <p class="section-text">
            All content and services are provided without warranties of any kind.
        </p>

        <!-- 13. Termination -->
        <h2 class="section-title">13. Termination of Access</h2>
        <p class="section-text">
            We reserve the right to suspend or terminate access without notice if we detect misuse,
            policy violation, or unlawful activity.
        </p>

        <!-- 14. Governing Law -->
        <h2 class="section-title">14. Governing Law and Jurisdiction</h2>
        <p class="section-text">
            These Terms are governed by the laws of India.
            All disputes fall under the exclusive jurisdiction of the courts of Sonipat, Haryana.
        </p>

        <!-- 15. Updates -->
        <h2 class="section-title">15. Updates to Terms</h2>
        <p class="section-text">
            These Terms may be revised periodically.  
            Continued use after updates constitutes acceptance of the revised Terms.
        </p>

        <!-- 16. Contact -->
        <h2 class="section-title">16. Contact Information</h2>
        <p class="section-text">
            <strong>Milestone Global Moneymart Private Limited</strong><br>
            Email: info@niveshonline.com<br>
            Phone: +91 8269135135<br>
            Address: 101-G, Crown Heights, Near Rithala Metro, Sector 10, Rohini, Delhi-110085
        </p>

    </div>

    {{-- Inline Styling --}}
    <style>
        .section-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-top: 35px;
            margin-bottom: 12px;
            color: #1F2937;
        }
        .section-text {
            font-size: 1.07rem;
            line-height: 1.75;
            color: #374151;
        }
        .section-list {
            list-style: disc;
            padding-left: 25px;
            font-size: 1.07rem;
            color: #374151;
            line-height: 1.7;
        }
    </style>

</x-wrapper>

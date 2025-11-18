<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags and Title -->
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
    <title>mNivesh</title>

    <!-- Tailwind CSS -->
    <!-- Tailwind CSS via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/output.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">


    <style>
        /* Basic Resets */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            scroll-behavior: smooth;
            height: 100%;
            overflow: hidden;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        /* This will make the container scroll vertically and snap the sections */
        .scroll-container {
            scroll-snap-type: y mandatory;
            /* Vertical snapping, mandatory */
            overflow-y: scroll;
            /* Enable vertical scrolling */
            height: 100vh;
            /* Full height of the viewport */
            scroll-behavior: smooth;
            /* Smooth scrolling */
            margin-top: 5.1rem;
        }

        /* Ensure that each section takes the full height of the viewport */
        .section {
            scroll-snap-align: start;
            min-height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* Center vertically */
            align-items: center;
            /* Center horizontally */
            padding: 0rem 1rem;
            background-color: #101211;
            color: white;
        }

        footer.section {
            min-height: 70vh;
            padding: 3rem 1rem 3rem 1rem;
        }
        @media (max-width: 768px) {
            footer.section {
                min-height: 135%;
            }
        }
        /* Optional: For better user experience, you can add hover or focus states */
        .section:hover {
            background-color: #2c2f36;
            /* Lighten background on hover */
        }

        /* For Accessibility: Ensure focusable elements are styled */
        .section:focus {
            outline: 2px solid #f5a623;
            outline-offset: 5px;
        }


        /* Section-Specific Backgrounds */
        #section-main-content,
        #section-our-offerings,
        #section-stats,
        #section-blogs,
        #section-magazine {
            background-color: #101211;
        }

        /* Content Styling */
        #section-description {
            padding-bottom: 1rem;
            color: #fff;
        }

        .gradient-text {
            background: linear-gradient(to bottom right, #fff, #fff0d1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #main-content-text {
            color: #f0f0f0;
            /* Off-white color */
        }

        /* Logo */
        #amfilogo {
            width: 100px;
            height: auto;
        }

        @media (min-width: 768px) {
            #amfilogo {
                width: 150px;
            }
        }

        .top-right-logo {
            position: relative;
            left:45.2%;
            text-align: right;
        }


        /* Button Styling */
        .button {
            white-space: nowrap;
            border-radius: 0.5rem;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 0.5rem 1rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .button-get-started {
            background-color: #4f46e5;
            color: white;
        }

        .button-about-us {
            background-color: #3b82f6;
            color: white;
        }

        #third-section-heading {
            padding-top: 1rem;
            margin-bottom: 1rem;
        }


        .button:hover {
            transform: translateY(-2px);
            box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.15);
        }

        /* Grid Layouts */
        .content-grid {
            display: grid;
            grid-template-columns: 2fr 1px 3fr;
            /* Left 2fr, right 3fr */
            gap: 1rem;
            align-items: center;
            width: 100%;
        }

        /* Offerings Grid */
        #offering-container {
            align-self: center;
        }

        .offerings-grid-item {
            height: calc(16.67vh - 1rem);
            /* Item height */
            padding: 0.5rem;
            background-color: #e5e7eb;
            border: 1px solid #d1d5db;
            border-radius: 0.5rem;
            cursor: pointer;
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-weight: bold;
            white-space: normal;
            overflow-wrap: break-word;
            color: #000;
        }

        .offerings-grid-item:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.2);
        }

        .offerings-grid-item.highlighted {
            border: 3px solid #ffd700 !important;
            background-color: #fff8dc !important;
            box-shadow: 0 0 20px 5px rgba(255, 215, 0, 0.7);
        }


        /* Vertical Divider */
        .vertical-line {
            width: 2px;
            background-color: #ff0;
            height: 75%;
            align-self: center;
        }

        /* Dynamic Content */
        #dynamic-content {
            padding: 1.5rem;
            background-color: #f8fafc;
            border-radius: 0.75rem;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 50vh;
            max-height: 100vh;
            box-sizing: border-box;
        }

        #frame-title {
            color: #000;
            /* Set black color for the dynamic content title */
        }

        /* Image Styling */
        .frame-image {
            max-height: 200px;
            width: 100%;
            object-fit: contain;
            align-self: center;
            background-color: transparent; /* Ensures no background is shown */
        }



        #frame-description {
            margin-top: 0;
            margin-bottom: 1rem;
            color: #333;
        }

        /* Stats Section */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0.75rem;
            width: 100%;
            max-width: 1000px;
            margin: auto;
        }

        .large-stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.5rem;
            width: 85%;
            max-width: 650px;
            margin: 1rem auto 0;
        }

        .stats-item {
            background: linear-gradient(135deg, #ffffff, #f0f4ff);
            padding: 0.5rem;
            border-radius: 1rem;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            aspect-ratio: 1 / 1;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .stats-item-small {
            height: 150px;
            /* Reduced height */
            background: linear-gradient(135deg, #ffffff, #f0f4ff);
            padding: 0.5rem;
            border-radius: 1rem;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: transform 0.3s, box-shadow 0.3s;
        }


        .stats-item:hover {
            transform: translateY(-3px);
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
        }

        /* Typography */
        .label {
            font-size: 1.25rem;
            margin-bottom: 0.5rem;
            background: linear-gradient(45deg, #4f46e5, #7f93f5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-weight: 700;
        }

        .number {
            font-size: 2rem;
            font-weight: 900;
            background: linear-gradient(45deg, #3b82f6, #00c4ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transition: color 0.3s ease;
        }

        /* Blog and Magazine Image Styles */
        .magazine-card {
            min-height: 320px;
            min-width: 272px;
        }

        .blog-card img,
        .magazine-card img {
            width: 100%;
            height: auto;
            max-height: 200px;
            object-fit: contain;
            border-radius: 0.5rem;
            display: block;
            margin: 0 auto;
        }

        .blog-card h4,
        .magazine-card h4 {
            color: #000;
            /* Set black color for the blog and magazine titles */
        }


        /* Responsive Adjustments */
        @media (max-width: 1024px) {
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .large-stats-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {

            .stats-grid,
            .large-stats-grid {
                grid-template-columns: 1fr;
            }

            #section-blogs .grid {
                grid-template-columns: 1fr;
            }
        }

        /* Footer */
        #section-footer .text-gray-400 {
            color: #b8b8b8;
        }

        #section-footer .text-yellow-500:hover {
            color: #ffc44d;
        }

        #section-footer a {
            transition: color 0.3s ease;
        }

        #section-footer i {
            font-size: 1.5rem;
        }

        /* Floater Styles */
        .button-container {
            padding-top: 1rem;
            padding-bottom: 1rem;
            display: flex;
            justify-content: center;
        }

        /* Button in Right Column */
        .button-learn-more {
            background-color: #ffd700;
            color: black;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            text-align: center;
            margin-top: auto;
            align-self: flex-start;
            transition: background-color 0.3s ease;
        }

        .button-learn-more:hover {
            background-color: #ccac00;
        }

        /* Grayscale Images */
        .grayscale-img {
            filter: grayscale(100%);
            max-height: 4rem;
        }

        /* Slideshow Container Styling */
        .slideshow-container {
            width: 100%;
            aspect-ratio: 16 / 9; 
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
            background-color: #fff;
            border-radius: 1rem;
        }

        .slideshow-image {
            width: 100%;
            height: 100%;
            object-fit: contain; /* This shows full image, scaled */
            position: absolute;
            top: 0;
            left: 0;
            transition: opacity 0.5s ease-in-out;
            opacity: 0;
        }

        .slideshow-image.active {
            opacity: 1;
        }

        .hidden-class{
            display: none;
        }
        @media (max-width: 768px) {
            .hidden-class{
                display: block !important;
            }
            .hidden-class2{
                display: none !important;
            }
            .button-mobile{
                width:7rem;
                text-align:center;
            }
        /* Stack the entire content vertically */
        .top-right-logo{
            position: relative;
            left:38%;
            text-align: right;
        }
        .content-grid {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        }

         #offering-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* ← two equal columns */
            gap: 1rem;                              /* space between both rows & columns */
            width: 100%;
            }

        .vertical-line {
        display: none !important;
        }

        #dynamic-content {
        width: 100% !important;
        padding: 1rem;
        margin-top: 1rem;
        }

        #frame-title {
        font-size: 1.5rem;
        line-height: 1.75rem;
        }

        #frame-description {
        font-size: 1rem;
        }

        .frame-image {
        width: 100%;
        height: auto;
        }

        .offerings-grid-item {
        width: 100%;
        max-width: 100%;
        text-align: center;
        padding: 1rem;
        border-radius: 0.5rem;
        font-weight: bold;
        background: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
        }

        .offerings-grid-item span {
        display: block;
        width: 100%;
        }

        #frame-title, #frame-description {
        z-index: 2;
        position: relative;
        }
         #blog-container,
    #magazine-container {
        display: flex !important;      /* override the grid */
        flex-direction: row;           /* lay items out in a row */
        flex-wrap: nowrap;             /* don’t wrap to next line */
        gap: 1rem;                     /* space between cards */
        overflow-x: auto;              /* allow horizontal scroll */
        padding-bottom: 1rem;          /* room for scrollbar */
        -webkit-overflow-scrolling: touch; /* smooth scroll on iOS */
        scroll-snap-type: x mandatory; /* optional: snap to cards */
    }

    /* Prevent cards from shrinking and make them snap */
    #blog-container > *,
    #magazine-container > * {
        flex: 0 0 auto;               /* keep each card’s natural width */
        scroll-snap-align: start;     /* optional: snap each card into place */
    }   
    .magazine-mobile{
        margin-left:17% !important;
    }
    .section-card{
        width: 70%;
    }
    }
    </style>

    <script>
        function updateDynamicContent(item) {
            const frameTitle       = document.getElementById("frame-title");
            const frameDescription = document.getElementById("frame-description");
            const frameImages = document.querySelectorAll('.frame-image');
            const learnMoreLink    = document.querySelector("#dynamic-content .button-learn-more");

            frameTitle.textContent       = item.dataset.title;
            frameDescription.textContent = item.dataset.description;
            frameImages.forEach(img => {
                img.src = item.dataset.image;
                img.alt = item.dataset.title;
            });
            // show or hide the Learn More link
            if (item.dataset.slug && item.dataset.slug !== "/") {
            learnMoreLink.href          = item.dataset.slug;
            learnMoreLink.style.display = "inline-block";
            } else {
            learnMoreLink.style.display = "none";
            }
        }
        document.addEventListener("DOMContentLoaded", () => {
            let autoIndex      = 0;
            let autoTimerId    = null;
            let restartTimerId = null;
            loadStats();
            async function loadStats() {
                let data;
                try {
                    const res = await fetch('/stats');
                    data = await res.json();
                } catch (err) {
                    console.error('Could not load stats:', err);
                    return;
                }
                const map = {
                    aum:     'aum-number',
                    clients: 'clients-number',
                    team:    'team-number',
                    years:   'years-number',
                };
                function animateCountUp(el, endValue, duration = 1000) {
                    let start = 0;
                    const increment = endValue / (duration / 16); // Roughly 60 frames per second
                    function update() {
                        start += increment;
                        if (start < endValue) {
                            el.textContent = Math.floor(start) + '+';
                            requestAnimationFrame(update);
                        } else {
                            el.textContent = endValue + '+';
                        }
                    }
                    update();
                }

                const observer = new IntersectionObserver(
                    (entries, observer) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                for (const [key, id] of Object.entries(map)) {
                                    const el = document.getElementById(id);
                                    if (el && data[key] != null) {
                                        animateCountUp(el, data[key]);
                                    }
                                }
                                observer.disconnect(); // Run only once
                            }
                        });
                    },
                    {
                        threshold: 0.6, // Trigger when 60% of section is visible
                    }
                );

                const statsSection = document.querySelector("#section-stats");
                if (statsSection) observer.observe(statsSection);


            }
            // 1️⃣ highlight & content swap
            function highlightItem(item) {
                document.querySelectorAll('.offerings-grid-item').forEach(el => {
                el.classList.remove('highlighted');
                });
                item.classList.add('highlighted');
                updateDynamicContent(item);
            }

            // 2️⃣ auto‐rotate
            function highlightNext() {
                const cards = document.querySelectorAll('.offerings-grid-item');
                if (!cards.length) return;
                highlightItem(cards[autoIndex % cards.length]);
                autoIndex++;
            }
            function startAuto() {
                highlightNext(); // first
                autoTimerId = setInterval(highlightNext, 3000);
            }
            function stopAuto() {
                clearInterval(autoTimerId);
                autoTimerId = null;
            }

            // 3️⃣ load & wire up cards
            async function loadOfferings() {
                const offerings = await fetch('/api/offerings').then(r => r.json());
                const container = document.getElementById('offering-container');
                container.innerHTML = '';

                offerings.forEach((o, idx) => {
                const card = document.createElement('div');
                card.className = 'offerings-grid-item';
                card.dataset.title       = o.title;
                card.dataset.description = o.description;
                card.dataset.image       = o.image_url;
                card.dataset.slug        = o.button_link;
                card.textContent         = o.title;

                // CLICK → pick immediately
                card.addEventListener('click', () => {
                    stopAuto();
                    highlightItem(card);
                });

                // HOVER → pause & pick
                card.addEventListener('mouseenter', () => {
                    clearTimeout(restartTimerId);
                    stopAuto();
                    highlightItem(card);
                });
                // LEAVE → restart *after* 2s
                card.addEventListener('mouseleave', () => {
                    clearTimeout(restartTimerId);
                    restartTimerId = setTimeout(() => {
                    if (!autoTimerId) startAuto();
                    }, 2000);
                });

                container.appendChild(card);
                });
            }

            // 4️⃣ initial kick‐off
            loadOfferings().then(() => {
                // show the first card immediately
                document.querySelectorAll('.offerings-grid-item')[0] && highlightItem(
                document.querySelectorAll('.offerings-grid-item')[0]
                );
                startAuto();
            });
        });


        // Load blogs dynamically
        async function loadBlogs() {
            const response = await fetch('/api/blogs'); // Replace with actual API endpoint
            const blogs = await response.json();

            const blogContainer = document.querySelector("#section-blogs .grid");

            blogs.forEach(blog => {
                const blogCard = document.createElement("div");
                blogCard.classList.add("blog-card", "bg-white", "rounded-lg", "shadow-lg", "overflow-hidden","section-card");

                blogCard.innerHTML = `
                <a href="/blogs/${blog.slug}">
                    <img src="${blog.image_url}" alt="Blog Image" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h4 class="text-xl font-bold mb-2">${blog.title}</h4>
                        <p class="text-gray-500 text-xs">By ${blog.author} • ${blog.post_date}</p>
                        <div class="block mt-4 text-yellow-500 font-semibold hover:underline">Read More</div>
                    </div>
                </a>
                `;

                blogContainer.prepend(blogCard);
            });
        }

        // Load magazine dynamically
        async function loadmagazine() {
            const response = await fetch('/api/magazines');
            const magazines = await response.json();

            const magazineContainer = document.querySelector("#magazine-container");
            const viewAllMagazine = document.getElementById("view-all-magazines");

            magazines.forEach(magazine => {
                const magazineCard = document.createElement("div");
                magazineCard.classList.add("flex", "flex-col", "shadow-lg", "rounded-xl", "overflow-hidden", "hover:shadow-2xl", "transition-shadow", "duration-300", "section-card");
                const raw = new Date(magazine.release_date);

                const opts      = { day: '2-digit', month: 'short', year: 'numeric' };
                const pretty    = raw.toLocaleDateString('en-IN', opts);
                magazineCard.innerHTML = `
                    <a style="height: 400px;width:auto;" href="https://mfdatafeed.blob.core.windows.net/magazine/${magazine.pdf_url}" target="_blank" title="Open ${magazine.issue_name}">
                        <img 
                            class="magazine-mobile"
                            style="margin: 0% 21%; max-width:100%; max-height:75%;" 
                            src="/images/magazine_covers/${magazine.image_url}" 
                            alt="${magazine.issue_name}"
                            >
                        <div class="px-4 py-2 flex flex-col">
                            <h4 style="
                                font-size: 1.5rem;
                                font-weight: bold;
                                margin-bottom: 0.5rem;
                                overflow: hidden;
                                white-space: nowrap;
                                text-overflow: ellipsis;
                                display: block;
                                transition: transform 5s linear;
                                ">
                                ${magazine.issue_name}
                                </h4>

                            <p class="text-gray-500 text-xs mt-1">${pretty}</p>
                        </div>
                    </a>
                `;

                // Append the card to the container before the view all link
                magazineContainer.insertBefore(magazineCard, viewAllMagazine);
            });

        }


        document.addEventListener("DOMContentLoaded", function() {
            loadBlogs();
            loadmagazine();

            async function fetchSectionOneData() {
                try {
                    const response = await fetch('/api/section-one-new');
                    const data = await response.json();

                    // console.log(data);  // Log the response to the console

                    if (data) {
                        document.getElementById("section-title").textContent = data.title || 'Default Title';
                        document.getElementById("section-description").textContent = data.description || 'Default Description';
                        document.getElementById("section-image").src = data.image_url || '/path/to/default/image.jpg';
                    } else {
                        console.error('No data received from API');
                    }
                } catch (error) {
                    console.error('Error fetching section data:', error);
                }
            }

            fetchSectionOneData();
        });

        document.addEventListener("DOMContentLoaded", function() {
            const csrImages = [
                'https://mfdatafeed.blob.core.windows.net/csr-activity/csr1.jpeg',
                'https://mfdatafeed.blob.core.windows.net/csr-activity/csr4.jpeg',
                'https://mfdatafeed.blob.core.windows.net/csr-activity/csr3.jpeg',
                'https://mfdatafeed.blob.core.windows.net/csr-activity/csr7.jpeg',
            ];
            const teamImages = [
                'https://mfdatafeed.blob.core.windows.net/csr-activity/csr7.jpeg',
                'https://mfdatafeed.blob.core.windows.net/csr-activity/csr5.jpeg',
                'https://mfdatafeed.blob.core.windows.net/csr-activity/csr6.jpeg',
                'https://mfdatafeed.blob.core.windows.net/csr-activity/csr2.jpeg',
            ];

            startSlideshow('csr-slideshow-container', csrImages);
            startSlideshow('team-slideshow-container', teamImages);

            function startSlideshow(containerId, images) {
                const container = document.getElementById(containerId);
                let currentIndex = 0;
                container.innerHTML = '';

                images.forEach((src, index) => {
                    const img = document.createElement('img');
                    img.src = src;
                    img.classList.add('slideshow-image');
                    if (index === 0) img.classList.add('active');
                    container.appendChild(img);
                });

                const imgElements = container.querySelectorAll('.slideshow-image');

                function showImage(index) {
                    imgElements.forEach((img, i) => img.classList.toggle('active', i === index));
                }

                setInterval(() => {
                    currentIndex = (currentIndex + 1) % images.length;
                    showImage(currentIndex);
                }, 5000);
            }
        });
    </script>


</head>

<body class="transition-all duration-500">

    <!-- Include Header -->
    @include('includes.header')

    <!-- Include Floater -->
    @include('includes.floater')

    <main>
    <!-- Scroll Container -->
    <div class="scroll-container">
        <!-- Section 1: Main Content Section -->
        <section style="padding-top: 0px;" id="section-main-content" class="section">
            <div class="top-right-logo">
                <img src="{{ asset('images/AMFI-pageCurl.png') }}" alt="Logo" id="amfilogo" class="inline-block m-0 p-0">
            </div>
            <div style="bottom:40px" class="container mx-auto relative">
                <!-- Top Right Logo -->
                <!-- Two Column Section Below Logo -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start mt-10">
                    <!-- Left Column -->
                    <div class="max-w-lg">
                        <h2 class="text-5xl font-bold mb-6 gradient-text" id="section-title">{{ $sectionData->title }}</h2>
                        <p id="section-description">{{ $sectionData->description }}</p>
                        <div class="flex flex-col md:flex-row gap-4 mb-10">
                            <!-- <button class="button button-get-started">Get Started</button> -->
                            <a href="https://mnivesh.investwell.app/app/#/kycOnBoarding/mobileSignUp" class="button button-get-started button-mobile">Get Started</a>
                            <a href="/about-us" class="button button-about-us button-mobile">About Us</a>
                        </div>
                        <div class="grid grid-cols-3 gap-4">
                            <div class="text-center">
                                <img src="{{ asset('images/amfi-logo.png') }}" alt="Investment Plans" class="w-full h-auto grayscale-img">
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('images/apmi-logo.png') }}" alt="Mutual Funds" class="w-full h-auto grayscale-img">
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('images/nse-logo.png') }}" alt="SIP Calculator" class="w-full h-auto grayscale-img">
                            </div>
                            <div class="text-center">
                                <img src="{{ asset('images/bse-logo.png') }}" alt="Retirement Planning" class="w-full h-auto grayscale-img">
                            </div>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="flex justify-center items-start">
                        <img src="{{ $sectionData->image_url}}" alt="Financial Growth" id="section-image" class="w-full max-w-sm md:max-w-md lg:max-w-lg">
                    </div>
                </div>
            </div>
        </section>


        <!-- Section 2: Our Offerings -->
        <section id="section-our-offerings" class="section">
            <div class="container mx-auto">
                <h3 class="text-4xl font-bold gradient-text mb-8">Our Offerings</h3>
                <div class="content-grid">

                    <div class="grid grid-cols-2 gap-4" id="offering-container">
                        <div class="offerings-grid-item" data-title="Investment Plans" data-description="Choose from a variety of investment plans designed to suit your financial goals." data-image="{{ asset('images/investment_plan.png') }}" data-image="/1234">
                            
                        </div>
                        <div class="offerings-grid-item" data-title="Mutual Funds" data-description="Explore our wide range of mutual funds to grow your wealth." data-image="{{ asset('images/mutual_funds.png') }}" data-image="/1234">
                            
                        </div>
                        <div class="offerings-grid-item" data-title="SIP Calculator" data-description="Use our SIP calculator to plan your monthly investments." data-image="{{ asset('images/sip_calculator.png') }}" data-image="/1234">
                            
                        </div>
                        <div class="offerings-grid-item" data-title="Retirement Planning" data-description="Plan your retirement with our tailored solutions." data-image="{{ asset('images/retirement_planning.png') }}" data-image="/1234">
                            
                        </div>
                    </div>

                    <div class="vertical-line hidden md:block"></div>

                    <div id="dynamic-content" class="p-6 border rounded-lg shadow-lg w-full">
                        <h3 class="text-3xl font-bold mb-4" id="frame-title"></h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-start">
                            <img src="" alt="" class="frame-image max-w-full h-auto hidden-class">
                            <div class="flex flex-col">
                                <p class="text-lg mb-4" id="frame-description"></p>
                                <a href="#" class="button button-learn-more mt-6">Learn More</a>
                            </div>

                            <img src="" alt="" class="frame-image max-w-full h-auto hidden-class2">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section 3: Stats Section -->
        <section id="section-stats" class="section">
            <div class="container mx-auto">
                <h3 class="text-2xl font-bold gradient-text mb-8">Our Achievements</h3>

                <!-- Stats Grid - First Row with 4 Columns -->
                <div class="stats-grid">
                    <div class="stats-item-small" id="aum-item">
                        <div class="label">AUM (in Cr)</div>
                        <div class="number" id="aum-number">-</div>
                    </div>
                    <div class="stats-item-small" id="clients-item">
                        <div class="label">Clients</div>
                        <div class="number" id="clients-number">-</div>
                    </div>
                    <div class="stats-item-small" id="team-item">
                        <div class="label">Team Members</div>
                        <div class="number" id="team-number">-</div>
                    </div>
                    <div class="stats-item-small" id="years-item">
                        <div class="label">Years in Service</div>
                        <div class="number" id="years-number">-</div>
                    </div>
                </div>
        </section>

        <!-- Section 4: Stats Section -->
        <section id="section-stats" class="section">
            <div class="container mx-auto">
                <!-- Stats Grid - Second Row with 2 Columns -->
                <h3 style="margin-bottom: 50px" class="text-4xl font-bold gradient-text my-8 mt-16" id="third-section-heading">Our CSR and Team Activities</h3>
                <div class="large-stats-grid">
                    <div class="stats-item slideshow-item" id="csr-slideshow">
                        <div class="slideshow-container" id="csr-slideshow-container">
                            <!-- Slideshow images will be added here by JavaScript -->
                        </div>
                    </div>
                    <div class="stats-item slideshow-item" id="team-slideshow">
                        <div class="slideshow-container" id="team-slideshow-container">
                            <!-- Slideshow images will be added here by JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="section-blogs" class="section bg-gray-100">
            <div class="container mx-auto text-center">

                <!-- Blogs Section -->
                <h3 class="text-4xl font-bold gradient-text mb-2">Latest Insights & Blogs</h3>
                <p class="text-lg text-gray-400 mb-8">
                    Explore insights on financial strategies, market trends, and investment tips.
                </p>


                <div id='blog-container' class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                    <a href="/blogs" class="blog-card bg-white text-yellow-500 rounded-lg shadow-lg overflow-hidden flex items-center justify-center hover:underline section-card">
                        <div class="block text-center text-yellow-500 font-bold text-lg">View All Blogs</div>
                    </a>
                </div>
        </section>
        <section id="section-magazine" class="section bg-gray-100">
            <div class="container mx-auto text-center">
                <!-- Magazines Section -->
                <h3 class="text-4xl font-bold gradient-text mb-2">Latest Magazines</h3>
                <p class="text-lg text-gray-400 mb-8">Browse our collection of insightful magazines covering various financial topics.</p>

                <div id='magazine-container' class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Magazine Card 1 -->

                    <!-- View All Magazines Card -->
                    <a href="/magazines" id="view-all-magazines" class="rounded-lg shadow-lg overflow-hidden flex items-center justify-center hover:underline section-card">
                        <div class="block text-center text-yellow-500 font-bold text-lg">View All Magazines</div>
                    </a>

                </div>
            </div>
        </section>
        @include('includes.footer')
    </div>
</main>
    <script src="{{ asset('js/header.js') }}"></script>
</body>

</html>
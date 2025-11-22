<x-wrapper>
    <section class="w-full bg-white">

        <!-- FULL WIDTH HEADER IMAGE -->
        <div class="w-full h-[360px] md:h-[420px] overflow-hidden">
            <img 
                src="{{ asset('images/service/' . $data->image) }}"
                alt="{{ $data->title }}"
                class="w-full h-full object-cover object-center"
            />
        </div>

        <!-- MAIN CONTENT CONTAINER -->
        <div class="max-w-6xl mx-auto px-4 md:px-6 py-12">

            <!-- TITLE BLOCK -->
            <header class="mb-14">
                <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 leading-tight tracking-tight">
                    {{ $data['title'] }}
                </h1>

                <!-- Elegant accent line -->
                <div class="mt-4 h-[3px] w-32 bg-gradient-to-r from-gray-900 via-gray-700 to-gray-400 rounded-full"></div>
            </header>

            <!-- CONTENT AREA (LUXURY EDITORIAL STYLE) -->
            <article class="content-area text-gray-800 leading-relaxed">

                <!-- DYNAMIC TYPOGRAPHY STYLING -->
                <style>
                    .content-area h2 {
                        @apply text-3xl font-bold text-gray-900 mt-14 mb-4 tracking-tight;
                    }
                    .content-area h3 {
                        @apply text-2xl font-semibold text-gray-800 mt-10 mb-3 tracking-wide;
                    }
                    .content-area p {
                        @apply text-base md:text-lg text-gray-700 mb-5 leading-relaxed;
                    }
                    .content-area ul,
                    .content-area ol {
                        @apply ml-5 my-4 space-y-1;
                    }
                    .content-area li {
                        @apply text-gray-700 leading-relaxed;
                    }

                    /* Subtle left border for H2 sections */
                    .content-area h2 {
                        position: relative;
                        padding-left: 18px;
                    }
                    .content-area h2::before {
                        content: "";
                        position: absolute;
                        left: 0;
                        top: 50%;
                        transform: translateY(-50%);
                        width: 4px;
                        height: 70%;
                        background: linear-gradient(to bottom, #111, #888);
                        border-radius: 4px;
                    }
                </style>

                <!-- DYNAMIC CONTENT -->
                {!! $data->description !!}
            </article>

        </div>

    </section>
</x-wrapper>

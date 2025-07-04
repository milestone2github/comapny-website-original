<!-- Floating Accessibility Sidebar -->
<div id="floater-sidebar"
     class="fixed right-0 z-50 bg-gray-800 text-white rounded-lg shadow-lg w-12 h-auto flex flex-col items-center transition-all duration-300"
     style="top: 50%; transform: translateY(-50%); padding-top: 0.2rem;">
     
    <!-- Toggle Button -->
    <button onclick="toggleSidebar()" class="bg-gray-100 p-1 rounded-full mb-4 mt-4">
        <img src="{{ asset('images/icons/toggle.png') }}" alt="Toggle Sidebar" class="w-5 h-5 text-yellow-400">
    </button>

    <!-- Sidebar Content -->
    <div id="sidebar-content" class="space-y-4 hidden text-center mb-4">
        <!-- Grayscale -->
        <button onclick="toggleColorBlindMode()" class="p-1 rounded-full bg-gray-100 hover:bg-yellow-500">
            <img src="{{ asset('images/icons/color-blind.png') }}" alt="Color Blind Mode" class="w-5 h-5">
        </button>

        <!-- Increase Font -->
        <button onclick="increaseFontSize()" class="p-1 rounded-full bg-gray-100 hover:bg-yellow-500">
            <img src="{{ asset('images/icons/font-increase.png') }}" alt="Increase Font Size" class="w-5 h-5">
        </button>

        <!-- Reset Font -->
        <button onclick="resetFontSize()" class="p-1 rounded-full bg-gray-100 hover:bg-yellow-500">
            <img src="{{ asset('images/icons/font-reset.png') }}" alt="Reset Font Size" class="w-5 h-5">
        </button>

        <!-- Decrease Font -->
        <button onclick="decreaseFontSize()" class="p-1 rounded-full bg-gray-100 hover:bg-yellow-500">
            <img src="{{ asset('images/icons/font-decrease.png') }}" alt="Decrease Font Size" class="w-5 h-5">
        </button>
    </div>
</div>

<!-- Floating Sidebar Script -->
<script>
    // Sidebar Toggle
    function toggleSidebar() {
        document.getElementById('sidebar-content').classList.toggle('hidden');
    }

    // Color Blind Mode
    function toggleColorBlindMode() {
        document.body.classList.toggle('color-blind-mode');
        localStorage.setItem('colorBlindMode',
            document.body.classList.contains('color-blind-mode') ? 'enabled' : 'disabled');
    }

    // Font Size Controls
    function increaseFontSize() {
        let size = parseFloat(getComputedStyle(document.documentElement).fontSize);
        document.documentElement.style.fontSize = (size + 2) + 'px';
        localStorage.setItem('fontSize', document.documentElement.style.fontSize);
    }

    function decreaseFontSize() {
        let size = parseFloat(getComputedStyle(document.documentElement).fontSize);
        document.documentElement.style.fontSize = (size - 2) + 'px';
        localStorage.setItem('fontSize', document.documentElement.style.fontSize);
    }

    function resetFontSize() {
        document.documentElement.style.fontSize = '100%';
        localStorage.removeItem('fontSize');
    }

    // Load Saved Preferences
    document.addEventListener("DOMContentLoaded", function () {
        const savedFontSize = localStorage.getItem('fontSize');
        const savedColorBlind = localStorage.getItem('colorBlindMode');
        const savedTop = localStorage.getItem('floaterTop');

        if (savedFontSize) {
            document.documentElement.style.fontSize = savedFontSize;
        }
        if (savedColorBlind === 'enabled') {
            document.body.classList.add('color-blind-mode');
        }
        if (savedTop) {
            const floater = document.getElementById('floater-sidebar');
            floater.style.top = savedTop + 'px';
            floater.style.transform = 'translateY(0%)';
        }
    });

    // Optional: Draggable Floater Position
    let isDragging = false;
    const floater = document.getElementById('floater-sidebar');

    floater.addEventListener('mousedown', function (e) {
        isDragging = true;
        const offsetY = e.clientY - floater.getBoundingClientRect().top;

        function move(e) {
            if (!isDragging) return;
            let newY = e.clientY - offsetY;
            newY = Math.max(0, Math.min(newY, window.innerHeight - floater.offsetHeight));
            floater.style.top = newY + 'px';
            floater.style.transform = 'translateY(0%)';
            localStorage.setItem('floaterTop', newY);
        }

        function stop() {
            isDragging = false;
            document.removeEventListener('mousemove', move);
            document.removeEventListener('mouseup', stop);
        }

        document.addEventListener('mousemove', move);
        document.addEventListener('mouseup', stop);
    });
</script>

<!-- Minimal Inline Styles -->
<style>
    .color-blind-mode {
        filter: grayscale(100%);
    }

    .p-1 img {
        width: 1.25rem;
        height: 1.25rem;
        transition: transform 0.2s ease;
    }

    .p-1:hover img {
        transform: scale(1.1);
    }
</style>

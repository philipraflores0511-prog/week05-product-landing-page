<nav class="fixed inset-x-0 top-0 z-50 border-b border-slate-200/70 bg-white/90 backdrop-blur-xl">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <div class="flex h-20 items-center justify-between">

            <!-- Logo -->
            <a
                href="#home"
                class="flex items-center gap-3"
            >
                <img
                    src="{{ asset('images/logo.svg') }}"
                    alt="FlowPilot Logo"
                    class="h-10 w-10"
                >

                <div>
                    <span class="block text-lg font-extrabold tracking-tight text-slate-900">
                        FlowPilot
                    </span>

                    <span class="hidden text-xs font-medium text-slate-500 sm:block">
                        Work smarter. Together.
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden items-center gap-8 lg:flex">

                <a
                    href="#home"
                    class="text-sm font-medium text-slate-600 transition hover:text-indigo-600"
                >
                    Home
                </a>

                <a
                    href="#features"
                    class="text-sm font-medium text-slate-600 transition hover:text-indigo-600"
                >
                    Features
                </a>

                <a
                    href="#showcase"
                    class="text-sm font-medium text-slate-600 transition hover:text-indigo-600"
                >
                    Showcase
                </a>

                <a
                    href="#pricing"
                    class="text-sm font-medium text-slate-600 transition hover:text-indigo-600"
                >
                    Pricing
                </a>

                <a
                    href="#testimonials"
                    class="text-sm font-medium text-slate-600 transition hover:text-indigo-600"
                >
                    Testimonials
                </a>

                <a
                    href="#contact"
                    class="text-sm font-medium text-slate-600 transition hover:text-indigo-600"
                >
                    Contact
                </a>
            </div>

            <!-- Desktop Buttons -->
            <div class="hidden items-center gap-3 md:flex">

                <a
                    href="#contact"
                    class="px-3 py-2 text-sm font-semibold text-slate-700 transition hover:text-indigo-600"
                >
                    Sign In
                </a>

                <x-button href="#pricing">
                    Get Started

                    <svg
                        class="h-4 w-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M13 7l5 5m0 0l-5 5m5-5H6"
                        />
                    </svg>
                </x-button>
            </div>

            <!-- Mobile Button -->
            <button
                id="mobile-menu-button"
                type="button"
                class="rounded-lg p-2 text-slate-600 hover:bg-slate-100 md:hidden"
                aria-label="Open navigation menu"
            >
                <svg
                    class="h-6 w-6"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>
            </button>

        </div>

        <!-- Mobile Navigation -->
        <div
            id="mobile-menu"
            class="hidden border-t border-slate-100 py-5 md:hidden"
        >
            <div class="flex flex-col gap-2">

                <a
                    href="#home"
                    class="rounded-lg px-4 py-3 font-medium text-slate-700 hover:bg-indigo-50 hover:text-indigo-600"
                >
                    Home
                </a>

                <a
                    href="#features"
                    class="rounded-lg px-4 py-3 font-medium text-slate-700 hover:bg-indigo-50 hover:text-indigo-600"
                >
                    Features
                </a>

                <a
                    href="#showcase"
                    class="rounded-lg px-4 py-3 font-medium text-slate-700 hover:bg-indigo-50 hover:text-indigo-600"
                >
                    Showcase
                </a>

                <a
                    href="#pricing"
                    class="rounded-lg px-4 py-3 font-medium text-slate-700 hover:bg-indigo-50 hover:text-indigo-600"
                >
                    Pricing
                </a>

                <a
                    href="#testimonials"
                    class="rounded-lg px-4 py-3 font-medium text-slate-700 hover:bg-indigo-50 hover:text-indigo-600"
                >
                    Testimonials
                </a>

                <a
                    href="#contact"
                    class="rounded-lg px-4 py-3 font-medium text-slate-700 hover:bg-indigo-50 hover:text-indigo-600"
                >
                    Contact
                </a>

                <div class="mt-3 flex gap-3 border-t border-slate-100 pt-4">

                    <a
                        href="#contact"
                        class="flex-1 rounded-xl border border-slate-200 px-4 py-3 text-center text-sm font-semibold"
                    >
                        Sign In
                    </a>

                    <a
                        href="#pricing"
                        class="flex-1 rounded-xl bg-indigo-600 px-4 py-3 text-center text-sm font-semibold text-white"
                    >
                        Get Started
                    </a>

                </div>

            </div>
        </div>

    </div>
</nav>
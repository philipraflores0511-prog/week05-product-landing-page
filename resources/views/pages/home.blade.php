<x-layouts.app title="FlowPilot - Work Smarter">

    <x-navbar />

    <main>

        <!-- HERO -->
        <x-hero />

        <!-- FEATURES -->
        <section
            id="features"
            class="scroll-mt-20 bg-slate-50 py-20 sm:py-24"
        >
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

                <div class="mx-auto max-w-2xl text-center">

                    <span class="text-sm font-bold uppercase tracking-widest text-indigo-600">
                        Powerful Features
                    </span>

                    <h2 class="mt-3 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl">
                        Everything your team needs
                    </h2>

                    <p class="mt-4 text-lg leading-8 text-slate-600">
                        One simple workspace that keeps your team focused,
                        organized, and moving forward.
                    </p>

                </div>

                <div class="mt-12 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">

                    <x-feature-card
                        icon="⚡"
                        title="Smart Task Management"
                        description="Create, organize, prioritize, and track tasks without complicated workflows."
                    />

                    <x-feature-card
                        icon="📊"
                        title="Real-Time Analytics"
                        description="Understand team performance with simple dashboards and meaningful productivity insights."
                    />

                    <x-feature-card
                        icon="🤝"
                        title="Team Collaboration"
                        description="Keep conversations, assignments, files, and project updates in one shared workspace."
                    />

                    <x-feature-card
                        icon="🔔"
                        title="Smart Notifications"
                        description="Stay updated with useful alerts for deadlines, assignments, and important changes."
                    />

                    <x-feature-card
                        icon="🔒"
                        title="Secure Workspace"
                        description="Keep important project information protected with secure access and organized permissions."
                    />

                    <x-feature-card
                        icon="⚙️"
                        title="Workflow Automation"
                        description="Reduce repetitive work by automating routine tasks and keeping projects moving."
                    />

                </div>

            </div>
        </section>


        <!-- SHOWCASE -->
        <section
            id="showcase"
            class="scroll-mt-20 bg-white py-20 sm:py-24"
        >
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

                <div class="grid items-center gap-14 lg:grid-cols-2">

                    <!-- Product Dashboard -->
                    <div class="order-2 lg:order-1">

                        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white dashboard-shadow">

                            <div class="flex items-center justify-between border-b border-slate-200 bg-slate-50 px-4 py-3">

                                <div class="flex gap-1.5">
                                    <span class="h-3 w-3 rounded-full bg-red-400"></span>
                                    <span class="h-3 w-3 rounded-full bg-yellow-400"></span>
                                    <span class="h-3 w-3 rounded-full bg-green-400"></span>
                                </div>

                                <span class="text-xs text-slate-400">
                                    Project Overview
                                </span>

                                <div class="w-8"></div>

                            </div>

                            <div class="p-5">

                                <div class="grid gap-4 sm:grid-cols-3">

                                    <div class="rounded-xl bg-indigo-50 p-4">
                                        <p class="text-xs text-indigo-500">
                                            Projects
                                        </p>
                                        <p class="mt-1 text-2xl font-black text-indigo-900">
                                            12
                                        </p>
                                    </div>

                                    <div class="rounded-xl bg-emerald-50 p-4">
                                        <p class="text-xs text-emerald-600">
                                            Completed
                                        </p>
                                        <p class="mt-1 text-2xl font-black text-emerald-900">
                                            84
                                        </p>
                                    </div>

                                    <div class="rounded-xl bg-orange-50 p-4">
                                        <p class="text-xs text-orange-600">
                                            Pending
                                        </p>
                                        <p class="mt-1 text-2xl font-black text-orange-900">
                                            18
                                        </p>
                                    </div>

                                </div>

                                <div class="mt-5 rounded-xl border border-slate-100">

                                    <div class="border-b border-slate-100 px-4 py-3">
                                        <p class="text-sm font-bold">
                                            Recent Tasks
                                        </p>
                                    </div>

                                    <div class="divide-y divide-slate-100">

                                        <div class="flex items-center gap-3 p-4">
                                            <span class="h-4 w-4 rounded border-2 border-emerald-500"></span>

                                            <div class="flex-1">
                                                <p class="text-sm font-semibold">
                                                    Design landing page
                                                </p>

                                                <p class="text-xs text-slate-400">
                                                    Marketing Website
                                                </p>
                                            </div>

                                            <span class="rounded-full bg-emerald-50 px-2 py-1 text-xs font-semibold text-emerald-600">
                                                Done
                                            </span>
                                        </div>

                                        <div class="flex items-center gap-3 p-4">
                                            <span class="h-4 w-4 rounded border-2 border-indigo-500"></span>

                                            <div class="flex-1">
                                                <p class="text-sm font-semibold">
                                                    Prepare presentation
                                                </p>

                                                <p class="text-xs text-slate-400">
                                                    Product Launch
                                                </p>
                                            </div>

                                            <span class="rounded-full bg-indigo-50 px-2 py-1 text-xs font-semibold text-indigo-600">
                                                Active
                                            </span>
                                        </div>

                                        <div class="flex items-center gap-3 p-4">
                                            <span class="h-4 w-4 rounded border-2 border-slate-300"></span>

                                            <div class="flex-1">
                                                <p class="text-sm font-semibold">
                                                    Review analytics
                                                </p>

                                                <p class="text-xs text-slate-400">
                                                    Weekly Report
                                                </p>
                                            </div>

                                            <span class="rounded-full bg-orange-50 px-2 py-1 text-xs font-semibold text-orange-600">
                                                Pending
                                            </span>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- Content -->
                    <div class="order-1 lg:order-2">

                        <span class="text-sm font-bold uppercase tracking-widest text-indigo-600">
                            Product Showcase
                        </span>

                        <h2 class="mt-3 text-3xl font-black tracking-tight text-slate-900 sm:text-4xl">
                            A workspace designed around the way you work.
                        </h2>

                        <p class="mt-5 text-lg leading-8 text-slate-600">
                            FlowPilot gives teams a clear view of their work
                            while keeping the interface simple and focused.
                        </p>

                        <div class="mt-8 space-y-5">

                            <div class="flex gap-4">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-indigo-100 text-indigo-600">
                                    ✓
                                </div>

                                <div>
                                    <h3 class="font-bold">
                                        Clear project visibility
                                    </h3>

                                    <p class="mt-1 text-sm leading-6 text-slate-500">
                                        See project progress, deadlines, and team
                                        workload at a glance.
                                    </p>
                                </div>

                            </div>

                            <div class="flex gap-4">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-indigo-100 text-indigo-600">
                                    ✓
                                </div>

                                <div>
                                    <h3 class="font-bold">
                                        Mobile-ready experience
                                    </h3>

                                    <p class="mt-1 text-sm leading-6 text-slate-500">
                                        Access important tasks and updates from
                                        desktop, tablet, or mobile.
                                    </p>
                                </div>

                            </div>

                            <div class="flex gap-4">

                                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-indigo-100 text-indigo-600">
                                    ✓
                                </div>

                                <div>
                                    <h3 class="font-bold">
                                        Actionable insights
                                    </h3>

                                    <p class="mt-1 text-sm leading-6 text-slate-500">
                                        Turn productivity data into better decisions
                                        for your team.
                                    </p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </section>


        <!-- MOBILE PREVIEW -->
        <section class="bg-slate-50 py-20 sm:py-24">

            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

                <div class="grid items-center gap-14 lg:grid-cols-2">

                    <div>

                        <span class="text-sm font-bold uppercase tracking-widest text-indigo-600">
                            Mobile View
                        </span>

                        <h2 class="mt-3 text-3xl font-black text-slate-900 sm:text-4xl">
                            Your work, wherever you are.
                        </h2>

                        <p class="mt-5 text-lg leading-8 text-slate-600">
                            The responsive interface automatically adapts to
                            smaller screens so your experience stays simple
                            and usable.
                        </p>

                        <div class="mt-7 flex flex-wrap gap-3">

                            <span class="rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-600 shadow-sm">
                                Responsive
                            </span>

                            <span class="rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-600 shadow-sm">
                                Touch Friendly
                            </span>

                            <span class="rounded-full bg-white px-4 py-2 text-sm font-semibold text-slate-600 shadow-sm">
                                Fast
                            </span>

                        </div>

                    </div>

                    <!-- Phone -->
                    <div class="flex justify-center">

                        <div class="w-[280px] rounded-[2.5rem] border-8 border-slate-900 bg-slate-900 p-2 shadow-2xl">

                            <div class="overflow-hidden rounded-[2rem] bg-white">

                                <div class="flex items-center justify-center bg-slate-900 py-2">
                                    <div class="h-1 w-16 rounded-full bg-slate-700"></div>
                                </div>

                                <div class="p-5">

                                    <div class="flex items-center justify-between">

                                        <div>
                                            <p class="text-xs text-slate-400">
                                                Welcome back
                                            </p>

                                            <h3 class="font-bold">
                                                Alex 👋
                                            </h3>
                                        </div>

                                        <div class="h-9 w-9 rounded-full bg-indigo-100"></div>

                                    </div>

                                    <div class="mt-6 rounded-2xl bg-indigo-600 p-5 text-white">

                                        <p class="text-xs text-indigo-100">
                                            Productivity
                                        </p>

                                        <p class="mt-2 text-3xl font-black">
                                            94%
                                        </p>

                                        <div class="mt-4 h-2 rounded-full bg-indigo-400">
                                            <div class="h-full w-[94%] rounded-full bg-white"></div>
                                        </div>

                                    </div>

                                    <p class="mt-6 text-sm font-bold">
                                        Today's Tasks
                                    </p>

                                    <div class="mt-3 space-y-3">

                                        <div class="rounded-xl border border-slate-100 p-3">
                                            <div class="flex items-center gap-3">
                                                <span class="h-4 w-4 rounded border-2 border-emerald-500"></span>
                                                <span class="text-xs font-semibold">
                                                    Team meeting
                                                </span>
                                            </div>
                                        </div>

                                        <div class="rounded-xl border border-slate-100 p-3">
                                            <div class="flex items-center gap-3">
                                                <span class="h-4 w-4 rounded border-2 border-indigo-500"></span>
                                                <span class="text-xs font-semibold">
                                                    Finish proposal
                                                </span>
                                            </div>
                                        </div>

                                        <div class="rounded-xl border border-slate-100 p-3">
                                            <div class="flex items-center gap-3">
                                                <span class="h-4 w-4 rounded border-2 border-slate-300"></span>
                                                <span class="text-xs font-semibold">
                                                    Review report
                                                </span>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!-- PRICING -->
        <section
            id="pricing"
            class="scroll-mt-20 bg-white py-20 sm:py-24"
        >

            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

                <div class="mx-auto max-w-2xl text-center">

                    <span class="text-sm font-bold uppercase tracking-widest text-indigo-600">
                        Simple Pricing
                    </span>

                    <h2 class="mt-3 text-3xl font-black text-slate-900 sm:text-4xl">
                        Choose the plan that fits your team
                    </h2>

                    <p class="mt-4 text-lg text-slate-600">
                        Start free and upgrade when your team grows.
                    </p>

                </div>

                <div class="mt-12 grid gap-6 lg:grid-cols-3">

                    <!-- Starter -->
                    <x-pricing-card
                        name="Starter"
                        price="$0"
                        description="For individuals who want a simple way to organize work."
                    >

                        <div class="flex gap-3 text-sm text-slate-600">
                            <span class="text-emerald-500">✓</span>
                            Up to 3 projects
                        </div>

                        <div class="flex gap-3 text-sm text-slate-600">
                            <span class="text-emerald-500">✓</span>
                            Basic task management
                        </div>

                        <div class="flex gap-3 text-sm text-slate-600">
                            <span class="text-emerald-500">✓</span>
                            Personal dashboard
                        </div>

                        <div class="flex gap-3 text-sm text-slate-600">
                            <span class="text-emerald-500">✓</span>
                            Email support
                        </div>

                    </x-pricing-card>


                    <!-- Professional -->
                    <x-pricing-card
                        name="Professional"
                        price="$12"
                        description="For growing teams that need powerful collaboration tools."
                        :popular="true"
                    >

                        <div class="flex gap-3 text-sm text-slate-600">
                            <span class="text-emerald-500">✓</span>
                            Unlimited projects
                        </div>

                        <div class="flex gap-3 text-sm text-slate-600">
                            <span class="text-emerald-500">✓</span>
                            Advanced analytics
                        </div>

                        <div class="flex gap-3 text-sm text-slate-600">
                            <span class="text-emerald-500">✓</span>
                            Team collaboration
                        </div>

                        <div class="flex gap-3 text-sm text-slate-600">
                            <span class="text-emerald-500">✓</span>
                            Workflow automation
                        </div>

                        <div class="flex gap-3 text-sm text-slate-600">
                            <span class="text-emerald-500">✓</span>
                            Priority support
                        </div>

                    </x-pricing-card>


                    <!-- Enterprise -->
                    <x-pricing-card
                        name="Enterprise"
                        price="$39"
                        description="For organizations that need advanced controls and support."
                    >

                        <div class="flex gap-3 text-sm text-slate-600">
                            <span class="text-emerald-500">✓</span>
                            Everything in Professional
                        </div>

                        <div class="flex gap-3 text-sm text-slate-600">
                            <span class="text-emerald-500">✓</span>
                            Advanced permissions
                        </div>

                        <div class="flex gap-3 text-sm text-slate-600">
                            <span class="text-emerald-500">✓</span>
                            Custom workflows
                        </div>

                        <div class="flex gap-3 text-sm text-slate-600">
                            <span class="text-emerald-500">✓</span>
                            Dedicated support
                        </div>

                    </x-pricing-card>

                </div>

            </div>

        </section>


        <!-- TESTIMONIALS -->
        <section
            id="testimonials"
            class="scroll-mt-20 bg-slate-50 py-20 sm:py-24"
        >

            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

                <div class="mx-auto max-w-2xl text-center">

                    <span class="text-sm font-bold uppercase tracking-widest text-indigo-600">
                        Customer Stories
                    </span>

                    <h2 class="mt-3 text-3xl font-black text-slate-900 sm:text-4xl">
                        Loved by productive teams
                    </h2>

                    <p class="mt-4 text-lg text-slate-600">
                        See why teams use FlowPilot to simplify their everyday work.
                    </p>

                </div>

                <div class="mt-12 grid gap-6 md:grid-cols-3">

                    <x-testimonial-card
                        image="avatar-1.svg"
                        name="Maria Santos"
                        position="Marketing Manager"
                        review="FlowPilot made it much easier for our team to see priorities and deadlines. We spend less time organizing work and more time actually doing it."
                    />

                    <x-testimonial-card
                        image="avatar-2.svg"
                        name="Daniel Cruz"
                        position="Startup Founder"
                        review="The dashboard gives me exactly the information I need. The interface is clean, fast, and simple enough for everyone on our team."
                    />

                    <x-testimonial-card
                        image="avatar-3.svg"
                        name="Andrea Reyes"
                        position="Project Lead"
                        review="Our weekly planning became much more organized after moving our projects into FlowPilot. The team adoption was almost instant."
                    />

                </div>

            </div>

        </section>


        <!-- CTA -->
        <section class="bg-indigo-600 py-20">

            <div class="mx-auto max-w-5xl px-4 text-center sm:px-6 lg:px-8">

                <div class="mx-auto max-w-3xl">

                    <h2 class="text-3xl font-black tracking-tight text-white sm:text-4xl lg:text-5xl">
                        Ready to make your work flow better?
                    </h2>

                    <p class="mt-5 text-lg leading-8 text-indigo-100">
                        Start your free trial today and discover a simpler way
                        to manage projects, tasks, and teams.
                    </p>

                    <div class="mt-8 flex flex-col justify-center gap-3 sm:flex-row">

                        <a
                            href="#contact"
                            class="inline-flex items-center justify-center rounded-xl bg-white px-6 py-3.5 font-bold text-indigo-700 shadow-lg transition hover:-translate-y-0.5 hover:bg-indigo-50"
                        >
                            Start Free Trial
                        </a>

                        <a
                            href="mailto:hello@flowpilot.test"
                            class="inline-flex items-center justify-center rounded-xl border border-indigo-400 px-6 py-3.5 font-bold text-white transition hover:bg-indigo-500"
                        >
                            Contact Sales
                        </a>

                    </div>

                </div>

            </div>

        </section>

    </main>

    <x-footer />

</x-layouts.app>
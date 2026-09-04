<x-marketing-layout>

    <!-- HERO -->
    <section class="hero">
        <div class="wrap">
            @session('success')
            <div class="flash" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)">{{ $value }}</div>
            @endsession
            <span class="eyebrow"><span class="dot"></span> Systems checked. Code reviewed. Ready to build.</span>
            <h1>Software built right, <em>and secure.</em></h1>
            <p class="hero-sub">
                Future Code designs, builds, and maintains the software your business needs, from custom applications to public-facing web platforms,
                with security always as a first requirement, not a final step.
            </p>
            <div class="hero-actions">
                <a href="{{ route('projects.create') }}" class="btn btn-primary">Start a project</a>
                <a href="#services" class="btn btn-ghost">View services</a>
            </div>
            <div class="boot mono">
                <span><span class="ok">✓</span> 30+ years delivering production systems</span>
                <span><span class="ok">✓</span> Fixed-scope penetration testing</span>
                <span><span class="ok">✓</span> Senior engineers on every engagement</span>
            </div>
        </div>
    </section>

    <!-- TRUST BAR -->
    <div class="trust">
        <div class="wrap">
            <div class="trust-inner">
                <span>TRUSTED BY</span>
                <span>FINANCIAL SERVICES</span>
                <span>HEALTHCARE PLATFORMS</span>
                <span>LOGISTICS & SUPPLY CHAIN</span>
                <span>SAAS PRODUCTS</span>
                <span>GOVERNMENT CONTRACTORS</span>
            </div>
        </div>
    </div>

    <!-- SERVICES -->
    <section class="section" id="services">
        <div class="wrap">
            <div class="section-head">
                <span class="section-tag">// SERVICES</span>
                <h2>Two disciplines, one accountable team.</h2>
                <p class="section-desc">The people who build your software are the same who are with you every step. Nothing hidden, no surprises, no handoffs. Our core value is we build it, we maintain it.</p>
            </div>

            <div class="services">
                <div class="service">
                    <div class="service-id">
                        <span class="service-tag mono"><span class="dot"></span> WEB //</span>
                        <h3>Web Development</h3>
                    </div>
                    <div class="service-body">
                        <p>Fast, maintainable web platforms — marketing sites, customer portals, and full SaaS products — engineered with the same security discipline we bring to penetration testing.</p>
                    </div>
                    <ul class="service-list">
                        <li>Web applications & portals</li>
                        <li>E-commerce platforms</li>
                        <li>Site modernization</li>
                        <li>Ongoing maintenance</li>
                    </ul>
                </div>

                <div class="service">
                    <div class="service-id">
                        <span class="service-tag mono"><span class="dot"></span> PENTEST //</span>
                        <h3>Penetration Testing</h3>
                    </div>
                    <div class="service-body">
                        <p>Manual, methodology-driven testing of your applications, networks, and infrastructure — with a plain-language report your engineers can act on, not a scanner printout.</p>
                    </div>
                    <ul class="service-list">
                        <li>Web & application testing</li>
                        <li>Network & infrastructure testing</li>
                        <li>Remediation guidance</li>
                        <li>Retesting included</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- APPROACH -->
    <section class="section section-alt" id="approach">
        <div class="wrap">
            <div class="section-head">
                <span class="section-tag">// WHY FUTURE CODE</span>
                <h2>Excellence in every project.</h2>
                <p class="section-desc">Anyone can promise quality but we live by it. We don't cut corners, we don't rush, and we don't compromise.</p>
            </div>

            <div class="approach-grid">
                <div class="approach-card">
                    <span class="approach-num mono">DIRECT</span>
                    <h4>No account layers</h4>
                    <p>You talk to the engineer writing your code or running your test, not a rotating account manager.</p>
                </div>
                <div class="approach-card">
                    <span class="approach-num mono">CLEAR</span>
                    <h4>Fixed-scope pricing</h4>
                    <p>Every engagement starts with a written scope and a number attached to it. No surprise invoices.</p>
                </div>
                <div class="approach-card">
                    <span class="approach-num mono">TESTED</span>
                    <h4>Security by default</h4>
                    <p>Code review and threat modeling happen during development, not bolted on after launch.</p>
                </div>
                <div class="approach-card">
                    <span class="approach-num mono">OWNED</span>
                    <h4>You keep everything</h4>
                    <p>Source code, documentation, and credentials are yours from day one — no vendor lock-in.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PROCESS -->
    <section class="section" id="process">
        <div class="wrap">
            <div class="section-head">
                <span class="section-tag">// HOW WE WORK</span>
                <h2>From first call to signed-off delivery.</h2>
                <p class="section-desc">The same process runs underneath every engagement, whether it's a two-week test or a six-month build.</p>
            </div>

            <div class="process">
                <div class="process-row">
                    <span class="process-step mono">01</span>
                    <div class="process-content">
                        <h4>Scope</h4>
                        <p>We map what you need built or tested, define boundaries, and put a fixed price and timeline in writing before any work starts.</p>
                    </div>
                </div>
                <div class="process-row">
                    <span class="process-step mono">02</span>
                    <div class="process-content">
                        <h4>Build or test</h4>
                        <p>Development runs in short, reviewable cycles. Security engagements follow a documented methodology, not automated scans alone.</p>
                    </div>
                </div>
                <div class="process-row">
                    <span class="process-step mono">03</span>
                    <div class="process-content">
                        <h4>Report</h4>
                        <p>You get working software with documentation, or a findings report ranked by real business risk — written for engineers and decision-makers alike.</p>
                    </div>
                </div>
                <div class="process-row">
                    <span class="process-step mono">04</span>
                    <div class="process-content">
                        <h4>Support</h4>
                        <p>Fixes get retested at no extra charge. Applications get a maintenance window built into the handoff, not sold separately after the fact.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- STATS -->
    <section class="section section-alt">
        <div class="wrap">
            <div class="stats">
                <div>
                    <div class="stat-num">10+</div>
                    <div class="stat-label">Engagements delivered</div>
                </div>
                <div>
                    <div class="stat-num">30+</div>
                    <div class="stat-label">Years of experience</div>
                </div>
                <div>
                    <div class="stat-num">0</div>
                    <div class="stat-label">Missed fixed-price budgets</div>
                </div>
                <div>
                    <div class="stat-num">100%</div>
                    <div class="stat-label">Findings retested at no cost</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta-section" id="contact">
        <div class="wrap">
            <div class="cta-box">
                <div>
                    <h2>Tell us what you're building or what needs testing.</h2>
                    <p>We'll respond within one business day with scope questions and a rough estimate — no sales call required to get that far.</p>
                </div>
                <div class="cta-actions">
                    <a href="{{ route('projects.create') }}" class="btn btn-primary">Start a Project</a>
                    <a href="#top" class="btn btn-ghost">Back to top</a>
                </div>
            </div>
        </div>
    </section>

</x-marketing-layout>

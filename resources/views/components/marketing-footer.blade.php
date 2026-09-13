<footer>
    <div class="wrap">
        <div class="footer-top">
            <div class="footer-brand">
                <a href="#top" class="logo">
                    <span class="mark">FC</span>
                    Future Code
                </a>
                <p>Software development and cybersecurity, handled by one accountable team.</p>
            </div>
            <div class="footer-cols">
                <div class="footer-col">
                    <h5>SERVICE</h5>
                    <a href="{{ route('home') }}#services">Penetration Testing</a>
                </div>
                <div class="footer-col">
                    <h5>COMPANY</h5>
                    <a href="{{ route('home') }}#approach">Approach</a>
                    <a href="{{ route('home') }}#process">Process</a>
                    <a href="{{ route('home') }}#contact">Contact</a>
                </div>
                <div class="footer-col">
                    <h5>CONTACT</h5>
                    <a href="mailto:support@futurecode.dev">support@futurecode.dev</a>
                    <a href="tel:+573152638460">+57 (315) 263-8460</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <span>&copy; {{ date('Y') }} Future Code. All rights reserved.</span>
            <span class="mono">STATUS: <span style="color:var(--signal)">OPERATIONAL</span></span>
        </div>
    </div>
</footer>

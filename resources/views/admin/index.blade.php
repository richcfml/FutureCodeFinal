<x-admin-layout>

    <div class="page-head">
        <div class="wrap">
            <span class="eyebrow"><span class="dot"></span> Login</span>
            <div x-data="{ showError: true }">
                @session('error')
                    <div class="field-error-msg" x-init="setTimeout(() => showError = false, 3000)" x-show="showError">{{ $value }}</div>
                @endsession
            </div>
        </div>
    </div>

    <section class="form-section">
        <div class="wrap">

            <form method="POST" action="{{ route('admin.store') }}" id="intake-form" novalidate>
                @csrf

                <fieldset>
                    <div class="field">
                        <label for="email">Email<span class="req">*</span></label>
                        <input type="email" id="email" name="email" required />
                        @error('email')
                        <div class="field-error-msg">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="password">Password<span class="req">*</span></label>
                        <input type="password" id="password" name="password" required />
                        @error('password')
                        <div class="field-error-msg">{{ $message }}</div>
                        @enderror
                    </div>
                </fieldset>


                <div class="form-footer">
                    <button type="submit" class="btn btn-primary" id="submit-btn">Login<span class="mono" aria-hidden="true"> →</span></button>
                </div>
            </form>

            <div class="success-panel" id="success-panel">
                <div class="success-icon">✓</div>
                <h3>Project received.</h3>
                <p>Thanks — we've logged your request and will follow up at the email you provided within one business day.</p>
                <span class="mono">STATUS: <span style="color:var(--signal)">QUEUED FOR REVIEW</span></span>
            </div>

        </div>
    </section>
</x-admin-layout>

<x-marketing-layout>

    <div class="page-head">
        <div class="wrap">
            <span class="eyebrow"><span class="dot"></span> New engagement</span>
            <h1>Tell us about your project.</h1>
            <p>Fill this out and we'll follow up within one business day with scope questions and a rough estimate. Fields marked with <strong style="color:var(--signal)">*</strong> are required.</p>
        </div>
    </div>

    <section class="form-section">
        <div class="wrap">

            <form method="POST" action="{{ route('projects.store') }}" id="intake-form" novalidate>
                @csrf

                <!-- PROJECT / COMPANY -->
                <div class="form-group-head">
                    <span class="section-tag mono">// 01 — PROJECT</span>
                </div>
                <fieldset>
                    <legend>Project & company</legend>
                    <p class="fieldset-desc">What we should call this engagement, and who it's for.</p>

                    <div class="field">
                        <label for="company_name">Project or company name<span class="req">*</span></label>
                        <input type="text" id="company_name" name="company_name" placeholder="e.g. Meridian Logistics" required>
                        @error('company_name')
                            <div class="field-error-msg">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="field">
                        <label for="description">Short project description<span class="req">*</span> <span class="hint">what you need built or tested</span></label>
                        <textarea id="description" name="description" placeholder="A brief overview: what the project is, what problem it solves, and any systems it needs to work with." maxlength="600" required></textarea>
                        <div class="char-count"><span id="char-current">0</span> / 600</div>
                        @error('description')
                            <div class="field-error-msg">{{ $message }}</div>
                        @enderror

                    </div>
                </fieldset>

                <!-- CONTACT -->
                <div class="form-group-head">
                    <span class="section-tag mono">// 02 — CONTACT</span>
                </div>
                <fieldset>
                    <legend>Contact details</legend>
                    <p class="fieldset-desc">Who we should reach out to about this project.</p>

                    <div class="field">
                        <label for="contact_name">Contact name<span class="req">*</span></label>
                        <input type="text" id="contact_name" name="contact_name" placeholder="Full name" required>
                        @error('contact_name')
                            <span class="field-error-msg">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="field-row">
                        <div class="field">
                            <label for="contact_email">Contact email<span class="req">*</span></label>
                            <input type="email" id="contact_email" name="contact_email" placeholder="name@company.com" required>
                            @error('contact_email')
                                <div class="field-error-msg">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="field">
                            <label for="contact_phone">Contact phone<span class="req">*</span></label>
                            <div class="phone-group">
                                <select id="phone_code" name="phone_code" aria-label="Country code">
                                    <option value="+1">+1</option>
                                    <option value="+44">+44</option>
                                    <option value="+57">+57</option>
                                    <option value="+34">+34</option>
                                    <option value="+52">+52</option>
                                    <option value="+61">+61</option>
                                    <option value="+other">+ other</option>
                                </select>
                                <input type="tel" id="contact_phone" name="contact_phone" placeholder="(000) 000-0000" required>
                            </div>
                            @error('contact_phone')
                                <div class="field-error-msg">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                </fieldset>

                <!-- SCOPE / TIMING -->
                <div class="form-group-head">
                    <span class="section-tag mono">// 03 — SCOPE & TIMING</span>
                </div>
                <fieldset>
                    <legend>Criticality & timeline</legend>
                    <p class="fieldset-desc">Helps us route this to the right team and staff it correctly.</p>

                    <div class="field">
                        <label>How critical is this project?<span class="req">*</span></label>
                        <div class="criticality" role="radiogroup" aria-label="Project criticality">
                            <label class="crit-option">
                                <input type="radio" name="criticality" value="Low" required>
                                <span class="crit-card">
                                  <span class="crit-radio" aria-hidden="true"></span>
                                  <span class="crit-label">Low</span>
                                </span>
                            </label>
                            <label class="crit-option">
                                <input type="radio" name="criticality" value="Standard">
                                <span class="crit-card">
                                  <span class="crit-radio" aria-hidden="true"></span>
                                  <span class="crit-label">Standard</span>
                                </span>
                            </label>
                            <label class="crit-option">
                                <input type="radio" name="criticality" value="High">
                                <span class="crit-card">
                                  <span class="crit-radio" aria-hidden="true"></span>
                                  <span class="crit-label">High</span>
                                </span>
                            </label>
                            <label class="crit-option">
                                <input type="radio" name="criticality" value="Critical">
                                <span class="crit-card">
                                  <span class="crit-radio" aria-hidden="true"></span>
                                  <span class="crit-label">Critical</span>
                                </span>
                            </label>
                        </div>
                        @error('criticality')
                            <div class="field-error-msg" id="crit-error">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="field-row">
                        <div class="field">
                            <label for="start_date">Preferred start date<span class="req">*</span></label>
                            <input type="date" id="start_date" name="start_date" required>
                            @error('start_date')
                                <div class="field-error-msg">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="field">
                            <label for="end_date">Deadline <span class="hint">if there is one</span></label>
                            <input type="date" id="end_date" name="end_date">
                            @error('end_date')
                                <div class="field-error-msg">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </fieldset>

                <div class="form-footer">
                    <p>Submitting this form sends your project details to our team. We don't share this information with anyone outside Future Code.</p>
                    <button type="submit" class="btn btn-primary" id="submit-btn">Submit project<span class="mono" aria-hidden="true"> →</span></button>
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
</x-marketing-layout>

@extends('layouts.app')

@section('content')
<section style="padding: 60px 0; background-color: var(--light-bg); min-height: 80vh;">
    <div class="container" style="max-width: 600px;">
        <div class="card" style="padding: 40px; background: white; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
            <div id="service-wizard">
                <!-- Step 1: Need Selection -->
                <div class="wizard-step" id="step-1">
                    <h2 class="section-title" style="margin-bottom: 30px;">I need help with...</h2>
                    <div style="display: grid; gap: 15px;">
                        <label style="display: block; padding: 15px; border: 1px solid var(--border-color); border-radius: 8px; cursor: pointer;">
                            <input type="radio" name="need" value="buying-house" required> Buying or Selling a House
                        </label>
                        <label style="display: block; padding: 15px; border: 1px solid var(--border-color); border-radius: 8px; cursor: pointer;">
                            <input type="radio" name="need" value="starting-business"> Starting a New Business
                        </label>
                        <label style="display: block; padding: 15px; border: 1px solid var(--border-color); border-radius: 8px; cursor: pointer;">
                            <input type="radio" name="need" value="tax-planning"> Strategic Tax Planning
                        </label>
                        <label style="display: block; padding: 15px; border: 1px solid var(--border-color); border-radius: 8px; cursor: pointer;">
                            <input type="radio" name="need" value="estate-will"> Writing a Will / Estate Planning
                        </label>
                    </div>
                    <div style="margin-top: 30px; text-align: right;">
                        <button type="button" class="btn btn-primary btn-next">Continue &rarr;</button>
                    </div>
                </div>

                <!-- Step 2: Details -->
                <div class="wizard-step" id="step-2" style="display: none;">
                    <h2 class="section-title" style="margin-bottom: 30px;">Tell us more</h2>
                    <div style="margin-bottom: 20px;">
                        <label style="display: block; margin-bottom: 8px;">Briefly describe your situation:</label>
                        <textarea name="details" style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 5px; height: 120px;" required></textarea>
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <button type="button" class="btn btn-prev" style="background: #eee;">Back</button>
                        <button type="button" class="btn btn-primary btn-next">Next Step &rarr;</button>
                    </div>
                </div>

                <!-- Step 3: Contact Info -->
                <div class="wizard-step" id="step-3" style="display: none;">
                    <h2 class="section-title" style="margin-bottom: 30px;">Almost there</h2>
                    <div style="margin-bottom: 15px;">
                        <label style="display: block; margin-bottom: 8px;">Full Name</label>
                        <input type="text" name="name" style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 5px;" required>
                    </div>
                    <div style="margin-bottom: 15px;">
                        <label style="display: block; margin-bottom: 8px;">Email Address</label>
                        <input type="email" name="email" style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 5px;" required>
                    </div>
                    <div style="margin-bottom: 30px;">
                        <label style="display: block; margin-bottom: 8px;">Phone Number (Optional)</label>
                        <input type="tel" name="phone" style="width: 100%; padding: 10px; border: 1px solid var(--border-color); border-radius: 5px;">
                    </div>
                    <div style="display: flex; justify-content: space-between;">
                        <button type="button" class="btn btn-prev" style="background: #eee;">Back</button>
                        <button type="submit" class="btn btn-primary">Submit Consultation Request</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const LEADS_STORE_URL = "{{ route('leads.store') }}";
</script>
<script src="{{ asset('js/wizard.js') }}"></script>
@endsection

/**
 * Your CPA Expert - Service Wizard
 * A deceptively simple, multi-step form for lead generation.
 */

document.addEventListener('DOMContentLoaded', function () {
    const wizardForm = document.getElementById('service-wizard');
    if (!wizardForm) return;

    const steps = wizardForm.querySelectorAll('.wizard-step');
    const nextBtns = wizardForm.querySelectorAll('.btn-next');
    const prevBtns = wizardForm.querySelectorAll('.btn-prev');
    let currentStep = 0;

    function showStep(index) {
        steps.forEach((step, i) => {
            step.style.display = i === index ? 'block' : 'none';
        });
        currentStep = index;
    }

    nextBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            if (validateStep(currentStep)) {
                showStep(currentStep + 1);
            }
        });
    });

    prevBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            showStep(currentStep - 1);
        });
    });

    function validateStep(index) {
        // Basic validation: ensure at least one option is selected or input is filled
        const activeStep = steps[index];
        const inputs = activeStep.querySelectorAll('input, select, textarea');
        let isValid = true;

        inputs.forEach(input => {
            if (input.hasAttribute('required') && !input.value) {
                isValid = false;
                input.style.borderColor = 'red';
            } else {
                input.style.borderColor = 'var(--border-color)';
            }
        });

        return isValid;
    }

    // Final Submission
    const submitBtn = wizardForm.querySelector('button[type="submit"]');
    if (submitBtn) {
        submitBtn.addEventListener('click', function (e) {
            e.preventDefault();
            if (validateStep(currentStep)) {
                const formData = new FormData(wizardForm);
                fetch(LEADS_STORE_URL, {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        'Accept': 'application/json'
                    },
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        alert(data.message);
                        window.location.href = '/';
                    })
                    .catch(error => alert('Something went wrong. Please try again.'));
            }
        });
    }

    // Initial step
    showStep(0);
});

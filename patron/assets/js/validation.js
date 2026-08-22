/**
 * PATRON - Client-Side Validation Library
 * Add to assets/js/validation.js
 */

const PatronValidation = {
    patterns: {
        pan: /^[A-Z]{5}[0-9]{4}[A-Z]$/,
        din: /^[0-9]{8}$/,
        dpin: /^[0-9]{8}$/,
        gstin: /^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/,
        cin: /^[UL][0-9]{5}[A-Z]{2}[0-9]{4}[A-Z]{3}[0-9]{6}$/,
        llpin: /^[A-Z]{3}-[0-9]{4}$/,
        mobile: /^[6-9][0-9]{9}$/,
        email: /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/,
        pincode: /^[1-9][0-9]{5}$/,
        ifsc: /^[A-Z]{4}0[A-Z0-9]{6}$/,
        aadhaar: /^[2-9][0-9]{11}$/,
        passport: /^[A-Z][0-9]{7}$/
    },

    messages: {
        pan: 'PAN must be in format ABCDE1234F',
        din: 'DIN must be 8 digits',
        dpin: 'DPIN must be 8 digits',
        gstin: 'Invalid GSTIN format (15 characters)',
        cin: 'CIN must be 21 characters (e.g., U12345MH2020PTC123456)',
        llpin: 'LLPIN must be in format AAA-1234',
        mobile: 'Mobile must be 10 digits starting with 6-9',
        email: 'Please enter a valid email address',
        pincode: 'Pincode must be 6 digits',
        ifsc: 'Invalid IFSC code format',
        aadhaar: 'Aadhaar must be 12 digits',
        passport: 'Passport must be in format A1234567'
    },

    validate: function(type, value) {
        if (!value || value.trim() === '') return { valid: true, message: '' }; // Empty is OK (unless required)
        const pattern = this.patterns[type];
        if (!pattern) return { valid: true, message: '' };
        const isValid = pattern.test(value.toUpperCase().trim());
        return {
            valid: isValid,
            message: isValid ? '' : this.messages[type]
        };
    },

    validateField: function(input) {
        const type = input.dataset.validate;
        if (!type) return true;
        
        const result = this.validate(type, input.value);
        const errorEl = input.parentElement.querySelector('.validation-error');
        
        if (!result.valid) {
            input.classList.add('border-red-500');
            input.classList.remove('border-gray-300', 'border-green-500');
            if (errorEl) {
                errorEl.textContent = result.message;
                errorEl.classList.remove('hidden');
            }
        } else if (input.value.trim()) {
            input.classList.add('border-green-500');
            input.classList.remove('border-red-500', 'border-gray-300');
            if (errorEl) errorEl.classList.add('hidden');
        } else {
            input.classList.remove('border-red-500', 'border-green-500');
            input.classList.add('border-gray-300');
            if (errorEl) errorEl.classList.add('hidden');
        }
        
        return result.valid;
    },

    formatPAN: function(input) {
        input.value = input.value.toUpperCase().replace(/[^A-Z0-9]/g, '').slice(0, 10);
    },

    formatDIN: function(input) {
        input.value = input.value.replace(/[^0-9]/g, '').slice(0, 8);
    },

    formatMobile: function(input) {
        input.value = input.value.replace(/[^0-9]/g, '').slice(0, 10);
    },

    formatGSTIN: function(input) {
        input.value = input.value.toUpperCase().replace(/[^A-Z0-9]/g, '').slice(0, 15);
    },

    formatCIN: function(input) {
        input.value = input.value.toUpperCase().replace(/[^A-Z0-9]/g, '').slice(0, 21);
    },

    formatPincode: function(input) {
        input.value = input.value.replace(/[^0-9]/g, '').slice(0, 6);
    },

    formatAadhaar: function(input) {
        let val = input.value.replace(/[^0-9]/g, '').slice(0, 12);
        // Format as XXXX XXXX XXXX
        if (val.length > 8) {
            val = val.slice(0, 4) + ' ' + val.slice(4, 8) + ' ' + val.slice(8);
        } else if (val.length > 4) {
            val = val.slice(0, 4) + ' ' + val.slice(4);
        }
        input.value = val;
    },

    init: function() {
        // Auto-validate on blur
        document.querySelectorAll('[data-validate]').forEach(input => {
            input.addEventListener('blur', () => this.validateField(input));
            
            // Auto-format based on type
            const type = input.dataset.validate;
            input.addEventListener('input', () => {
                switch(type) {
                    case 'pan': this.formatPAN(input); break;
                    case 'din': case 'dpin': this.formatDIN(input); break;
                    case 'mobile': this.formatMobile(input); break;
                    case 'gstin': this.formatGSTIN(input); break;
                    case 'cin': this.formatCIN(input); break;
                    case 'pincode': this.formatPincode(input); break;
                    case 'aadhaar': this.formatAadhaar(input); break;
                }
            });
        });

        // Validate form on submit
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', (e) => {
                let isValid = true;
                form.querySelectorAll('[data-validate]').forEach(input => {
                    if (!this.validateField(input)) {
                        isValid = false;
                    }
                });
                if (!isValid) {
                    e.preventDefault();
                    // Scroll to first error
                    const firstError = form.querySelector('.border-red-500');
                    if (firstError) firstError.focus();
                }
            });
        });
    }
};

// Auto-initialize when DOM ready
document.addEventListener('DOMContentLoaded', () => PatronValidation.init());

/**
 * Usage in HTML:
 * 
 * <input type="text" name="pan" data-validate="pan" class="form-input">
 * <span class="validation-error hidden text-red-500 text-xs"></span>
 * 
 * <input type="text" name="din" data-validate="din" class="form-input">
 * <input type="text" name="mobile" data-validate="mobile" class="form-input">
 * <input type="text" name="email" data-validate="email" class="form-input">
 * <input type="text" name="gstin" data-validate="gstin" class="form-input">
 * <input type="text" name="cin" data-validate="cin" class="form-input">
 */


<?php $__env->startSection('content'); ?>

<section class="uk-cover-container  uk-position-relative   uk-flex uk-flex-middle  uk-background-norepeat uk-background-cover uk-background-top-center" uk-parallax="bgy: -100; easing: -2;  " data-src="<?php echo e(asset('themes-assets/images/trip/06.jpg')); ?>" uk-height-viewport="expand: true; min-height: 500;" uk-img>
    <div class="uk-overlay-primary  uk-position-cover "></div>
    <div class="uk-width-1-1 uk-position-z-index uk-margin-large-top">
        <div class="uk-width-1-1 uk-position-relative" style="z-index: 99;">
            <div class="uk-container    uk-position-relative" uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                <div class=" uk-margin-medium uk-width-large">
                    <h1 class="theme-font-extra-bold text-white uk-margin-small" uk-scrollspy="cls: uk-animation-slide-top-small;   delay: 400; repeat: false;"><span class="uk-text-bold">Insurance Form</span> </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<!-- section -->
<section class="uk-section bg-white">
    <div class=" uk-container">
        <div class="uk-grid" uk-grid>
            <div class="uk-width-expand@m">
                <div class="uk-booking bg-white uk-border-rounded uk-card uk-card-default  uk-overflow-hidden">
                    <div class="uk-booking-header bg-primary">
                        <div class=" uk-flex uk-flex-middle uk-grid-small">
                            <div class="">
                                <h1 class="uk-h3 uk-margin-remove text-white  main-title-font">
                                    FOR INSURANCE PURPOSE
                                </h1>
                            </div>
                        </div>
                    </div>
                    <div class="uk-text-small uk-padding-small uk-padding-remove-bottom">
                        <i class="uk-margin-left"><span class="text-red">*</span> All Fields Required</i>
                    </div>
                    <form method="post" id="insurance-form" action="<?php echo e(route('insurance_success')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="uk-booking-body">
                            <div class="uk-grid-medium" uk-grid>
                                <!-- Full Name -->
                                <div class="uk-width-1-2@s">
                                    <label class="uk-margin-small uk-display-block" for="fname">Full Name (As per passport)
                                        <span class="text-red">*</span>
                                    </label>
                                    <input class="uk-input" type="text" id="fname" name="fname" placeholder="">
                                </div>

                                <!-- Nationality -->
                                <div class="uk-width-1-2@s">
                                    <label class="uk-margin-small uk-display-block" for="nationality">Nationality (Country)<span class="text-red">*</span></label>
                                    <select name="country" class="uk-select uk-select-search" id="nationality" required>
                                        <?php echo $__env->make('themes.default.common.country', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </select>
                                </div>

                                <!-- Gender -->
                                <div class="uk-width-1-2@s">
                                    <legend class="uk-margin-small uk-display-block">
                                        Gender <span class="text-red">*</span>
                                    </legend>
                                    <ul class="uk-grid uk-grid-small" uk-grid>
                                        <li>
                                            <label>
                                                <input type="radio" id="male" name="gender" value="male" class="uk-radio uk-margin-small-right">
                                                Male
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" id="female" name="gender" value="female" class="uk-radio uk-margin-small-right">
                                                Female
                                            </label>
                                        </li>
                                        <li class="uk-flex">
                                            <label>
                                                <input type="radio" id="other" name="gender" value="other" class="uk-radio uk-margin-small-right">
                                                Other (Specify)
                                            </label>
                                            <input type="text" id="other-text" name="other_gender" class="uk-input uk-margin-small-top" placeholder="Please specify" hidden>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Date of Birth -->
                                <div class="uk-width-1-2@s">
                                    <label class="uk-margin-small uk-display-block" for="bdate">Date of Birth <span class="text-red">*</span></label>
                                    <input class="uk-input" type="date" placeholder="" id="bdate" name="bdate">
                                </div>

                                <!-- Email -->
                                <div class="uk-width-1-2@s">
                                    <label class="uk-margin-small uk-display-block" for="email">Email Address <span class="text-red">*</span></label>
                                    <input class="uk-input  " type="email" placeholder="" id="email" name="email">
                                </div>

                                <!-- Phone -->
                                <div class="uk-width-1-2@s">
                                    <label class="uk-margin-small uk-display-block" for="phone"> Phone / Contact Number (with Country code)<span class="text-red">*</span></label>
                                    <input class="uk-input  " type="text" placeholder="" id="phone" name="phone">
                                </div>

                                <!-- Address -->
                                <div class="uk-width-1-2@s">
                                    <label class="uk-margin-small uk-display-block" for="address">Full Address
                                        <span class="text-red">*</span></label>
                                    <input class="uk-input" type="text" placeholder="" id="address" name="address">
                                </div>

                                <!-- ZIP Code -->
                                <div class="uk-width-1-2@s">
                                    <label class="uk-margin-small uk-display-block" for="zip">ZIP Code
                                        <span class="text-red">*</span></label>
                                    <input class="uk-input" type="text" placeholder="" id="zip" name="zip">
                                </div>

                                <!-- Passport Files -->
                                <div class="uk-width-1-2@m">
                                    <label class="uk-margin-small uk-display-block">
                                        Passport Copy (Official ID Copy) <span class="text-red">*</span>
                                    </label>
                                    <div uk-form-custom>
                                        <input type="file" id="passport-files" name="passport[]" multiple accept=".jpg,.jpeg,.png,.pdf">
                                        <button class="uk-button uk-button-default bg-primary" style="color:white;" type="button" tabindex="-1" onclick="document.getElementById('passport-files').click()">
                                            <span uk-icon="icon: cloud-upload" style="color:white;"></span>
                                            Upload Passport
                                        </button>
                                    </div>
                                    <br>
                                    <small>Upload up to 5 supported files. Max 2 MB per file.</small>
                                    <div id="passport-preview" class="uk-margin-small-top"></div>
                                    <div id="passport-error" class="uk-text-danger uk-margin-small-top"></div>
                                </div>

                                <!-- Second Passport -->
                                <div class="uk-width-1-2@m">
                                    <label class="uk-margin-small uk-display-block" for="secondpassport">2nd Page of Passport copy (optional)</label>
                                    <div uk-form-custom>
                                        <input type="file" id="secondpassport" name="secondpassport" accept=".jpg,.jpeg,.png,.pdf">
                                        <button class="uk-button uk-button-default bg-primary" style="color:white;" type="button" tabindex="-1">
                                            <span uk-icon="icon: cloud-upload" style="color: white; border:none!important;"></span> Upload Second Page
                                        </button>
                                    </div> <br>
                                    <small>Upload 1 supported file. Max 2 MB.</small>
                                    <div id="secondpassport-file" class="uk-margin-small-top uk-text-small uk-text-muted"></div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-booking-footer">
                            <div class="uk-flex uk-flex-middle uk-flex-center">
                                <div>
                                    <div>
                                        <button type="submit" class="uk-button uk-button-primary uk-border-pill">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- sidebar -->
            <?php echo $__env->make('themes.default.common.form-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- sidebar end -->
        </div>
    </div>
    <div id="uk-stop-sticky" class="uk-clearfix"></div>
</section>

<script>
// Handle gender radio buttons
const radios = document.querySelectorAll('input[name="gender"]');
const otherText = document.getElementById('other-text');

radios.forEach(radio => {
    radio.addEventListener('change', () => {
        if (radio.value === 'other' && radio.checked) {
            otherText.hidden = false;
            otherText.required = true;
        } else {
            otherText.hidden = true;
            otherText.required = false;
        }
    });
});

const passportInput = document.getElementById('passport-files');
const passportPreview = document.getElementById('passport-preview');
const passportError = document.getElementById('passport-error');

let validFiles = [];

// Handle file selection
passportInput.addEventListener('change', function () {
    const files = Array.from(this.files);
    passportError.innerHTML = '';

    for (let file of files) {
        // Max 5
        if (validFiles.length >= 5) {
            passportError.innerHTML = '❌ You can only upload up to 5 files.';
            break;
        }

        // Skip duplicates (by name + size)
        if (validFiles.some(f => f.name === file.name && f.size === file.size)) {
            continue;
        }

        // Validate type
        if (!file.type.match(/(jpeg|jpg|png|pdf)$/i)) {
            passportError.innerHTML = `❌ File "${file.name}" is not a supported format.`;
            continue;
        }

        // Validate size (2 MB)
        if (file.size > 2 * 1024 * 1024) {
            passportError.innerHTML = `❌ File "${file.name}" is larger than 10MB.`;
            continue;
        }

        validFiles.push(file);
    }

    // Reset input so same file can be re-selected later
    this.value = '';

    updatePassportPreview();
});

// Update preview
function updatePassportPreview() {
    if (validFiles.length === 0) {
        passportPreview.innerHTML = '<small class="uk-text-muted">No files selected</small>';
        return;
    }

    let preview = '';
    validFiles.forEach((file, index) => {
        preview += `
                <div class="uk-flex uk-flex-middle uk-flex-between" style="padding:5px; background:#f8f8f8; border-radius:3px; font-size:13px;">
                    <span>📄 ${file.name} (${(file.size / 1024 / 1024).toFixed(2)} MB)</span>
                    <button type="button" onclick="removePassportFile(${index})" style="color:red; border:none; background:none; cursor:pointer; font-size:14px;">✕</button>
                </div>
        `;
    });
    passportPreview.innerHTML = preview;
}

// Remove file
function removePassportFile(index) {
    validFiles.splice(index, 1);
    updatePassportPreview();
    passportError.innerHTML = '';
}

// Before submit, re-attach valid files
document.getElementById("insurance-form").addEventListener("submit", function () {
    const dt = new DataTransfer();
    validFiles.forEach(file => dt.items.add(file));
    passportInput.files = dt.files;
});


// Handle second passport file
document.getElementById('secondpassport').addEventListener('change', function() {
    const fileName = this.files[0] ? `📄 ${this.files[0].name}` : 'No file selected';
    document.getElementById('secondpassport-file').innerHTML = fileName;
});
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('themes.default.common.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\seven_summit\resources\views/themes/default/insurance.blade.php ENDPATH**/ ?>
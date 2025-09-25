@extends('themes.default.common.master')
@section('content')

<!-- banner -->
<section class="uk-cover-container  uk-position-relative   uk-flex uk-flex-middle  uk-background-norepeat uk-background-cover uk-background-top-center" uk-parallax="bgy: -100; easing: -2;  " data-src="{{ asset('themes-assets/images/trip/06.jpg') }}" uk-height-viewport="expand: true; min-height: 500;" uk-img>
    <div class="uk-overlay-primary  uk-position-cover "></div>
    <div class="uk-width-1-1 uk-position-z-index uk-margin-large-top">
        <div class="uk-width-1-1 uk-position-relative" style="z-index: 99;">
            <div class="uk-container    uk-position-relative" uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                <div class=" uk-margin-medium uk-width-large">
                    <h1 class="theme-font-extra-bold text-white uk-margin-small" uk-scrollspy="cls: uk-animation-slide-top-small;   delay: 400; repeat: false;"><span class="uk-text-bold">Accident Waiver & Release Of Liability Form</span> </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<!-- section -->
<section class="uk-section bg-white">
    <div class=" uk-container">
        <form id="multiStepForm" action="{{ route('accident-waiver-success') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <!-- form 1 start -->
            <div class="uk-booking bg-white uk-border-rounded uk-card uk-card-default  uk-overflow-hidden step">
                <div class="uk-booking-header bg-primary">
                    <div class=" uk-flex uk-flex-middle uk-flex-center uk-grid-small">
                        <div class="">
                            <h1 class="uk-h3 uk-margin-remove text-white uk-text-center  main-title-font">
                                ACCIDENT WAIVER AND RELEASE OF LIABILITY (AWRL)
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="uk-booking-body">
                    <p class="uk-text-justify">It is important that you read and understand this document. It is not written to frighten you, but to inform you of the risks associated mountaineering. Please make a copy for your record.
                    </p>
                    <b style="font-size:18px;">GENERAL ACKNOWLEDGEMENT OF RISK INHERENT DURING EXPEDITION</b> <br>
                    <p class="uk-text-justify">
                        I <input class="uk-input w-220" type="text" id="name" name="name" placeholder="Your Name" required>,hereby recognize and acknowledge that there are many risks inherent in any activity associated with the outdoors, including many
                        aspects of this expedition. These risks include dangers, not only associated with participation
                        in activities, but include dangers associated with aircraft and travel to and from the location of
                        the activities. By signing this Seven Summit Treks Pvt. Ltd. Accident Waiver and Release of
                        Liability (AWRL), I am voluntarily and knowingly subjecting myself to all dangers, risks, and
                        rigors involved or associated with the expedition listed below. By signing this form, I state that
                        I have been informed of some, but not all the possible dangers, and some, but not all of their
                        consequences. I acknowledge and assume responsibility for all risks and dangers and all of
                        their consequences, whether or not foreseeable.
                    </p>
                    <b style="font-size:18px;">NONEXCLUSIVE LIST OF RISKS AND DANGER INHERENT DURING THIS EXPEDITION</b> <br>
                    <p>I fully understand that some of the many risks inherent in the expedition listed above include, but are not limited to:</p>
                    <ol>
                        <li>A fall, which may result in serious injury, permanent disability or death;</li>
                        <li>Cold weather injuries which may include hypothermia, frost nip and/or frostbite which can
                            result in serious injury or death, including but not limited to, loss of limbs, digits, and/or
                            permanent scarring, and/or permanent disability;</li>
                        <li>Heat related illnesses, which may include heat exhaustion and heat stroke, both of which
                            may result in serious injury, permanent disability or death;</li>
                        <li>Altitude related illnesses, which may include acute mountain sickness, pulmonary edema,
                            and/or cerebral edema, which may result in serious injury, permanent disability or death;</li>
                        <li>"An Act of Nature" which may include avalanche, rock fall, crevasse fall, high winds,
                            severe cold, all of or any of which may result in serious injury, permanent disability, or
                            death;</li>
                        <li> River crossings, or travel, that could result in serious injury, permanent disability or death;</li>
                        <li>Risk associated with crossing, climbing, or down climbing on rock, snow and/or ice, any
                            or all of which may result in serious injury, permanent disability or death;</li>
                        <li>Unavailability of skilled medical treatment and rescue.</li>
                    </ol>
                    <p>I have had an opportunity to make myself aware of any and all consequences of these risks anddangers involved with this expedition and have done so to my complete satisfaction.</p>
                </div>
                <div class="uk-booking-footer">
                    <div class="uk-flex uk-flex-middle uk-flex-center">
                        <div>
                            <div>
                                <a class="uk-button uk-button-primary uk-border-pill" onclick="nextStep(1)">Next Page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- form 2 start -->
            <div class="uk-booking bg-white uk-border-rounded uk-card uk-card-default  uk-overflow-hidden step">
                <div class="uk-booking-body">
                    <b style="font-size:18px;">ASSUMPTION OF RISK AND WAIVER OF LIABILITY</b>
                    <p class="uk-text-justify">
                        I voluntarily assume full responsibility for all risks associated with my participation in this
                        event, including any injury, illness, disability, death, or property loss, regardless of whether
                        such risks result from my actions, the actions of others, or third parties. <br><br>
                        I further acknowledge and agree that <b>Seven Summit Treks Pvt. Ltd.</b>, its directors, officers,
                        employees, agents, volunteers, event organizers, event sponsors, event permit grantors, event
                        property owners, and other participants (collectively referred to as the "Released Parties") shall
                        not be held liable for any claims, demands, losses, damages, or expenses arising from my
                        participation in this event.
                    </p>
                    <b style="font-size:18px;">WAIVER, RELEASE, AND INDEMNIFICATION</b>
                    <p class="uk-text-justify"></p>In consideration of my participation, I, on behalf of myself, my heirs, executors, administrators,legal representatives, successors, and assigns, hereby agree to:</p>

                    <b>1. WAIVE, RELEASE, AND DISCHARGE:</b>
                    <p class="uk-text-justify">The Released Parties from any and all claims, liabilities, damages, losses, costs, expenses, or
                        causes of action of any nature, including but not limited to those arising from personal injury,
                        death, disability, property damage, lost income, medical expenses, or any other loss related to
                        my participation in this event, whether caused by negligence or otherwise. </p>

                    <b>2. INDEMNIFY AND HOLD HARMLESS:</b>
                    <p class="uk-text-justify">The Released Parties from any claims, damages, or liabilities made by third parties arising from
                        my participation in the event, my actions, or any failure on my part to adhere to safety
                        guidelines and instructions.</p>

                    <b style="font-size:18px;">MEDICAL CLEARANCE AND CONSENT</b>
                    <p class="uk-text-justify">I state that I have or will undergo the medical examination required of me by Seven Summit
                        Treks, Pvt. Ltd. and that I am mentally and physically prepared to participate in the expedition
                        listed above. Further, I hereby state that I have undergone a course or a training that has
                        adequately prepared me for whatever expedition I am embarking on. <br><br>
                        I hereby accept full responsibility, and agree to pay for, any and all expenses, necessarily
                        incurred, if rescue shall become necessary. I further agree that Seven Summit Treks, Pvt. Ltd.
                        shall have complete and sole discretion to decide when, where, how, to what extent, and under
                        what circumstances, my rescue should be required. I hereby agree and promise to pay for any
                        and all costs necessarily incurred and reasonably related to my rescue. <br><br>
                        I request that all reasonable efforts be made to contact the person listed on my application for
                        contact in the event of an emergency. <br><br>
                        I give Seven Summit Treks, Pvt. Ltd. permission to make all necessary or advisable decisions
                        for my safety and well-being for the diagnosis and/or treatment of any injuries which may arise
                        out of my participation in this expedition in the event that my emergency contact cannot be
                        reached through the exercise of reasonable efforts. <br><br>
                        I consent to hospital, medical, or surgical diagnosis and/or treatment to be rendered necessary
                        or advisable for my safety and well-being for any injuries which may arise out of my
                        participation in this expedition.
                    </p>
                </div>
                <div class="uk-booking-footer">
                    <div class="uk-flex uk-flex-middle uk-flex-center">
                        <div>
                            <div>
                                <a class="uk-button uk-button-primary uk-border-pill" onclick="prevStep(0)">Prev Page</a>
                                <a class="uk-button uk-button-primary uk-border-pill" onclick="nextStep(2)">Next Page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- form 3 start -->
            <div class="uk-booking bg-white uk-border-rounded uk-card uk-card-default  uk-overflow-hidden step">
                <div class="uk-booking-body">
                    <b style="font-size:18px;">MEDIA RELEASE</b>
                    <p class="uk-text-justify">
                        I acknowledge that photographs, videos, or other media recordings may be taken during the
                        event. I grant Seven Summit Treks Pvt. Ltd. the right to use my likeness in promotional
                        materials, including but not limited to advertisements, social media, websites, and other
                        marketing platforms. Should I hold my unwillingness to appear in public media, I shall inform
                        the company beforehand.
                    </p>

                    <b style="font-size:18px;">CANCELLATION AND REFUND POLICY</b>
                    <p class="uk-text-justify">Seven Summit Treks, Pvt. Ltd. reserves the right to refuse a person’s participation on any
                        expedition if found the person to be physically or mentally unprepared for the expedition.
                        During the expedition, the guides reserve the right to require me to return to base camp or to
                        the nearest city, if by the guides’ judgment, for any reason, I am unfit to continue participating
                        in an ongoing activity. If, for any reason, I leave the expedition before its completion there will
                        be no reimbursement of fees. If the weather makes completing our objective impossible there
                        will be no reimbursement either Seven Summit Treks, Pvt. Ltd. is not responsible for any
                        expenses incurred if the expedition should be delayed due to weather. Lastly, circumstances
                        beyond the company’s control, such as adverse weather conditions or unforeseen events, may
                        necessitate changes to the itinerary or pricing. In such cases, adjustments will be made in
                        mutual agreement with the company.
                        <br><br>
                        As per the company policy, advance amount or paid amount will not be refunded if I, the client,
                        decide to cancel my trip any time after the payment is made. Also, I will be required to pay for
                        an "over-night stay" all by myself in case delay and negligence are caused by me. However, if
                        the delay is caused because of the mismanagement of the agency, the agency will bear the
                        charges. In addition to that, the trip may come to an end for me because of ailment or personal
                        injuries. In such cases, I will not be entitled to refunds. These points are the summary of
                        everything that is already mentioned in Terms and Conditions of Seven Summit Treks, Pvt.
                        Ltd. And I have gone through it in detail before signing. Signing below will translate to my
                        endorsement to every point of terms and conditions put forth by Seven Summit Treks Pvt. Ltd.
                        <br>
                        <a href="https://sevensummittreks.com/info/terms-and-conditions" target="_blank"><u>Detail in the Website</u></a>
                    </p>
                </div>
                <div class="uk-booking-footer">
                    <div class="uk-flex uk-flex-middle uk-flex-center">
                        <div>
                            <div>
                                <a class="uk-button uk-button-primary uk-border-pill" onclick="prevStep(1)">Prev Page</a>
                                <a class="uk-button uk-button-primary uk-border-pill" onclick="nextStep(3)">Next Page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- form 4 start -->
            <div class="uk-booking bg-white uk-border-rounded uk-card uk-card-default  uk-overflow-hidden step">
                <div class="uk-booking-header bg-primary">
                    <div class=" uk-flex uk-flex-middle uk-flex-center uk-grid-small">
                        <div class="">
                            <h1 class="uk-h3 uk-margin-remove text-white uk-text-center  main-title-font">
                                ACKNOWLEDGMENT AND ACCEPTANCE
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="uk-booking-body">
                    <p>I have carefully read this <b>Accident Waiver and Release of Liability (AWRL)</b> and I fully
                        understand its contents. I have had a reasonable opportunity to ask any and all questions
                        regarding all aspects of this expedition, including but not limited to, all risks and dangers listed
                        above. All questions have been answered to my complete satisfaction. I understand that this
                        <b>Accident Waiver and Release of Liability (AWRL)</b> shall be effective and binding upon me,
                        during the entire period of my participation in the expedition listed above, including but not
                        limited to, travel to and from my place of residence. Therefore, I assume full responsibility for
                        myself and for any serious injury, permanent disability, death, or loss of personal property
                        which may occur during the expedition.
                    </p>
                    <p>By signing below, I accept all terms and conditions stated herein.</p>
                    <div>
                        <div class="uk-grid">
                            <div class="uk-width-1-2@s uk-margin-small-bottom">
                                <label class="uk-margin-small uk-display-block" for="p_name">Participant’s Full Name<span class="text-red">*</span>
                                </label>
                                <input class="uk-input" type="text" id="p_name" name="p_name" placeholder="Full Name" required>
                            </div>
                            <div class="uk-width-1-2@s uk-margin-small-bottom">
                                <label class="uk-margin-small uk-display-block" for="purchase">Purchased Package’s Name / Trip Code <span class="text-red">*</span></label>
                                <input class="uk-input" type="text" placeholder="" id="purchase" name="purchase" required>
                            </div>
                            <div class="uk-width-1-2@s uk-margin-small-bottom">
                                <label class="uk-margin-small uk-display-block" for="duration">Trip Duration<span class="text-red">*</span>
                                </label>
                                <input class="uk-input" type="text" id="duration" name="duration" placeholder="" required>
                            </div>
                            <div class="uk-width-1-2@s uk-margin-small-bottom">
                                <label class="uk-margin-small uk-display-block" for="e_address">Email Address<span class="text-red">*</span></label>
                                <input class="uk-input  " type="email" placeholder="" id="e_address" name="email" required>
                            </div>
                            <div class="uk-width-1-2@s uk-margin-small-bottom">
                                <label class="uk-margin-small uk-display-block" for="contact_name">Emergency Contact Person Name<span class="text-red">*</span>
                                </label>
                                <input class="uk-input" type="text" id="contact" name="contact_name" placeholder="Full Name" required>
                            </div>
                            <div class="uk-width-1-2@s uk-margin-small-bottom">
                                <label class="uk-margin-small uk-display-block" for="contact_relation">Relation To Emergency Contact Person <span class="text-red">*</span></label>
                                <input class="uk-input" type="text" placeholder="Family,Friend,..." name="contact_relation" required>
                            </div>
                            <div class="uk-width-1-2@s uk-margin-small-bottom">
                                <label class="uk-margin-small uk-display-block" for="contact">Emergency Contact Person’s Number<span class="text-red">*</span>
                                </label>
                                <input class="uk-input" type="number" id="contact" name="contact_number" placeholder="Contact Number" required>
                            </div>
                            <div class="uk-width-1-2@s uk-margin-small-bottom">
                                <label class="uk-margin-small uk-display-block" for="contact_email">Emergency Contact Person’s Email<span class="text-red">*</span></label>
                                <input class="uk-input" type="email" placeholder="" id="e_email" name="contact_email" required>
                            </div>
                        </div>
                        <div class="uk-flex uk-margin-bottom uk-margin-top">
                            <label class="uk-margin-right  uk-display-block" for="signature">Sign:
                            </label>
                            <!-- <textarea id="signature" name="signature" rows="4" cols="30" placeholder="Sign here..." ></textarea> -->
                            <canvas id="signature_pad" width="300" height="200" style="border:1px solid #000; border-radius:8px;"></canvas>

                            <!-- Hidden input to hold signature image data -->
                            <input type="hidden" id="signature" name="signature" required>

                            <!-- Action buttons -->
                            <div class="uk-margin-top">
                                <button type="button" onclick="clearSig()">Clear</button>
                            </div>
                        </div>

                        <div class="uk-flex ">
                            <label class="uk-margin-small uk-display-block" for="today_date">Date:<span class="text-red">*</span>
                            </label>
                            <input class="uk-input" type="date" id="to_date" name="today_date" placeholder="" style="width:265px; margin-left:10px;" required>
                        </div>
                    </div>
                    <div class="uk-padding-small uk-margin-small-top" style="background: var(--bg-light);">
                        <b>WITNESS:<span class="text-red">*</span></b>
                        <p>
                            I,<input class="uk-input w-220" type="text" id="w_name" name="w_name" placeholder="Witness Full Name" required>,
                            have witnessed the signing of this Accident Waiver and Release of Liability (AWRL) on this 
                            <input class="uk-input" type="date" id="to_date" name="w_date" placeholder="" style="width:200px;" required>.
                        </p>
                    </div>
                    <div class="uk-flex uk-margin-bottom uk-margin-top">
                        <label class="uk-margin-right  uk-display-block" for="w_signature">Witness’s Signature:<span class="text-red">*</span>
                        </label>
                        <!-- Canvas for drawing signature -->
                        <canvas id="w_signature_pad" width="300" height="200" style="border:1px solid #000; border-radius:8px;"></canvas>

                        <!-- Hidden input to hold signature image data -->
                        <input type="hidden" id="w_signature" name="w_signature" required>

                        <!-- Action buttons -->
                        <div class="uk-margin-top">
                            <button type="button" onclick="clearWSig()">Clear</button>
                        </div>
                    </div>
                </div>

                <div class="uk-booking-footer uk-flex uk-flex-middle uk-flex-center">
                    <div>
                        <div>
                            <div>
                                <a class="uk-button uk-button-primary uk-border-pill" onclick="prevStep(2)">Prev Page</a>
                                <!-- <a class="uk-button uk-button-primary uk-border-pill" href="#">Submit</a> -->
                                <button type="submit" class="uk-button uk-button-primary uk-border-pill">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
    <div id="uk-stop-sticky" class="uk-clearfix"></div>
</section>
<!-- end section -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        let currentStep = 0;
        const steps = document.querySelectorAll(".step");
        const form = document.getElementById("multiStepForm");

        if (steps.length > 0) {
            steps[currentStep].classList.add("active");

            window.nextStep = function(step) {
                // validate only current step fields
                const inputs = steps[currentStep].querySelectorAll("[required]");
                let valid = true;

                for (let input of inputs) {
                    if (!input.checkValidity()) {
                        input.reportValidity(); // native popup
                        input.scrollIntoView({ behavior: "smooth", block: "center" }); 
                        valid = false;
                        break; // stop at the first invalid field
                    }
                }

                if (!valid) return;

                steps[currentStep].classList.remove("active");
                currentStep = step;
                steps[currentStep].classList.add("active");
                window.scrollTo(0, 0);
            };

            window.prevStep = function(step) {
                steps[currentStep].classList.remove("active");
                currentStep = step;
                steps[currentStep].classList.add("active");
                window.scrollTo(0, 0);
            };

            // document
            //     .getElementById("multiStepForm")
            //     .addEventListener("submit", function(event) {
            //         event.preventDefault();
            //         alert("Form submitted!");
            //     });
        }
    });
</script>
<script>
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
</script>
<!-- Add Signature Pad Library -->
<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>

<script>
    // Initialize both signature pads
    const wCanvas = document.getElementById("w_signature_pad");
    const wSigPad = new SignaturePad(wCanvas);

    const canvas = document.getElementById("signature_pad");
    const sigPad = new SignaturePad(canvas);

    // Clear button function for witness signature
    function clearWSig() {
        wSigPad.clear();
        document.getElementById("w_signature").value = "";
    }

    // Clear button function for regular signature
    function clearSig() {
        sigPad.clear();
        document.getElementById("signature").value = "";
    }

    // Before submitting form, validate and save signatures
    document.querySelector("#multiStepForm").addEventListener("submit", function (e) {
        let errorMessages = [];
        
        // Check regular signature (canvas)
        if (sigPad.isEmpty()) {
            errorMessages.push("Please provide your signature");
        } else {
            // Save the canvas signature data
            document.getElementById("signature").value = sigPad.toDataURL();
        }
        
        // Check witness signature (canvas)
        if (wSigPad.isEmpty()) {
            errorMessages.push("Please provide witness signature");
        } else {
            // Save the canvas signature data
            document.getElementById("w_signature").value = wSigPad.toDataURL();
        }
        
        // If there are errors, show them and prevent submission
        if (errorMessages.length > 0) {
            alert(errorMessages.join("\n"));
            e.preventDefault();
            return false;
        }
    });
</script>
@endsection
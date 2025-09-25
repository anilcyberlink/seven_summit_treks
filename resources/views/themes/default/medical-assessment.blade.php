@extends('themes.default.common.master')
@section('content')

<!-- banner -->
<section class="uk-cover-container  uk-position-relative   uk-flex uk-flex-middle  uk-background-norepeat uk-background-cover uk-background-top-center" uk-parallax="bgy: -100; easing: -2;" data-src="{{asset('themes-assets/images/trip/06.jpg')}}" uk-height-viewport="expand: true; min-height: 500;" uk-img>
   <div class="uk-overlay-primary  uk-position-cover "></div>
    <div class="uk-width-1-1 uk-position-z-index uk-margin-large-top">
        <div class="uk-width-1-1 uk-position-relative" style="z-index: 99;">
            <div class="uk-container uk-position-relative" uk-scrollspy="cls: uk-animation-fade;  delay: 500; repeat: false">
                <div class=" uk-margin-medium uk-width-large">
                    <h1 class="theme-font-extra-bold text-white uk-margin-small" uk-scrollspy="cls: uk-animation-slide-top-small;   delay: 400; repeat: false;"><span class="uk-text-bold">Medical Assessment Form</span> </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->
<!-- section -->
<section class="uk-section bg-white">
    <div class=" uk-container">
        <form id="multiStepForm" action="{{ route('medical-assessment-success') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <!-- form 1 start -->
            <div class="uk-booking bg-white uk-border-rounded uk-card uk-card-default  uk-overflow-hidden step">
                <div class="uk-booking-header bg-primary">
                    <div class=" uk-flex uk-flex-middle uk-flex-center uk-grid-small">
                        <div class="">
                            <h1 class="uk-h3 uk-margin-remove text-white uk-text-center  main-title-font">
                                Medical Assessment Form
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="uk-booking-body">
                    <p class="uk-text-justify">Participants of any Seven Summit Treks Pvt. Ltd.’s expeditions are required to have a certified medical practitioner fill out this form. <br>
                        Note that this examination must be completed <b><u>WITHIN 1 MONTH</u></b> of the expedition start date.
                    </p>

                    <p class="uk-text-justify">
                        <b>Dear Participant,</b> <br><br>
                        Mountain adventures demand significant physical endurance and resilience. To ensure your
                        safety and well-being, Seven Summit Treks requires all participants to undergo a medical
                        assessment confirming their fitness for the activities involved. While certain medical
                        conditions, including chronic illnesses, do not automatically disqualify you from joining our
                        expeditions, full disclosure of your health status is essential. Please provide accurate and
                        detailed information so that both Seven Summit Treks and your healthcare provider can
                        assess any potential risks and offer guidance on safe participation. <br><br>
                        If your physician determines that you are not fit for the expedition or advises against your
                        participation due to health risks, your eligibility for the program may be subject to
                        modification or, in some cases, denial. <br><br>
                        We understand that the information provided in this form is personal and confidential. Rest
                        assured, it will be handled with the utmost discretion and used solely for assessing your
                        ability to participate safely. Your medical details will assist our team and guides in offering
                        appropriate support should you require medical assistance during the expedition. <br><br>
                        If you have any questions or concerns, please feel free to reach out to us. Kindly ensure that
                        the completed medical assessment form is submitted to <b>info@sevensummittreks.com</b> no
                        later than <b>1 month</b> before your scheduled departure date. <br><br>
                        We look forward to share this adventure with you!
                    </p>
                    <div class="bg-light uk-padding-small uk-text-center">
                        <h4 class="uk-margin-remove uk-text-bold">Information for the Medical Examiner</h4>
                    </div>
                    <p class="uk-text-justify">Seven Summit Treks Pvt. Ltd. leads expeditions which vary in length from 14 to 65
                        days. These programs are located in remote areas where air evacuation is almost impossible
                        because of the low concentration of air. Likewise, modern medical facilities are not readily
                        available because the places are in one of the most remote places in Nepal. Weather
                        conditions can be extreme with temperatures as low as (-36 OC) -33 OF in the winters and
                        winds up to and above 175 mph. Prolonged storms, high winds, intense sunlight, and sudden
                        immersion in cold water are possible. The environment includes cliffs, large crevassed
                        glaciers, loose rock, talus slopes, and river crossings. Depending on the type of expedition,
                        the applicant will be wearing crampons on exposed and uneven snow slopes, and at altitudes
                        up to 29,000 feet. Their bag pack weight could alone weigh up to 90 pounds at certain times.during the expedition. The applicant will be living and sleeping outdoors in tents and willundertake long and strenuous days. Each participant is expected to be able to take care of
                        themselves. Prior physical conditioning and acclimatization and an enthusiastic mental
                        attitude are a necessity. Participants find Seven Summit Treks Pvt. Ltd. programs to be a
                        rewarding, but equally strenuous experience both physically and mentally.
                    </p>
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
                <div class="uk-booking-header bg-primary">
                    <div class=" uk-flex uk-flex-middle uk-flex-center uk-grid-small">
                        <div class="">
                            <h1 class="uk-h3 uk-margin-remove text-white uk-text-center  main-title-font">
                                Note to Medical Examiner & Expedition Participant
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="uk-booking-body">
                    <p class="uk-text-justify">If the Seven Summit Treks Pvt. Ltd.’s expedition participant is scheduled for a high-altitude
                        expedition and is allergic to sulfa drugs, it is highly recommended to administer a trial dosage
                        of Diamox before the expedition while under the supervision of a physician. If the participant
                        is over 40 or has a history of heart disease, we recommend a stress echocardiogram.
                    </p>

                    <p class="uk-text-justify">
                        <b>The individual wishes to join a program with the following physical demands:</b>
                    </p>

                    <ol>
                        <li class="uk-margin-small-bottom uk-text-justify">Mountaineering on mixed terrain which may include slopes of loose rock, steep
                            snowfields in various stages of metamorphism, roped glacier travel, ice and rock
                            climbing. Although tedious snowshoeing or skiing are not essential, cramponing while
                            carrying a backpack weighing 60-90 pounds for up to 8 hours per day and camping in a
                            small tent will be highly challenging and demanding. A full spectrum of weather is to be
                            expected.
                        </li>
                        <li class="uk-margin-small-bottom uk-text-justify">Climbing Mt. Everest (29,032 feet – 8848.86 m.), Mt. Amadablam (22,349 feet –6812
                            m.), Mt. Manaslu (26,781 feet – 8163 m.), Mt. Lhotse (27,940 feet – 8516 m.), or other
                            similar mountains will be extremely stressful mentally and physically. Severe weather
                            conditions will be encountered, temperatures can drop to –36 degrees Fahrenheit and
                            winds can blow up to and beyond 175 mph. All group members must be able to
                            participate in activities during these conditions. This expedition can last up to 45 days and
                            can involve prolonged confinement in cramped tents and/or snow caves. Participants will
                            be carrying 60 - 90 pound backpacks on steep snow and ice slopes at high altitude for
                            more than 8 hours per day. Participants must have strength and endurance to work hard
                            every day of the expedition. Climbers on Mt. Everest commonly have Oxygen saturations
                            (SPO2) in the low <u>80’s at 14,000’</u> camp and into the mid <u>70’s at 17,200’</u> camp (high
                            camp).
                        </li>
                        <li class="uk-margin-small-bottom uk-text-justify">
                            Sometimes, no matter how worse conditions get, it is vital that we keep moving because
                            one might be in the middle of nowhere, or at a place which is perilous to stay on. Physical
                            abilities are important, but it should be accompanied by a sound, unyielding mentality to
                            go on, even in the severest of circumstances.
                        </li>
                    </ol>

                </div>
                <div class="uk-booking-footer uk-flex uk-flex-middle uk-flex-center">
                    <div class="uk-flex uk-flex-middle uk-flex-between">
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
                <div class="uk-booking-header bg-primary">
                    <div class=" uk-flex uk-flex-middle uk-flex-center uk-grid-small">
                        <div class="">
                            <h1 class="uk-h3 uk-margin-remove text-white  main-title-font">
                                TO BE FILLED BY THE PARTICIPANT
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="uk-booking-body">
                    <div class="uk-text-small uk-margin-bottom">
                        <i class="uk-margin-bottom"><span class="text-red">*</span> All Fields Required</i>
                    </div>

                    <div class="uk-grid-medium" uk-grid>
                        <!-- Full Name -->
                        <div class="uk-width-1-2@m uk-width-1-3@l">
                            <label class="uk-margin-small uk-display-block" for="fullname">Full Name<span class="text-red">*</span></label>
                            <input class="uk-input" type="text" id="fullname" name="fullname"
                                value="{{ old('fullname') }}" required>
                        </div>

                        <!-- Date of Birth -->
                        <div class="uk-width-1-2@m uk-width-1-3@l">
                            <label class="uk-margin-small uk-display-block" for="bdate">Date of Birth<span class="text-red">*</span></label>
                            <input class="uk-input" type="date" id="bdate" name="bdate"
                                value="{{ old('bdate') }}" required>
                        </div>

                        <!-- Address -->
                        <div class="uk-width-1-2@m uk-width-1-3@l">
                            <label class="uk-margin-small uk-display-block" for="address">Address<span class="text-red">*</span></label>
                            <input class="uk-input" type="text" id="address" name="address"
                                value="{{ old('address') }}" required>
                        </div>

                        <!-- Phone -->
                        <div class="uk-width-1-2@m">
                            <label class="uk-margin-small uk-display-block" for="phone">Contact (Cell / Telephone)<span class="text-red">*</span></label>
                            <input class="uk-input" type="text" id="phone" name="phone"
                                value="{{ old('phone') }}" required>
                            <label class="uk-margin-small uk-display-block" for="email">Email <span class="text-red">*</span></label>
                            <input class="uk-input" type="email" id="email" name="email"
                                value="{{ old('email') }}" required>
                        </div>

                        <!-- Gender -->
                        <div class="uk-width-1-2@m">
                            <legend class="uk-margin-small uk-display-block">Gender <span class="text-red">*</span></legend>
                            <ul class="uk-grid uk-grid-small" uk-grid>
                                <li>
                                    <label>
                                        <input type="radio" name="gender" value="male" class="uk-radio uk-margin-small-right"
                                            {{ old('gender') == 'male' ? 'checked' : '' }} required> Male
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="radio" name="gender" value="female" class="uk-radio uk-margin-small-right"
                                            {{ old('gender') == 'female' ? 'checked' : '' }}> Female
                                    </label>
                                </li>
                                <li class="uk-flex">
                                    <label>
                                        <input type="radio" name="gender" value="other" class="uk-radio uk-margin-small-right"
                                            {{ old('gender') == 'other' ? 'checked' : '' }}> Other (Specify)
                                    </label>
                                    <input type="text" id="other-text" name="other_gender"
                                        class="uk-input uk-margin-small-top"
                                        placeholder="Please specify"
                                        value="{{ old('other_gender') }}"
                                        hidden>
                                </li>
                            </ul>
                        </div>

                        <!-- Exercise -->
                        <div class="uk-width-1-1@m uk-width-1-3@l">
                            <legend class="uk-margin-small uk-display-block">Do you participate in any regular physical exercise?<span class="text-red">*</span></legend>
                            <ul class="uk-grid uk-grid-small" uk-grid>
                                <li>
                                    <label><input type="radio" name="exercise" value="1" class="uk-radio uk-margin-small-right"
                                                {{ old('exercise') == '1' ? 'checked' : '' }} required> Yes</label>
                                </li>
                                <li>
                                    <label><input type="radio" name="exercise" value="0" class="uk-radio uk-margin-small-right"
                                                {{ old('exercise') == '0' ? 'checked' : '' }}> No</label>
                                </li>
                            </ul>
                        </div>
                        <div class="uk-width-1-1@m uk-width-2-3@l">
                            <label class="uk-margin-small uk-display-block" for="frequency">If yes, please elaborate</label>
                            <input class="uk-input" type="text" id="frequency" name="frequency"
                                value="{{ old('frequency') }}" hidden>
                        </div>

                        <!-- Smoke & Alcohol -->
                        <div class="uk-width-1-1@m uk-width-1-3@l">
                            <div class="uk-grid uk-grid-collapse">
                                <div class="uk-width-1-2@s">
                                    <legend class="uk-margin-small uk-display-block">Do you smoke?<span class="text-red">*</span></legend>
                                    <ul class="uk-grid uk-grid-small" uk-grid>
                                        <li><label><input type="radio" name="smoke" value="1" class="uk-radio uk-margin-small-right"
                                                        {{ old('smoke') == '1' ? 'checked' : '' }} required> Yes</label></li>
                                        <li><label><input type="radio" name="smoke" value="0" class="uk-radio uk-margin-small-right"
                                                        {{ old('smoke') == '0' ? 'checked' : '' }}> No</label></li>
                                    </ul>
                                </div>
                                <div class="uk-width-1-2@s">
                                    <legend class="uk-margin-small uk-display-block">Do you drink alcohol?<span class="text-red">*</span></legend>
                                    <ul class="uk-grid uk-grid-small" uk-grid>
                                        <li><label><input type="radio" name="alcohol" value="1" class="uk-radio uk-margin-small-right"
                                                        {{ old('alcohol') == '1' ? 'checked' : '' }} required> Yes</label></li>
                                        <li><label><input type="radio" name="alcohol" value="0" class="uk-radio uk-margin-small-right"
                                                        {{ old('alcohol') == '0' ? 'checked' : '' }}> No</label></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1@m uk-width-2-3@l">
                            <label class="uk-margin-small uk-display-block" for="drink">If yes, what kind and how many drinks per week?</label>
                            <input class="uk-input" type="text" id="drink" name="drink"
                                value="{{ old('drink') }}" hidden>
                        </div>

                        <!-- Medication -->
                        <div class="uk-width-1-1@m uk-width-1-3@l">
                            <legend class="uk-margin-small uk-display-block">Are you on any sort of medication?<span class="text-red">*</span></legend>
                            <ul class="uk-grid uk-grid-small" uk-grid>
                                <li><label><input type="radio" name="medication" value="1" class="uk-radio uk-margin-small-right"
                                                {{ old('medication') == '1' ? 'checked' : '' }} required> Yes</label></li>
                                <li><label><input type="radio" name="medication" value="0" class="uk-radio uk-margin-small-right"
                                                {{ old('medication') == '0' ? 'checked' : '' }}> No</label></li>
                            </ul>
                        </div>
                        <div class="uk-width-1-1@m uk-width-2-3@l">
                            <label class="uk-margin-small uk-display-block" for="dose">If yes, please specify the kind and dose</label>
                            <input class="uk-input" type="text" id="dose" name="dose"
                                value="{{ old('dose') }}" hidden>
                        </div>

                        <!-- Allergy -->
                        <div class="uk-width-1-1@m uk-width-1-3@l">
                            <legend class="uk-margin-small uk-display-block">Do you have any allergy?<span class="text-red">*</span></legend>
                            <ul class="uk-grid uk-grid-small" uk-grid>
                                <li><label><input type="radio" name="allergy" value="1" class="uk-radio uk-margin-small-right"
                                                {{ old('allergy') == '1' ? 'checked' : '' }} required> Yes</label></li>
                                <li><label><input type="radio" name="allergy" value="0" class="uk-radio uk-margin-small-right"
                                                {{ old('allergy') == '0' ? 'checked' : '' }}> No</label></li>
                            </ul>
                        </div>
                        <div class="uk-width-1-1@m uk-width-2-3@l">
                            <label class="uk-margin-small uk-display-block" for="kind">If yes, please specify the kind and intensity</label>
                            <input class="uk-input" type="text" id="kind" name="kind"
                                value="{{ old('kind') }}" hidden>
                        </div>

                        <!-- Reaction -->
                        <div class="uk-width-1-1@m">
                            <legend class="uk-margin-small uk-display-block">Have you ever had any reaction to a medicine, food or beverage?<span class="text-red">*</span></legend>
                            <ul class="uk-grid uk-grid-small" uk-grid>
                                <li><label><input type="radio" name="reaction" value="1" class="uk-radio uk-margin-small-right"
                                                {{ old('reaction') == '1' ? 'checked' : '' }} required> Yes</label></li>
                                <li><label><input type="radio" name="reaction" value="0" class="uk-radio uk-margin-small-right"
                                                {{ old('reaction') == '0' ? 'checked' : '' }}> No</label></li>
                            </ul>
                        </div>
                        <div class="uk-width-1-1@m">
                            <label class="uk-margin-small uk-display-block" for="reaction_detail">If yes, please specify</label>
                            <input class="uk-input" type="text" id="reaction_detail" name="reaction_detail"
                                value="{{ old('reaction_detail') }}" hidden>
                        </div>
                    </div>
                </div>
                <div class="uk-booking-footer uk-flex uk-flex-middle uk-flex-center">
                    <div>
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
                            <h1 class="uk-h3 uk-margin-remove text-white  main-title-font">
                                Please choose yes or no if you had or you have any of the following
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="uk-booking-body">
                    @include('themes.default.common.choice')
                </div>
                <div class="uk-booking-footer uk-flex uk-flex-middle uk-flex-center">
                    <div>
                        <div>
                            <div>
                                <a class="uk-button uk-button-primary uk-border-pill" onclick="prevStep(2)">Prev Page</a>
                                <a class="uk-button uk-button-primary uk-border-pill" onclick="nextStep(4)">Next Page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- form 5 start -->
            <div class="uk-booking bg-white uk-border-rounded uk-card uk-card-default  uk-overflow-hidden step">
                <div class="uk-booking-body">
                    <div>
                        <div class="uk-width-1-1">
                            <label class="uk-margin-small uk-display-block" for="illness">Any other illness or injury or any other medical conditions?<span class="text-red">*</span>
                            </label>
                            <input class="uk-input" type="text" id="illness" name="illness" placeholder="" value="{{ old('illness') }}" required>
                        </div>

                        <p class="uk-text-justify">I certify that the above information is true and complete to the best of my knowledge and I hereby authorize</p>

                        <div class="uk-flex ">
                            <label class="uk-margin-small uk-display-block" for="doctor">Dr.<span class="text-red">*</span>
                            </label>
                            <input class="uk-input" type="text" id="doctor" name="doctor" placeholder="" style="width:265px; margin-left:10px;" value="{{ old('doctor') }}" required>
                        </div>

                        <p class="uk-text-justify">to give medical opinion as to my fitness, or inability to climb/trek. I also authorize him/her to obtain or supply medical information regarding me to other doctors as may be necessary for medical purposes in my personal interest.</p>

                        <div class="uk-flex uk-margin-bottom">
                            <label class="uk-margin-right uk-display-block" for="sign">Sign:<span class="text-red">*</span>
                            </label>
                            <!-- Canvas for drawing signature -->
                            <canvas id="signature_pad" width="300" height="200" style="border:1px solid #000; border-radius:8px;"></canvas>

                            <!-- Hidden input to hold signature image data -->
                            <input type="hidden" id="signature" name="signature" required>

                            <!-- Action buttons -->
                            <div class="uk-margin-top">
                                <button type="button" onclick="clearWSig()">Clear</button>
                            </div>
                        </div>

                        <div class="uk-flex ">
                            <label class="uk-margin-small uk-display-block" for="signature_date">Date:<span class="text-red">*</span>
                            </label>
                            <input class="uk-input" type="date" id="signature_date" name="signature_date" placeholder="" style="width:265px; margin-left:10px;" value="{{ old('signature_date') }}" required>
                        </div>
                    </div>
                </div>
                <div class="uk-booking-footer uk-flex uk-flex-middle uk-flex-center">
                    <div>
                        <div>
                            <div>
                                <a class="uk-button uk-button-primary uk-border-pill" onclick="prevStep(3)">Prev Page</a>
                                <a class="uk-button uk-button-primary uk-border-pill" onclick="nextStep(5)">Next Page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- form 6 start -->
            <div class="uk-booking bg-white uk-border-rounded uk-card uk-card-default  uk-overflow-hidden step">
                <div class="uk-booking-header bg-primary">
                    <div class=" uk-flex uk-flex-middle uk-flex-center uk-grid-small">
                        <div class="">
                            <h1 class="uk-h3 uk-margin-remove text-white uk-text-center  main-title-font">
                                TO BE FILLED BY A REGISTERED MEDICAL PRACTITIONER
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="uk-booking-body">
                    <div>
                        <div class="uk-flex uk-flex-middle">
                            <label class="uk-margin-remove uk-display-block " for="practitioner">Dear Dr.<span class="text-red">*</span>
                            </label>
                            <input class="uk-input" type="text" id="practitioner" name="practitioner" placeholder="" style="width:265px; margin-left:10px;" value="{{ old('practitioner') }}" required>
                        </div>
                        <p class="uk-text-justify">The individual named in this document has applied for an expedition with <b>Seven Summit
                                Treks Pvt. Ltd.,</b> which involves physically demanding activities such as trekking and
                            mountaineering. These pursuits require sustained physical exertion, often at high altitudes
                            and under challenging environmental conditions. Participants must be prepared to carry a
                            loaded backpack for extended hours each day while navigating rugged and unpredictable
                            terrain. Given these strenuous demands, it is crucial to assess the participant's medical fitness
                            before their departure.<br><br>
                            As a licensed medical professional, we request that you conduct a comprehensive evaluation
                            of the participant's health based on their responses to the preceding questions. Your
                            assessment should determine whether the individual is physically and medically capable of
                            undertaking this expedition and identify any potential health risks that may require special
                            consideration. Any concerns, limitations, or medical conditions that could impact their safety
                            or the safety of others should be clearly outlined in your report.<br><br>
                            Please be advised that high-altitude trekking and mountaineering involve inherent risks,
                            including but not limited to: exposure to extreme temperatures, hypoxia, acute mountain
                            sickness, high-altitude cerebral and pulmonary edema, hypothermia, frostbite, dehydration,
                            and exhaustion. Additionally, participants may encounter hazardous terrain, risks of slips and
                            falls, crevasses, ice and rockfall, avalanches, and unpredictable weather patterns. Other risks
                            include limited access to immediate medical care, potential exposure to infectious diseases,
                            insect bites, allergic reactions, and interactions with wildlife. Travel to remote locations may
                            also present logistical challenges in terms of food, water, shelter, communication, and
                            emergency evacuation. Furthermore, expeditions may traverse politically sensitive or
                            unstable regions, where risks associated with civil unrest or security concerns must be
                            acknowledged.<br><br>
                            Your medical evaluation is essential in ensuring that the participant is adequately prepared
                            for the physical and environmental demands of this expedition. We appreciate your
                            professional judgment in helping us maintain the highest safety standards for all participants.
                        </p>
                        <ol>
                            <li>The participant,
                                <input class="uk-input w-220" type="text" id="participant" name="participant" placeholder="" value="{{ old('participant') }}" required><span class="text-red">*</span>,
                                age <input class="uk-input w-220" type="number" id="age" name="age" placeholder="" value="{{ old('age') }}" required><span class="text-red">*</span>,
                                has been examined on <input class="uk-input w-220" type="date" id="examine_date" name="examine_date" placeholder="" value="{{ old('examine_date') }}" required><span class="text-red">*</span>.
                            </li>
                            <li>
                                The participant's general biometrics were recorded as follows: <br>
                                <table class="uk-table uk-table-small uk-table-divider">
                                    <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Biometrics</th>
                                            <th>Readings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Height (cm / ft.in)<span class="text-red">*</span></td>
                                            <td><input class="uk-input uk-width-1-1" type="text" id="height" name="height" placeholder="" value="{{ old('height') }}" required></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Weight (lbs / kg)<span class="text-red">*</span></td>
                                            <td><input class="uk-input uk-width-1-1" type="text" id="weight" name="weight" placeholder="" value="{{ old('weight') }}" required></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Blood Pressure (SBP / DBP)<span class="text-red">*</span></td>
                                            <td><input class="uk-input uk-width-1-1" type="text" id="pressure" name="pressure" placeholder="" value="{{ old('pressure') }}" required></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Pulse (bpm)<span class="text-red">*</span></td>
                                            <td><input class="uk-input uk-width-1-1" type="text" id="pulse" name="pulse" placeholder="" value="{{ old('pulse') }}" required></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Respiratory Rate (per min)<span class="text-red">*</span></td>
                                            <td><input class="uk-input uk-width-1-1" type="text" id="respiratory" name="respiratory" placeholder="" value="{{ old('respiratory') }}" required></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </li>
                            <li>
                                <div class="uk-width-1-1">
                                    <label class="uk-margin-small uk-display-block" for="physical">Physical State<span class="text-red">*</span>
                                    </label>
                                    <input class="uk-input" type="text" id="physical" name="physical" placeholder="" value="{{ old('physical') }}" required>
                                </div>
                            </li>
                            <li class="uk-margin-small-top">
                                <div class="uk-width-1-1">
                                    <label class="uk-margin-small uk-display-block" for="mental">Mental State<span class="text-red">*</span>
                                    </label>
                                    <input class="uk-input" type="text" id="mental" name="mental" placeholder="" value="{{ old('mental') }}" required>
                                </div>
                            </li>
                            <li class="uk-margin-small-top">
                                <div class="uk-width-1-1">
                                    <legend class="uk-margin-small uk-display-block">On the basis of the information on this form, your history with the individual, and your current examination, can this person participate in the selected program?<span class="text-red">*</span></legend>
                                    <ul class="uk-grid uk-grid-small " uk-grid>
                                        <li>
                                            <label>
                                                <input type="radio" id="current_yes" value="1" name="current" class=" uk-radio uk-margin-small-right" {{ old('current') == '1' ? 'checked' : '' }} required>Yes 
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" id="current_no" value="0" name="current" class=" uk-radio uk-margin-small-right" {{ old('current') == '0' ? 'checked' : '' }}>No </label>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="uk-margin-small-top">
                                <div class="uk-width-1-1">
                                    <label class="uk-margin-small uk-display-block" for="impression">General Impressions and Comments:<span class="text-red">*</span>
                                    </label>
                                    <textarea class="uk-width-1-1 " id="impression" name="impression" rows="4" placeholder="" required>{{ old('impression') }}</textarea>
                                </div>
                            </li>
                        </ol>
                        <div class="uk-grid">
                            <div class="uk-width-1-2@s uk-margin-small-bottom">
                                <label class="uk-margin-small uk-display-block" for="examiner">Examiner's Name<span class="text-red">*</span>
                                </label>
                                <input class="uk-input" type="text" id="examiner" name="examiner" placeholder="" value="{{ old('examiner') }}" required>
                            </div>
                            <div class="uk-width-1-2@s uk-margin-small-bottom">
                                <label class="uk-margin-small uk-display-block" for="location">Address<span class="text-red">*</span></label>
                                <input class="uk-input  " type="text" placeholder="" id="location" name="location" value="{{ old('location') }}" required>
                            </div>

                            <div class="uk-width-1-1@s uk-margin-small-bottom">
                                <label class="uk-margin-small uk-display-block" for="title">Title :<span class="text-red">*</span>
                                </label>
                                <input class="uk-input" type="text" id="title" name="title" placeholder="" value="{{ old('title') }}" required>
                            </div>

                            <div class="uk-width-1-2@s uk-margin-small-bottom">
                                <label class="uk-margin-small uk-display-block" for="contact">Phone<span class="text-red">*</span>
                                </label>
                                <input class="uk-input" type="tel" id="contact" name="contact" placeholder="" value="{{ old('contact') }}" required>
                            </div>

                            <div class="uk-width-1-2@s uk-margin-small-bottom">
                                <label class="uk-margin-small uk-display-block" for="doc_email">Email<span class="text-red">*</span>
                                </label>
                                <input class="uk-input  " type="email" placeholder="" id="doc_email" name="doc_email" value="{{ old('doc_email') }}" required>
                            </div>
                        </div>
                        <div class="uk-flex uk-margin-bottom uk-margin-top">
                            <label class="uk-margin-right  uk-display-block" for="doctor_signature">Sign:<span class="text-red">*</span>
                            </label>
                            <!-- Canvas for drawing signature -->
                            <canvas id="doctor_signature_pad" width="300" height="200" style="border:1px solid #000; border-radius:8px;"></canvas>

                            <!-- Hidden input to hold signature image data -->
                            <input type="hidden" id="doctor_signature" name="doctor_signature" required>

                            <!-- Action buttons -->
                            <div class="uk-margin-top">
                                <button type="button" onclick="clearWSig()">Clear</button>
                            </div>
                        </div>

                        <div class="uk-flex ">
                            <label class="uk-margin-small uk-display-block" for="doc_sign_date">Date:<span class="text-red">*</span>
                            </label>
                            <input class="uk-input" type="date" id="doc_sign_date" name="doc_sign_date" placeholder="" style="width:265px; margin-left:10px;" value="{{ old('doc_sign_date') }}" required>
                        </div>
                    </div>
                </div>
                <div class="uk-booking-footer uk-flex uk-flex-middle uk-flex-center">
                    <div>
                        <div>
                            <div>
                                <a class="uk-button uk-button-primary uk-border-pill" onclick="prevStep(4)">Prev Page</a>
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
    document.addEventListener("DOMContentLoaded", function () {
        let currentStep = 0;
        const steps = document.querySelectorAll(".step");

        if (steps.length > 0) {
            steps[currentStep].classList.add("active");

            window.nextStep = function (step) {
                const inputs = steps[currentStep].querySelectorAll("[required]");
                let valid = true;

                for (let input of inputs) {
                    // skip hidden fields (like conditional text inputs)
                    if (input.offsetParent === null) continue;

                    if (!input.checkValidity()) {
                        input.reportValidity(); // native required message
                        input.scrollIntoView({ behavior: "smooth", block: "center" });
                        valid = false;
                        break; // stop at first invalid
                    }
                }

                if (!valid) return; // stop navigation if invalid

                steps[currentStep].classList.remove("active");
                currentStep = step;
                steps[currentStep].classList.add("active");
                window.scrollTo(0, 0);
            };
            // Previous Step
            window.prevStep = function (step) {
                steps[currentStep].classList.remove("active");
                currentStep = step;
                steps[currentStep].classList.add("active");
                window.scrollTo(0, 0);
            };
        }

        function toggleRequired(radioName, targetId) {
            const radios = document.querySelectorAll(`input[name="${radioName}"]`);
            const target = document.getElementById(targetId);

            function update() {
                const selected = document.querySelector(`input[name="${radioName}"]:checked`);
                if (!selected) return;

                // Gender case (other)
                if (radioName === "gender" && selected.value === "other") {
                    target.hidden = false;
                    target.setAttribute("required", "required");
                }
                // Yes/1 cases
                else if (selected.value === "1" || selected.value.includes("yes")) {
                    target.hidden = false;
                    target.setAttribute("required", "required");
                }
                // Hide otherwise
                else {
                    target.hidden = true;
                    target.removeAttribute("required");

                    if (radioName !== "gender") {
                        target.value = "";
                    }
                }
            }

            radios.forEach(r => r.addEventListener("change", update));
            update(); // run on page load
        }
        toggleRequired("gender", "other-text");
        toggleRequired("exercise", "frequency");
        toggleRequired("alcohol", "drink");
        toggleRequired("medication", "dose");
        toggleRequired("allergy", "kind");
        toggleRequired("reaction", "reaction_detail");
    });
</script>

<!-- Add Signature Pad Library -->
<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
<script>
    // Initialize both signature pads
    const wCanvas = document.getElementById("doctor_signature_pad");
    const wSigPad = new SignaturePad(wCanvas);

    const canvas = document.getElementById("signature_pad");
    const sigPad = new SignaturePad(canvas);

    // Clear button function for witness signature
    function clearWSig() {
        wSigPad.clear();
        document.getElementById("doctor_signature").value = "";
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
            document.getElementById("doctor_signature").value = wSigPad.toDataURL();
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
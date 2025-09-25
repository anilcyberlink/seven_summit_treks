<div class="uk-grid-medium" uk-grid>
    <!--  -->
    <div class="uk-width-1-2@m">
        <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Prescription glasses</legend>
        <ul class="uk-grid uk-grid-small " uk-grid>
            <li>
                <label>
                    <input type="radio" id="prescription_yes" name="prescription" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('prescription') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="prescription_no" name="prescription" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('prescription') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Contact lenses</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="contact_yes" name="contact_lenses" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('contact_lenses') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="contact_no" name="contact_lenses" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('contact_lenses') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Eye or visual problems</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="problem_yes" name="eye_problem" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('eye_problem') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="problem_no" name="eye_problem" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('eye_problem') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Hay fever</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="hayfever_yes" name="hay_fever" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('hay_fever') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="hayfever_no" name="hay_fever" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('hay_fever') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Sinusitis</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="sinusitis_yes" name="sinusitis" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('sinusitis') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="sinusitis_no" name="sinusitis" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('sinusitis') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Other nose or throat problems</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="nose_throat_yes" name="nose_throat" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('nose_throat') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="nose_throat_no" name="nose_throat" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('nose_throat') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Severe or frequent headaches</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="headache_yes" name="headache" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('headache') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="headache_no" name="headache" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('headache') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Migraine</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="migraine_yes" name="migraine" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('migraine') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="migraine_no" name="migraine" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('migraine') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Fainting or blackouts</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="fainting_yes" name="fainting" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('fainting') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="fainting_no" name="fainting" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('fainting') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Convulsions, fits or epilepsy</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="convulsions_yes" name="convulsions" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('convulsions') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="convulsions_no" name="convulsions" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('convulsions') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Concussion or head injury</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="concussion_yes" name="concussion" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('concussion') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="concussion_no" name="concussion" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('concussion') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Sleep walking</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="sleepwalking_yes" name="sleepwalking" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('sleepwalking') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="sleepwalking_no" name="sleepwalking" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('sleepwalking') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Severe depression</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="depression_yes" name="depression" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('depression') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="depression_no" name="depression" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('depression') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Mental illness</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="mental_illness_yes" name="mental_illness" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('mental_illness') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="mental_illness_no" name="mental_illness" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('mental_illness') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Coughing up phlegm or blood</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="coughing_blood_yes" name="coughing_blood" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('coughing_blood') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="coughing_blood_no" name="coughing_blood" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('coughing_blood') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Chronic or persistent cough</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="chronic_cough_yes" name="chronic_cough" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('chronic_cough') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="chronic_cough_no" name="chronic_cough" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('chronic_cough') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">TB (Tuberculosis)</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="tb_yes" name="tb" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('tb') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="tb_no" name="tb" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('tb') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Pneumothorax ("Collapsed lung")</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="pneumothorax_yes" name="pneumothorax" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('pneumothorax') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="pneumothorax_no" name="pneumothorax" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('pneumothorax') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Frequent chest colds</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="chest_colds_yes" name="chest_colds" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('chest_colds') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="chest_colds_no" name="chest_colds" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('chest_colds') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Asthma or wheezing</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="asthma_yes" name="asthma" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('asthma') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="asthma_no" name="asthma" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('asthma') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Use a puffer</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="puffer_yes" name="puffer" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('puffer') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="puffer_no" name="puffer" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('puffer') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Other chest complaints</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="other_chest_yes" name="other_chest" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('other_chest') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="other_chest_no" name="other_chest" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('other_chest') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Operation on chest, heart or lungs</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="operation_yes" name="operation" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('operation') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="operation_no" name="operation" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('operation') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Indigestion, peptic ulcer or acid reflux</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="indigestion_yes" name="indigestion" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('indigestion') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="indigestion_no" name="indigestion" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('indigestion') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Vomiting blood or passing red or black motions</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="vomiting_blood_yes" name="vomiting_blood" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('vomiting_blood') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="vomiting_blood_no" name="vomiting_blood" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('vomiting_blood') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Recurrent vomiting or diarrhea</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="recurrent_vomiting_yes" name="recurrent_vomiting" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('recurrent_vomiting') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="recurrent_vomiting_no" name="recurrent_vomiting" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('recurrent_vomiting') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Jaundice, hepatitis, or liver disease</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="jaundice_yes" name="jaundice" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('jaundice') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="jaundice_no" name="jaundice" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('jaundice') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Malaria or other tropical disease</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="malaria_yes" name="malaria" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('malaria') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="malaria_no" name="malaria" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('malaria') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
        <legend class="uk-margin-small uk-display-block">Severe loss of weight</legend>
        <ul class="uk-grid uk-grid-small" uk-grid>
            <li>
                <label>
                    <input type="radio" id="weight_loss_yes" name="weight_loss" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('weight_loss') == '1' ? 'checked' : ''); ?>>
                    Yes
                </label>
            </li>
            <li>
                <label>
                    <input type="radio" id="weight_loss_no" name="weight_loss" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('weight_loss') == '0' ? 'checked' : ''); ?>>
                    No
                </label>
            </li>
        </ul>
    </div>

    </div>
    <!--  -->
    <div class="uk-width-1-2@m">

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Acute Mountain Sickness (AMS)</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="ams_yes" name="ams" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('ams') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="ams_no" name="ams" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('ams') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">High Altitude Pulmonary Edema (HAPE)</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="hape_yes" name="hape" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('hape') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="hape_no" name="hape" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('hape') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">High Altitude Cerebral Edema (HACE)</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="hace_yes" name="hace" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('hace') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="hace_no" name="hace" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('hace') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Frostbite</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="frostbite_yes" name="frostbite" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('frostbite') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="frostbite_no" name="frostbite" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('frostbite') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Heart disease</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="heart_disease_yes" name="heart_disease" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('heart_disease') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="heart_disease_no" name="heart_disease" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('heart_disease') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Abnormal blood test</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="abnormal_blood_test_yes" name="abnormal_blood_test" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('abnormal_blood_test') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="abnormal_blood_test_no" name="abnormal_blood_test" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('abnormal_blood_test') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">High blood pressure</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="high_blood_pressure_yes" name="high_blood_pressure" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('high_blood_pressure') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="high_blood_pressure_no" name="high_blood_pressure" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('high_blood_pressure') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Rheumatic fever</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="rheumatic_fever_yes" name="rheumatic_fever" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('rheumatic_fever') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="rheumatic_fever_no" name="rheumatic_fever" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('rheumatic_fever') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Discomfort in your chest with exertion</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="chest_discomfort_yes" name="chest_discomfort" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('chest_discomfort') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="chest_discomfort_no" name="chest_discomfort" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('chest_discomfort') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Extreme shortness of breath on exertion</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="shortness_breath_yes" name="shortness_breath" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('shortness_breath') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="shortness_breath_no" name="shortness_breath" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('shortness_breath') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Bronchitis or pneumonia</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="bronchitis_pneumonia_yes" name="bronchitis_pneumonia" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('bronchitis_pneumonia') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="bronchitis_pneumonia_no" name="bronchitis_pneumonia" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('bronchitis_pneumonia') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Pleurisy or severe chest pain</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="pleurisy_yes" name="pleurisy" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('pleurisy') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="pleurisy_no" name="pleurisy" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('pleurisy') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Hernia or rupture</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="hernia_yes" name="hernia" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('hernia') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="hernia_no" name="hernia" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('hernia') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Major joint or back injury / Limitation of movement</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="joint_injury_yes" name="joint_injury" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('joint_injury') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="joint_injury_no" name="joint_injury" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('joint_injury') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Fractures (broken bones)</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="fractures_yes" name="fractures" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('fractures') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="fractures_no" name="fractures" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('fractures') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Paralysis or muscle weakness</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="paralysis_yes" name="paralysis" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('paralysis') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="paralysis_no" name="paralysis" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('paralysis') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Kidney or bladder disease</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="kidney_bladder_yes" name="kidney_bladder" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('kidney_bladder') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="kidney_bladder_no" name="kidney_bladder" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('kidney_bladder') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Any chronic disease (see note below)</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="chronic_disease_yes" name="chronic_disease" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('chronic_disease') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="chronic_disease_no" name="chronic_disease" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('chronic_disease') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Syphilis</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="syphilis_yes" name="syphilis" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('syphilis') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="syphilis_no" name="syphilis" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('syphilis') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">HIV</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="hiv_yes" name="hiv" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('hiv') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="hiv_no" name="hiv" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('hiv') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>

       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Hepatitis B or C</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="hepatitis_bc_yes" name="hepatitis_bc" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('hepatitis_bc') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="hepatitis_bc_no" name="hepatitis_bc" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('hepatitis_bc') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>
       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Diabetes</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="diabetes_yes" name="diabetes" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('diabetes') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="diabetes_no" name="diabetes" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('diabetes') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>
       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Blood disease or bleeding problem</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="blood_disease_yes" name="blood_disease" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('blood_disease') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="blood_disease_no" name="blood_disease" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('blood_disease') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>
       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Operations</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="operations_yes" name="operations" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('operations') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="operations_no" name="operations" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('operations') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>
       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">In hospital for any reason</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="hospital_yes" name="hospital" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('hospital') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="hospital_no" name="hospital" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('hospital') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>
       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Life insurance rejected</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="life_insurance_rejected_yes" name="life_insurance_rejected" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('life_insurance_rejected') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="life_insurance_rejected_no" name="life_insurance_rejected" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('life_insurance_rejected') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>
       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">A job or license refused on medical grounds</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="job_or_license_refused_yes" name="job_or_license_refused" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('job_or_license_refused') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="job_or_license_refused_no" name="job_or_license_refused" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('job_or_license_refused') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>
       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Unable to work for medical reasons</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="unable_to_work_yes" name="unable_to_work" value="1" class="uk-radio uk-margin-small-right" required <?php echo e(old('unable_to_work') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="unable_to_work_no" name="unable_to_work" value="0" class="uk-radio uk-margin-small-right" required <?php echo e(old('unable_to_work') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>
       <div class="uk-flex uk-flex-between uk-margin-small border-bottom choice-responsive">
            <legend class="uk-margin-small uk-display-block">Females: Are you now pregnant or are you planning to be?</legend>
            <ul class="uk-grid uk-grid-small" uk-grid>
                <li>
                    <label>
                        <input type="radio" id="pregnant_yes" name="pregnant" value="1" class="uk-radio uk-margin-small-right" <?php echo e(old('pregnant') == '1' ? 'checked' : ''); ?>>
                        Yes
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" id="pregnant_no" name="pregnant" value="0" class="uk-radio uk-margin-small-right" <?php echo e(old('pregnant') == '0' ? 'checked' : ''); ?>>
                        No
                    </label>
                </li>
            </ul>
        </div>
    </div>
</div><?php /**PATH D:\xampp\htdocs\seven_summit\resources\views/themes/default/common/choice.blade.php ENDPATH**/ ?>
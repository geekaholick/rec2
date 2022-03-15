<template>
  <b-card-code title="INFORMED CONSENT FORM ASSESSMENT CHECKLIST">
    <b-card-text>
        <span>Please indicate in the space provided below whether or not the specified assessment point is addressed by your study protocol. 
          To facilitate the evaluation of the assessment point, indicate the page and paragraph where this information can be found or “NA” if not applicable.
        </span>
    </b-card-text>

    <div>
        <!-- USC REC Form No. 23 -->
        <b-form-group label="ASSESSMENT POINTS">
            <b-col md="6">
                <b-form-group
                label="IS IT NECESSARY TO SEEK THE INFORMED CONSENT OF THE PARTICIPANT(S)? "
                label-for="v-question1"
                >
                <b-form-checkbox
                    v-model="selected1"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected1 == 'true'"
                    v-model="informedConsentFormData.question1a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected1 == 'true'"
                    v-model="informedConsentFormData.question1b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Purpose of the study?"
                label-for="v-question2"
                >
                <b-form-checkbox
                    v-model="selected2"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected2 == 'true'"
                    v-model="informedConsentFormData.question2a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected2 == 'true'"
                    v-model="informedConsentFormData.question2b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label=" Institutional affiliation of the researcher(s), research sponsor(s)/research funder(s)?"
                label-for="v-question3"
                >
                <b-form-checkbox
                    v-model="selected3"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected3 == 'true'"
                    v-model="informedConsentFormData.question3a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected3 == 'true'"
                    v-model="informedConsentFormData.question3b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Expected duration of the participation in the study?"
                label-for="v-question4"
                >
                <b-form-checkbox
                    v-model="selected4"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected4 == 'true'"
                    v-model="informedConsentFormData.question4a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected4 == 'true'"
                    v-model="informedConsentFormData.question4b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Procedures to be carried out?"
                label-for="v-question5"
                >
                <b-form-checkbox
                    v-model="selected5"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected5 == 'true'"
                    v-model="informedConsentFormData.question5a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected5 == 'true'"
                    v-model="informedConsentFormData.question5b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Study aspects that are experimental?"
                label-for="v-question6"
                >
                <b-form-checkbox
                    v-model="selected6"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected6 == 'true'"
                    v-model="informedConsentFormData.question6a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected6 == 'true'"
                    v-model="informedConsentFormData.question6b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Discomforts and inconveniences?"
                label-for="v-question7"
                >
                <b-form-checkbox
                    v-model="selected7"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected7 == 'true'"
                    v-model="informedConsentFormData.question7a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected7 == 'true'"
                    v-model="informedConsentFormData.question7b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Risks (including possible discrimination)?"
                label-for="v-question8"
                >
                <b-form-checkbox
                    v-model="selected8"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected8 == 'true'"
                    v-model="informedConsentFormData.question8a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected8 == 'true'"
                    v-model="informedConsentFormData.question8b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Random assignment to the trial use/treatments? (if applicable)"
                label-for="v-question9"
                >
                <b-form-checkbox
                    v-model="selected9"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected9 == 'true'"
                    v-model="informedConsentFormData.question9a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected9 == 'true'"
                    v-model="informedConsentFormData.question9b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Anticipated expenses, if any, to the participant in the course of the study?"
                label-for="v-question10"
                >
                <b-form-checkbox
                    v-model="selected10"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected10 == 'true'"
                    v-model="informedConsentFormData.question10a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected10 == 'true'"
                    v-model="informedConsentFormData.question10b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Recompense/specific benefits to the participants?"
                label-for="v-question11"
                >
                <b-form-checkbox
                    v-model="selected11"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected11 == 'true'"
                    v-model="informedConsentFormData.question11a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected11 == 'true'"
                    v-model="informedConsentFormData.question11b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Benefits to the community/ society/ stakeholders, or contributions to scientific knowledge?"
                label-for="v-question12"
                >
                <b-form-checkbox
                    v-model="selected12"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected12 == 'true'"
                    v-model="informedConsentFormData.question12a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected12 == 'true'"
                    v-model="informedConsentFormData.question12b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Alternative procedures/treatments? (if applicable)"
                label-for="v-question13"
                >
                <b-form-checkbox
                    v-model="selected13"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected13 == 'true'"
                    v-model="informedConsentFormData.question13a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected13 == 'true'"
                    v-model="informedConsentFormData.question13b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Compensation and/or medical treatments in case of injury?"
                label-for="v-question14"
                >
                <b-form-checkbox
                    v-model="selected14"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected14 == 'true'"
                    v-model="informedConsentFormData.question14a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected14 == 'true'"
                    v-model="informedConsentFormData.question14b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label=" Person(s) and contact particulars to contact for further information regarding the study and who to contact in the event of research-related injury?"
                label-for="v-question15"
                >
                <b-form-checkbox
                    v-model="selected15"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected15 == 'true'"
                    v-model="informedConsentFormData.question15a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected15 == 'true'"
                    v-model="informedConsentFormData.question15b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Statement that the study has undergone ethics review by the Research Ethics Committee and may be reached 
                regarding rights of study participants, including grievances and complaints through the contact information below?"
                label-for="v-question16"
                >
                <b-form-checkbox
                    v-model="selected16"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected16 == 'true'"
                    v-model="informedConsentFormData.question16a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected16 == 'true'"
                    v-model="informedConsentFormData.question16b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Foreseeable circumstances and reasons under which participation in the study may be terminated?"
                label-for="v-question17"
                >
                <b-form-checkbox
                    v-model="selected17"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected17 == 'true'"
                    v-model="informedConsentFormData.question17a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected17 == 'true'"
                    v-model="informedConsentFormData.question17b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label=" Whether or not refusal to participate or discontinuance at any time will involve penalty or loss of benefits to which the subject is entitled?"
                label-for="v-question18"
                >
                <b-form-checkbox
                    v-model="selected18"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected18 == 'true'"
                    v-model="informedConsentFormData.question18a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected18 == 'true'"
                    v-model="informedConsentFormData.question18b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Extent of confidentiality?"
                label-for="v-question19"
                >
                <b-form-checkbox
                    v-model="selected19"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected19 == 'true'"
                    v-model="informedConsentFormData.question19a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected19 == 'true'"
                    v-model="informedConsentFormData.question19b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="IS THE INFORMED CONSENT WRITTEN OR PRESENTED IN NON-TECHNICAL LANGUAGE THAT PARTICIPANTS CAN UNDERSTAND?"
                label-for="v-question20"
                >
                <b-form-checkbox
                    v-model="selected20"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected20 == 'true'"
                    v-model="informedConsentFormData.question20a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected20 == 'true'"
                    v-model="informedConsentFormData.question20b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="DOES THE PROTOCOL INCLUDE AN ADEQUATE PROCESS FOR ENSURING THAT CONSENT IS VOLUNTARY?"
                label-for="v-question21"
                >
                <b-form-checkbox
                    v-model="selected21"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected21 == 'true'"
                    v-model="informedConsentFormData.question21a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected21 == 'true'"
                    v-model="informedConsentFormData.question21b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="DO YOU HAVE ANY OTHER CONCERNS?"
                label-for="v-question22"
                >
                <b-form-checkbox
                    v-model="selected22"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected22 == 'true'"
                    v-model="informedConsentFormData.question22a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected22 == 'true'"
                    v-model="informedConsentFormData.question22b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
        </b-form-group>
    </div>
  </b-card-code>
</template>

<script>
import BCardCode from '@core/components/b-card-code'
import { BCardText, BFormGroup, BFormInput, BRow, BCol, BFormCheckbox, } from 'bootstrap-vue'

export default {
  components: {
    BCardCode,
    BCardText,
    BFormGroup,
    BFormInput,
    BRow,
    BCol,
    BFormCheckbox,
  },
  data() {
    return {
        informedConsentFormData: {
            question1a: null,
            question1b: null,
            question2a: null,
            question2b: null,
            question3a: null,
            question3b: null,
            question4a: null,
            question4b: null,
            question5a: null,
            question5b: null,
            question6a: null,
            question6b: null,
            question7a: null,
            question7b: null,
            question8a: null,
            question8b: null,
            question9a: null,
            question9b: null,
            question10a: null,
            question10b: null,
            question11a: null,
            question11b: null,
            question12a: null,
            question12b: null,
            question13a: null,
            question13b: null,
            question14a: null,
            question14b: null,
            question15a: null,
            question15b: null,
            question16a: null,
            question16b: null,
            question17a: null,
            question17b: null,
            question18a: null,
            question18b: null,
            question19a: null,
            question19b: null,
            question20a: null,
            question20b: null,
            question21a: null,
            question21b: null,
            question22a: null,
            question22b: null,
        },
        selected1: [],
        selected2: [],
        selected3: [],
        selected4: [],
        selected5: [],
        selected6: [],
        selected7: [],
        selected8: [],
        selected9: [],
        selected10: [],
        selected11: [],
        selected12: [],
        selected13: [],
        selected14: [],
        selected15: [],
        selected16: [],
        selected17: [],
        selected18: [],
        selected19: [],
        selected20: [],
        selected21: [],
        selected22: [],
    }
  },
// need to check cause reference works wo this
//   watch: {
//     vquestion: function() {
//       // Emit this information to the parents component
//       this.$emit("informedConsentFormProps", this.informedConsentFormData);
//     }
//   }
}
</script>

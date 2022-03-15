<template>
  <b-card-code title="INSTRUCTIONS">
    <b-card-text>
        <span>Please indicate in the space provided below whether or not the specified assessment point is addressed by your study protocol. 
          To facilitate the evaluation of the assessment point, indicate the page and paragraph where this information can be found or “NA” if not applicable.
        </span>
    </b-card-text>

    <div>
        <!-- SCIENTIFIC VALIDITY -->
        <b-form-group label="1. SCIENTIFIC VALIDITY">
            <b-col md="6">
                <b-form-group
                label="Is/Are the main research question(s) reasonable?"
                label-for="v-question1"
                >
                <b-form-checkbox
                    v-model="selected1"
                    id="vquestion"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected1 == 'true'"
                    v-model="protocolReviewFormData.question1a"
                    type="number"
                    placeholder="Input Page number"
                    @
                />
                <b-form-input
                    v-if="selected1 == 'true'"
                    v-model="protocolReviewFormData.question1b"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Are the study objectives specific, measurable, attainable, and reasonable based on the research instrument(s) presented?"
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
                    v-model="protocolReviewFormData.question2a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected2 == 'true'"
                    v-model="protocolReviewFormData.question2b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Is/Are the research instrument(s)/data collection tool(s) adopted from existing one(s) and has the developer’s consent for its usage in the study?"
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
                    v-model="protocolReviewFormData.question3a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected3 == 'true'"
                    v-model="protocolReviewFormData.question3b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Does the protocol present sufficient background information or results of previous studies that merit the involvement of human participants?"
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
                    v-model="protocolReviewFormData.question4a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected4 == 'true'"
                    v-model="protocolReviewFormData.question4b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
        </b-form-group>
        <!-- ETHICAL CONSIDERATIONS IN THE CONDUCT OF STUDY -->
        <b-form-group label="2. ETHICAL CONSIDERATIONS IN THE CONDUCT OF STUDY">
            <b-col md="6">
                <b-form-group
                label="In conducting this research, is there no conflict of interest on the part of the researchers and/or their Research Adviser(s)/Supervisor(s)/Mentor(s)?"
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
                    v-model="protocolReviewFormData.question5a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected5 == 'true'"
                    v-model="protocolReviewFormData.question5b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="For faculty-initiated research only: Is there disclosure of collaborative study terms of reference (e.g. multi-country/ multi-institutional studies, 
                including intellectual property rights, publication rights, information and responsibility in sharing, transparency and capacity building) ?"
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
                    v-model="protocolReviewFormData.question6a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected6 == 'true'"
                    v-model="protocolReviewFormData.question6b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Is/Are the researcher(s) sufficiently knowledgeable/ trained to conduct the proposed study based on his/her/their dated and signed CV?"
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
                    v-model="protocolReviewFormData.question7a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected7 == 'true'"
                    v-model="protocolReviewFormData.question7b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Do(es) the Research Adviser(s)/Supervisor(s)/Mentor(s) has/have sufficient research experience based on his/her/their dated and signed CV?"
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
                    v-model="protocolReviewFormData.question8a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected8 == 'true'"
                    v-model="protocolReviewFormData.question8b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Is the research environment/site/facility appropriate?"
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
                    v-model="protocolReviewFormData.question9a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected9 == 'true'"
                    v-model="protocolReviewFormData.question9b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Does the selection and recruitment of participants comply with the ethical demands of equity?"
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
                    v-model="protocolReviewFormData.question10a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected10 == 'true'"
                    v-model="protocolReviewFormData.question10b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Is the duration of human participants’ involvement in the study reasonable?"
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
                    v-model="protocolReviewFormData.question11a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected11 == 'true'"
                    v-model="protocolReviewFormData.question11b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Does the study involve individuals who are vulnerable, i.e. 
                those whose pertinent circumstances will likely impair their capacity to give free, prior and informed consent?"
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
                    v-model="protocolReviewFormData.question12a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected12 == 'true'"
                    v-model="protocolReviewFormData.question12b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Are appropriate mechanisms in place to protect the potential vulnerable participants, e.g. assent form for children?"
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
                    v-model="protocolReviewFormData.question13a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected13 == 'true'"
                    v-model="protocolReviewFormData.question13b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Are probable risks/harm to the human participants as result of participation in the study clearly identified, i.e. physical, psychological, social, economic, legal?"
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
                    v-model="protocolReviewFormData.question14a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected14 == 'true'"
                    v-model="protocolReviewFormData.question14b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="In order to adequately address the risk/benefit balance, does the protocol provide means/mechanisms that sufficiently mitigate the risks/probable harm to the human participants?"
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
                    v-model="protocolReviewFormData.question15a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected15 == 'true'"
                    v-model="protocolReviewFormData.question15b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Is the informed consent procedure/form adequate and culturally appropriate, e.g. (back-) translation is appended? Indicate “NA” if not applicable."
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
                    v-model="protocolReviewFormData.question16a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected16 == 'true'"
                    v-model="protocolReviewFormData.question16b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <!-- DATA PROTECTION PLAN -->
        </b-form-group>
        <b-form-group label="3. DATA PROTECTION PLAN">
            <b-col md="6">
                <b-form-group
                label="Does the study involve personal/sensitive data collection and/or processing?"
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
                    v-model="protocolReviewFormData.question17a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected17 == 'true'"
                    v-model="protocolReviewFormData.question17b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Does the protocol provide measures for personal/sensitive information to be sufficiently anonymized for adequate data protection?"
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
                    v-model="protocolReviewFormData.question18a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected18 == 'true'"
                    v-model="protocolReviewFormData.question18b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Is there legal permission to obtain and process the data? Indicate “NA” if not applicable."
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
                    v-model="protocolReviewFormData.question19a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected19 == 'true'"
                    v-model="protocolReviewFormData.question19b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Does the study specify how long collected data will be used/processed?"
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
                    v-model="protocolReviewFormData.question20a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected20 == 'true'"
                    v-model="protocolReviewFormData.question20b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Does the protocol provide measures as to how data transfer/sharing information will be monitored?"
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
                    v-model="protocolReviewFormData.question21a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected21 == 'true'"
                    v-model="protocolReviewFormData.question21b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Does the study discuss how and where collected data will be securely stored in terms of 
                data structure/format or encryption of identifiable information and separation from sensitive data such as health data?"
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
                    v-model="protocolReviewFormData.question22a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected22 == 'true'"
                    v-model="protocolReviewFormData.question22b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Does the study discuss how and where collected data will be securely stored in terms of treating unforeseen data added such as incidental findings during the study?"
                label-for="v-question23"
                >
                <b-form-checkbox
                    v-model="selected23"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected23 == 'true'"
                    v-model="protocolReviewFormData.question23a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected23 == 'true'"
                    v-model="protocolReviewFormData.question23b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Does the study discuss where collected data will be securely stored in terms of location and hardware, e.g. avoids loss/easily accessible media such as memory sticks?"
                label-for="v-question24"
                >
                <b-form-checkbox
                    v-model="selected24"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected24 == 'true'"
                    v-model="protocolReviewFormData.question24a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected24 == 'true'"
                    v-model="protocolReviewFormData.question24b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Does the protocol indicate how collected data will be securely accessed?"
                label-for="v-question25"
                >
                <b-form-checkbox
                    v-model="selected25"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected25 == 'true'"
                    v-model="protocolReviewFormData.question25a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected25 == 'true'"
                    v-model="protocolReviewFormData.question25b"
                    id="v-question1"
                    type="number"
                    placeholder="Input Paragraph number"
                />
                </b-form-group>
            </b-col>
            <b-col md="6">
                <b-form-group
                label="Does the study clearly state how and when collected data will be (ir)reversibly disposed/destroyed?"
                label-for="v-question26"
                >
                <b-form-checkbox
                    v-model="selected26"
                    checked="false"
                    name="check-button"
                    switch
                    inline
                >
                    Applicable
                </b-form-checkbox>
                <b-form-input
                    v-if="selected26 == 'true'"
                    v-model="protocolReviewFormData.question26a"
                    id="v-question1"
                    type="number"
                    placeholder="Input Page number"
                />
                <b-form-input
                    v-if="selected26 == 'true'"
                    v-model="protocolReviewFormData.question26b"
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
        protocolReviewFormData: {
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
            question23a: null,
            question23b: null,
            question24a: null,
            question24b: null,
            question25a: null,
            question25b: null,
            question26a: null,
            question26b: null,
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
        selected23: [],
        selected24: [],
        selected25: [],
        selected26: [],
    }
  },
  //need to check cause reference works wo this
//   watch: {
//     vquestion: function() {
//       // Emit this information to the parents component
//       this.$emit("protocolReviewFormProps", this.protocolReviewFormData);
//     }
//   }
}
</script>
<template>
  <div>
    <form-wizard
      color="#7367F0"
      :title="null"
      :subtitle="null"
      layout="vertical"
      finish-button-text="Submit"
      back-button-text="Previous"
      class="wizard-vertical mb-3"
      @on-complete="formSubmitted"
    >
      <!-- Protocol datails tab -->
      <tab-content title="Protocol Details">
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              Protocol Details
            </h5>
            <small class="text-muted">
              Enter Your Protocol Details.
            </small>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Project Title"
              label-for="v-project-title"
            >
              <b-form-input
                id="v-project-title"
                v-model="form.projectTitle"
                placeholder="Project Title"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Type of Study"
              label-for="v-type-of-study"
            >
              <v-select
                v-model="form.typeOfStudy"
                :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                multiple
                label="title"
                :options="option"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Approximate Duration of the Study"
              label-for="v-approximate-duration-of-the-study"
            >
              <b-form-group>
                <flat-pickr
                  v-model="form.durationOfTheStudy"
                  class="form-control"
                  :config="{ mode: 'range'}"
                />
              </b-form-group>
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Expected number of Participants"
              label-for="v-number-of-participants"
            >
              <b-form-input
                id="v-number-of-participants"
                v-model="form.numberOfParticipants"
                type="number"
                placeholder="1-1000"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Study Site"
              label-for="v-study-site"
            >
              <b-form-input
                id="v-study-site"
                v-model="form.studySite"
                placeholder="Study Site"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Source(s) of Funds"
              label-for="v-funds"
            >
              <b-form-input
                id="v-funds"
                v-model="form.funds"
                type="number"
                placeholder="PHP or US DOLLARS"
              />
            </b-form-group>
          </b-col>
        </b-row>
      </tab-content>

      <!-- Researcher info tab -->
      <tab-content title="Researcher(s)">
        <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              Researcher(s)/Proponent(s) Info
            </h5>
            <small class="text-muted">Enter Researcher(s)/Proponent(s) Info.</small>
            <researcher-info ref="researcherInfoProps"/>
          </b-col>
      </tab-content>

      <!-- Researcher's contact info -->
      <tab-content title="Contact Info">
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              Contact Info
            </h5>
            <small class="text-muted">Enter Your Contact Info.</small>
            <b-form-checkbox
              v-model="form.checkbox"
              value="C"
              class="custom-control-success"
            >
              Use current contact information
            </b-form-checkbox>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Mailing Address"
              label-for="v-mailing-address"
            >
              <b-form-input
                id="v-mailing-address"
                v-model="form.mailingAddress"
                placeholder="Osmeña Street Poblacion"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Email Address"
              label-for="v-email-address"
            >
              <b-form-input
                id="v-email-address"
                v-model="form.emailAddress"
                type="email"
                placeholder="sample@email.com"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Alternative Email Address"
              label-for="v-alternative-email-address"
            >
              <b-form-input
                id="v-alternative-email-address"
                v-model="form.alternativeEmailAddress"
                type="email"
                placeholder="sample@email.com"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Mobile/Telephone No."
              label-for="v-contact"
            >
              <b-form-input
                id="v-contact"
                v-model="form.contactNumber"
                type="number"
                placeholder="09xxxxxxxxx/437-xxxx"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Fax"
              label-for="v-fax"
            >
              <b-form-input
                id="v-fax"
                v-model="form.fax"
                placeholder="Fax"
              />
            </b-form-group>
          </b-col>
        </b-row>
      </tab-content>

      <!-- Capsule Proposal -->
      <tab-content title="Capsule Proposal">
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              Introduction
            </h5>
            In this section, provide a description and significance of the problem/phenomenon studied, review theory and empirical work and problem statement, more specifically:
            1. Scientific background/context inclusive of summary of the literature review that presents the current knowledge in one paragraph;
            2. Rationale/Significance that identifies the gaps and/or limitations in the literature and how your study may be able to address these gaps/limitations along with potential utility of generated information and its potential users;
            3. Research question(s)/general objective(s);
            4. Sub-question(s)/specific objective(s) of the study in bullet form; and
            5. Justification for the need to involve human participant(s).
            <small class="text-muted"></small>
          </b-col>
          <b-col>
            <capsule-proposal ref="capsuleProposalIntroductionProps"/>
          </b-col>
        </b-row>
        <br>
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              Operational Definitions
            </h5>
            List/Enumerate and define study outcomes. Make sure that the definitions are anchored in measuring the specific variables in the study.
            <small class="text-muted"></small>
          </b-col>
          <b-col>
            <capsule-proposal ref="capsuleProposalOperationalProps"/>
          </b-col>
        </b-row>
        <br>
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              Methodology
            </h5>
            Make sure to provide the following points:
            1. Research/Study design – Whether quantitative, qualitative (e.g. ethnography, grounded theory, case study, phenomenology, narrative research) or a combination and guiding theory if appropriate along with the research paradigm (e.g. postpositivist, constructivist/interpretivist);
            2. Research setting/environment. in no more than 3 sentences, describe and justify the selection of the study site(s) in relation with the safety, convenience privacy and confidentiality considerations for the participant(s) and researcher(s)/proponent(s);
            3. Study population (in not more than 5 sentences, state the number and relevant characteristics of participant(s), documents, or events included in the study): 
            4. Inclusion criteria. Attributes that when met, make an individual a potential participant(s) of your study including participant(s)’ age range with justification.
            5. Exclusion criteria. State the condition(s) why potential participant(s) must be excluded despite qualifying in the inclusion criteria.
            6.Sampling procedure. Detailed steps in recruiting study participant(s) or selecting documents/events (includes consent-seeking before participant’s decision whether to participate or not).
            a one-paragraph statement about the pre-data gathering coordinative actions to be taken with potential participant(s), organization(s), etc.;
            7. Sampling design/strategy. A one-paragraph specification of your sampling strategy and how it will be executed in terms of gathering or recruiting participant(s);
            8. Sample size: Provide a one-paragraph statement about how your study’s sample size is computed with justification for its suitability;
            9. Data collection tools, technologies and techniques: In 2-3 sentences, describe the instruments (e.g. interview guides, questionnaires) and devices (e.g. audio recorders, video camera) to be used for data collection including the main content/theme of the questionnaire(s)/data collection tool(s), its domains and type of questions, e.g. open- or close-ended.
            10. Identification of original source/developer of questionnaire/interview instrument/data collection tool(s) if not developed by the researcher(s).
            11. Description of validation/pre-testing procedure for the data collection tool(s) including contextual presentation for participant(s)’ comprehension, e.g. (back-) translation of questionnaire(s).
            12. Brief but sufficient description of the conduct of survey/interview including its duration, start and end dates of data collection and analysis as well as details of the collection of accomplished questionnaires/data collection tool(s), iterative process, triangulation of sources/methods, and modification of procedures in response to evolving study findings, with justification.
            <small class="text-muted"></small>
          </b-col>
          <b-col>
            <capsule-proposal ref="capsuleProposalMethodologyProps"/>
          </b-col>
        </b-row>
        <br>
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              Data Analysis Plan
            </h5>
            Describe the analytical treatment of data such as: 
            1. Identification of which descriptive statistical techniques will be used (e.g. measures of central tendency and dispersion, use of tables or graphs), whether the study is descriptive or analytical.
            2. The process by which inferences, themes, etc. will be identified and developed in relation with the research paradigm/approach. 
            3. Techniques intended to assure the reliability of data analysis, where applicable, e.g. audit trail, triangulation. 
            4. If quantitative, state statistical test/software to be used, or level of significance if inferential statistics is used, i.e. if the study is intended to use the results obtained from the participant(s) to estimate the true information to the general population. 
            5. Include also a statement of data processing methods before and during analysis such as transcription, data entry and data management.
            <small class="text-muted"></small>
          </b-col>
          <b-col>
            <capsule-proposal ref="capsuleProposalAnalysisProps"/>
          </b-col>
        </b-row>
        <br>
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              Ethical Considerations
            </h5>
            State how ethical soundness in the conduct of the study will be upheld, to wit:
            1. Disclosing actual or potential conflict(s) of interest and/or collaborative study terms of reference if applicable, e.g. multi-country/multi-institutional studies.
            2. Obtaining ethics clearance and other applicable approvals;
            3. Securing participant(s) consent and administering a debriefing where applicable, or explanation for its non-applicability;
            4. Ensuring participants’ safety and convenience, privacy (e.g. anonymization/deidentification), confidentiality in the responses;
            5. Adopting measures that adequately address data protection issues in the acquisition, use, transfer, processing, storage and disposal of collected data, e.g. data coding, encryption, electronic and hardware storage and treatment of evolving study findings and disposal.
            <small class="text-muted"></small>
          </b-col>
          <b-col>
            <capsule-proposal ref="capsuleProposalEthicalProps"/>
          </b-col>
        </b-row>
      </tab-content>

      <!-- Budget Sheet info -->
      <tab-content title="Budget Sheet">
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              Detailed Budget Sheet
            </h5>
            <small class="text-muted">Enter Your Budget Sheet.</small>
          </b-col>
          <b-col md="12">
            <!-- budget sheet components -->
            <budget-sheet ref="budgetSheetProps"/>
            <budget-sheet-2 ref="budgetSheet2Props"/>
            <budget-sheet-3 ref="budgetSheet3Props"/>
            <budget-sheet-4 ref="budgetSheet4Props"/>
          </b-col>
        </b-row>
      </tab-content>

      <!-- Protocol review -->
      <tab-content title="Protocol Review">
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              PROTOCOL REVIEW ASSESSMENT FORM
            </h5>
            <small class="text-muted">Enter PROTOCOL REVIEW ASSESSMENT FORM.</small>
          </b-col>
          <b-col md="12">
            <!-- protocol review component -->
            <protocol-review ref="protocolReviewFormProps"/>
          </b-col>
        </b-row>
      </tab-content>

      <!-- Informed consent review -->
      <tab-content title="Informed Consent">
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              INFORMED CONSENT FORM ASSESSMENT
            </h5>
            <small class="text-muted">Enter INFORMED CONSENT FORM ASSESSMENT.</small>
          </b-col>
          <b-col md="12">
            <!-- iinformed consent component -->
            <informed-consent ref="informedConsentFormProps"/>
          </b-col>
        </b-row>
      </tab-content>

      <!-- Supp documents -->
      <tab-content title="Documents">
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              Supporting Documents
            </h5>
            <small class="text-muted">Upload your supporting documents.</small>
          </b-col>
          <b-col md="12">
            <!-- supp doc component -->
            <upload-documents/>
          </b-col>
        </b-row>
      </tab-content>
    </form-wizard>

  </div>
</template>

<script>
import { FormWizard, TabContent } from 'vue-form-wizard'
import vSelect from 'vue-select'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
import {
  BRow,
  BCol,
  BFormGroup,
  BFormInput,
  BFormRadio, 
  BCard, 
  BCardText,
  BButton,
  BForm,
  BFormCheckbox,
} from 'bootstrap-vue'
import ToastificationContent from '@core/components/toastification/ToastificationContent.vue'
import { heightTransition } from '@core/mixins/ui/transition'
import Ripple from 'vue-ripple-directive'
//import for date picker
import flatPickr from 'vue-flatpickr-component'
//import for researcher info compoennt
import ResearcherInfo from './ResearchersInfo.vue'
//import for format text editor
import CapsuleProposal from './CapsuleProposal.vue'
//import for budget sheet I
import BudgetSheet from './DetailedBudgetSheet.vue/BudgetSheet.vue'
//import for budget sheet II
import BudgetSheet2 from './DetailedBudgetSheet.vue/BudgetSheetTravelling.vue'
//import for budget sheet III
import BudgetSheet3 from './DetailedBudgetSheet.vue/BudgetSheetCapital.vue'
//import for budget sheet IV
import BudgetSheet4 from './DetailedBudgetSheet.vue/BudgetSheetAdministrative.vue'
//import for protocol review form
import ProtocolReview from './ProtocolReview.vue'
//import for informed consnt form
import InformedConsent from './InformedConsent.vue'
//import for updalod documents
import UploadDocuments from './UploadDocuments.vue'

export default {
  components: {
    FormWizard,
    TabContent,
    BRow,
    BCol,
    BFormGroup,
    BFormInput,
    BFormRadio, 
    BCard, 
    BCardText,
    BButton,
    BForm,
    BFormCheckbox,
    vSelect,
    // eslint-disable-next-line vue/no-unused-components
    ToastificationContent,
    flatPickr,
    ResearcherInfo,
    CapsuleProposal,
    BudgetSheet,
    BudgetSheet2,
    BudgetSheet3,
    BudgetSheet4,
    ProtocolReview,
    InformedConsent,
    UploadDocuments,
  },
  directives: {
    Ripple,
  },
  data() {
    return {
      form: {
        projectTitle: null,
        typeOfStudy: null,
        durationOfTheStudy: null,
        numberOfParticipants: null,
        studySite: null,
        funds: null,
        checkbox: null,
        mailingAddress: null,
        emailAddress: null,
        alternativeEmailAddress: null,
        contactNumber: null,
        fax: null,
      },
      options: [],
      option: [
        { title: 'Clinical Trial(Sponsored)' },
        { title: 'Clinical Trials(Researcher-initiated)' },
        { title: 'Health Operations Research(Health Programs and Policies)' },
        { title: 'Social/Behavioral Research' },
        { title: 'Public Health/Epidemiologic Research' },
        { title: 'Biomedical Research(Retrospective, Prospective and Diagnostic Studies' },
        { title: 'Stem Cell Research' },
        { title: 'Genetic Research' },
      ],
    }
  },
  methods: {
    formSubmitted: function() {
      //researcher info data from researcger info component
      var researcherInfoProps = this.$refs.researcherInfoProps.researchersInfo;
      //capsule proposal data from capsule proposal component
      var capsuleProposalIntroductionProps = this.$refs.capsuleProposalIntroductionProps.content;
      var capsuleProposalOperationalProps = this.$refs.capsuleProposalOperationalProps.content;
      var capsuleProposalMethodologyProps = this.$refs.capsuleProposalMethodologyProps.content;
      var capsuleProposalAnalysisProps = this.$refs.capsuleProposalAnalysisProps.content;
      var capsuleProposalEthicalProps = this.$refs.capsuleProposalEthicalProps.content;
      // budget sheet data from budget sheet components
      var budgetSheetProps = this.$refs.budgetSheetProps.items;
      var budgetSheetProps2 = this.$refs.budgetSheetProps.honorariaItems;
      var budgetSheetProps3 = this.$refs.budgetSheet2Props.items;
      var budgetSheetProps4 = this.$refs.budgetSheet2Props.suppliesItems;
      var budgetSheetProps5 = this.$refs.budgetSheet2Props.incentiveItems;
      var budgetSheetProps6 = this.$refs.budgetSheet2Props.ethicsItems;
      var budgetSheetProps7 = this.$refs.budgetSheet3Props.items;
      var budgetSheetProps8 = this.$refs.budgetSheet4Props.items;
      // protocol review data from protocol review component
      var protocolReviewFormProps = this.$refs.protocolReviewFormProps.protocolReviewFormData;
      // informed consent data from informed consent component
      var informedConsentFormProps = this.$refs.informedConsentFormProps.informedConsentFormData;
      this.$toast({
        component: ToastificationContent,
        props: {
          title: 'Form Submitted',
          icon: 'EditIcon',
          variant: 'success',
        },
      })
    },
  },
}
</script>

<style lang="scss" scoped>
.repeater-form {
  overflow: hidden;
  transition: .35s height;
}
@import '~@core/scss/vue/libs/vue-flatpicker.scss';
</style>

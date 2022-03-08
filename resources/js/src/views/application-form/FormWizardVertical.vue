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

      <!-- project datails tab -->
      <tab-content title="Project Details">
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h4 class="mb-0">
              Project Details
            </h4>
            <small class="text-muted">
              Enter Your Project Details.
            </small>
          </b-col>
          <b-col md="12">
            <b-form-group
              label="Project Title"
              label-for="v-project-title"
            >
              <b-form-input
                id="v-project-title"
                placeholder="The title of the project."
              />
            </b-form-group>
          </b-col>
          <b-col md="12">
            <b-form-group
              label="Project Type"
              label-for="v-project-type"
            >
            <v-select
                id="v-project-type"
                v-model="projectTypes"
                :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                :selectable="option => ! option.value.includes('select_value')"
                multiple
                label="title"
                :options="option"
              />
            </b-form-group>
          </b-col>
          <b-col
            cols="12"
            class="mb-0"
          >
            <h7 class="mb-0">
              Proposed Date Duration
            </h7>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Start Date"
              label-for="v-start-date"
            >
              <b-form-input
                id="v-start-date"
                placeholder="Password"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="End Date"
              label-for="v-end-date"
            >
              <b-form-input
                id="v-end-date"
                placeholder="Re-type Password"
              />
              
            </b-form-group>
            
          </b-col>
          <b-col md="6">
        <b-form-group>
          <h5>Range</h5>
          <flat-pickr
            v-model="rangeDate"
            class="form-control"
            :config="{ mode: 'range'}"
          />
        </b-form-group>
      </b-col>
        </b-row>
      </tab-content>

      <!-- personal info tab -->
      <tab-content title="Personal Info">
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              Personal Info
            </h5>
            <small class="text-muted">Enter Your Personal Info.</small>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="First Name"
              label-for="v-first-name"
            >

              <b-form-input
                id="v-first-name"
                placeholder="John"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Last Name"
              label-for="v-last-name"
            >
              <b-form-input
                id="v-last-name"
                placeholder="Doe"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Country"
              label-for="v-country"
            >
              <v-select
                id="v-country"
                v-model="selectedContry"
                :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                :options="countryName"
                :selectable="option => ! option.value.includes('select_value')"
                label="text"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label-for="v-language"
              label="Language"
            >
              <v-select
                id="Language"
                v-model="selectedLanguage"
                :dir="$store.state.appConfig.isRTL ? 'rtl' : 'ltr'"
                :selectable="option => ! option.value.includes('select_value')"
                :options="project"
                label="text"
              />
            </b-form-group>
          </b-col>
        </b-row>
      </tab-content>

      <!-- address -->
      <tab-content title="Address">
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              Address
            </h5>
            <small class="text-muted">Enter Your Address.</small>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Address"
              label-for="v-address"
            >
              <b-form-input
                id="v-address"
                placeholder="98 Borough bridge Road, Birmingham"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Landmark"
              label-for="v-landmark"
            >
              <b-form-input
                id="v-landmark"
                placeholder="Borough bridge"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Pincode"
              label-for="v-pincode"
            >
              <b-form-input
                id="v-pincode"
                placeholder="658921"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="City"
              label-for="v-city"
            >
              <b-form-input
                id="v-city"
                placeholder="Birmingham"
              />
            </b-form-group>
          </b-col>
        </b-row>
      </tab-content>

      <!-- social link -->
      <tab-content title="Social Links">
        <b-row>
          <b-col
            cols="12"
            class="mb-2"
          >
            <h5 class="mb-0">
              Social Links
            </h5>
            <small class="text-muted">Enter Your Social Links</small>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Twitter"
              label-for="v-twitter"
            >
              <b-form-input
                id="v-twitter"
                placeholder="https://twitter.com/abc"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Facebook"
              label-for="v-facebook"
            >
              <b-form-input
                id="v-facebook"
                placeholder="https://facebook.com/abc"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="Google+"
              label-for="v-google-plus"
            >
              <b-form-input
                id="v-google-plus"
                placeholder="https://plus.google.com/abc"
              />
            </b-form-group>
          </b-col>
          <b-col md="6">
            <b-form-group
              label="LinkedIn"
              label-for="v-linked-in"
            >
              <b-form-input
                id="v-linked-in"
                placeholder="https://linkedin.com/abc"
              />
            </b-form-group>
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
} from 'bootstrap-vue'
import ToastificationContent from '@core/components/toastification/ToastificationContent.vue'

export default {
  components: {
    FormWizard,
    TabContent,
    BRow,
    BCol,
    BFormGroup,
    BFormInput,
    vSelect,
    // eslint-disable-next-line vue/no-unused-components
    ToastificationContent,
  },
  data() {
    return {
      selectedContry: 'select_value',
      selectedLanguage: 'nothing_selected',
      selectedProjectType: 'nothing_selected',
      countryName: [
        { value: 'select_value', text: 'Select Value' },
        { value: 'Russia', text: 'Russia' },
        { value: 'Canada', text: 'Canada' },
        { value: 'China', text: 'China' },
        { value: 'United States', text: 'United States' },
        { value: 'Brazil', text: 'Brazil' },
        { value: 'Australia', text: 'Australia' },
        { value: 'India', text: 'India' },
      ],
      languageName: [
        { value: 'nothing_selected', text: 'Nothing Selected' },
        { value: 'English', text: 'English' },
        { value: 'Chinese', text: 'Mandarin Chinese' },
        { value: 'Hindi', text: 'Hindi' },
        { value: 'Spanish', text: 'Spanish' },
        { value: 'Arabic', text: 'Arabic' },
        { value: 'Malay', text: 'Malay' },
        { value: 'Russian', text: 'Russian' },
      ],
      projectTypes: [
        { value: 'nothing_selected', text: '' },
        { value: 'Clinical Trial (Sponsored)', text: 'Clinical Trial (Sponsored)' },
        { value: 'Clinical Trials (Researcher-initiated)', text: 'Clinical Trials (Researcher-initiated)' },
        { value: 'Health Operations Research (Health Programs and Policies)', text: 'Health Operations Research (Health Programs and Policies)' },
      ]
    }
  },
  methods: {
    formSubmitted() {
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

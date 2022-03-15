<template>
  <b-card-code title="II. Maintenance and Other Operating Expenses (MOOE)">
    <div>
      <b-form
        ref="form"
        :style="{height: trHeight}"
        class="repeater-form"
        @submit.prevent="repeateAgain"
      >
        <!-- Row Loop for travelling -->
        <b-row
          v-for="(item, index) in items"
          :id="item.id"
          :key="item.id"
          ref="row"
        >
          <!-- Personal  -->
          <b-col md="2">
            <b-form-group
              label="Personal"
              label-for="personal"
            >
              <b-form-input
                id="personal"
                v-model="item.personal"
                type="number"
                placeholder="PHP/DOLLARS"
              />
            </b-form-group>
          </b-col>

          <!-- External source  -->
          <b-col md="2">
            <b-form-group
              label="External-Source"
              label-for="external-source"
            >
              <b-form-input
                id="external-source"
                v-model="item.externalSource"
                type="number"
                placeholder="PHP/DOLLARS"
              />
            </b-form-group>
          </b-col>

          <!-- Internal source  -->
          <b-col md="2">
            <b-form-group
              label="Internal-Source"
              label-for="internal-source"
            >
              <b-form-input
                id="internal-source"
                v-model="item.internalSource"
                type="number"
                placeholder="PHP/DOLLARS"
              />
            </b-form-group>
          </b-col>

          <!-- Total source  -->
          <b-col md="2">
            <b-form-group
              label="TOTAL"
              label-for="total"
            >
              <b-form-input
                id="total"
                v-model="item.total"
                type="number"
                placeholder="PHP/DOLLARS"
              />
            </b-form-group>
          </b-col>
          <!-- Remove Button -->
          <b-col
            lg="3"
            md="3"
            class="mb-50"
          >
            <b-button
              v-ripple.400="'rgba(234, 84, 85, 0.15)'"
              variant="outline-danger"
              class="mt-0 mt-md-2"
              @click="removeItem(index)"
            >
              <feather-icon
                icon="XIcon"
                class="mr-25"
              />
              <span>Delete</span>
            </b-button>
          </b-col>
          <b-col cols="12">
            <hr>
          </b-col>
        </b-row>

      </b-form>
    </div>
    <b-button
      v-ripple.400="'rgba(255, 255, 255, 0.15)'"
      variant="primary"
      @click="repeateAgain"
    >
      <feather-icon
        icon="PlusIcon"
        class="mr-25"
      />
      <span>Add Traveling expenses</span>
    </b-button>
    <!-- budget sheet components -->
    <budget-sheet-supplies ref="suppliesProps"/>
    <budget-sheet-incentive ref="incentivesProps"/>
    <budget-sheet-ethics ref="ethicsProps"/>
  </b-card-code>
</template>

<script>
import BCardCode from '@core/components/b-card-code'
import {
  BForm, BFormGroup, BFormInput, BRow, BCol, BButton,
} from 'bootstrap-vue'
import { heightTransition } from '@core/mixins/ui/transition'
import Ripple from 'vue-ripple-directive'
//import budget sheet supplies
import BudgetSheetSupplies from './BudgetSheetSupplies.vue'
//import budget sheet incentive
import BudgetSheetIncentive from './BudgetSheetIncentive.vue'
//import budget sheet ethics
import BudgetSheetEthics from './BudgetSheetEthics.vue'

export default {
  components: {
    BCardCode,
    BForm,
    BRow,
    BCol,
    BButton,
    BFormGroup,
    BFormInput,
    BudgetSheetSupplies,
    BudgetSheetIncentive,
    BudgetSheetEthics,
  },
  directives: {
    Ripple,
  },
  mixins: [heightTransition],
  data() {
    return {
      items: [{
        id: 1,
        personal: null,
        externalSource: null,
        internalSource: null,
        total: null,
      }],
      suppliesItems: null,
      incentiveItems: null,
      ethicsItems: null,
      nextTodoId: 2,
    }
  },
  mounted() {
    this.initTrHeight()
  },
  created() {
    window.addEventListener('resize', this.initTrHeight)
  },
  destroyed() {
    window.removeEventListener('resize', this.initTrHeight)
  },
  updated(){
    // budget sheet data from child components
    var suppliesProps = this.$refs.suppliesProps.items;
    var incentivesProps = this.$refs.incentivesProps.items;
    var ethicsProps = this.$refs.ethicsProps.items;
    this.suppliesItems = suppliesProps;
    this.incentiveItems = incentivesProps;
    this.ethicsItems = ethicsProps;
  },
  methods: {
    repeateAgain() {
      this.items.push({
        id: this.nextTodoId += this.nextTodoId,
      })

      this.$nextTick(() => {
        this.trAddHeight(this.$refs.row[0].offsetHeight)
      })
    },
    removeItem(index) {
      this.items.splice(index, 1)
      this.trTrimHeight(this.$refs.row[0].offsetHeight)
    },
    initTrHeight() {
      this.trSetHeight(null)
      this.$nextTick(() => {
        this.trSetHeight(this.$refs.form.scrollHeight)
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
</style>

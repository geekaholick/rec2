<template>
  <b-card-code>
    <div>
          <b-form
            ref="form"
            :style="{height: trHeight}"
            class="repeater-form"
            @submit.prevent="repeateAgain"
          >

            <!-- Row Loop -->
            <b-row
              v-for="(item, index) in items"
              :id="item.id"
              :key="item.id"
              ref="row"
            >
            <!-- Email -->
              <b-col md="5">
                <b-form-group
                  label="Email Address"
                  label-for="v-email-address"
                >
                  <b-form-input
                    id="v-email-address"
                    v-model="item.researcherInfoEmailAddress"
                    type="email"
                    placeholder="sample@email.com"
                  />
                </b-form-group>
              </b-col>
              <!-- Full Name -->
              <b-col md="4">
                <b-form-group
                  label="Full Name"
                  label-for="full-name"
                >
                  <b-form-input
                    id="full-name"
                    v-model="item.fullName"
                    type="text"
                    placeholder="Gran Edrian Ompad"
                  />
                </b-form-group>
              </b-col>
              <!-- Position -->
              <b-col md="4">
                <b-form-group
                  label="Position Held"
                  label-for="position-held"
                >
                  <b-form-input
                    id="position-held"
                    v-model="item.positionHeld"
                    type="text"
                    placeholder="CEO/CTO .."
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
        <b-button
          v-ripple.400="'rgba(255, 255, 255, 0.15)'"
          variant="primary"
          @click="repeateAgain"
        >
          <feather-icon
            icon="PlusIcon"
            class="mr-25"
          />
          <span>Add New Researcher</span>
        </b-button>
    </div>
  </b-card-code>
</template>

<script>
import BCardCode from '@core/components/b-card-code'
import {
  BForm, BFormGroup, BFormInput, BRow, BCol, BButton,
} from 'bootstrap-vue'
import { heightTransition } from '@core/mixins/ui/transition'
import Ripple from 'vue-ripple-directive'

export default {
  components: {
    BCardCode,
    BForm,
    BRow,
    BCol,
    BButton,
    BFormGroup,
    BFormInput,
  },
  directives: {
    Ripple,
  },
  mixins: [heightTransition],
  data() {
    return {
      items: [{
        id: 1,
        researcherInfoEmailAddress: null,
        fullName: null,
        positionHeld: null,
      }],
      nextTodoId: 2,
      //must be array cause lot of researchers in a group
    //   researchersInfo: [{
    //     researcherInfoEmailAddress: null,
    //     fullName: null,
    //     positionHeld: null,
    //   }],
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

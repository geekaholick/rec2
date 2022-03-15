<template>
  <b-row>
    <b-col cols="12">
      <form-wizard-vertical />
    </b-col>
  </b-row>
</template>

<script>
import { BRow, BCol } from 'bootstrap-vue'
import FormWizardVertical from './FormWizardVertical.vue'

export default {
  components: {
    BRow,
    BCol,
    FormWizardVertical,
  },
}
</script>

<style lang="scss">
@import '~@core/scss/vue/libs/vue-wizard.scss';
@import '~@core/scss/vue/libs/vue-select.scss';
</style>

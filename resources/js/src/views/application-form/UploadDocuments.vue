<template>
  <b-card-code title="Upload Document(s)">
    <b-card-text>
      Please review and check your documents before and after uploading it.
      Thank you and have a great day!
    </b-card-text>

    <div>
      <b-form-file
        v-model="file"
        placeholder="Choose a file or drop it here..."
        drop-placeholder="Drop file here..."
        multiple
      />

      <b-card-text class="my-1">
        Selected file: <strong>{{ file ? file.name : '' }}</strong>
      </b-card-text>
      <b-card-text class="mt-1">
        Selected file: <strong>{{ file }}</strong>
      </b-card-text>
    </div>
  </b-card-code>
</template>

<script>
import BCardCode from '@core/components/b-card-code'
import { BFormFile, BCardText } from 'bootstrap-vue'

export default {
  components: {
    BCardCode,
    BCardText,
    BFormFile,
  },
  data() {
    return {
      file: [],
    }
  },
}
</script>

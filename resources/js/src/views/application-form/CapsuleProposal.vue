<template>
    <quill-editor
      v-model="content"
      :options="snowOption"
      id="textArea"
    />
</template>

<script>
import { BCardText } from 'bootstrap-vue'
import BCardCode from '@core/components/b-card-code/BCardCode.vue'
import { quillEditor } from 'vue-quill-editor'

export default {
  components: {
    quillEditor,
    BCardCode,
    BCardText,
  },
  data() {
    return {
      content: null,
      snowOption: {
        theme: 'snow',
      },
    }
  },
  //need to check cause reference works wo this
  // watch: {
  //   textArea: function() {
  //     // Emit this information to the parents component
  //     this.$emit("capsuleProposalProps", this.content);
  //   }
  // }
}
</script>

<style lang="scss">
@import '~@core/scss/vue/libs/quill.scss';
</style>

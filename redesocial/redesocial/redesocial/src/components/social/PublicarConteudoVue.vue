<template>
  <span>
    <div class="row">
      <grid-vue class="input-field" tamanho="12">
        <textarea v-model="conteudo" class="materialize-textarea"></textarea>
        <label>O que está acontecendo?</label>
      </grid-vue>
      <p>
        <grid-vue v-if="conteudo" class="btn waves-effect waves-light" tamanho="2 offset-s10"
          >Publicar</grid-vue
        >
      </p>
    </div>
  </span>
</template>

<script>
import GridVue from "@/components/layouts/GridVue";

export default {
  name: "PublicarConteudoVue",
  props: [],
  data() {
    return {
        conteudo: '',
    };
  },
  components: {
    GridVue,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>

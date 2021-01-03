<template>
  <span>
    <div v-if="img" class="card-image">
      <img :src="img" />
      <span class="card-title">{{ titulo || '' }}</span>
    </div>

    <div v-if="texto" class="card-content">
      <p>{{ texto }}</p> 
    </div>
  </span>
</template>

<script>


export default {
  name: "CardDetalheVue",
  props: ["img", "titulo", "texto"],
  data() {
    return {};
  },
  components: {
    
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>

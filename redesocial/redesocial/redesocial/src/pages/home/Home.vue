<template>
  <site-template>
      <span slot="menuesquerdo">
        <div class="row valign-wrapper">
          <grid-vue tamanho="4">
            <img
              src="http://materializecss.com/images/yuna.jpg"
              alt=""
              class="circle responsive-img"
            />
          </grid-vue>
          <grid-vue tamanho="8">
            <span class="black-text">
              <h5>Maria Silva</h5>
              Add the "circle" class to it to make it appear circular.
            </span>
          </grid-vue>
        </div>
      </span>
    <span slot="principal">
      <publicar-conteudo-vue />
      <card-conteudo-vue
        perfil="http://materializecss.com/images/yuna.jpg"
        nome="Maria Silva"
        data="19/12/20 20:30"
      >
        <card-detalhe-vue
          img="http://materializecss.com/images/sample-1.jpg"
          titulo=""
          texto="Esse é um simples card feliz. Toda fonte advém de um estudo maior"
        />
      </card-conteudo-vue>
    </span>
  </site-template>
</template>

<script>
import SiteTemplate from "@/templates/SiteTemplate";
import CardConteudoVue from "@/components/social/CardConteudoVue";
import CardDetalheVue from "@/components/social/CardDetalheVue";
import PublicarConteudoVue from "@/components/social/PublicarConteudoVue";

export default {
  name: "Home",
  data() {
    return {};
  },
  components: {
    SiteTemplate,
    CardConteudoVue,
    CardDetalheVue,
    PublicarConteudoVue,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Lobster&display=swap");

* {
  font-family: "Lobster", cursive;
}
</style>

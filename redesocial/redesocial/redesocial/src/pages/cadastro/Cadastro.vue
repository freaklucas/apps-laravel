<template>
  <login-template>
    <span slot="menuesquerdo">
      <img
        src="https://ibdec.net/wp-content/uploads/2020/03/Como-Escolher-a-Melhor-Rede-Social-para-o-seu-Negocio.png"
        alt="Imagem de conexões de rede social"
        class="responsive-img"
      />
    </span>

    <span slot="principal">
      <input type="text" placeholder="Nome" value="" />
      <input type="text" placeholder="E-mail" value="" />
      <input type="password" placeholder="Senha" value="" />
      <input type="password" placeholder="Confirme sua senha" value="" />
      <button class="btn">ENVIAR</button>
      <router-link class="btn orange laranjinha" to="/login"><b>JÁ TENHO CONTA</b></router-link>

    </span>
  </login-template>
</template>

<script>
import LoginTemplate from "@/templates/LoginTemplate";

export default {
  name: "Cadastro",
  data() {
    return {
    };
  },
  components: {
    LoginTemplate,
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Lobster&display=swap");

* {
  font-family: "Lobster", cursive;
}
.laranjinha {
  font-size: 13.1px;
}
</style>

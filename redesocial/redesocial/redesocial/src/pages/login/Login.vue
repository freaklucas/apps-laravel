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
      <h2>Login</h2>
      <input type="text" placeholder="E-mail" value="" />
      <input type="text" placeholder="Senha" value="" />
      <button class="btn">ENTRAR</button>
      <router-link class="btn orange" to="/cadastro">CADASTRE-SE</router-link>
    </span>
  </login-template>
</template>

<script>
import LoginTemplate from "@/templates/LoginTemplate";

export default {
  name: "Login",
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
</style>

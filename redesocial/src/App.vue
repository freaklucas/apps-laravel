<template>
  <div id="app">
    <navbar logo="Social" url="#" cor="cor" descricao="Testeeeee" ano="ano" />

    <div class="container">
      <div class="row">
        <grid-vue tamanho="4">Menu</grid-vue>
        <grid-vue tamanho="8">
          <router-view />
        </grid-vue>
      </div>
    </div>

    <footer-vue cor="is-success">
      <li><a class="hero cor" href="#!">Link 1</a></li>
      <li><a class="hero cor" href="#!">Link 2</a></li>
      <li><a class="hero cor" href="#!">Link 3</a></li>
      <li><a class="hero cor" href="#!">Link 4</a></li>
      <li><a class="hero cor" href="#!">Link 5</a></li> </footer-vue
    >'
  </div>
</template>

<script>
// import axios from 'axios'
// import Home from "./components/Home"

import Navbar from "@/components/layouts/Navbar";
import FooterVue from "@/components/layouts/FooterVue";
import GridVue from "@/components/layouts/GridVue";

export default {
  name: "App",
  created: function () {},
  components: {
    FooterVue,
    Navbar,
    GridVue,
  },
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap");
.logo {
  font-size: 1rem;
  font-family: "Press Start 2P", cursive;
  margin-top: 10px;
}

#app {
  font-family: "Press Start 2P", cursive;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>

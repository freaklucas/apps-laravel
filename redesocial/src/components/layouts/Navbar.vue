<template>
  <div>
    <nav class="navbar is-primary">
      <div class="logo">Social</div>
      <div class="buttons">
        <button class="button is-info is-rounded but">GitHub</button>
      </div>
    </nav>
  </div>
</template>

<script>
export default {
  name: "Navbar",
  props: ["url"],
  data() {
    return {};
  },
};
</script>

<style>
@import url("https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap");
</style>

<style>
.logo {
  font-size: 1.4rem;
  font-family: "Press Start 2P", cursive;
  margin-top: 10px;
};

p {
  font-family: "Press Start 2P", cursive;
}

.but {
  float: left;
  left: 1040px;
}
.container-principal {
  position: fixed;
  top: 0;
}
</style>

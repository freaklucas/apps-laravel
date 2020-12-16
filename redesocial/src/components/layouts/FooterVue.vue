<template>
  <section :class="'hero is-primary is-bold' + cor">
    <div class="card has-success">
      <div class="card-content fontes">
        <p class="title has-text-success">
          “There are two hard things in computer science: cache invalidation,
          naming things, and off-by-one errors.”
        </p>
        <p class="title has-text-success fontes">
          “Considere isso um texto super importante, caro leitor.”
        </p>
        <p class="subtitle has-text-danger">Jeff Atwood</p>
      </div>
      <footer class="card-footer">
        <p class="card-footer-item has-text-success">
          <span class="has-text-success">
            View on
            <a
              href="https://twitter.com/codinghorror/status/506010907021828096"
              class="has-text-success"
              ><b>Twitter</b></a
            >
          </span>
        </p>
        <p class="card-footer-item has-text-success">
          <span class="has-text-success">
            Share on <a href="#" class="has-text-success"><b>Facebook</b></a>
          </span>
        </p>
      </footer>
    </div>

    <div class="card has-success">
      <div class="card-content fontes">
        <p class="title has-text-success">
          “There are two hard things in computer science: cache invalidation,
          naming things, and off-by-one errors.”
        </p>
        <p class="title has-text-success fontes">{{ logo || " minha logo" }}</p>
        <p class="subtitle has-text-danger">
          {{ descricao || "minha descricao" }}
        </p>
      </div>
      <footer class="card-footer">
        <p class="card-footer-item has-text-success">
          <span class="has-text-success">
            View on
            <a
              href="https://twitter.com/codinghorror/status/506010907021828096"
              class="has-text-success"
              ><b>Twitter</b></a
            >
          </span>
        </p>
        <p class="card-footer-item has-text-success">
          <span class="has-text-success">
            Share on <a href="#" class="has-text-success"><b>Facebook</b></a>
            <div class="copyright">
              {{ ano || "2020" }} Copyright {{ logo || "Erro na logo" }}
            </div>
          </span>
        </p>
      </footer>
      <div class="links">
        <p>Links</p>
        <ul>
          <slot></slot>
        </ul>
      </div>
    </div>
      <footer class="footer has-text-danger">
        <div class="content has-text-centered">
          <p>
            <strong>{{ logo || "Social" }}</strong> by
            <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is
            licensed
            <a href="http://opensource.org/licenses/mit-license.php">MIT</a>.
            The website content is licensed
            <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/"
              >CC BY NC SA 4.0</a
            >.
          </p>
        </div>
      </footer>
  </section>
</template>

<script>
export default {
  name: "FooterVue",
  props: ["cor", "logo", "descricao", "ano"],
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
  font-size: 1.0rem;
  font-family: "Press Start 2P", cursive;
  margin-top: 10px;
}

p {
  font-family: "Press Start 2P", cursive;
}

.fontes {
  font-family: "Press Start 2P", cursive;
  font-size: 0.8rem;
}

.but {
  float: left;
  left: 1040px;
}
.container-principal {
  position: fixed;
  top: 0;
}
.links {
  position: right;
  right: 2rem;
  float: right;
  padding: 2rem;
}

</style>

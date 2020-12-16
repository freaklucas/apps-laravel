<template>
  <div :class="'column is-' + tamanho">
      <slot></slot>
  </div>
</template>

<script>
export default {
    name: 'GridVue',
    props:['tamanho'],
    data() {
        return {

        }
    }
}
</script>

<style>

</style>
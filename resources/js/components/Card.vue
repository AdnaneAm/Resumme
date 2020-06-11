<template>
  <div class="card">
    <div v-if="title" class="card-header">
      {{ title }}
    </div>

    <div class="card-body" :id="iden">
      <slot />
    </div>
  </div>
</template>

<script>
export default {
  name: 'Card',

  props: {
    title: { type: String, default: null },
    iden: {type:String, defualt:"null"}
  }
}
</script>
<style scoped>
  #education{
    display: flex;
  }
</style>

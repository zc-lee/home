<template>
  <div>
    <ul ref="ul" id="test">
      <li v-for="(v,i) in list" :key="i">{{i}}</li>
    </ul>
    <ul ref="ul1" id="test">
      <li v-for="(v,i) in list" :key="i">{{i}}</li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      list: [],
      height: null
    };
  },
  mounted() {
  }
};
</script>
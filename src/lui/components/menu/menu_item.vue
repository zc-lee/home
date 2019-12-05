<template>
  <div>
    <template v-for="(v,i) in menus">
      <el-menu-item :key="i" :index="v.name">{{v.name}}</el-menu-item>
    </template>
  </div>
</template>
<script>
import menuItem from "./menu_item";
export default {
  props: {
    menus: {
      type: Array,
      default: () => []
    }
  }
};
</script>
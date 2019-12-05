<template>
  <el-menu router :default-active="active" :collapse="collapse">
    <menuItem :menus="menus"></menuItem>
  </el-menu>
</template>

<script>
import menuItem from "./menu_item";
export default {
  components: {
    menuItem
  },
  data() {
    return {
      collapse: false,
      active: null,
      menus: []
    };
  },
  mounted() {
    this.initMenus();
  },
  methods: {
    initMenus() {
      let menus = this.$router.options.routes.slice(0, -1).map(v => {
        return {
          name: v.name,
          title: v.meta.title,
          path: v.path
        };
      });
      this.menus = menus;
      this.active = menus[0].name;
    }
  }
};
</script>
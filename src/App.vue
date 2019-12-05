<template>
  <el-container id="app">
    <el-aside width="200px">
      <l-menu class="menu"></l-menu>
    </el-aside>
    <el-container>
      <el-header class="header">header</el-header>
      <el-main>
        <router-view />
      </el-main>
    </el-container>
  </el-container>
</template>

<style lang="scss" scoped>
.menu {
  height: 100%;
}
.header{
}
</style>
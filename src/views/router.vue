<template>
  <div class="box">
    <transition name="slide">
      <router-view></router-view>
    </transition>
  </div>
</template>

<script>
export default {
  components: {},
  data() {
    return {};
  },
  computed: {},
  beforeRouteEnter(to, from, next) {
    console.warn("router view before route enter");
    // 在渲染该组件的对应路由被 confirm 前调用
    // 不！能！获取组件实例 `this`
    // 因为当守卫执行前，组件实例还没被创建
    // console.log(to);
    // console.log(from);
    next();
  },
  beforeRouteUpdate(to, from, next) {
    console.warn("router view before route update");
    // 在当前路由改变，但是该组件被复用时调用
    // 举例来说，对于一个带有动态参数的路径 /foo/:id，在 /foo/1 和 /foo/2 之间跳转的时候，
    // 由于会渲染同样的 Foo 组件，因此组件实例会被复用。而这个钩子就会在这个情况下被调用。
    // 可以访问组件实例 `this`
    // console.log("from:", from.name);
    // console.log("to:", to.name);
    next();
  },
  beforeRouteLeave(to, from, next) {
    console.warn("router view before route leave");
    // 导航离开该组件的对应路由时调用
    // 可以访问组件实例 `this`
    next();
  },
  methods: {},
  beforeCreate: function() {
    console.warn("beforeCreate 组件实例化之前执行的函数");
  },
  created: function() {
    console.warn("created 组件实例化完毕，但页面还未显示");
  },
  beforeMount: function() {
    console.warn("beforeMount 组件挂载前，页面仍未显示，但虚拟DOM已经配置");
  },
  mounted: function() {
    console.warn("mounted 组件挂载后，此方法执行后，页面显示");
  },
  beforeUpdate: function() {
    console.warn("beforeUpdate 组件更新前，页面仍未更新,但虚拟DOM已配置");
  },
  updated: function() {
    console.warn("updated 组件更新，此方法执行后，页面显示");
  },
  beforeDestroy: function() {
    console.warn("beforeDestroy 组件销毁前");
  },
  destroyed: function() {
    console.warn("destroyed 组件销毁");
  },
  methods: {}
};
</script>

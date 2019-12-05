<template>
  <div class="h-all">
    <el-input class="w-300" v-model="searchKey"></el-input>
    <div :id="id" class="h-500"></div>
  </div>
</template>

<script>
import u_gdMap from "@/utils/gdMap.js";
export default {
  components: {},
  data() {
    return {
      id: "mapBox",
      map: null,
      searchKey: null
    };
  },
  computed: {},
  watch:{
    searchKey(){
      console.log('search key change')
      this.searchByKey(this.searchKey)
    }
  },
  async mounted() {
    await this.initMap();
  },
  methods: {
    /**
     * @method
     * @description 初始化地图
     */
    async initMap() {
      this.map = new u_gdMap(this.id);
      this.map.init(["marker", "PlaceSearch"]);
      this.map.map.on("complete", res => {
        console.warn("地图初始化完成");
        // console.log(this.map)
        // this.map.map.setCenter([116.397428, 39.90923])
      });
      // this.map.map.setCenter([116.397428, 39.90923]);
      // this.map.marker.setPosition([116.397428, 39.90923]);
      return;
      this.map.map.setCity("太原市", res => {
        console.warn("set city");
        res = this.map.map.getCenter();
        this.map.marker.setPosition([res.lng,res.lat]);
      });
    },
    async searchByKey(keyword){
      let res=await this.map.searchByKeyword(keyword);
      console.log(res)
    },
  }
};
</script>

<style scoped>
</style>


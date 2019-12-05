<template>
  <div>
    <el-button type="primary" @click="getExcel">导入</el-button>
    <el-button type="primary" @click="putExcel(false)">导出json</el-button>
    <el-button type="primary" @click="putExcel(true)">导出table</el-button>
    <div>
      <div class="box">
        <span v-for="(v,i) in text" :key="i">{{v}}</span>
      </div>
      <div class="box" v-for="(item, index) in list" :key="index">
        <span v-for="(v,n) in keys" :key="n">{{item[v]}}</span>
      </div>
    </div>
    <table id="table" border>
      <thead>
        <tr>
          <th v-for="(v,i) in text" :key="i">{{v}}</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="2">123</td>
          <td colspan="2">456</td>
        </tr>
        <tr v-for="(item, index) in list" :key="index">
          <td v-for="(v,n) in keys" :key="n">
            <div v-if="v!='img'">{{item[v]}}</div>
            <img class="img" v-else :src="item[v]"/>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script>
// import Blob from './Blob';
import Export2Excel from "@/utils/Export2Excel";
import { mapState, mapGetters } from "vuex";
export default {
  components: {},
  data() {
    return {
      text: ["姓名", "年龄", "电话","图片"],
      keys: ["name", "age", "tel","img"],
      list: [
        {
          name: "name1",
          age: 12,
          tel: "110",
          img:'https://www.superprism.cn/resource/communityGroup/S00050001wx219007e82b660f17/20181227/image/201812271138-8113-52.jpg'
        },
        {
          name: "name2",
          age: 13,
          tel: "120",
          img:'https://www.superprism.cn/resource/communityGroup/S00050001wx219007e82b660f17/20181229/image/201812290901-5454-59.jpg'
        },{
          name: "name2",
          age: 13,
          tel: "120",
          img:'https://www.superprism.cn/resource/communityGroup/S00050001wx219007e82b660f17/20181229/image/201812290900-5166-94.jpg'
        },
      ]
    };
  },
  computed: mapState({
    test: state => state.count
  }),
  mounted() {
    console.log(this.test);
  },
  methods: {
    // 导入
    getExcel() {
      this.$message.info("waiting");
    },
    putExcel(isTable = false) {
      this.$confirm("此操作将导出excel文件, 是否继续?", "提示", {
        confirmButtonText: "确定",
        cancelButtonText: "取消",
        type: "warning"
      })
        .then(_ => {
          isTable?this.putTable():this.putJson();
        })
        .catch(_ => {
          this.$message.info("取消导出");
        });
    },
    // 导出
    putJson() {
      import("@/utils/Export2Excel").then(excel => {
        excel.export_json_to_excel2(
          this.text,
          this.list,
          this.keys,
          new Date() + "export table"
        );
        this.$message.success("导出成功");
      });
    },
    putTable() {
      this.$message.info("waiting");
      import("@/utils/Export2Excel").then(excel => {
        excel.export_table_to_excel('table');
        this.$message.success("导出成功");
      });
    }
  }
};
</script>

<style scoped>
.box {
  display: flex;
}
.box > span {
  min-width: 100px;
}
table {
  margin-top: 30px;
  border-collapse: collapse;
}
thead td {
  min-width: 100px;
  text-align: center;
}
tbody td {
  min-width: 100px;
  text-align: center;
}
.img{
  width:55px;
  height: 55px;
  border-radius: 5px;
}
</style>


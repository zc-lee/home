<template>
  <div class="box">
    <!-- bg -->
    <img
      class="back wh-all"
      src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1550961947555&di=1f5fadeffee90b64aae913cd828d3512&imgtype=0&src=http%3A%2F%2Fpic5.bbzhi.com%2Fchuangyibizhi%2Fchaodasecaibeijingkuanpingbizhi%2Fchaodasecaibeijingkuanpingbizhi_426783_9.jpg"
    >
    <!-- <div class="nav">
      <div class="nav-box">
        <el-collapse-transition>
          <div v-show="showTop">
            <div>
              <span
                class="cate-item cate-hover"
                :class="i==0?'cate-current':''"
                v-for="(v,i) in cate"
                :key="i"
              >
                <a :href="'#'+(i+1)">{{v}}</a>
              </span>
            </div>
          </div>
        </el-collapse-transition>
      </div>
    </div> -->
    <div class="content innerbox">
      <!-- 个人信息 -->
      <div class="cate start" id="1">
        <sapn class="img-box">
          <img src="../../assets/img.jpg">
        </sapn>
        <div class="info-msg">
          <div v-for="(v,i) in info" :key="i">
            <span class="msg-key" v-if="v.key">{{v.key}}</span>
            <a v-if="v.type=='url'" :href="v.value">{{v.value}}</a>
            <span v-else :class="{'title':v.value=='李志超'}">{{v.value}}</span>
          </div>
        </div>
      </div>
      <!-- 教育背景 -->
      <div class="cate" id="2">
        <div class="title">教育背景</div>
        <div class="text">山西大学商务学院（本科）</div>
        <div class="text">软件工程专业 2013.09-2017.06</div>
        <div class="start">
          <span class="zs-box" @click="dialogVisible=true;dialogImg=0">
            <img src="../../assets/byzs-ys.jpg" alt>
          </span>
          <span class="zs-box" @click="dialogVisible=true;dialogImg=1">
            <img src="../../assets/xwz-ys.jpg" alt>
          </span>
        </div>
        <el-dialog :visible.sync="dialogVisible">
          <img v-if="dialogImg==0" class="dialog-img" src="../../assets/byzs.jpg" alt>
          <img v-else-if="dialogImg==1" class="dialog-img" src="../../assets/xwz.jpg" alt>
          <img v-else-if="dialogImg==3" class="dialog-img" src="../../assets/lzzm.jpg" alt>
          <img v-else-if="dialogImg==4" class="dialog-img" src="../../assets/zjtym.jpg" alt>
        </el-dialog>
      </div>
      <!-- 技能描述 -->
      <div class="cate" id="3">
        <div class="title">技能描述</div>
        <div class="text">移动端：小程序+VantWeapp</div>
        <div class="text">pc端：vue+vuex+vue-router+axios+elementUi/iView</div>
        <div class="text">开发工具：vsCode</div>
        <div class="text">代码管理：git+gitee</div>
      </div>
      <!-- 工作经历 -->
      <div class="cate" id="4">
        <div class="title">工作经历</div>
        <div style="margin-left:2em;margin-top:1em;">
          <el-steps active="2" direction="vertical" finish-status>
            <el-step icon="el-icon-caret-right" title="北京松林和创广告有限公司（2016.11-2017.06）实习">
              <div slot="description">
                <div class="text">web前端实习</div>
                <div class="text">负责页面及动态效果实现</div>
              </div>
            </el-step>
            <el-step icon="el-icon-caret-right" title="宁波美杜莎企业孵化器管理有限公司（2017.07.21-2019.01.11）">
              <div slot="description">
                <div class="text">前端开发</div>
                <div class="text">负责小程序、网站开发，包括页面制作及与后台对接。</div>
                <div class="start">
                  <span class="zs-box" @click="dialogVisible=true;dialogImg=3">
                    <img src="../../assets/lzzm-ys.jpg" alt>
                  </span>
                </div>
              </div>
            </el-step>
          </el-steps>
        </div>
      </div>
      <!-- 项目经验 -->
      <div class="cate" id="5">
        <div class="title">项目经验</div>
        <div style="margin-left:2em;margin-top:1em;">
          <el-steps active="12" direction="vertical" finish-status>
            <el-step icon="el-icon-caret-right" title="标准商城">
              <div slot="description">
                <div class="text">项目类型：微信小程序</div>
                <div class="text">项目预览：微信小程序搜索->超级棱镜商城</div>
                <div
                  class="text"
                >项目功能：基本功能有商品的推荐、分类展示、搜索、下单及购物车、订单等购物功能；此外还有店铺的信息介绍、店铺公告、文章推广等推广功能；营销功能有优惠券、秒杀活动等。</div>
              </div>
            </el-step>
            <el-step icon="el-icon-caret-right" title="标准商城后台（pc端）">
              <div slot="description">
                <div class="text">项目类型：PC端后台</div>
                <div class="text">
                  项目预览：
                  <a
                    href="https://www.superprism.cn"
                    target="view_window"
                  >https://www.superprism.cn</a>
                </div>
                <div class="text">体验账号：18058505737</div>
                <div class="text">密码：a1234567</div>
                <div class="text">
                  项目功能："商品管理",
                  "订单管理",
                  "购物车",
                  "店铺故事",
                  "子账号",
                  "店铺公告",
                  "优惠券",
                  "消息推送",
                  "营销工具3款（拼团、秒杀、特价）",
                  "会员卡",
                  "会员储值",
                  "积分商城"
                  "发现资讯",
                  "招代理",
                  "隐藏技术支持标志"
                </div>
              </div>
            </el-step>
            <el-step icon="el-icon-caret-right" title="小程序组件">
              <div slot="description">
                <div class="text">项目类型：微信小程序</div>
                <div class="text">
                  markdown介绍文档：
                  <a
                    href="https://www.showdoc.cc/wxComponent?page_id=276412877400039"
                    target="view_window"
                  >https://www.showdoc.cc/wxComponent</a>
                </div>
                <div class="text">项目体验码：</div>
                <div class="start">
                  <span class="zj-box" @click="dialogVisible=true;dialogImg=4">
                    <img src="../../assets/zjtym.jpg" alt>
                  </span>
                </div>
                <div class="text">需体验授权</div>
                <div class="text">项目描述：将常用小程序功能封装为组件，方便复用。</div>
              </div>
            </el-step>
          </el-steps>
        </div>
      </div>
      <!-- 项目总结 -->
      <div class="cate" id="6">
        <div class="title">项目总结</div>
        <div style="margin-left:2em;margin-top:1em;">
          <el-steps active="3" direction="vertical" finish-status>
            <el-step icon="el-icon-caret-right" title="微信小程序">
              <div slot="description">
                <div class="text">宜有优品（后期）</div>
                <div class="text">信悦科技（前期）</div>
                <div class="text">虎王保险箱</div>
                <div class="text">持久美妆（后期）</div>
                <div class="text">水果商城</div>
                <div class="text">支付小程序</div>
                <div class="text">商家助手（部分功能）</div>
                <div class="text">小程序组件（部分组件）</div>
                <div class="text">小程序自定义布局模拟</div>
                <div class="text">标准商城小程序</div>
                <div class="text">尤你托福（维护及功能修改）</div>
                <div class="text">社区拼团（部分模块功能及整体调整 VantWeapp）</div>
                <div class="text">……</div>
              </div>
            </el-step>
            <el-step icon="el-icon-caret-right" title="百度小程序">
              <div slot="description">
                <div class="text">一直牛</div>
                <div class="text">星空吊顶</div>
                <div class="text">上海公兴搬场物流有限公司</div>
                <div class="text">即刻财经</div>
              </div>
            </el-step>
            <el-step icon="el-icon-caret-right" title="PC端 vue">
              <div slot="description">
                <div class="text">公总号需求提交</div>
                <div class="text">标准商城后台</div>
                <div class="text">社区拼团后台（部分功能）</div>
                <div class="text">水果商城后台（维护）</div>
                <div class="text">美杜莎平台（维护）</div>
                <div class="text">美杜莎后台（维护）</div>
                <div class="text">……</div>
              </div>
            </el-step>
          </el-steps>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  components: {},
  data() {
    return {
      dialogVisible: false,
      showTop: true,
      dialogImg: 0,
      cate: [
        "个人信息",
        "教育背景",
        "技能描述",
        "工作经历",
        "项目经验",
        "项目总结"
      ],
      info: [
        { key: "", value: "李志超" },
        { key: "", value: "1994.06.12" },
        { key: "籍贯", value: "山西" },
        { key: "职位", value: "web前端开发" },
        { key: "工作经验", value: "2年" },
        // { key: "个人网站", value: "https://www.zclee.cn", type: "url" },
        { key: "", value: "18435111384" },
        { key: "", value: "346825961@qq.com" }
      ]
    };
  },
  computed: {},
  mounted() {
    console.log("resume");
  },
  methods: {
  }
};
</script>

<style scoped>
.box {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.cate {
  margin: 3em 0;
}
.nav {
  position: fixed;
  top: 0;
  width: 100%;
  display: flex;
  justify-content: center;
  z-index: 1;
}
.nav-box {
  width: 60%;
  height: 3.125em;
  background-color: #fff;
  padding: 0 3em;
}
.content {
  position: absolute;
  width: 90%;
  height: 100%;
  background-color: rgba(256, 256, 256, 0.3);
  top: 0;
  padding: 0 4em;
}
.title {
  font-family: "Oleo Script", cursive;
  font-weight: 100;
  font-size: 3em;
}
.scroll-y {
  overflow-x: hidden;
  overflow-y: auto;
}
.scroll-y::-webkit-scrollbar {
  display: none;
}
.innerbox {
  overflow-x: hidden;
  overflow-y: auto;
  color: #000;
  font-size: 0.7rem;
  height: 100%;
}
/*滚动条样式*/
.innerbox::-webkit-scrollbar {
  /*滚动条整体样式*/
  width: 0.25em; /*高宽分别对应横竖滚动条的尺寸*/
  height: 0.25em;
}
.innerbox::-webkit-scrollbar-thumb {
  /*滚动条里面小方块*/
  border-radius: 0.3125em;
  -webkit-box-shadow: inset 0 0 0.3125em rgba(0, 0, 0, 0.2);
  background: rgba(0, 0, 0, 0.2);
}
.innerbox::-webkit-scrollbar-track {
  /*滚动条里面轨道*/
  -webkit-box-shadow: inset 0 0 0.3125em rgba(256, 256, 256, 0.9);
  border-radius: 0;
  background: rgba(0, 0, 0, 0.1);
}
.cate-item,
.cate-title {
  font-size: 1.4em;
  font-family: "Oleo Script", cursive;
}
.cate-hover:hover {
  color: #ff0036;
  cursor: pointer;
  background-color: #fff;
}
.cate-current {
  color: #ff0036;
}
.img-box {
  width: 16.25em;
  height: 18.75em;
  overflow: hidden;
  position: relative;
}
.zs-box {
  width: 18.75em;
  height: 12.5em;
  overflow: hidden;
  position: relative;
  margin: 0 2em;
  cursor: pointer;
}
.dialog-img {
  width: 100%;
}
.zj-box {
  width: 12.5em;
  height: 13.75em;
  overflow: hidden;
  position: relative;
  margin: 0 2em;
  cursor: pointer;
}
.img-box img,
.zs-box img,
.zj-box img {
  position: absolute;
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
}
.info-msg {
  margin-left: 4em;
  font-size: 1.3em;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}
.msg-key::after {
  content: "：";
}
.text {
  margin: 1em 0;
  font-size: 1.3em;
  text-indent: 2em;
  line-height: 2;
}
</style>


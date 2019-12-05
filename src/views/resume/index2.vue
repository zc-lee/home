<template>
  <div class="box resume">
    <!-- 个人信息 -->
    <div class="item between">
      <div class="info-msg">
        <div v-for="(v,i) in info" :key="i">
          <span class="msg-key" v-if="v.key">{{v.key}}</span>
          <a v-if="v.type=='url'" :href="v.value">{{v.value}}</a>
          <span v-else :class="{'title':v.value=='李志超'}">{{v.value}}</span>
        </div>
      </div>
      <span class="img-box">
        <!-- <img src="../../assets/img1.jpg"> -->
      </span>
    </div>
    <!-- 教育背景 -->
    <div class="item">
      <el-divider content-position="left">教育背景</el-divider>
      <div class="text pt-20">山西大学商务学院（本科）</div>
      <div class="text">软件工程专业 2013.09-2017.06</div>
      <div class="start">
        <span class="zs-box">
          <img src="../../assets/byzs-ys.jpg" alt>
        </span>
        <span class="zs-box">
          <img src="../../assets/xwz-ys.jpg" alt>
        </span>
      </div>
    </div>
    <!-- 技能描述 -->
    <div class="item" id="3">
      <el-divider content-position="left">技能描述</el-divider>
      <div class="text pt-20">移动端：小程序+VantWeapp</div>
      <div class="text">pc端：vue+vuex+vue-router+axios+elementUi/iView</div>
      <div class="text">开发工具：vsCode</div>
      <div class="text">代码管理：git</div>
    </div>
    <!-- 工作经历 -->
    <div class="item">
      <el-divider content-position="left">工作经历</el-divider>
      <el-timeline class="pt-20">
        <el-timeline-item timestamp="北京松林和创广告有限公司（2016.07-2017.05）实习" placement="top">
          <div class="text">web前端实习</div>
          <div class="text">负责页面及动态效果实现</div>
        </el-timeline-item>
        <el-timeline-item timestamp="宁波美杜莎企业孵化器管理有限公司（2017.07-2019.03)" placement="top">
          <div class="text">web前端开发</div>
          <div class="text">负责小程序、网站开发，包括页面制作及与后台对接。</div>
        </el-timeline-item>
        <el-timeline-item
          timestamp="闪银奇异科技有限公司（昆山农信宝信息技术有限公司/深圳启动力金融服务有限公司）（2019.03-2019.05)"
          placement="top"
        >
          <div class="text">web前端开发</div>
          <div class="text">负责h5app、app后台网站开发，包括页面制作及与后台对接。</div>
          <div class="start">
            <span class="lzzm-box">
              <img src="../../assets/lzzm.jpg" alt>
            </span>
          </div>
        </el-timeline-item>
      </el-timeline>
    </div>
    <!-- 项目经验 -->
    <div class="item">
      <el-divider content-position="left">项目经验</el-divider>
      <el-timeline class="pt-20">
        <el-timeline-item timestamp="标准商城" placement="top">
          <div class="text">项目类型：微信小程序</div>
          <div class="text">项目预览：微信小程序搜索->超级棱镜商城</div>
          <div
            class="text"
          >项目功能：基本功能有商品的推荐、分类展示、搜索、下单及购物车、订单等购物功能；此外还有店铺的信息介绍、店铺公告、文章推广等推广功能；营销功能有优惠券、秒杀活动等。</div>
        </el-timeline-item>
        <el-timeline-item timestamp="标准商城后台（pc端）" placement="top">
          <div class="text">项目类型：PC端后台</div>
          <div class="text">
            项目预览：
            <a href="https://www.superprism.cn" target="view_window">
              <el-link type="primary">https://www.superprism.cn</el-link>
            </a>
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
        </el-timeline-item>
        <el-timeline-item timestamp="小程序组件" placement="top">
          <div class="text">项目类型：微信小程序</div>
          <div class="text">
            markdown介绍文档：
            <a
              href="https://www.showdoc.cc/wxComponent?page_id=276412877400039"
              target="view_window"
            >
              <el-link type="primary">https://www.showdoc.cc/wxComponent</el-link>
            </a>
          </div>
          <div class="text">项目体验码：</div>
          <div class="start">
            <span class="zj-box" @click="dialogVisible=true;dialogImg=4">
              <img src="../../assets/zjtym.jpg" alt>
            </span>
          </div>
          <div class="text">需体验授权</div>
          <div class="text">项目描述：将常用小程序功能封装为组件，方便复用。</div>
        </el-timeline-item>
        <el-timeline-item timestamp="速借后台管理系统" placement="top">
          <div class="text">项目类型：vue后台</div>
          <div class="text">
            项目预览：
            <a href="http://admin.unongbao.cn" target="view_window">
              <el-link type="primary">http://admin.unongbao.cn</el-link>
            </a>
          </div>
          <div class="text">体验账号：18435111384</div>
          <div class="text">密码：lizhichao123</div>
        </el-timeline-item>
        <el-timeline-item timestamp="农猪宝管理后台" placement="top">
          <div class="text">项目类型：vue后台</div>
          <div class="text">
            项目预览：
            <a href="https://admin.nongxb.com/" target="view_window">
              <el-link type="primary">https://admin.nongxb.com</el-link>
            </a>
          </div>
          <div class="text">体验账号：18435111384</div>
          <div class="text">密码：lizhichao123</div>
        </el-timeline-item>
      </el-timeline>
    </div>
    <!-- 项目总结 -->
    <div class="item">
      <el-divider content-position="left">项目总结</el-divider>
      <el-timeline class="pt-20">
        <el-timeline-item timestamp="vue后台" placement="top">
          <div>mds：公总号需求提交、标准商城后台、社区拼团后台、水果商城后台、美杜莎平台、美杜莎后台……</div>
          <div>syqy:速借h5APP、速借后台管理系统、农猪宝管理后台……</div>
        </el-timeline-item>
        <el-timeline-item timestamp="小程序" placement="top">
          <div>微信小程序：宜有优品、信悦科技、虎王保险箱、持久美妆、水果商城、支付小程序、商家助手、小程序组件、标准商城小程序、尤你托福、社区拼团……</div>
          <div>百度小程序：上海公兴搬场物流有限公司、即刻财经、星空吊顶、一直牛……</div>
        </el-timeline-item>
      </el-timeline>
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
        { key: "工作经验", value: "3年" },
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
  methods: {}
};
</script>

<style lang="scss" scoped>
.box {
  width: 100%;
  min-height: 100vh;
  background: url("https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1550961947555&di=1f5fadeffee90b64aae913cd828d3512&imgtype=0&src=http%3A%2F%2Fpic5.bbzhi.com%2Fchuangyibizhi%2Fchaodasecaibeijingkuanpingbizhi%2Fchaodasecaibeijingkuanpingbizhi_426783_9.jpg")
    50% 50% repeat;
  background-size: 100% 100%;
  color: #fff;
  font-size: 1.3em;
  font-family: "Helvetica Neue", Helvetica, "PingFang SC", "Hiragino Sans GB",
    "Microsoft YaHei", "微软雅黑", Arial, sans-serif;
}
.item {
  padding: 2em 0 0 3em;
}
.between {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
.title {
  font-family: "Oleo Script", cursive;
  font-weight: 100;
  font-size: 2.5em;
}
.info-msg {
  text-indent: 1em;
  flex-grow: 1;
  padding-right: 4em;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}
.msg-key::after {
  content: "：";
}
.img-box {
  width: 16.25em;
  height: 18.75em;
  overflow: hidden;
  position: relative;
  margin-right: 3em;
}
.zs-box {
  width: 18.75em;
  height: 12.5em;
  overflow: hidden;
  position: relative;
  margin: 0 2em;
}
.zj-box {
  width: 12.5em;
  height: 13.75em;
  overflow: hidden;
  position: relative;
  margin: 0 2em;
}
.lzzm-box {
  width: 20em;
  height: 13.75em;
  overflow: hidden;
  position: relative;
  margin: 0 2em;
  img {
    position: absolute;
    top: 90%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
  }
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
.el-divider__text {
  font-family: "Oleo Script", cursive;
  font-weight: 100;
  font-size: 2em;
  /* color: #fff; */
  /* background-color: transparent; */
}
.text {
  padding-bottom: 1em;
  text-indent: 1em;
  line-height: 1.5;
}
.dot{
  width: 1.5em;
  height: 1.5em;
}
</style>
<style lang="scss">
.resume {
  .el-timeline-item__timestamp {
    font-size: 1.3em;
    color: #fff;
  }
  .el-timeline-item__content {
    font-size: 1.3em;
    color: #fff;
  }
}
</style>


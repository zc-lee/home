<template>
  <div>
    <!-- 方案
      方案一：
        每次输入规则进行计算
      方案二：
        保存规则，可修改底薪，时长，加班时长等计算
      方案三：
        每日记录出勤，计算每日，最终叠加。
        利：有详细记录。
    -->
    <!-- 薪资计算：
      底薪：
      工作日：法定5天，6,7
      当月工作日 21
      工作时长：法定标准8h
      单双休：
      加班：
      加班标准：国家法定标准，自定义
        国家法定标准
          平时1.5倍，周六日2倍，节假日3倍
        自定义
      计算标准：天，小时
    -->
    <!-- 参数
      基础薪资  底薪
      补助  餐补，交通补助，房补等其他
      加班费  平时加班，休息日加班，节假日加班
      扣除  请假，罚款
      保险  五险一金
      总收入
      总扣除
      最终薪资 总收入-总扣除

      请假记录
    -->
    <div>
      <!-- 步骤 -->
      <div style>
        <el-steps :active="1" process-status="wait" finish-status="success" simple>
          <el-step title="设置规则" icon="el-icon-edit"></el-step>
          <el-step title="步骤 2" icon="el-icon-upload"></el-step>
          <el-step title="步骤 3" icon="el-icon-picture"></el-step>
        </el-steps>
      </div>
      <!-- 内容 -->
      <div class="mt-20">
        <el-form
          ref="form"
          :model="formData"
          :rules="rules"
          label-suffix="："
          inline-message
          label-position="right"
          status-icon
          label-width="200px"
        >
          <el-form-item label="base salary" prop="baseSalary">
            <el-input class="w-300" v-model="formData.baseSalary" placeholder="请输入底薪"></el-input>
          </el-form-item>
        </el-form>
      </div>
      <div>
        <span class="el-checkbox__input mr-20">
          <span class="el-checkbox__inner"></span>
        </span>
        <span class="el-checkbox__input is-indeterminate mr-20">
          <span class="el-checkbox__inner"></span>
        </span>
        <span class="el-checkbox__input is-checked mr-20">
          <span class="el-checkbox__inner"></span>
        </span>
        <span class="el-checkbox__input is-indeterminate is-checked mr-20">
          <span class="el-checkbox__inner"></span>
        </span>
      </div>
      <el-select value="0" placeholder="placeholder">
        <el-option label="all" value="0"></el-option>
        <el-option-group v-for="(m,n) in 2" :key="n" :label="'title-'+n">
          <el-option value="1" class="fs-10 fc-7f" :label="'grouptitle'+n">
            <div class="fc-f7">group title {{n}}</div>
          </el-option>
          <el-option v-for="(v,i) in 3" :key="i" value="i" :label="i+1"></el-option>
        </el-option-group>
      </el-select>
    </div>

    <div></div>
  </div>
</template>

<script>
export default {
  components: {},
  data() {
    return {
      // 表单数据
      formData: {
        baseSalary: null
      },
      // 表单验证
      rules: {
        baseSalary: [
          {
            required: true,
            message: "请输入底薪",
            trigger: "blur" // click/focus/hover/manual
          }
        ]
      }
    };
  }
};
</script>

<style scoped>
.label {
  width: 5rem;
  color: #4f627b;
  padding-right: 0.625rem;
  font-weight: normal;
}
.label::before {
  content: "*";
  color: red;
  font-weight: bold;
}
</style>


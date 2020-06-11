<template>
  <card :title="$t('education')" iden="education">
    <form>
      <!-- School Name -->
      <div class="form-field">
          <label for="">{{$t('school_name')}}</label>
          <input type="text" name="school_name" v-model="education.school">
      </div>
     <!-- Degree -->
      <div class="form-field">
          <label for="">{{$t('degree')}}</label>
          <input type="text" name="degree" v-model="education.degree">
      </div>
      <!-- Field -->
      <div class="form-field">
          <label for="">{{$t('field')}}</label>
          <input type="text" name="field" v-model="education.field"> 
      </div>
      <!-- Graduation Date -->
      <div class="form-field">
          <label for="">{{$t('graduation_date')}}</label>
          <input type="text" name="grad_date" v-model="education.grad_date">
      </div>
      <!-- GPA -->
      <div class="form-field">
          <label for="">{{$t('GPA')}}</label>
          <input type="text" name="gpa" v-model="education.gpa">
      </div>
    </form>
    <div class="preview">
        <h1>{{$t('education')}}</h1>
        <div class="education">
            <h2>
                <span v-if="isSet(education.degree)">{{education.degree}}</span>
                <span v-else class="unset">Degree</span>
                in
                <span v-if="isSet(education.field)">{{education.field}}</span>
                <span v-else class="unset"> Field</span>
            </h2>
            <span v-if="isSet(education.school)">{{education.school}}</span>
            <span v-else>School Name</span>
            <div style="display:flex">
               <span v-if="isSet(education.grad_date)">{{education.grad_date}}</span>
               <span v-else>Graduation Date</span>
               <span>GPA {{education.gpa}}</span>
            </div>
        </div>
    </div>
    <h1></h1>
  </card>
</template>

<script>
import Form from 'vform'

export default {
  scrollToTop: false,

  metaInfo () {
    return { title: this.$t('settings') }
  },

  data: () => ({
      educations:[],
      education:{
          school:'',
          degree:'',
          field:'',
          grad_date:'',
          gpa:''
      }
  }),
  methods: {
    async update(){
      await this.form.patch('/api/settings/password')

      this.form.reset()
    },
    isSet(prop){
        return prop!='';
    }
  }
}
</script>
<style scoped>
    label{
        width:150px;
    }
    #education form{
        flex:1;
    }
    #education .preview{
        padding:0 1em;
        width:300px
    }
    .preview h1{
        font-size:1.4em;
    }
    .education{
        padding-bottom: 0.4em;
        border-bottom: 1px solid #f3f3f3;
    }
    .education h2{
       font-size: 1em;
       margin-bottom: 0em;
    }
    .education>span{
        color: #007bfe;
        font-weight: 500;
        font-size: 0.9rem;
    }
    .education>div{

    }
    .education>div span:first-child{
        flex: 1;
        color: #cacaca;
        font-size: .9rem;
        font-weight: 500;
    }
    .education>div span:last-child{
        font-weight: 600;
        color: #4c4c4c;
        font-size: 1em;
        margin-right: 0.5em;
    }
    .unset{
        color: #c5c5c5;
        font-weight: 400;
    }
</style>
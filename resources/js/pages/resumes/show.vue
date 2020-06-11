<template>
    <div>
        <h1>{{resume.name}}</h1><br>
        <span>{{resume.description}}</span>
        <div>
             <button @click="orderResume"> Order Now </button>
        </div>
    </div>
</template>

<script>
export default {    
    computed:{
        resume(){
            return this.$store.getters['resumes/resume']
        }
    },
    methods:{
        orderResume(){
            axios({
                method:'post',
                url:'/api/orders/create',
                data:{
                    user_id:this.$store.getters['auth/user'].id,
                    resume_id:this.resume.id
                }
            }).then(response=>{
                console.log(response);
            }).catch(error=>{
                console.log(error);
            });
            this.$router.push('/resumes');
        }
    },
    created(){
        this.$store.dispatch('resumes/fetchResume',this.$route.params.id);
    }
}
</script>

<style>

</style>
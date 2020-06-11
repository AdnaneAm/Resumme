<template>
    <div>
        <h1>Edit resume {{resume.id}}</h1>
        <form action="">
            <input type="text" name="name" v-model="resume.name">
            <textarea v-model="resume.description"></textarea>
            <button type="submit" @click.prevent="editResume">Edit resume</button>
        </form>
    </div>
</template>

<script>
export default {    
    middleware:'admin',
    computed:{
        resume(){
            return this.$store.getters['resumes/resume'];   
        }
    },
    methods:{
        editResume(){
            axios.put('/api/resumes/'+this.resume.id,this.resume).then((response)=>{
                if(response.status===200){
                    this.$router.push({path:'/admin/resumes'})
                }
            })
        }
    },
    created(){
        this.$store.dispatch('resumes/fetchResume',{id:this.$route.params.id})
    }
}
</script>

<style>

</style>
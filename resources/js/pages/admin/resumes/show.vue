<template>
    <div>
        <div>
            <h1>{{resume.name}}</h1>
            <p>{{resume.description}}</p>
        </div>
    </div>
</template>

<script>
export default {    
    middleware:'admin',
    computed:{
        resume(){
            return this.$store.getters['resumes/resume']
        }
    },
    created(){
        this.$store.dispatch('resumes/fetchResume',{
            id:this.$route.params.id
        })
    }
}
</script>

<style>

</style>
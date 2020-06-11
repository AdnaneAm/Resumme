<template>
    <div>
        <h1>Resumes page</h1>
        <div v-for="resume in resumes">
            <h1><router-link :to="{path:`/resumes/${resume.id}`}">{{resume.name}}</router-link></h1>
            <p>{{resume.description}}</p>
        </div>
    </div>
</template>

<script>
export default {    
    computed:{
        resumes(){
            return this.$store.getters['resumes/resumes']
        }
    },
    created(){
        this.$store.dispatch('resumes/fetchResumes');
    }
}
</script>

<style>

</style>
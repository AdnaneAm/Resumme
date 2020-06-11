<template>
    <div>
        <h1>Resumes page - Dashboard</h1>
        <div v-for="resume in resumes">
            <h1>{{resume.name}}</h1>
            <p>{{resume.description}}</p>
        </div>
    </div>
</template>

<script>
export default {    
    middleware:'admin',
    data(){
        return{
        }
    },
    computed:{
        resumes(){
            return this.$store.getters['resumes/resumes'];
        }
    },
    methods:{

    },
    created(){
        this.$store.dispatch('resumes/fetchResumes');
    },

}
</script>

<style>

</style>
<template>
    <div>
        <h1>Add a new resume - Dashboard</h1>
        <form action="">
            <input type="text" name="name" placeholder="Enter the resume name" v-model="resume.name">
            <textarea name="description" placeholder="Enter the resume description" v-model="resume.description"></textarea>
            <button type="submit" @click.prevent="addResume">Add resume</button>
        </form>
    </div>
</template>

<script>
export default {    
    middleware:'admin',
    data(){
        return{
            resume:{
                name:null,
                description:null
            }
        }
    },
    methods:{
        addResume(){
            axios.post('/api/resumes/create',this.resume).then(response=>{
                if(response.status === 200) {
                    this.$router.push({ path : '/admin/resumes' });
                }
            });
        }
    }
}
</script>

<style>

</style>
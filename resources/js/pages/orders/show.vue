<template>
    <div>
        <h1>Order number {{ order.id }}</h1>
        <span>{{order.customer}}</span><br>
        <div>
            <span>Resumes : </span>
            <span v-for="resume in order.resumes">{{resume}}, </span>
        </div>
        <span>{{order.status}}</span>
    </div>
</template>

<script>
export default {    
    middleware:'auth',
    computed:{
        order(){
            return this.$store.getters['orders/order'];
        }
    },
    created(){
        this.$store.dispatch('orders/fetchOrder',{id:this.$route.params.id});
    }
}
</script>

<style>

</style>
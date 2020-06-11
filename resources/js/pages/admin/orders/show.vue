<template>
    <div>
        <h1>Order {{order.id}}</h1>
        <p>{{ order.customer }}</p>
        <ul v-for="resume in order.resumes">
            <li>{{ resume }}</li>
        </ul>
    </div>
</template>

<script>
export default {    
    middleware:'admin',
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
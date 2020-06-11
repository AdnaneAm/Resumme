<template>
    <div>
        <div v-for="order in orders">
            <h1><router-link :to="{ path: '/admin/orders/'+order.id}">Order {{order.id}}</router-link></h1>
            <p>{{order.customer}}</p>
            <ul v-for="resume in order.resumes">
                <li>{{resume}}</li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {    
    middleware:'admin',
    computed:{
        orders(){
            return this.$store.getters['orders/orders']
        }
    },
    created(){
        this.$store.dispatch('orders/fetchOrders',{
            id:this.$route.params.id
        })
    }
}
</script>

<style>

</style>
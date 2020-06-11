<template>
    <div>
        <h1>Orders page</h1>
        <table>
            <tr>
                <th>Order ID</th>
                <th>Customer</th>
                <th>Resumes</th>
                <th>Status</th>
            </tr>
            <tr v-for="order in orders">
                <td>{{order.id}}</td>
                <td>{{order.customer}}</td>
                <td>
                    <span v-for="resume in order.resumes">{{resume}}</span>
                </td>
                <td>{{order.status}}</td>
            </tr>
        </table>
    </div>
</template>

<script>
export default {    
    middleware:'auth',
    computed:{
        orders(){
            return this.$store.getters['orders/orders'];
        }
    },
    methods:{

    },
    created(){
        this.$store.dispatch('orders/userOrders',{id:this.$store.getters['auth/user'].id});
    }
}
</script>

<style>

</style>
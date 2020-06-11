export const state={
    orders:null,
    order:null,
};
export const getters={
    orders:state=>state.orders,
    order:state=>state.order,
};
export const mutations={

};
export const actions={
    fetchOrders({state}){
        axios.get('/api/orders').then(response=>state.orders=response.data.data)
        .catch(error=>console.log(error));
    },
    fetchOrder({state},{id}){
        axios.get('/api/orders/'+id).then(response=>{
            state.order=response.data.data;
        })
        .catch(error=>console.log(error));
    },
    userOrders({state},{id}){
        axios.get('/api/orders/user/'+id).then(response=>{
            state.orders=response.data.data;
        }).catch(error=>{
            console.log(error);
        })
    }
};
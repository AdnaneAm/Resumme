export const state={
    resumes:null,
    resume:null
};
export const getters={
    resumes:state=>state.resumes,
    resume:state=>state.resume
};
export const mutations={

};
export const actions={
    fetchResumes({state}){
        axios.get('/api/resumes').then(response=>{
            state.resumes=response.data.data
        })
        .catch(error=>{
            console.log(error)
        });
    },
    fetchResume({state},id){
        axios.get('/api/resumes/'+id).then(response=>{
            state.resume=response.data;
        })
        .catch(error=>console.log(error));
    }
};

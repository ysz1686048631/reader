import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);

 
export default ()=>{
    const store = new Vuex.Store({
           state:{
                 dataList:[]
           },
           getters:{
                sendData(state){
                     return state.dataList;
                }
           },
           mutations:{
                 getData(state,val){
                       state.dataList.push(val);
                       console.log(state.dataList);
                 }
           }
    });
    return store;
};
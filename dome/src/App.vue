<template>
  <div id="app">
      
    <router-view/>
  </div>
</template>

<script>
import store from './store'
export default {
  name: 'App',
  store,
  mounted(){
    let str = '你在电脑前看这段文字，\n写文字的人对你说:\nN年前你来到了这个世界，\nN年后你想改变世界。\n期待你脚踏祥云，\n与自己的代码一起改变世界。\n———选自百度彩蛋💗'
    console.log(`%c${str}`,"font-size:20px;color:#f40");
    console.log("%c🔥 开发时间较短，Bug不可避免🔥 ","font-size:26px;color:#f40");
  }
 
}
</script>

<style>
*{
  margin: 0;
  padding: 0;
  text-decoration: none;
  list-style: none;
}


#app{
    width:100%; 
    height:657px;
    margin: 0 auto;
    font-size: 1.2rem;
    background: #fff;
}
.footer{
    height:3.6rem;
    width:100%;
    position: fixed;
    bottom:0; 
    display: flex;
    flex-direction:row;
    text-align: center;
    
    background: #faf9b0;
    font-size: .6rem;
 
    
} 
.footer a{
    font-family: 'iconfont'; 
    display: flex;
    flex-direction:column;
    flex-grow: 1;
    cursor: pointer;
    justify-content: center;
    align-items: center;
}
.footer a span a{
  color: rgb(145, 145, 145);
}
.footer a span a:nth-of-type(1){
    font-family: 'iconfont'; 
     width: 1.8rem;
     height: 1.8rem;
     font-size: 1.5rem;
     color: rgb(145, 145, 145);
    
}
#user a{
    color: rgb(216, 47, 5);
}
#home a{
    color: rgb(216, 47, 5);
}
#solider a{
  /* color: rgb(216, 47, 5); */
}
#trends a{
 color: rgb(216, 47, 5);
}
</style>

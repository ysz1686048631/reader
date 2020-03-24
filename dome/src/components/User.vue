<template>
      <div class="cont">
              <div class="u_content">
                
                     <div class="u_info">
                           <img id="bg" src="../assets/user_bg.png" alt="">
                           <div class="u_name">
                               <span><img class="userImg" src="../assets/touxiang.jpg" alt=""></span>
                               <span><a href="#">昵称：{{Username}}</a></span>
                               <span></span>
                           </div>
                     </div>
                     <div class="text">
                      
                         <p><i>每个人都会有失去，在失去的瞬间也会有收获...</i></p>
                         
                    </div>    
              </div>
              <div class="u_self">
                  <div class="u_note">
                      <span class="self_header">等级:<i class="grend">Lv.{{grend}}</i></span>
                      <span class="self_header">特权:<i class="grend"><img class="u_img" :src="VipImg"></i></span>
                      <span v-if="showgend" class="self_header" @click="selfbar">
                          <a  href="#" style="color:rgb(82, 82, 82);">个人荣誉</a>
                          <a href="#" :id="selfshow"></a>
                      </span>   
                      <span  :id="show">
                          <a href="#"><img id="se_img" src="../assets/shu.svg"><p>我的荣誉</p></a>
                          <a href="#"><img id="se_img" src="../assets/shu.svg"><p>我的荣誉</p></a>
                      </span>
                      
                      <div class="bars">
                            <Badge :count="sendData.length" type="error">
                                <img   @click="toMybooks" src="../assets/shu.svg" alt=""><a  @click="toMybooks">收藏</a>
                            </Badge>
                            <Badge  type="error">
                                <img src="../assets/tuwen.svg" alt=""><a href="#">图文</a>
                            </Badge>
                            <Badge text="new" type="error">
                                <img src="../assets/yingshi.svg" alt=""><a href="#">影视</a>
                            </Badge>
                            <Badge type="error">
                                <img src="../assets/diantai.svg" alt=""><a href="#">电台</a>
                            </Badge>
                                
                      </div>
                      </div>

                      <div class="note" @click="onMyinfo">
                           <img class="u_img" src="../assets/add.svg" alt=""><a>个人信息</a>
                      </div>
                       <div class="note">
                           <img class="u_img" src="../assets/xiaoxi.svg" alt=""><a>消息中心</a>
                      </div>
                       <div class="note" @click="value1 = true" >
                           <img class="u_img" src="../assets/yijian.svg" alt=""><a>意见反馈</a>
                      </div>
                       <div class="note">
                           <img class="u_img" src="../assets/vipuser.svg" alt=""><a>{{ myvip }}</a>
                      </div>
                       
                         <div class="note">
                           <img class="u_img" src="../assets/shezhi.png" alt=""><router-link :to="{name:'/outlogin'}">设置</router-link>
                      </div>
                      <Divider>当前版本 1.0.3</Divider> 
              </div>
              <!-- 个人信息 -->
                 <div>
                 <Drawer :closable="false"  v-model="value4">
                      
                     <p :style="pStyle">个人信息</p>
                       <div class="demo-drawer-profile">
                             <p>拥互名：{{ Username }}</p>
                             <p>性别：{{ sex | filtA }}</p>
                             <p>特权：{{ vtext }}</p>
                             
                       </div>
                 </Drawer>
                 </div>
                <!-- 反馈 -->
                <Drawer :title="Username" :closable="false" v-model="value1">
                    <p>亲爱的用户你好！欢迎使用读客图书网站，你对该网站有什么意见请联系本站管理员，我们会尽快解决你的问题</p>
                    <p style="color:red">营业时间(19:00-21:00)</p>
                     
                  
                </Drawer>
              <div class="footer">
               <router-link :to="{name:'/'}"><span><a class="icon-shouye"></a><a>主页</a></span></router-link>
               <router-link :to="{name:'/Solider'}"><span><a class="icon-dongtai"></a><a>发现</a></span></router-link>
               <router-link :to="{name:'/trends'}"><span><a class="icon-bianjibanredian"></a><a>动态</a></span></router-link>
               <router-link :to="{name:'/User'}"><span id="user"><a class="icon-wode"></a><a>我的</a></span></router-link>
            </div>
                            
      </div>
      
</template>
<script>
import { mapGetters } from 'vuex';
export default {
    name:'User',
    data(){
        return{
            Username:'理想三旬',
            myvip:'会员特权',
            vtext:'无特权',
            grend:1,
            VipImg:require('../assets/VIPweire.svg'),
            show:'self_grend',
            selfshow:'s_hide',
            showgend:true,
             value1: false,
             value4:false,
             sex:'',
             time:'',
             pStyle:{
                 'font-size': '1.1rem',
                 'font-weight':'300'
             }

        }
    },
    computed:{
          ...mapGetters(['sendData'])
    },
    filters:{
            filtA(val){
                if(parseInt(val)==1){
                     return '男';
                }else{
                     return '女';
                }
            }
    },
    mounted(){
            
            var animal = localStorage.getItem("name");
                
            this.$http.post('/userInfo.php').then(res=>{
                     
                      var datas = res.data;
                      this.grend = parseInt(Math.floor(datas.scount/3));
                      this.Username = datas.sname; 
                      this.sex = datas.sex;
                      this.time = datas.time;
                      if(datas.svip){
                          this.VipImg=require('../assets/renzheng.png');
                          this.myvip='我的VIP';
                          this.vtext='会员'
                      }
            }).catch(err=>{
                            console.log(err);
            }) 
    
    },
    methods:{
        onMyinfo(){
             this.value4=true;
        },
        selfbar:function(){
            if(this.show=="self_grend"){
                this.show='self_greshow';
                  this.selfshow='s_show'; 
            }else{
                this.show="self_grend";  
               this.selfshow='s_hide';
            }
              
                
        },
        toMybooks(){
              console.log('s');
              this.$router.push({
                  path:'/mybooks'
              })
        }
    }
}
</script>
<style>

.u_content{
    width: 100%;
    height: 100%;
    position: relative;
    
}

.grend{
    display: inline-block;
    width: 2.6rem;
    height: 1.2rem;
    line-height: 1.2rem;
    font-size: 1rem;
  
    color: rgb(255, 217, 0);
    text-align: center;
}
.u_content .u_header{
    width: 100%;
    height:1.2rem;
    
  
    line-height: 1.2rem;
    z-index: 99;
    position: absolute;
    top: 0;
}
.u_content .u_header a img{
    width: 1.5rem;
    height: 1.5rem;
    margin: 1rem 1rem;
    
}
.u_content .u_header a:nth-of-type(1){
      float: left;
}
.u_content .u_header a:nth-of-type(2){
      float: right;
}
.u_content .u_info{
    position: absolute;
    top: 0;
    width: 100%;
    height: 17.6rem;
  
    
}
.u_content .u_info #bg{
     width: 100%;
     height: 100%;
     position: absolute;
     
}
.u_content .u_info .u_name{
    position: absolute;
    top: 5.2rem;
     width: 100%;
     height: 10rem;
     
     text-align: center;
}
.u_content .u_info .u_name span{
     width: 100%;
     display: inline-block;

}
.u_content .u_info .u_name .userImg{
      width: 5.0rem;
      height: 5.0rem;
      border-radius: 10rem;
}
.u_content .u_info .u_name a{
    margin-top: 2rem;
    color: seashell;
    font-size: 1rem;
   
}
.u_content .text{
    position: absolute;
    bottom: -15.6rem;
    width: 100%;
    height: 1.5rem;
    color: rgb(201, 201, 201);
    line-height: 1.5rem;
    font-size: .8rem;
    text-align: center;
}
.u_content .text p img{
    vertical-align: middle;
}
.u_img_vip{
     vertical-align: middle;
     margin-right: .5rem;
     width: 1.5rem;
     height: 1.5rem;
     position: absolute;
     right:9rem;
     top: 4rem;
     
}
/* 真个盒子位置 */
.u_self{
    width: 100%;
 
    position: absolute;
    top: 17.5rem;
    /* background: #ccc; */
    margin-bottom: 3.7rem;
    
}
.u_self #self_grend{
    height: 0; 
    display: grid;
    grid-template-columns: repeat(4,1fr);
    grid-column-gap: 1rem;
    align-items: center;
    text-align: center;
    background: #fff;
    overflow: hidden;
    visibility: hidden;
    transition: all 0.5s ease-in 0s;
}
.u_self #self_greshow{
    height: 5rem; 
    display: grid;
    grid-template-columns: repeat(4,1fr);
    grid-column-gap: 1rem;
    align-items: center;
    text-align: center;
    background: #fff;
    overflow: hidden;
    transition: all 0.5s ease-in 0s;
}

.u_self #s_show{
    content: "";
    width: 1rem;
    height: 1rem;
    margin-top: .6rem;
    margin-right: 1rem;
    background: url('../assets/right.svg') no-repeat;
    background-size: 80%;
    float: right;
    line-height: 1rem;
    transform: rotate(90deg);
    transition: all 0.5s ease-in 0s;
}
.u_self #s_hide{
    content: "";
    width: 1rem;
    height: 1rem;
    margin-top: .6rem;
   
    background: url('../assets/right.svg') no-repeat;
    background-size: 80%;
    float: right;
    line-height: 1rem;
    transform: rotate(0deg);
    transition: all 0.5s ease-in 0s;
}
.u_self #self_greshow a{
    height:100%;
    
    border-radius: .5rem;
}
.u_self #self_greshow a #se_img{
    margin-top: .5rem;
    width: 1.8rem;
    height: 1.8rem;
    
}
.u_self #self_greshow a p{
    color: rgb(163, 39, 39);
}
.u_self #self_grend a{
    height:100%;
    
    border-radius: .5rem;
}
.u_self #self_grend a #se_img{
    width: 1.8rem;
    height: 1.8rem;
    margin-top: .5rem;
    
}
.u_self #self_grend a p{
    color: rgb(163, 39, 39);
}

.u_self .bars{
    width: 100%;
    display: flex;
    flex-direction:row;
    justify-content: center;
    align-items: center;
   
    height: 5rem;
    margin-bottom: .3rem;
    border-radius: .5rem;
    
}
.u_self #self_con{
    width: 100%;
    overflow: hidden;
    height: 5rem;
    color: #ccc;
    transition: all 0.5s ease-in 0s;
}
.u_self div{
    /* background: rgb(250, 249, 176); */
}
.u_self .bars span{
    flex-grow: 1;
    text-align: center;
    display: flex;
    flex-direction:column;
    justify-content: center;
    align-items: center;
   
}
.u_self .bars span img{
    height: 1.8rem;
    width: 1.8rem;
}
.u_self .self_header{
    color: rgb(82, 82, 82);
    font-size: .8rem;
    height: 2rem;
    display: inline-block;
    width:100%;
    /* background: #faf9b0; */
    line-height: 2rem;
 
   
    
}
.u_img{
    vertical-align: middle;
     margin-right: .5rem;
     width: 1rem;
     height: 1rem;
}
.u_self .bars span a{
    width:100%;
    height: 1rem;
    display: inline;
    font-size: .8rem;
    color: rgb(114, 114, 114);
    margin-top: .2rem;
}

.u_self .u_note{
    
    
     font-size: .8rem;
     padding:1rem 1rem; 
     
}
.u_self .note{
    
     font-size: .8rem;
     padding:1rem 1rem; 
     border-bottom: 1px solid #fdfca6;
}
.u_self .note::after{
    content: "";
    width: 1rem;
    height: 1rem;
    margin-top: .1rem;
    background: url('../assets/right.svg') no-repeat;
    background-size: 80%;
    float: right;
}
.u_self .note a{
 color: rgb(114, 114, 114);
 
}
.bot{
     border-bottom: 1px solid #fff;
}
</style>
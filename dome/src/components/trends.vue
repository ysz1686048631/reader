<template>
      <div>
          <div class="tr_container">
              <div class="tr_header">
                    <a href="#"><h4><p>{{ data }}</p>.{{ mouths }}.{{ year }}</h4><i @click="setdata" class="jiao"></i></a>
                     <a class="setText" href="#"></a>
                    <span class="times" v-if="timeshow">
                        <a href="#" v-for="count in 31" :key="count" >
                            <p v-if="count==data" style="color:rgb(255, 217, 0);"><strong>{{ addmouth }}-{{ count }}</strong></p>
                            <p v-if="count!=data">{{ addmouth }}-{{ count }}</p>
                            </a>
                    </span>
                   
              </div>
              <div class="content">
                      <div class="usetrends clear">
                            <img src="../assets/wall.jpg">
                            <span>
                                <p>插画 | @黄蕾蕾Linla</p>
                                <p>绝不试图去从感情废墟中刨回任何的断臂惨章！</p>
                            </span>
                              
                            <span>
                                <a href="#"><img src="../assets/shoucang.svg" alt=""></a>
                                <a href="#"><img src="../assets/xihuan.svg" alt=""></a>
                                 
                                 
                                 <a href="#"><img src="../assets/icon_share.svg" alt=""></a>
                                 <a href="#"><img src="../assets/pinglun.svg" alt=""></a>
                                 
                            </span>
                      </div>
                      <div class="text">
                            <p>-阅读-</p>
                      </div>
                        <div  id="share" class="clear">
                            <span id="username">
                                <p><strong style="display:inline-block;">克里斯朵夫</strong><i class="grend">Lv.12</i></p>
                               
                                <p>绝不试图去从感情废墟中刨回任何的断臂惨章！</p>
                            </span>
                            <img src="../assets/default.png">
                            
                              
                            <span>
                                 <p id="time">发表于2019-12-26-13:56</p>
                                <a href="#"><img src="../assets/shoucang.svg" alt=""></a>
                                <a href="#"><img src="../assets/xihuan.svg" alt=""></a>
                                 
                                 
                                 <a href="#"><img src="../assets/icon_share.svg" alt=""></a>
                                 <a href="#"><img src="../assets/pinglun.svg" alt=""></a>
                                 
                            </span>
                      </div>
                          <div  id="share" class="clear">
                            <span id="username">
                               <p><strong style="display:inline-block;">会飞的猪</strong><i class="grend">Lv.2</i></p>
                                <p>站在山上的人永远不要瞧不起上山的人，因为他们随时会取代你。</p>
                            </span>
                            <img src="../assets/user1.jpg">
                            
                              
                            <span>
                                <p id="time">发表于2019-12-26-13:56</p>
                                <a href="#"><img src="../assets/shoucang.svg" alt=""></a>
                                <a href="#"><img src="../assets/xihuan.svg" alt=""></a>
                                 
                                 
                                 <a href="#"><img src="../assets/icon_share.svg" alt=""></a>
                                 <a href="#"><img src="../assets/pinglun.svg" alt=""></a>
                                 
                            </span>
                      </div>
                             <div  id="share" class="clear">
                            <span id="username">
                                <p><strong style="display:inline-block;">理想三旬</strong><i class="grend">Lv.1</i></p>
                                <p>其实有很多东西是需要从旅行中得到的</p>
                            </span>
                            <img src="../assets/15198.jpg">
                            
                              
                            <span>
                                <p id="time">发表于2019-12-26-13:56</p>
                                <a href="#"><img src="../assets/shoucang.svg" alt=""></a>
                                <a href="#"><img src="../assets/xihuan.svg" alt=""></a>
                                 
                                 
                                 <a href="#"><img src="../assets/icon_share.svg" alt=""></a>
                                 <a href="#"><img src="../assets/pinglun.svg" alt=""></a>
                                 
                            </span>
                      </div>
                             <div  id="share" class="clear">
                            <span id="username">
                                <p><strong style="display:inline-block;">Icon</strong><i class="grend">Lv.1</i></p>
                                <p>SVG是一个兼容性很强的图片格式</p>
                            </span>
                            <img src="../assets/11237.jpg">
                            
                              
                            <span>
                                <p id="time">发表于2019-12-26-13:56</p>
                                <a href="#"><img src="../assets/shoucang.svg" alt=""></a>
                                <a href="#"><img src="../assets/xihuan.svg" alt=""></a>
                                 
                                 
                                 <a href="#"><img src="../assets/icon_share.svg" alt=""></a>
                                 <a href="#"><img src="../assets/pinglun.svg" alt=""></a>
                                 
                            </span>
                      </div>
              </div>
          </div>
          <div class="footer">
               <router-link :to="{name:'/'}"><span><a class="icon-shouye"></a><a>主页</a></span></router-link>
               <router-link :to="{name:'/Solider'}"><span><a class="icon-dongtai"></a><a>发现</a></span></router-link>
               <router-link :to="{name:'/trends'}"><span id="trends"><a class="icon-bianjibanredian"></a><a>动态</a></span></router-link>
               <router-link :to="{name:'/User'}"><span><a class="icon-wode"></a><a>我的</a></span></router-link>
            </div>
      </div>
</template>
<script>
export default {
    name:'trends',
    data(){
        return{
            data:'',
            year:'',
            mouths:'',
            timeshow:'',
            addmouth:''
        }
    },
    mounted(){
          var myDate=new Date();
          var day = myDate.getDate(); 
          var mouth = myDate.getMonth() + 1;
          this.addmouth = mouth;
          this.year = myDate.getFullYear();
          switch(mouth){
                    case 1:  
                    this.mouths='January';
                    break;
                    case 2:  
                    this.mouths='February';
                    break;
                    case 3:  
                    this.mouths='March';
                    break;    
                    case 4:  
                    this.mouths='April';
                    break; 
                    case 5:  
                    this.mouths='May';
                    break; 
                    case 6:  
                    this.mouths='June';
                    break;   
                    case 7:  
                    this.mouths='July';
                    break; 
                    case 8:  
                    this.mouths='August';
                    break;   
                    case 9:  
                    this.mouths='September';
                    break;  
                    case 10:  
                    this.mouths='October';
                    break; 
                    case 11:  
                    this.mouths='November';
                    break; 
                    case 12:  
                    this.mouths='December';
                    break; 
                          
          }
          
          this.data = day;
                 
    },
    methods:{
         setdata:function(){
                 if(this.timeshow){
                    this.timeshow='';
                 }else{
                     this.timeshow=true;
                 }
                 
         }
    }
    


}
</script>
<style>
.tr_container{
    width: 100%;
    background: rgb(250, 249, 176);
    padding-bottom: 3.6rem;   
}
.tr_container .tr_header{
    width: 100%;
    height: 2.5rem;
    background: rgb(250, 249, 176);
    padding: 0 .3rem;
    box-sizing: border-box;
    position: fixed;
    top:0;
}
.tr_container .tr_header .setText{
   width: 1.3rem;
    height: 1.3rem;
    background: url('../assets/addtext.svg') no-repeat;
    background-size: 100%;
    float: right;
     margin-top: .6rem;
    margin-right: .6rem;

}
.tr_container .tr_header a{
   color:  rgb(216, 47, 5);
    line-height: 2.3rem;
    font-size: .8rem;
    display: inline-block;
    
}
.tr_container .tr_header .times{
    width: 100%;
    overflow-y: scroll;
    white-space: nowrap;
    display: inline-block;
    
}
.tr_container .tr_header .times a{
     background: #fff;
     padding: 0 1rem;
     border-radius: 1rem;
     font-size: .5rem; 
     margin: 0 .3rem;
     height: 1.5rem;
     line-height: 1.5rem;
}
.tr_container .tr_header a .jiao{
     border: .5rem solid rgb(250, 249, 176);
     border-right: .5rem solid  rgb(216, 47, 5);
     border-bottom: .5rem solid  rgb(216, 47, 5);
     display: inline-block;
     float: right;
     margin-top: -1.3rem;
     margin-right: -.8rem;
}
.tr_container .tr_header a h4 p{
     display: inline-block;
     font-size: 1.8rem;
     
}
.tr_container .content{
     margin-top: 2.5rem;
     width: 100%;
    
     background: rgb(250, 249, 176);
}
.tr_container .content .usetrends img{
      width: 100%;
}
.tr_container .content .usetrends p{
    text-align: center;
    font-size: .6rem;
    color: #ccc;
    margin:1rem 0;
}
.tr_container .content .usetrends span:nth-of-type(2){
     width: 100%;
     padding: .5rem;
     display: inline-block;
     border-bottom:1px solid #fff;
     border-top:1px solid #fff;
     line-height: 1.3rem;
     background: #fff;
     
}
.clear{
    content: "";
    display: block;
    overflow: hidden;
    visibility: visible;
    clear: both;
}
.grend{
      display: inline-block;
    width: 2.6rem;
    height: 1.2rem;
    line-height: 1.2rem;
    font-size: 1rem;
    font-style: normal;
    color: rgb(255, 217, 0);
    text-align: center;
}
.tr_container .content .usetrends span:nth-of-type(1){
    width: 100%;
    text-align: center;
  display: inline-block;
  
    
}

.tr_container .content .usetrends span:nth-of-type(2) a{
    width: 1.0rem;
    height: 1.0rem;
    
    float: right;
    margin-right: 1.2rem;
    
}
.tr_container .content  #share{
    background:#fff; 
    border: transparent;
    padding: 1rem;
    margin-top: .5rem;
}
.tr_container .content .usetrends span:nth-of-type(2) a img{
    width: 100%;
}

.tr_container .content #share img{
      width: 100%;
}
.tr_container .content #share p{
   
    font-size: .8rem;
    color: #000;
    margin:1rem 0;
}
.tr_container .content #share p:nth-child(1){
   
    border-bottom:1px solid rgb(250, 249, 176);
}
.tr_container .content #share p:nth-child(1) strong{
    font-size: 1rem;
}
.tr_container .content #share #time{
    color: #ccc;
    font-size: .8rem;
    margin: 0 0;
    display: inline-block;
}
.tr_container .content #share span:nth-of-type(1){
    width: 100%;
   
  display: inline-block;
  
    
}
.tr_container .content #share span:nth-of-type(2) a{
    width: 1.0rem;
    height: 1.0rem;
    
    float: right;
    margin-right: 1.2rem;
    margin-top: .2rem;
    
}
.tr_container .content #share #share{
    background:rgb(250, 249, 176); 
    border: transparent;
}
.tr_container .content #share span:nth-of-type(2) a img{
    width: 100%;
}
.tr_container .content .text{
    width: 100%;
    text-align: center;
    font-size: .6rem;
    color: #ccc;
    padding: 1rem 0;
    
}
.tr_container .content .user_text{
      width: 100%;
}
</style>
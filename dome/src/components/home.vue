<template>
      <div class="H_content">
                 <div class="Ho_containter">
                    <div class="Ho_header">
                    <a class="setText" href="#"></a>
                    <a class="setText" href="#"></a>
                     <span>
                        <input type="text" placeholder="输入搜索内容">  
                     </span>
                      <p>读客</p>
                      <p>Reader</p>
                      
                    </div>
                   
                    <div class="h_bar">
                            <span>
                             <img src="../assets/icon_7.jpg" alt="">
                             <p>签到</p>
                            </span>  
                            <span>  
                             <img src="../assets/icon_1.jpg" alt="">
                             <p>0元抽奖</p>
                            </span> 
                            <span>
                             <img src="../assets/icon_9.jpg" alt="">
                             <p>新品推荐</p>
                            </span> 
                            <span>
                             <img src="../assets/icon_10.jpg" alt="">
                             <p>免费福利</p>
                            </span> 
                          
                    </div>
                    
                    <div class="con_title"><span>插画专辑</span></div>
                    <div class="break_weater clearB">
                            <div><img src="../assets/bg5.jpg" alt=""></div>
                            <div><img src="../assets/bg4.jpg" alt=""><img src="../assets/bg1.jpg" alt=""></div>
                           
                    </div>
                    <div class="con_title_img"><img id="img" src="../assets/duke.jpg" alt=""></div>
                      <div class="con_title"><span>图书推荐</span></div>
                    <div class="h_books">
                            
                            <span v-for="(item,index) in books" :key="index">
                                  <img :src="item.src"> 
                                  <p>{{ item.name }}</p> 
                             
                                  <Button :size="buttonSize" type="warning"  :loading="loading" @click="toLoading(index)" ghost>
                                        <span v-if="!loading">收藏</span>
                                        <span v-else>Loading...</span>
                                    </Button>
                            </span>
                          
                    </div>
                    <div class="con_title"><span>推荐书籍</span></div>
                    <div class="hot">
                         <Card>
                                <p slot="title" style="color:#f40">
                                    
                                     评价
                                </p>
                                <a href="#" slot="extra" @click.prevent="changeLimit">
                                    
                                    换一批
                                </a>
                                <ul>
                                    <li v-for="(item,index) in randomMovieList" :key="index">
                                        <a target="_blank">{{ item.name }}</a>
                                        <span style="color:red">
                                            <Icon type="ios-star" color="red" v-for="n in 4" :key="n"></Icon><Icon type="ios-star" color="red" v-if="item.rate >= 9"></Icon><Icon type="ios-star-half" color="red" v-else></Icon>
                                            {{ item.rate }}
                                        </span>
                                    </li>
                                </ul>
                            </Card>
                    </div>
                     <div class="con_title"><span>知名作者</span></div>
                    <div class="reader">
                             <Collapse simple>
                            <Panel name="1" class="font">
                                陈磊
                                <p slot="content">看半小时漫画，通五千年历史，用漫画解读历史，开启阅读新潮流。《半小时漫画世界史》是400万粉丝大号“混子曰”创始人陈磊（二混子）力作！读客熊猫君出品</p>
                            </Panel>
                            <Panel name="1" class="font">
                                [英] 毛姆
                                <p slot="content">一位已逾中年的股票经纪人，突然之间离开家庭，也离开安稳的生活，在所有人的质疑中，毅然决然地去追寻成为画家的梦想，用自己喜欢的方式过完余生……

在人类文学史上，“故事圣手”毛姆以画家高更的生平为素材，创造了一个只为梦想而存在的灵魂。出版一百年来，成为无数文艺爱好者的人生之书。</p>
                            </Panel>
                            <Panel name="3" class="font">
                                 [美] 雷蒙德·钱德勒
                                <p slot="content">《漫长的告别》是20世纪美国文学黄金时代四大杰作之一！与《了不起的盖茨比》《太阳照常升起》《在路上》齐名的经典</p>
                            </Panel>
                             <Panel name="4" class="font">
                                 陈磊·半小时漫画团队 
                                <p slot="content">漫画科普开创者二混子新作！全网粉丝700万！熟读唐诗三百首背后的故事，准确理解唐诗的原意、深意和诗意。翻开本书，了解伟大诗人一生的悲欢离合，感受千古名句背后的喜怒哀乐。读客熊猫君出品</p>
                            </Panel>
                           </Collapse>
                    </div>
                   
                        <div class="con_title"><span>其他模块</span></div>
                    <div class="h_con">
                            
                            <span>
                                  <h4><p>会员福利</p> </h4>
                                  <p>享受更多的会员特权</p>    
                                  <p>点击查看详情</p>  
                            </span>
                            <span>
                                  <p>活动合作</p> 
                                  <p>让想法变成限时</p>     
                                  <p>点击查看详情</p> 
                            </span>
                           
                            <span>
                                  <p>更多内容</p> 
                                  <p>敬请期待，更多精彩</p>    
                                
                            </span>
                    </div>
            </div>
               
            <div class="footer">
               <router-link :to="{name:'/'}"><span id="home"><a class="icon-shouye"></a><a>主页</a></span></router-link>
               <router-link :to="{name:'/Solider'}"><span><a class="icon-dongtai"></a><a>发现</a></span></router-link>
               <router-link :to="{name:'/trends'}"><span><a class="icon-bianjibanredian"></a><a>动态</a></span></router-link>
               <router-link :to="{name:'/User'}"><span><a class="icon-wode"></a><a>我的</a></span></router-link>
            </div>
            <router-view></router-view>
      </div>
</template>
<script>
import { mapMutations } from 'vuex';
export default {
    name:'home',
    data(){
          return{
               books:[
                     {
                         src:require('../assets/book1.jpg'),
                         name:"《小王子》",
                         content:'看半小时漫画，通五千年历史，用漫画解读历史，开启阅读新潮流。' 
                     }, {
                         src:require('../assets/book2.jpg'),
                         name:"《月亮与六便士》",
                         content:'看半小时漫画，通五千年历史，用漫画解读历史，开启阅读新潮流。'  
                     }, {
                         src:require('../assets/book3.jpg'),
                         name:"《漫长的告白》",
                         content:'看半小时漫画，通五千年历史，用漫画解读历史，开启阅读新潮流。'  
                     }, {
                         src:require('../assets/book4.jpg'),
                         name:"《小王子》",
                         content:'看半小时漫画，通五千年历史，用漫画解读历史，开启阅读新潮流。'  
                     }, {
                         src:require('../assets/book6.png'),
                         name:"《皮特猫》",
                         content:'看半小时漫画，通五千年历史，用漫画解读历史，开启阅读新潮流。'  
                     }, {
                         src:require('../assets/book5.jpg'),
                         name:"《独居的一年》",
                         content:'出版一百年来，成为无数文艺爱好者的人生之书。。'  
                     }
               ] ,
                loading: false,
                loading2: false,
                buttonSize:'small',
                movieList: [
                    {
                        name: '小王子',
                        rate: 9.9
                    },
                    {
                        name: '漫长的告白',
                        rate: 9.4
                    },
                    {
                        name: '月亮与六便士',
                    
                        rate: 9
                    },
                    {
                        name: '事实',
                    
                        rate: 6.5
                    },
                    {
                        name: '战争灯火',
                    
                        rate: 9.5
                    },
                    {
                        name: '岛上书店',
                    
                        rate: 9.2
                    },
                    {
                        name: '皮特猫',
                    
                        rate: 9.4
                    },
                    {
                        name: '永恒的终结',
                    
                        rate: 9.2
                    },
                    {
                        name: '局外人',
                    
                        rate: 9.3
                    },
                    {
                        name: '半小时漫画世界史',
                    
                        rate: 9.2
                    }
                ],
                randomMovieList: [] 
          }
    },
     mounted () {
            this.changeLimit();
        },
    methods:{
           ...mapMutations(['getData']),
           toLoading (index) {
                this.$Notice.success({
                    title: '恭喜你收藏成功！！！',
                    desc: '赶去我的收藏看看把 '
                });
        
                this['getData'](this.books[index]);
                this.loading = true;
            },
            toLoading2 () {
                this.loading2 = true;
            },
             changeLimit () {
                function getArrayItems(arr, num) {
                    const temp_array = [];
                    for (let index in arr) {
                        temp_array.push(arr[index]);
                    }
                    const return_array = [];
                    for (let i = 0; i<num; i++) {
                        if (temp_array.length>0) {
                            const arrIndex = Math.floor(Math.random()*temp_array.length);
                            return_array[i] = temp_array[arrIndex];
                            temp_array.splice(arrIndex, 1);
                        } else {
                            break;
                        }
                    }
                    return return_array;
                }
                this.randomMovieList = getArrayItems(this.movieList, 5);
            }
    }
}
</script>
<style>
.H_content{
    width: 100%;
    margin-bottom:4rem;
    background: #fff;
    }
.H_content .hot{
       box-sizing: border-box;
       padding: .3rem .3rem;
       margin-top: 1rem;
 }   
 .font{
      font-size: .9rem;
 }   
.Ho_containter .Ho_header{
    width: 100%;
    height: 15rem;
    background: url('../assets/bg3.jpg') no-repeat;
    background-size: 100%;
    box-sizing: border-box;
  
 
    z-index: 999;
    padding-top: .3rem;
    text-align: center;
   
}
.Ho_containter .Ho_header .setText{
    width: 1.3rem;
    height: 1.3rem;
    background: url('../assets/yuan.svg') no-repeat;
    background-size: 100%;
    float: right;
     margin-top: .3rem;
      margin-right: .6rem;
}
.Ho_containter .Ho_header p:nth-of-type(1){
    display: inline-block;
    padding: 0 .1rem;
   
    border-bottom:1px solid rgb(255, 59, 33);
    margin-top: 2.3rem;
    font-size:1.7rem;
}
.Ho_containter .Ho_header p{
    font-size:1.2rem;
    font-weight: 300;
    color: rgb(255, 59, 33);
    text-align: center;
   
}
.Ho_containter .Ho_header small{
   
    color: rgb(255, 59, 33);
    text-align: center;
}

.Ho_containter .Ho_header .setText:nth-of-type(2){
    width: 1.3rem;
    height: 1.3rem;
    background: url('../assets/threed.svg') no-repeat;
    background-size: 100%;
    float: right;
     margin-top: .3rem;
      margin-right: .6rem;
}
.Ho_containter .Ho_header a{
    color:  rgb(216, 47, 5);
    line-height: 2.3rem;
    font-size: .8rem;
    display: inline-block;
    
}
.Ho_containter .Ho_header span{
    border:1px solid red;
    margin-left: 1rem;
    border-radius: 1rem;
    box-sizing: border-box;
    width:17rem;
    height:1.8rem;
    display: inline-block;
    background: #fff;
    
   
}
.Ho_containter .Ho_header span input{
       height: 100%;
       width: 14.5rem;
       outline-style: none;
       border: transparent;
       background: transparent;
       
       display: inline-block;
       margin-bottom:.2rem; 
       text-align: center;
        
     
}
.Ho_containter .Ho_header span::after{
  content: "";
  width: 1.2rem;
  height:1.2rem;
  background: url('../assets/serch.svg') no-repeat;
  display: inline-block;
  vertical-align: middle;
  margin-top: .2rem;
  margin-right: .2rem;
  
}
.Ho_containter .Ho_header small{
    font-size: .5rem;
}
.Ho_containter .h_bar{
     width:90%;
     
     display: grid;
     grid-template-columns: repeat(4,1fr);
    
     grid-column-gap: .5rem;
   
     box-sizing: border-box;
     background: rgb(252, 252, 252);
     padding:.5rem .5rem;
     margin: 0 auto;
     margin-top: -4.6rem;
     border-radius: .3rem;
     text-align: center;
     font-size: .6rem;
     box-shadow: 0 0 .5rem .1rem rgb(151, 151, 151);
}
.Ho_containter .h_bar span{
   
    box-sizing: border-box;
    padding: .7rem .7rem;
}
.Ho_containter .h_bar span img{
    width: 100%;
}
.Ho_containter .h_con{
     width:90%;
     box-sizing: border-box;
   
     margin: 0 auto;
     margin-top: 0rem;
     border-radius: .3rem;
    
     font-size: .8rem;
    
}
.Ho_containter .reader{
        box-sizing: border-box;
        padding: .5rem .3rem;
}
.Ho_containter .break_weater{
     width:90%;
     box-sizing: border-box;
    
     display: grid;
     grid-template-columns: repeat(2,1fr);
     margin: 0 auto;
     margin-top:.5rem;
     border-radius: .3rem;
     
     font-size: .8rem;
     grid-column-gap: .2rem;

}
.Ho_containter .h_books{
    /* height:20rem; */
     width:90%;
     margin: 0 auto;
     display: grid;
     grid-template-columns: repeat(2,1fr);
     grid-column-gap: .2rem;
     grid-row-gap: .2rem;
     margin-top: .5rem;
}
.Ho_containter .h_books span{
    /* height: 2rem; */
    text-align: center;
    font-size: .6rem; 
    /* border: 1px solid rgb(255, 89, 89); */
    box-sizing: border-box;
    padding: .2rem .2rem;
}
.Ho_containter .h_books span img{
    width: 80%;
}
.Ho_containter .break_weater div{
    display: inline-block;
    
    height:12rem;
 
}
.Ho_containter .break_weater div:nth-child(2){
    display: grid;
     grid-template-rows: repeat(2,1fr);
     grid-row-gap: .2rem;
}
.Ho_containter .break_weater div img{
    width: 100%;
    height: 100%;
}
.Ho_containter .h_con span{
    width: 100%;
     display: inline-block;
     background: linear-gradient(to bottom,rgb(250, 178, 178),rgb(253, 81, 81));
     height: 5.5rem;
     border-radius: .3rem;
     color: #fff;
     margin-top: .5rem;
     text-align: center;
     

}
.Ho_containter .h_con span p{
      margin-top: .2rem;
}
.Ho_containter .h_con span p:nth-child(1){
      font-size: 1rem;
}
.Ho_containter .h_con span p:nth-child(3){
     border-radius: .3rem;
     border:1px solid #fff;
     display: inline-block;
     padding: .2rem .3rem;
}
.Ho_containter .con_title{
    background: #fdfca6;
    padding: .1rem 1.2rem;
    color:.8rem;

    margin-top: 1.5rem;
    font-size: .8rem;
}
.Ho_containter .con_title #img{
    width:100%;
    border-radius: .8rem;
}
.Ho_containter .con_title_img{
    background: #fdfca6;
    padding: 1rem 0;
    

    margin-top: 1.5rem;
    font-size: .8rem;
}
.Ho_containter .con_title_img #img{
    width:100%;
   
}
.Ho_containter .con_title span{
    display: inline-block;
}
.Ho_containter .con_title span::before{
    content: " ";
    width:.2rem;
    height:.8rem;
    background: red;
    display: inline-block;
    margin-right: .2rem;
}
.Ho_containter .h_con span:nth-child(2){
     background: linear-gradient(to bottom,rgb(162, 240, 250),rgb(23, 128, 128));
}
.Ho_containter .h_con span:nth-child(3){
     background: linear-gradient(to bottom,rgb(247, 225, 152),rgb(240, 79, 58));
}

</style>
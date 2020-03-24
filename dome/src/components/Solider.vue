<template>
       <div>
             <div class="So_containter">
                    <div class="So_header">
                    <a class="setText" href="#"></a>
                    <a href="#"><h3>发现</h3></a>
                     <span>
                        <input type="text" placeholder="输入搜索内容">  
                     </span>
              </div>
                  <div class="nav_title">分类导航</div>
                 <div class="nav_bar">
                       <span>
                           <img src="../assets/bg_1.jpg">
                           <p>推荐</p>
                       </span>
                       <span>
                           <img src="//img.51miz.com/preview/element/00/01/10/04/E-1100457-82F2B9C1.jpg!/quality/90/unsharp/true/compress/true/format/jpg">
                           <p>图文</p>
                       </span>
                       <span>
                           <img src="//img.51miz.com/preview/muban/00/00/38/59/M-385900-DE79A4D9.jpg!/quality/90/unsharp/true/compress/true/fh/400">
                           <p>国朝风</p>
                       </span>
                       <span>
                           <img src="../assets/bg_4.jpg">
                           <p>音乐</p>
                        </span>  
                        <span>
                           <img src="../assets/bg_3.jpg">
                           <p>电台</p>
                        </span>
                        <span>
                           <img src="//img.51miz.com/preview/element/00/01/09/90/E-1099016-427972C7.jpg!/quality/90/unsharp/true/compress/true/format/jpg">
                           <p>敬请期待</p>
                        </span>
                 </div>
                 <div class="So_con">
                          <div class="So_new">
                              <span><img src="//img.51miz.com/preview/element/00/01/09/43/E-1094337-BB272A9E.jpg!/quality/90/unsharp/true/compress/true/format/jpg"></span>
                              <p>中国风国潮风女孩背景海报</p>
                          </div>
                          <div class="So_new">
                              <span><img src="//img.51miz.com/preview/element/00/01/09/44/E-1094436-A360D3BA.jpg!/quality/90/unsharp/true/compress/true/format/jpg"></span>
                              <p>服装国潮背景海报素材</p>
                          </div>
                          <div class="So_new">
                              <span><img src="//img.51miz.com/preview/element/00/01/09/59/E-1095947-CDD758E5.jpg!/quality/90/unsharp/true/compress/true/format/jpg"></span>
                              <p>鼠年插画新年插画国潮风红色一夜暴富插画</p>
                          </div>
                          <div class="So_new">
                              <span><img src="//img.51miz.com/preview/element/00/01/09/48/E-1094896-9ADA53E8.jpg!/quality/90/unsharp/true/compress/true/format/jpg"></span>
                              <p></p>
                          </div>
                 </div>
             </div>
             <div class="footer">
               <router-link :to="{name:'/'}"><span><a class="icon-shouye"></a><a>主页</a></span></router-link>
               <router-link :to="{name:'/Solider'}"><span id="solider"><a class="icon-dongtai"></a><a>发现</a></span></router-link>
               <router-link :to="{name:'/trends'}"><span><a class="icon-bianjibanredian"></a><a>动态</a></span></router-link>
               <router-link :to="{name:'/User'}"><span><a class="icon-wode"></a><a>我的</a></span></router-link>
            </div>
       </div>
</template>
<script>
export default {
    name:'Solider'
}
</script>
<style>
.So_containter{
   width: 100%;
   font-size: .8rem;
   background: rgb(250, 249, 176);
   margin-bottom: 5rem;
}
.So_containter .So_header{
    width: 100%;
    height: 2.5rem;
    background: rgb(250, 249, 176);
    padding: 0 .3rem;
    box-sizing: border-box;
    position: fixed;
    top:0;
    padding-top: .1rem;
    z-index: 999;
}
.So_containter .So_header .setText{
    width: 1.3rem;
    height: 1.3rem;
    background: url('../assets/addtext.svg') no-repeat;
    background-size: 100%;
  
  
    float: right;
     margin-top: .6rem;
      margin-right: .6rem;
  
  
    

    

}
.So_containter .So_header a{
    color:  rgb(216, 47, 5);
    line-height: 2.3rem;
    font-size: .8rem;
    display: inline-block;
    
}
.So_containter .So_header span input{
       height: 1.2rem;
       outline-style: none;
       border: transparent;
       background: transparent;
       border-bottom:1px solid #fff;
       margin-left: 3rem;
}
.So_containter .So_header span::after{
  content: "";
  width: 1.2rem;
  height:1.2rem;
  background: url('../assets/serch.svg') no-repeat;
  display: inline-block;
  vertical-align: middle;
}
.So_containter .nav_title{
     width: 100%;
     margin-top: 3rem;
     color: rgb(61, 60, 60);
     /* background:rgb(250, 249, 176); */
     padding: .5rem .5rem; 
     box-sizing: border-box;
     border-bottom: 1px solid rgb(250, 249, 176);
}
.So_containter .nav_bar{
     width: 100%;
     height: 11rem;
     display: grid;
     grid-template-columns: repeat(4,1fr);
     grid-template-rows: repeat(2,1fr);
     grid-column-gap: .9rem;
     grid-row-gap: .9rem;
     box-sizing: border-box;
     padding: 1rem;
     
     background: #fff;
    
    
}
.So_containter .nav_bar span{
    
    position: relative;
    border-radius: .3rem .3rem 0 0;
    display: inline-block;
    overflow: hidden;
}
.So_containter .nav_bar span img{
     position:absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
}
.So_containter .nav_bar span p{
    position: absolute;
    bottom: 0;
    background: rgba(112, 112, 112, 0.363);
    width: 100%;
    height: 1rem; 
    text-align: center;
    line-height:1rem;
    color: #fff;
    font-size: .6rem;
    
}
.So_con{
      width: 100%;


}
.So_con .So_new{
    width: 100%;
    background: #fff;
    margin-top: .6rem;
    padding: 1rem;
    box-sizing: border-box;
    
}
.So_con .So_new span{
    width: 100%;
    height: 10rem;
    display: inline-block;
    
}
.So_con .So_new span img{
    width: 100%;
    height: 100%;
}
.So_con .So_new p{
    font-family:'微软雅黑';
    font-size: .5rem;
    font-weight: 700;

}
</style>
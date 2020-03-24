<template>
       <div class="out_con">
                    <div class="note" @click="Privacy">
                            <img class="u_img" src="../assets/yinsi.svg" alt=""><a href="#">隐私设置</a>
                      </div>
                      <div class="note" @click='help'>
                            <img class="u_img" src="../assets/help.svg" alt=""><a href="#">帮助</a>
                      </div>
                       <div class="note">
                          <a class="outlogin" href="index.html">退出登陆</a>
                      </div>
       </div>
</template>
<script>
export default {
      name:'outlogin',
      methods:{
          help:function(){
              alert('解决问题的最好办法就是关机重启！');
          },
          Privacy:function(){
              alert('后台正在测试此功能');
          }
      }
}
</script>
<style>
.out_con{
    width: 100%;
    height: 100%;
    position: relative;
    padding-top: 5rem;
}
.out_con .note{
    
     font-size: .8rem;
     padding:1rem 1rem; 
     border-bottom: 1px solid #fdfca6;

}
.out_con .note:nth-child(1):after{
    content: "";
    width: 1rem;
    height: 1rem;
    margin-top: .1rem;
    background: url('../assets/right.svg') no-repeat;
    background-size: 80%;
    float: right;
}
.out_con .note a{
 color: rgb(114, 114, 114);
}
.out_con .note .outlogin{
      text-align: center;
      width: 100%;
      height: 2rem;
      line-height: 2rem;    
      display: inline-block;
      background: #f40;
      color: #fff;
      border-radius: 1rem;
}
</style>

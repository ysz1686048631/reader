<template>
        <div class="content">
                    <div class="header">
                             <p @click="callrout"><Button type="info" ghost>返回</Button></p> 
                             <p>我的收藏</p>     
                     </div> 
                     <div class="container">
                    <List item-layout="vertical">
                        <ListItem v-for="item in sendData" :key="item.title">
                            <ListItemMeta :title="item.name" :description="item.content" />
                        
                            <template slot="action">
                                <li>
                                  <Badge color="blue" text="在线试读" />
                                </li>
                                <li>
                                    
                                   <Badge color="blue" text="购买赠小人书一本" />
                                </li>
                            </template>
                            <template slot="extra">
                                <img :src='item.src' style="width:5rem">
                            </template>
                        </ListItem>
                    </List>
                      </div>  
                    </div>
     </template>

<script>
import { mapGetters } from 'vuex'
export default {
    name:'mybooks',
    data(){
        return{
              data: [
                    {
                        title: 'This is title 1',
                        description: 'This is description, this is description, this is description.',
                        
                    },
                    {
                        title: 'This is title 2',
                        description: 'This is description, this is description, this is description.',
                        
                    },
                    {
                        title: 'This is title 3',
                        description: 'This is description, this is description, this is description.',
                        
                    }
                ]
        }
    },
    computed:{
          ...mapGetters(['sendData'])
    },
    methods:{
        callrout(){
             this.$router.push({
                   path:'/User'
             })
        }
    }
}
</script>

<style>
.content{
     width: 100%;
}
.content .header{
       width: 100%;
       font-size: 1rem;
       display: flex;
       flex-direction: row;
       align-items: center;
       box-sizing:border-box;
       padding:.5rem .2rem;
       background: seagreen;
}
.content .header p{
      display: inline-block;
      

}
.content .header p:nth-of-type(2){
       margin-left: 5rem;
}
.content .container{
    width: 100%;
    box-sizing: border-box;
    padding: .1rem .5rem;
}
</style>
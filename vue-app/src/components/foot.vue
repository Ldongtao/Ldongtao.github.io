<template>
    <div>
        <footer>
            <div v-for="(foot,i) in foots" :key="i">
            <router-link :to="{name:foot.name}">
                <!-- <mt-badge v-if="i==2" size="small" type="error" class="hot">10</mt-badge> -->
                <i class="iconfont" v-html="foot.icon" > </i>
                <span> {{foot.txt }}</span>
            </router-link>
        </div>
        </footer>
    </div>
</template>


<script>
export default {
    name:"foot",
    data(){
        return{
            foots:[
                {txt:"首页",path:"/app/home",name:"home",icon:"&#xe619;"},
                {txt:"商品",path:"/app/classify",name:"classify",icon:"&#xe778;"},
                {txt:"购物车",path:"/app/cart",name:"cart",icon:"&#xe614;"},
                {txt:"我的",path:"/app/my",name:"my",icon:"&#xe60c;"}
            ]
        }
    }
}
</script>

<style lang="scss" scoped>
footer{
	position:fixed;
	width:100%;
	height:.9rem;
	left:0;
	bottom:0;
	background:#fff;
	display:flex !important;
    z-index:100;
    border-top:1px solid black;
	div{
		flex:1;
		height:0.9rem;
		a{
			display: block;
			width:100%;
			height:100%;
			display:flex;
			flex-direction:column;
			box-sizing:border-box;
			padding:0.06rem 0;
			text-align:center;
			font-family:"微软雅黑";
			color:#999;
			position: relative;
			i{
			width:100%;
			height:0.45rem;
			line-height:0.45rem;
			font-size:0.42rem !important;
			}
			span{
				width:100%;
				height:0.35rem;
				line-height:0.35rem;
				font-size:0.26rem;
			}
			.hot{
				position: absolute;
				top:0;
				left:60%;
				display: inline;
				width:.25rem;
			}
		}
		.nav-active,.router-link-exact-active{
			color:red;
		    border-color:red;
		}

	}
}
</style>

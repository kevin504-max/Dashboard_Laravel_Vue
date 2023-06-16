<template>
    <div class="sidebar">
        <div class="top">
            <div class="avatar">
                <span><i class="fa fa-user"></i></span>
            </div>
            <div class="info">
                <p class="name">Kevin Lucas</p> 
                <p class="status">online</p>
            </div>
        </div>
        <div class="menu">
            <ul class="list-unstyled">
                <li><router-link :to="{name: 'home'}"><i class="fa fa-home"></i> Home</router-link></li>
                <li><router-link :to="{name: 'clients'}"><i class="fa fa-users"></i> Clients</router-link></li>
                <li><router-link :to="{name: 'products'}"><i class="fa fa-box"></i> Products</router-link></li>
                <li><router-link :to="{name: 'sales'}"><i class="fa fa-store"></i> Sales</router-link></li>
                <li><router-link :to="{name: 'report'}"><i class="fa fa-chart-bar"></i> Reports</router-link></li>
            </ul>
        </div>
    </div>
</template>

<script>
export default {
    name: 'SideBarComponent'
}
</script>

<style lang="scss">
.sidebar {
    
    .top {
        width: 100%;
        display: flex;
        justify-content: center;
        padding: 25px 5px;
        align-items: center;
        margin-top: 50px;
    
        .avatar {
            margin-right: 10px;

            span {
                display: block;
                width: 50px;
                height: 50px;
                border-radius: 50%;
                background-color: #CCC;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 25px; 
                color: #666666;
            }
        }

        .info {
            p {
                margin: 0;
                color: #FFF; 
            }

            .name {
                
            }

            .status {
                font-size: 14px;
            }
        }
    }

    .menu {
        margin-top: 15px;
        padding: 10px;

        ul, li {
            margin: 15px 5px;
            font-size: 18px; 
            list-style: none;

            a {
                color: #FFF;
                text-decoration: none;
            }
        } 
        
    }
}
</style>
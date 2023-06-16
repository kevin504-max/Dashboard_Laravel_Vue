<template>
    <DashboardComponent>
        <div slot="slot-pages" class="content-pages">
            <header class="title-pages">
                <p>Home</p>    
            </header>
            <div>
                <div class="row">
                    <div class="col-12 col-md-3">
                        <CardsComponent 
                            :type="'Clients'" 
                            :percentage="'7%'" 
                            :icon="'fa-users'" 
                            :quantity="clients.length" 
                        />
                    </div>
                    <div class="col-12 col-md-3">
                        <CardsComponent 
                            :type="'Products'" 
                            :percentage="'12%'" 
                            :icon="'fa-box'" 
                            :quantity="products.length" 
                        />
                    </div>
                    <div class="col-12 col-md-3">
                        <CardsComponent 
                            :type="'Sales'" 
                            :percentage="'3%'" 
                            :icon="'fa-store'" 
                            :quantity="'270'" 
                        />
                    </div>
                    <div class="col-12 col-md-3">
                        <CardsComponent 
                            :type="'Reports'" 
                            :percentage="'25%'" 
                            :icon="'fa-chart-bar'" 
                            :quantity="'30'" 
                        />
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <ListsComponent :data="clients" description="Clients" :columns="['Name', 'Email']" />
                    </div>
                    <div class="col-12 col-md-6">
                        <ListsComponent :data="products" description="Products" :columns="['Name', 'Price']" />
                    </div>
                </div>
            </div>
        </div>
    </DashboardComponent>
</template>

<script>
import DashboardComponent from '../Dashboard/Dashboard.vue';
import CardsComponent from '@/components/CardsComponent.vue';
import ListsComponent from '@/components/ListsComponent.vue';

const axios = require('axios');

export default {
    name: 'HomeComponent',
    data () {
        return {
            clients: [],
            products: []
        }
    },
    mounted() {
        this.getData();
    },
    methods: {
        async getData() {
            try {
                const response = await axios.get('http://localhost:8000/api/');
            
                this.clients = response.data.clients;
                this.products = response.data.products;
                
            } catch (error) {
                console.error("Error: " + error);
            }
        }
    },  
    components: {
        DashboardComponent,
        CardsComponent,
        ListsComponent
    }
}
</script>

<style lang="scss" src="./style.scss" scoped />
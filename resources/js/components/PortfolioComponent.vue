<template>
    <div class="row">      
        <div class="col-sm-2">
            <ul class="portfolio-categories">
                <li :class="{ active : activeClass == '' }" v-on:click="filter('')">All</li>
                <li v-for="category in categories" :key='category.id' :class="{ active : activeClass == category.id }"  v-on:click="filter(category.id)"> 
                    {{ category.name}} 
                </li>
            </ul>
        </div>
        <div class="col-sm-10">
            <div class="row portfolio-contents">
                <div class="col-sm-6" v-for="portfolio in portfolios" :key='portfolio.id'>
                    <a class="row items" :href="'/portfolio/'+portfolio.slug">
                        <div class="col-sm-12">
                            <h6><strong>{{ portfolio.title }} | {{ portfolio.category['name']}}</strong></h6>
                        </div>
                        <div class="project-item col-sm-8">
                            <img v-if="portfolio.feature_image"  :src="portfolio.feature_image" >
                            <img v-else  :src="'/images/demo.jpg'"> 
                        </div>
                        <div class="col-sm-4">
                            
                            <ul v-if="portfolio.technology" class="portfolio-tech">
                                <li v-for="tech in portfolio.technology">{{tech.technology['name']}}</li>
                            </ul>
                        </div>
                        <div class="col-sm-12">
                            <p>{{ portfolio.description | truncate(100) }}</p>
                        </div>
                    </a>                    
                    
                </div>
                
            </div>
        </div>
        
    </div>
</template>

<script>


    export default {
        props:['categories'],
        data(){
            return {
                activeClass: '',
                id:'',
                portfolios: this.projects
            }
        },
        methods:{
           filter(id){
                axios.post('/get-portfolios',{ id: id})
                .then(response => { 
                    this.portfolios  = response.data.projects;
                    this.activeClass = id;
                })
                .catch(error => this.setError(error));
            }
        },
        mounted() {
            axios.post('/get-portfolios')
           .then(response => { 
                this.portfolios = response.data.projects 
            })
           .catch(error => this.setError(error));
        }
    }
</script> 


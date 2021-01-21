<template>
    <div class="row">
        
        <div class="title-container col-sm-12">
            <h4 class="project-header ">
                <span class="shade-bar">PORTFOLIO</span>
            </h4>
            <div class="portfolio-filter">
                <li  v-bind:class="{ active: activeClass === 'All' }" v-on:click="setFilter('All')">Everything</li>

                <li  v-for="category in categories" :key='category.id' v-bind:class="{ active: activeClass === category.slug }" v-on:click="setFilter(category.slug)"> 
                    {{ category.name}}
                </li>
            </div>
        </div>
    

        <div class="col-sm-12">
            
            <transition-group class="projects" name="projects" >
                <div class="project col-sm-3" v-if="activeClass === project.category['slug'] || activeClass === 'All'" v-bind:key="project.id" v-for="project in projects">
                    <!-- @mouseover="showInfo = project.id" @mouseout="showInfo = null" -->
                    <a :href="'/portfolio/'+project.slug" >
                        <div class="portfolio-item">
                            <img  v-if="project.feature_image" :src="project.feature_image">
                            <img v-else  :src="'/images/demo.jpg'">
                            <div class="item-title">
                                {{ project.title | truncate(25) }}
                            </div>
                        </div>
                        <!-- v-show="showInfo === project.id" -->
                        <!-- <div class="show-if-hover" >
                            {{ project.title }}
                        </div> -->
                    </a> 
                </div>
            </transition-group>
        </div>
    </div>
</template>


<script>
	export default {
        props:['categories'],
        data(){
            return {
                activeClass: 'All',
                projects: this.projects/*,
                showInfo: null*/
            }
        },
        methods:{
           	setFilter: function(filter) {
            	this.activeClass = filter;
        	}
        },
        mounted() {
            axios.post('/get-portfolios',{take: 8 })
           .then(response => { 
                this.projects=response.data.projects

            })
           .catch(error => this.setError(error));
        }
    }

	
</script>
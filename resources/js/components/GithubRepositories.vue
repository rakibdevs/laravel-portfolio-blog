<template>
    <div class="row git-repo-parent ">
        <div class="col-sm-4" v-for="repo in repositories" :key='repo.id'>
            <div class="git-repo">
                
               <a class="repo-title shade-bar" :href="repo.svn_url">{{ repo.name.substr(0,25)}}</a>
                <p class="mb-1 min-h-70">
                    {{ repo.description}}...
                </p>
                <div class="repo-analytics text-muted">
                    <i class="fa fa-star-o"></i>&nbsp; {{repo.stargazers_count}} &nbsp;&nbsp;&nbsp;
                    <i class="fa fa-code-fork"></i>&nbsp; {{repo.forks_count}}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return {
                repositories: []
            }
        },
        mounted() {
            axios.post('/get-github-repositories')
           .then(response => {
                this.repositories = response.data
            })
           .catch(error => this.setError(error));
        }
    }
</script> 


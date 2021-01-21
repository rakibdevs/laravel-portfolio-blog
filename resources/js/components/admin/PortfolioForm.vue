<template>
    <form @submit="submit">
        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control" name="title" id="title" v-model="fields.title"/>
            <div v-if="errors && errors.title" class="text-danger">{{ errors.title[0] }}</div>
        </div>
        <select  v-model="cats" class="form-control" name="cat">
            <option disabled value="">Please select</option>
            <option v-for="category in categories" v-bind:value="category.id">
                {{ category.name }}
            </option>
        </select>

        <li class="filter__item" v-for="technology in technologies">
            <input class="filter__input" type="checkbox"
                   name="technology"
                   id=""
                   :checked="checked"
                   v-model="checked"
                   :value ="technology.id"
            >
            <label>{{technology.name}}</label>
        </li>
        
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" v-model="fields.email" />
            <div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
        </div>
        
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" v-model="fields.message"></textarea>
            <div v-if="errors && errors.message" class="text-danger">{{ errors.message[0] }}</div>
        </div>
        
        <button type="submit" class="btn btn-primary">Send message</button>
    </form>
</template>

<script>
    export default {
        props: ["categories", "technologies"],
        data() {
            return {
                'action': '/admin/portfolio/store',
                'cats' : '',
                'checked' : [],
                'fields': {},
            }
        },
        methods: {
            submit(e) {
                e.preventDefault();
                console.log(this.fields);
                /*axios.post(this.action, this.fields).then(response => {
                    console.log(this.fields);
                    this.fields = {}; //Clear input fields.
                    this.loaded = true;
                    this.success = true;
                }).catch(error => {
                    this.loaded = true;
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }
                });*/
            },
        },
    }
</script>

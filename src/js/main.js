import Vue from 'vue';
import axios from 'axios';

const app = new Vue ({
    el: '#app',
    data: {
        disc: [],
    },
    created() {
        axios.get('http://localhost:81/php-ajax-dischi/scripts/database.php')
        .then(response => {
            this.disc = response.data;
        })
    }
})
import axios from 'axios';
import Alpine from 'alpinejs'

window.axios = axios;
window.Alpine = Alpine

// -- Axios --
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// -- AlpineJS --
Alpine.start()

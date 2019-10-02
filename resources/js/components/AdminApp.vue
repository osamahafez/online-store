<template>
    <App v-bind:admin="admin"></App>
</template>

<script>

import App from './App';

export default {
    data() {
        return {
            admin: true
        }
    },
    components: {
        App
    }
}
</script>


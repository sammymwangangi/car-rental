<template>
	<div class="container">
		<h1>Test Component</h1>
	</div>
</template>

<script>
	import TestComponent from './components/TestComponent.vue';
    export default {
    	name: 'test-component',
		  components: {
		    TestComponent,
		  }
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<template>
	<div class="container">
		<div>
			<transition name="fade">
				<router-view></router-view>
			</transition>
		</div>
	</div>
</template>

<style type="text/css">
	.fade-enter-active, .fade-leave-active {
		transition: opacity .5s;
	}

	.fade-enter, .fade-leave-active {
		opacity: 0;
	}
</style>

<script type="text/javascript">
	export default {}
</script>
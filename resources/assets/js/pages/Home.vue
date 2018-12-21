<template>
	<div class="row profile">
		<div class="col-sm-6 col-primary">
			<div class="profile__image" style="background-image:url(/images/mypic.jpg)"></div>
		</div>
		<div class="col-sm-6 profile__content" v-mousemove>
			<div class="title">Dennis<div class="text-primary point-to-left">Mwea</div></div>
			<h1 class="text-default">Full Stack web developer - Kenya</h1>
			<p class="text-muted">I'm Dennis Mwea and I love to develop<br/>beautiful UI's.<br/>22 year old code ninja from <router-link to="/contact" class="link--styled">Nyeri, Kenya</router-link></p>
		</div>
	</div>
</template>
<script>

export default {

}
</script>

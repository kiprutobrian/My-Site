<template>
	<div>
		<div class="row">
			<div class="col-lg-6 col-primary">
				<contact-form></contact-form>
				<map-canvas position="56.484392,21.017387" zoom="4" icon="/images/mapmarker.png"></map-canvas>
			</div>
			<div class="col-lg-6 flex-first flex-lg-unordered">
				<h1 class="title title--spaced">Contact me</h1>
				
				<div class="list-group">
					<div class="list-group-item">
						<p class="item-title">Email</p>
						<p><a href="mailto:mweadennis@dytech.co.ke">mweadennis@dytech.co.ke</a></p>
					</div>
					<div class="list-group-item">
						<p class="item-title">Phone</p>
						<p><a href="tel:+254705211430">+2547 0521 1430</a></p>
					</div>
					<div class="list-group-item">
						<p class="item-title">Address</p>
						<p>657- Kimathi, Nyeri - Kenya</p>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</template>
<script>
import MapCanvas from '../components/MapCanvas.vue';
import ContactForm from '../components/ContactForm.vue';
import Typed from 'typed.js'
export default {
	components : {
		MapCanvas,
		ContactForm
	}
}
</script>

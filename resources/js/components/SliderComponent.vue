<!-- <template>
	<vueper-slides>
	  	<vueper-slide v-for="(slide, i) in slides" :key="i" :image="slide.url" :title="slide.title" />
	</vueper-slides>
</template> -->
<template>
	<carousel :navigationEnabled="true" :perPage="1" :paginationPosition="'bottom-overlay'" :centerMode="true" :navigationPrevLabel="'<'" :navigationNextLabel="'>'">
		<slide >
			<img style="width:100%" :src="features.feature_image" :title="'Feature Image'">
		</slide>
		<slide v-for="(slide, i) in slides" :key="i">
			<img style="width:100%" :src="slide.url" :title="slide.title">
		</slide>
	</carousel>
</template>
<script type="text/javascript">
	import { Carousel, Slide } from 'vue-carousel';

	export default {
		components: { Carousel, Slide },
        props:['slides','features']
    }
</script> 
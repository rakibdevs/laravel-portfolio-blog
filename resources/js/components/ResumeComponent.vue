<template>
	<div class="row">
		<div class="col-sm-12 pdf-area">
			<div class="pdf-wrapper">	
				<div class="row">
					<div class="col-sm-8 align-left">
						<h3>Resume- Md. Rakibul Islam</h3>
					</div>	
					<div class="col-sm-4 align-right">	
						<button class="btn btn-success" @click="download()">Download</button>	
						<button class="btn btn-danger" @click="$refs.resume.print()">print</button>
					</div>
				</div>
				<pdf ref="resume" src="/resume/rakibulislam.pdf"></pdf>
			</div>
		</div>
	</div>
</template>

<script>
import pdf from 'vue-pdf'

export default {
	components: {
    	pdf
  	},
  	methods:{	
	  	download() {
			axios({
			    url: '/resume/rakibulislam.pdf',
			    method: 'GET',
			    responseType: 'blob',
		    }).then((response) => {
		         var fileURL = window.URL.createObjectURL(new Blob([response.data]));
		         var fileLink = document.createElement('a');

		         fileLink.href = fileURL;
		         fileLink.setAttribute('download', 'resume_md_rakibul_islam.pdf');
		         document.body.appendChild(fileLink);

		         fileLink.click();
		    });
		}
  	}
}
</script>
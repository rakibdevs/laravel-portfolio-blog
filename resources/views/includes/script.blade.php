<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/all.js') }}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162285794-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-162285794-1');

	var menu = document.getElementById("main-menu");
	function openNav() {
	  	menu.style.width = "250px";
	}

	function closeNav() {
	  	menu.style.width = "0";
	}
</script>

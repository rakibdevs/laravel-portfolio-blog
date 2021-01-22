@php
	$segment = request()->segment(1);
@endphp
<header>
	<div class="main-container">		
		<span class="mobile-humberger" onclick="openNav()">&#9776;</span>
		<div id="main-menu" class="main-menu">
			<span href="javascript:void(0)" class="menu-close" onclick="closeNav()">&times;</span>
			<li class="author-logo">
				<a href="{{route('home')}}"><img src="{{ asset('images/logo.png')}}"></a>
			</li>
			<li >
				<a class="{{ ($segment == 'portfolio') ? 'active' : '' }}" href="{{url('portfolio')}}" alt="PORTFOLIO">PORTFOLIO</a></li>
			<li >
				<a class="{{ ($segment == 'media') ? 'active' : '' }}" href="{{url('media/rakibulislam_resume.pdf')}}" alt="RESUME">RESUME</a></li>
			<li>
				<a class="{{ ($segment == 'blog') ? 'active' : '' }}" alt="BLOG">BLOG</a>
			</li>
		</div>
	</div>	
</header>


@php
	$segment = request()->segment(1);
@endphp
<header>
	<div class="main-container">		
		<div class="row">
			<div class="col-sm-4 author-logo">
				<a href="{{route('home')}}"><img src="{{ asset('images/logo.png')}}"></a>
				<span class="mobile-humberger" onclick="openNav()">&#9776;</span>
			</div> 
			<div class="col-sm-8">
				<div id="main-menu" class="main-menu">
					<span href="javascript:void(0)" class="menu-close" onclick="closeNav()">&times;</span>
					<li ><a class="{{ ($segment == '') ? 'active' : '' }}" href="{{route('home')}}" alt="HOME">HOME</a></li>
					<li ><a class="{{ ($segment == 'portfolio') ? 'active' : '' }}" href="{{url('portfolio')}}" alt="PORTFOLIO">PORTFOLIO</a></li>
					<li ><a class="{{ ($segment == 'my-resume') ? 'active' : '' }}" href="{{url('my-resume')}}" alt="RESUME">RESUME</a></li>
					<li ><a class="{{ ($segment == 'blog') ? 'active' : '' }}" alt="BLOG">BLOG</a></li>
				</div>
			</div>
		</div>
	</div>	
</header>


<footer>
	<div class="main-container" id="footer">
		<div class="row">
			
			<div class="col-sm-4 highlight">
				<div class="icon-fork icon-fork-mobile">
					<i title="Fork this project from github!" class="fa fa-code-fork" aria-hidden="true"></i>
				</div>
				<h5 class="mt-10">HIGHLIGHTS</h5>
				<ul class="footer-url">
					<li><a href="">Resume</a></li>
					<li><a href="https://codecanyon.net/item/laravel-admin-template-roles-permission-editable-datatables/26005211">Radmin - Laravel Admin Starter</a></li>
					<li><a href="{{url('docs/number-to-bangla')}}">Number to Bangla</a></li>
					<li><a href="">Pathology Management System</a></li>
					<li><a href="">Portfolio</a></li>
					<li><a href="">Blog</a></li>
					<li><a href="">Laravel</a></li>
				</ul>
				<span class="copy-desktop">@ Md. Rakibul Islam</span>
			</div>
			<div class="col-sm-4 center f-m-desktop">
				<div class="icon-fork">

					<i title="Fork this project from github!" class="fa fa-code-fork" aria-hidden="true"></i>


				</div>
				<p>FOLLOW ME</p>
				<div class="social-icons">
				
					<a href="https://github.com/rakibdevs" title="Find me on Github">
						<i class="fa fa-github" aria-hidden="true"></i>
					</a>
					<a href="https://bd.linkedin.com/in/rakibhstu" title="Find me on Linkedin">
						<i class="fa fa-linkedin" aria-hidden="true"></i>
					</a>
					<a href="https://stackoverflow.com/users/6678641/rakibul-islam" title="Find me on Stackoverflow">
						<i class="fa fa-stack-overflow" aria-hidden="true"></i>
					</a>
					<a href="https://codepen.io/rakibhstu" title="Find me on Codepen">
						<i class="fa fa-codepen" aria-hidden="true"></i>
					</a>
					<a href="" title="Find me on Facebook">
						<i class="fa fa-facebook-official" aria-hidden="true"></i>
					</a>
				</div>
				
			</div>
			<div class="col-sm-4">
				<form class="contact-form" action="{{route('message')}}" method="post">
				@csrf
					<h5>GET IN TOUCH</h5>
					<div class="form-group row">
						<div class="col-sm-6">
							<label class="col-form-label">Name</label>
							<input type="text" class="form-control" name="name" placeholder="Type Name">
						</div>
						<div class="col-sm-6">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" name="email" placeholder="Type Email" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-form-label">Message</label>
						<textarea type="text" class="form-control" name="message" required></textarea> 
					</div>
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
				<div class="col-sm-4 f-m-mobile">
					<p>FOLLOW ME</p>
					<div class="social-icons">
					
						<a href="https://github.com/rakibhstu" title="Find me on Github">
							<i class="fa fa-github" aria-hidden="true"></i>
						</a>
						<a href="https://bd.linkedin.com/in/rakibhstu" title="Find me on Linkedin">
							<i class="fa fa-linkedin" aria-hidden="true"></i>
						</a>
						<a href="https://stackoverflow.com/users/6678641/rakibul-islam" title="Find me on Stackoverflow">
							<i class="fa fa-stack-overflow" aria-hidden="true"></i>
						</a>
						<a href="https://codepen.io/rakibhstu" title="Find me on Codepen">
							<i class="fa fa-codepen" aria-hidden="true"></i>
						</a>
						<a href="" title="Find me on Facebook">
							<i class="fa fa-facebook-official" aria-hidden="true"></i>
						</a>
					</div>
				<p>@ Md. Rakibul Islam</p>
				

			</div>
		</div>
	</div>
</footer>



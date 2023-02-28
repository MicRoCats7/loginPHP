<link rel="stylesheet" href="{{asset('css/form.css')}}">


<div class="login-wrap">
	<div class="login-html">
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Register</label>
		<div class="login-form">
			<form action="/register" method="POST">
				@csrf
				<div class="sign-up-htm">
					<div class="group">
						<label for="user" class="label">Username</label>
						<input id="user" type="text" class="input" name='name'>
					</div>
					<div class="group">
						<label for="pass" class="label">Email</label>
						<input id="pass" type="email" class="input" name='email'>
					</div>
					<div class="group">
						<label for="pass" class="label">Password</label>
						<input id="pass" type="password" class="input" data-type="password" name="password">
					</div>
					<div class="group">
						<input type="submit" class="button" value="Submit">
					</div>
					<div class="hr"></div>
					<div class="foot-lnk">
						<a href="login">Dont Have Account? Login</a>
						</div>	
					</div>
			</form>
		</div>
	</div>
</div>
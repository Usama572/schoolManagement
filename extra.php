<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">

	<title>
		How to change the background
		color of the active nav-item?
	</title>
</head>

<body>
	<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css"/>
	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
	</script>
	<script src=
"https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js">
	</script>
	<script src=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js">
	</script>

	<style>
		.nav-link {
			color: green;
		}

		.nav-item>a:hover {
			color: green;
		}

		/*code to change background color*/
		.navbar-nav>.active>a {
			background-color: #C0C0C0;
			color: green;
		}
	</style>
	<ul class="navbar-nav">
		<li class="nav-item active">
			<a class="nav-link" href="#">
				Home
				<span class="sr-only">
					(current)
				</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">
				GeeksForGeeks Interview Prep
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">
				GeeksForGeeks Courses
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link disabled"
				href="#">Disabled</a>
		</li>
	</ul>

	<script>
		$(document).ready(function () {

			$('ul.nav-links> li')
					.click(function (e) {
				$('ul.nav-links> li')
					.removeClass('active');
				$(this).addClass('active');
			});
		});
	</script>
</body>

</html>

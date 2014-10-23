<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> @yield('title', 'p3') </title>

		<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		div {
			width: 500px;
			height: 300px;
			position: center;
			margin: 0 auto;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>

	@yield('head')

</head>

<body>

	<div>
		@yield('content')
	</div>

</body>
</html>
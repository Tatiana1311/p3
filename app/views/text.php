<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Text Generator</title>
	<style>
		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.text {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
</head>
<body>
	<div class="text">
		<h1>Developer's Best Friend.</h1>
		<form method='POST'>
			<input name="_token" type="hidden" value="r5HDvewt1ZFBghc6RajeRIcSq5tvcGO4tDh6HJhU">	
			<label for="paragraphs">Paragraphs</label>				
			<input maxlength="1" name="paragraphs" type="text" value="4" id="paragraphs"> (Max: 9)
		
			<input type="submit" value="Generate text!"> 
		</form>
	</div>
</body>
</html>
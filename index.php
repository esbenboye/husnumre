<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/postnumre.js"></script>
<script type="text/javascript" src="js/init.js"></script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Find antal husnumre</title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="span12">
			<form class="form-horizontal">
				
				<legend>Søg på antal husnumre</legend>
				
				<div class="control-group">
					<label class="control-label">Postnummer:</label>
					<div class="controls">
						<input type="text" id="postnummer" value=""/>
					</div>					
				</div>
				
				<div class="control-group">
					<label class="control-label">Gadenavn</label>
					<div class="controls">
						<input type="text" id="gadenavn"/>
					</div>
				</div>
				
				<div class="control-group">
					<label class="control-label">&nbsp;</label>
					<div class="controls">
						<a href="#" class="btn" id="findhusstande">Find antal husnumre</a>
					</div>
				</div>
			
				<div class="control-group">
					<label class="control-label">&nbsp;</label>
					<div class="controls">
						<span id="result"></span>
					</div>
				</div>
				
			</form>
		</div><!-- // div.span12 -->
		
	</div><!-- // .row -->
</div> <!-- // .container -->
</body>
</html>

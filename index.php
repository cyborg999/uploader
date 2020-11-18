<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" href="./dropzone/dist/min/dropzone.min.css">
    <script src="./dropzone/dist/min/dropzone.min.js"></script>
</head>
<body>
	<style type="text/css">
		#dropzone {
			padding: 50px 20px;
			margin: 20px auto;
			border: 5px dashed #eee;
			display: inline-block;
			width: 100%;
			position: relative;
			box-sizing: border-box;
		}
		#progress {
			width: 100%;
			height: 20px;
			background: black;
			position: relative;
			padding: 2px;
			box-sizing: border-box;
		}
		#progress span {
			position: absolute;
			width: 0%;
			height: 20px;
			box-sizing: border-box;
			background: white;
		}
	</style>
	<form  id="dropzone" action="upload.php">
		<input type="hidden" name="assetupload" value="true">
		<p class="caption">Drop files here</p>
	</form>
	<div id="progress">
		<span></span>
	</div>
	<div id="link">
		<a href="./uploads/"></a>
	</div>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
	(function($){
		$(document).ready(function(){
			var myDropzone = new Dropzone("#dropzone");

		
			myDropzone.on("complete", function(file) {
				console.log(file.name);
				$("#link a").attr("href", "./uploads/"+file.name);
				$("#link a").html(file.name);

				
				$(file.previewElement).find(".dz-success-mark, .dz-error-mark,.dz-details").remove();
			
			});

			myDropzone.on("uploadprogress", function(file, progress, bytesSent) {
				$("#progress span").css("width", progress + "%");
				$("#progress span").html( progress + "%");
				console.log(progress);
			});

		});
	})(jQuery);
	</script>
</body>
</html>
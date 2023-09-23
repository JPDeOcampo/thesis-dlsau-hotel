$(document).ready(function(){
		$pic = $('<img id = "image" width = "100%" height = "100%"/>');
		$lbl = $('<center id = "lbl">[Photo]</center>');
		$("#photo").change(function(){
			$("#lbl").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image").remove();
				$lbl.appendTo("#preview");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic.appendTo("#preview");
					$("#image").attr("src", this.result);
				}
			}
		});
	});
	
	$(document).ready(function(){
		$pic1 = $('<img id = "image1" width = "100%" height = "100%"/>');
		$lbl1 = $('<center id = "lbl1">[Photo]</center>');
		$("#photo1").change(function(){
			$("#lbl1").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image1").remove();
				$lbl1.appendTo("#preview1");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic1.appendTo("#preview1");
					$("#image1").attr("src", this.result);
				}
			}
		});
	});
	
	$(document).ready(function(){
		$pic2 = $('<img id = "image2" width = "100%" height = "100%"/>');
		$lbl2 = $('<center id = "lbl2">[Photo]</center>');
		$("#photo2").change(function(){
			$("#lbl2").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image2").remove();
				$lbl2.appendTo("#preview2");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic2.appendTo("#preview2");
					$("#image2").attr("src", this.result);
				}
			}
		});
	});
	
		$(document).ready(function(){
		$pic3 = $('<img id = "image3" width = "100%" height = "100%"/>');
		$lbl3 = $('<center id = "lbl3">[Photo]</center>');
		$("#photo3").change(function(){
			$("#lbl3").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image3").remove();
				$lbl3.appendTo("#preview3");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic3.appendTo("#preview3");
					$("#image3").attr("src", this.result);
				}
			}
		});
	});
	
		$(document).ready(function(){
		$pic4 = $('<img id = "image4" width = "100%" height = "100%"/>');
		$lbl4 = $('<center id = "lbl4">[Photo]</center>');
		$("#photo4").change(function(){
			$("#lbl4").remove();
			var files = !!this.files ? this.files : [];
			if(!files.length || !window.FileReader){
				$("#image4").remove();
				$lbl4.appendTo("#preview4");
			}
			if(/^image/.test(files[0].type)){
				var reader = new FileReader();
				reader.readAsDataURL(files[0]);
				reader.onloadend = function(){
					$pic4.appendTo("#preview4");
					$("#image4").attr("src", this.result);
				}
			}
		});
	});
	

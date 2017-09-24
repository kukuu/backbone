<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Untitled</title>
	<script id="indexTemplate" type="text/x-jquery-tmpl">
		<p><a href="#subAlbum/${cid}"><img src="${attributes.image}" alt="${attributes.title}"></a></p>
		<span>${attributes.title}</span>
	</script>
	
	<script id="subIndexTemplate" type="text/x-jquery-tmpl">
			//subfolder/find from collection of folders, folder/attach relevant pid
		<p><a href="#subAlbum/${sulbalbum}/${atributes.pid}"><img src=""></a></p>
		<span>${attributes.title}</span>
	</script>
	
	<script id="itemTemplate" type="text/x-jquery-tmpl">
		<p><img src="${attributes.large_image}"></a></p>
		<span>${attributes.title}</span>
	</script>
</head>

<body>

<php
	foreach($jason_a as $p=>$k){
		
	}


?>


</body>
</html>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Grid/List View Switcher Demo</title>
  <link rel="shortcut icon" href="http://vandelaydesign.com/favicon.ico">
  <link rel="icon" href="http://vandelaydesign.com/favicon.ico">
  <link rel="stylesheet" type="text/css" href="styles.css">

     <title>Multi-Level Backbone Image Gallery</title>
        <link rel="stylesheet" href="gallery.css" type="text/css" media="screen" charset="utf-8" />
        <link rel="stylesheet" href="shadows.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="buttons.css" type="text/css" media="screen" charset="utf-8" />

		<!-- style for switch -->
		 <link rel="stylesheet" type="text/css" href="styles.css">
		 <!-- end switch style -->
	<!-- style for switch -->
		 <link rel="stylesheet" type="text/css" href="styles.css">
		 <!-- end switch style -->

                
                <script id="indexTmpl" type="text/x-jquery-tmpl">
                <div class="item drop-shadow round">
                 <div class="item-image">
                     <a href="#subalbum/${cid}"><img src="${attributes.image}" alt="${attributes.title}" /></a>
                 </div>
                 <div class="item-artist">${attributes.artist}</div>
                    <div class="item-title">${attributes.title}</div>
                    <div class="item-years">${attributes.years}</div>
                </div>
                </script>
				
			
				<script id="subindexTmpl" type="text/x-jquery-tmpl">
                <div class="item  drop-shadow round">
                 <div class="item-image subalbum">
                     <a href="#subalbum/${subalbum}/${attributes.pid}"><img src="${attributes.image}" alt="${attributes.title}" alt="No images in this folder"/></a> 
                 </div>
                 <div class="item-artist">${attributes.artist}</div>
                    <div class="item-title">${attributes.title}</div>
                    <div class="item-price">$${attributes.price}</div>
                </div>
	
                </script>
				
     
                <script id="itemTmpl" type="text/x-jquery-tmpl">
                <div class="item-detail">
                  <div class="item-image drop-shadow round"><img src="${attributes.large_image}" alt="${attributes.title}" /></div>
                  <div class="item-info">
                    <div class="item-artist">${attributes.artist}</div>
                    <div class="item-title">${attributes.title}</div>
                    <div class="item-price">$${attributes.price}</div>
					<br />
                    <div class="item-link"><a href="${attributes.url}" class="button">Buy this item</a></div>
                    <div class="back-link"><a href="#" class="button">&laquo; Back to Albums</a></div>
                  </div>
                </div>
                </script>
</head>

<body> 
	<div id="wrap">
		<header>
			<span class="list-style-buttons">
				<a href="#" id="gridview" class="switcher"><img src="images/grid-view.png" alt="Grid"></a>
				<a href="#" id="listview" class="switcher active"><img src="images/list-view-active.png" alt="List"></a>
			</span>
			<h1> <a href="http://localhost/SPA/addyosmani-backbonejs/index.php">Enter the Mall</a></h1>

		</header>
		
		<ul id="products" class="list clearfix">
			<!-- row 1 -->
			<li class="clearfix">
				<section class="left">
					<img src="images/products/list-default-thumb.png" alt="default thumb" class="thumb">
					<h3>Product Name</h3>
					<span class="meta">Product ID: 543J423</span>
				</section>
				
				<section class="right">
					<span class="price">&pound;45.00</span>
					<span class="darkview">
					<a href="javascript:void(0);" class="firstbtn">Buy<!-- <img src="images/read-more-btn.png" alt="Read More..."> --></a>
					<a href="javascript:void(0);"><img src="images/add-to-cart-btn.png" alt="Add to Cart"></a>
					</span>
				</section>
			</li>
			
			<!-- row 2 -->
			<li class="clearfix alt">
				<section class="left">
					<img src="images/products/list-default-thumb.png" alt="default thumb" class="thumb">
					<h3>Product Name</h3>
					<span class="meta">Product ID: 543J424</span>
				</section>
				
				<section class="right">
					<span class="price">&pound;55.00</span>
					<span class="darkview">
					<a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Read More..."></a>
					<a href="javascript:void(0);"><img src="images/add-to-cart-btn.png" alt="Add to Cart"></a>
					</span>
				</section>
			</li>
			
			<!-- row 3 -->
			<li class="clearfix third">
				<section class="left">
					<img src="images/sale-banner.png" alt="on sale" class="featured-banner">
					<img src="images/products/list-default-thumb.png" alt="default thumb" class="thumb">
					<h3>Product Name</h3>
					<span class="meta">Product ID: 543J425</span>
				</section>
				
				<section class="right">
					<span class="price">&pound;32.00</span>
					<span class="darkview">
					<a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Read More..."></a>
					<a href="javascript:void(0);"><img src="images/add-to-cart-btn.png" alt="Add to Cart"></a>
					</span>
				</section>
			</li>
			
			<!-- row 4 -->
			<li class="clearfix alt">
				<section class="left">
					<img src="images/products/list-default-thumb.png" alt="default thumb" class="thumb">
					<h3>Product Name</h3>
					<span class="meta">Product ID: 543J426</span>
				</section>
				
				<section class="right">
					<span class="price">&pound;70.00</span>
					<span class="darkview">
					<a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Read More..."></a>
					<a href="javascript:void(0);"><img src="images/add-to-cart-btn.png" alt="Add to Cart"></a>
					</span>
				</section>
			</li>
			
			<!-- row 5 -->
			<li class="clearfix">
				<section class="left">
					<img src="images/products/list-default-thumb.png" alt="default thumb" class="thumb">
					<h3>Product Name</h3>
					<span class="meta">Product ID: 543J427</span>
				</section>
				
				<section class="right">
					<span class="price">&pound;99.00</span>
					<span class="darkview">
					<a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Read More..."></a>
					<a href="javascript:void(0);"><img src="images/add-to-cart-btn.png" alt="Add to Cart"></a>
					</span>
				</section>
			</li>
			
			<!-- row 6 -->
			<li class="clearfix alt third">
				<section class="left">
					<img src="images/products/list-default-thumb.png" alt="default thumb" class="thumb">
					<h3>Product Name</h3>
					<span class="meta">Product ID: 543J428</span>
				</section>
				
				<section class="right">
					<span class="price">&pound;45.00</span>
					<span class="darkview">
					<a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Read More..."></a>
					<a href="javascript:void(0);"><img src="images/add-to-cart-btn.png" alt="Add to Cart"></a>
					</span>
				</section>
			</li>
			
			<!-- row 7 -->
			<li class="clearfix">
				<section class="left">
					<img src="images/new-product-banner.png" alt="new product" class="featured-banner">
					<img src="images/products/list-default-thumb.png" alt="default thumb" class="thumb">
					<h3>Product Name</h3>
					<span class="meta">Product ID: 543J429</span>
				</section>
				
				<section class="right">
					<span class="price">&pound;25.00</span>
					<span class="darkview">
					<a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Read More..."></a>
					<a href="javascript:void(0);"><img src="images/add-to-cart-btn.png" alt="Add to Cart"></a>
					</span>
				</section>
			</li>
			
			<!-- row 8 -->
			<li class="clearfix alt">
				<section class="left">
					<img src="images/products/list-default-thumb.png" alt="default thumb" class="thumb">
					<h3>Product Name</h3>
					<span class="meta">Product ID: 543J430</span>
				</section>
				
				<section class="right">
					<span class="price">&pound;60.00</span>
					<span class="darkview">
					<a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Read More..."></a>
					<a href="javascript:void(0);"><img src="images/add-to-cart-btn.png" alt="Add to Cart"></a>
					</span>
				</section>
			</li>
			
			<!-- row 9 -->
			<li class="clearfix third">
				<section class="left">
					<img src="images/products/list-default-thumb.png" alt="default thumb" class="thumb">
					<h3>Product Name</h3>
					<span class="meta">Product ID: 543J431</span>
				</section>
				
				<section class="right">
					<span class="price">&pound;102.00</span>
					<span class="darkview">
					<a href="javascript:void(0);" class="firstbtn"><img src="images/read-more-btn.png" alt="Read More..."></a>
					<a href="javascript:void(0);"><img src="images/add-to-cart-btn.png" alt="Add to Cart"></a>
					</span>
				</section>
			</li>
			
			<li>
			<!-- added -->
				<script src="LAB.min.js" type="text/javascript"></script>

        
<?


//PHP fallback to enable graceful degredation


//feel free to substitute with a more secure read-in method
$json = file_get_contents("data/album1.json");
$json_a=json_decode($json,true);
$folderType = $_GET['view'];
$index = $_GET['ind'];
$subal = $_GET['subalbum'];
$subalbums = array();
$i =0; $j =0;
error_reporting(0);

//expose convenient access to subalbums
foreach ($json_a as $p => $k){
    foreach($k["subalbum"] as $sub){ 
		 $subalbums[$i][$j] = $sub;
         $j++;
	}
	$i++;
} 

//handle 'view' switching
switch($folderType){
	case "subalbum":
		echo "<ul class='gallery'>";
		 foreach($subalbums[$index] as $sub){
		  echo "<li class='item drop-shadow round'><a href='"  . $sub['large_image'] . "'><img src='" . $sub['image'] . "'></img>" .  $sub['title']  . "</a> " . $sub['artist'] ." </li>";
	 
		  } 
		echo "</ul>";	    
	break;
	
	default:
	    $ind = 0;
		echo "<ul class='gallery'>";
		foreach($json_a as $p => $k){
		   echo "<li class='item drop-shadow round'><a href='index.php?view=subalbum&ind=$ind'><img src='" . $k['image'] . "'></img>" .  $k['title']  . "</a> " . $k['years'] ." </li>";
		   $ind++;
		}
		echo "</ul>";
	break;
}


?>
			<!-- end -->
			
			</li>
		</ul>
		
		<footer>
			&nbsp;
		</footer>
	</div>
       <script src="LAB.min.js" type="text/javascript"></script>

        
<?


//PHP fallback to enable graceful degredation


//feel free to substitute with a more secure read-in method
$json = file_get_contents("data/album1.json");
$json_a=json_decode($json,true);
$folderType = $_GET['view'];
$index = $_GET['ind'];
$subal = $_GET['subalbum'];
$subalbums = array();
$i =0; $j =0;
error_reporting(0);

//expose convenient access to subalbums
foreach ($json_a as $p => $k){
    foreach($k["subalbum"] as $sub){ 
		 $subalbums[$i][$j] = $sub;
         $j++;
	}
	$i++;
} 

//handle 'view' switching
switch($folderType){
	case "subalbum":
		echo "<ul class='gallery'>";
		 foreach($subalbums[$index] as $sub){
		  echo "<li class='item drop-shadow round'><a href='"  . $sub['large_image'] . "'><img src='" . $sub['image'] . "'></img>" .  $sub['title']  . "</a> " . $sub['artist'] ." </li>";
	 
		  } 
		echo "</ul>";	    
	break;
	
	default:
	    $ind = 0;
		echo "<ul class='gallery'>";
		foreach($json_a as $p => $k){
		   echo "<li class='item drop-shadow round'><a href='index.php?view=subalbum&ind=$ind'><img src='" . $k['image'] . "'></img>" .  $k['title']  . "</a> " . $k['years'] ." </li>";
		   $ind++;
		}
		echo "</ul>";
	break;
}


?>
        <script type="text/javascript">
		   $LAB
		   .script("jquery-1.4.4.min.js").wait()
		   .script("jquery.tmpl.min.js")
		   .script("underscore-min.js")
		   .script("backbone-min.js")
		   .script("cacheprovider.js").wait()
		   .script("gallery.js");    
		   .script("switch.js");   
        </script>
</body>
</html>
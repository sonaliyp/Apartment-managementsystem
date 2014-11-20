<!DOCTYPE html>
<html>
<head>
      <style>
ul
{
float:left;
width:100%;
padding:0;
margin:0;
list-style-type:none;
}
a
{
float:left;
//width:em;
text-decoration:none;
color:white;
background-color:purple;
padding:0.2em 0.6em;
border-right:1px solid white;
}
a:hover {background-color:#ff3300;}
li {display:inline;}
</style>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>

<script>
function initialize()
{
var mapProp = {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("googleMap")
  ,mapProp);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
  <fieldset>
      <legend></legend> 
 <div id="menu">
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="floorplan.php">Floor Plans and pricing </a></li>
<li><a href="comunity_features.php">Community features </a></li>
<li><a href="Map_Direction.php">Map and direction</a></li>
<li><a href="image_slider.php">Photos</a></li>
<li><a href="Login.php">Login</a></li>
<li><a href="inquery.php">Inquiry </a></li>
<li><a href="">Community Map </a></li>
<li><a href="../controller/reviews_con.php">Reviews</a></li>
<li><a href="aboutUs.php">About us</a></li>

</ul>
 </div> <br></br>
 
<div id="googleMap" style="width:400px;height:300px;"></div>
<a href="services.html">login</a>
  </fieldset>
    
</body>
</html> 
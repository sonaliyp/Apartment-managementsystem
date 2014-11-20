<!DOCTYPE html>
<html>
<head>
    <style>
body {
 background-color: lightyellow;
//border: 3px dotted black;
margin: 10px;
padding-bottom: 20px;
 width:50%;
        margin:auto;
}
section {
   background-color: white;
//border: 2px solid black;
width: 700px;
margin: 20px; /* all four sides */
padding: 10px; /* all four sides */
}
h1,p{
    //background-color: white; 
//border: 1px dashed black;
padding: 10px;
}
h1 ,p{
    
margin: .0em 0 0em; /* .5em top, 0 right and left, .25em bottom */
padding-left: 15px;
}
p {
    
margin: 0; /* all four sides */
padding-left: 15px;
}


        
    body{
                background-image: url("../images/sky.jpg");
                

LEGEND { position: relative; width: 50 }
            
            p
{
background-color:yellow;
}
p.padding
{
padding-top:25px;
padding-bottom:25px;
padding-right:5px;
padding-left:50px;
}
            }
          
</style>
<script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>

<script>
var myCenter=new google.maps.LatLng(37.235000,-121.500500);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"Aprtments!"
  });

infowindow.open(map,marker);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
        <section>
    <fieldset>
            <legend></legend>
            <br>
               <h1 style="background-color: #52D8C5; text-align: center; hight: 40; color: black; font-family: Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size: 18px;"> Map & Direction</h1>
             <h4><a href="index.php"><em>Home Page</em></a><br>
              
            </h4>

            <div id="googleMap" style="width:500px;height:380px;"></div><br>
<br> 
  <br>
                <h3 align="center" style="font-size: xx-small;">©2014  Residential. All Rights Reserved...	 </h3>

               </fieldset>
    </section>
</body>
</html>


<html:html locale="true">
<head>
	<title></title>
	<style type="text/css">
#container {
             height:10px;
             margin:auto;
             width: 1366px; 
             background:#3B5998;
           }
#header  {   
			width:auto; 
         padding-top: 0.10cm;
          padding-bottom: 1cm;
          text-align:center;
          font-family: Times New Roman;
          font-size: 23px;
          color:white;
          background:#3B5998;
        }
#left {
       
       height:70px;
       float: left; 
       width: 100px; 
       background:#3B5998; 
       }
#right {
      
        font-size: 10px;
        height:50px;
        float: right; 
        width: 100px; 
        background:#3B5998; 
       }  
 css tab code 
     body {
        margin:0;
        padding:0;
        font: bold 11px/1.5em Verdana;
            }
img {
        border: none;
    }
    
            
 </style>      
</head>
<body>
<div id="container" > 
        <div id="left" >
        </div>
                  <div id="right" valign="top">
        <?php
$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
echo "Tomorrow is ".date("Y/m/d", $tomorrow);
?> 
             <div valign="bottom">[Logout] </div>     
         </div>
         <div id="header" ><b> <h2 align="center">GYM Center</b> </div>         
</div>

</body>
</html:html>
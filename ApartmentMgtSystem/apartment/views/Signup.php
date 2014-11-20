
<html>
    <head>
        <meta charset="UTF-8">
        <title>

        </title>


<script>
function validateForm() {
    var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
</script>
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
    </head>
    <body>
        
        <form name="myForm" action="../controller/other_con.php" onsubmit="return validateForm();" method="POST"  >
            <section> <fieldset>
                    <h4 style="background-color:#3B5998; text-align:center;color:white; font-family: Times New Roman;">Sign up.</h4>

                    <legend> </legend>
                    <label for="emailAddress">Email Address</label><br /> 
                    <input id ="emailAddress" type="text" name="emailAddress"  value="" required></br>

                    <label>Password</label> <br />
                    <input type="password" name="password" value="" required></br>
                    <label for="firstName">First name </label> <br />
                    <input id ="firstName" name="firstName" type="firstName" required><br />
                    <label for="lastName">Last Name</label>  <br />
                    <input id ="lastName" name="lastName" type="LlastNameast"  required>
                    <br/>
                    <label for="city">city </label> <br />
                    <input id ="city" name="city" type="text" required><br />
                    <label for="state">State</label>  <br />
                    <input id ="state" name="state" type="text"  required>
                    <br/>
                    <label for="country">Country</label>  <br />
                    <input id ="country" name="country" type="text"  required>
                    <br/>
                    <label>Admin <br/></label>
                    <form action="">
                        <input type="radio" name="interst" value="1">Yes<br/>
                        <input type="radio" name="interst" value="2">No<br />


                        <input type="Submit" name="Submit" value ="Submit Form"><br/>   
                        <a href="index.php"><h3>Home Page</h3></a>



                        <br><br><br>

                        <h4 style="background-color:#3B5998; text-align:center;color:white; font-family: Times New Roman;">©2014  Residential. All Rights Reserved...</h4>
                </fieldset>      </section>   
        </form>
    </body>
</html>


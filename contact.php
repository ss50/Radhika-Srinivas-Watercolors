<?php

?>
<!DOCTYPE html>
<html>
<head>
    <title>Radhika Srinivas | Contact</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" type="image/gif" href="paint_brush.gif">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
    </script>
</head>

<body>


<div class = "background">
    <div class="main">
        <h1>radhika srinivas</h1>
        <h2>watercolors</h2>
        <br>
        <HR style="color:white;align:right;width:100%">
        <table id="menu">
            <tr>
                <td width=25%><a href= "index.html" >home</a></td>
                <td width=25%><a href = "bio.html">bio</a></td>
                <td width=25%><a href = "gallery.html">gallery</a></td>
                <td width=25%><a href = "contact.php">contact</a></td>
            </tr>
        </table>
        <h1 style="font-size: 20px;">Send a Message!</h1>
        <h2 style="font-size: 15px;">Required fields are marked with a *</h2>
        <h2></h2>
        <div id="contact">
            <?=$errorString?>
           <form method="POST" action="emailexample.php">
            <p>Name: * </p>
            <br/><input name="Name" size = "30" value="<?=$Name?>"/><br /><br />
            <p>Email (example: myname@somedomain.com): * </p>
            <br/><input type="email" name="Email" size = "30" value="<?=$Email?>" /><br /><br />
            <p>Phone Number:  </p>
            <br/><input type="text" name="Telephone" size = "30" value="<?=$Telephone?>"/><br /><br />
            <p>Subject *:  </p>
            <br /><select name="Subject">
                    <option selected = "Choose Subject">Choose Subject</option>
                    <option value="Technical">Technical</option>
                    <option value="Inquiry">Inquiry</option>
                    <option value="Purchase">Purchase</option>
                    <option value="Other">Other</option>
                </select><br /><br />
            <p>Comments: *</p>
            <br /><textarea name = "Comments" value = "<?=$Comments?>" maxlength = "1000" cols= "60" rows = "10"></textarea>
            <br /><br />
            <input type="submit" name="submit" value="Submit" />        
        </form>
        <br>
        
        </div>
        <br>
        <br>
            <HR style="color:white;width: 100%">
        <br>
            <p style="text-align: center">Website Design by Shreya Srinivas</p>
            <p style="text-align: center">Copyright &copy Radhika Srinivas Watercolors All Rights Reserved</p>
        <br>
    </div>
</div>

</body>
</html>

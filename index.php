<style>
    body {
        padding: 0; /* Gets rid of the automatic padding */
        margin: 0;  /*  on HTML documents */
        font-family: 'trebuchet MS', 'Lucida sans', Arial;
        font-size: 14px;
        color: #444;
    }
    div.simpleContContent {
        border-color: #D2D2CC;
        border-style: solid;
        border-width: 1px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 100px;
        margin-bottom: 25px;
        padding-bottom: 15px;
        width: 400px;
        text-align: center;
    }
    #er {
        color: #F00;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        font-size: 15px;
    }
</style>

<div id="simpleContContent" class="simpleContContent" style="opacity: 1;">
    <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FFFFFF">
        <tr>
            <form name="form1" method="post" action="">
                <td>
                    <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
                        <tr>
                            <td colspan="2" style="padding-bottom:15px; padding-top:15px;"><strong>Welcome to NKOMIOS, the NKOZI Medical Information for Operational Support</strong></td>
                            </tr>
                        <tr>
                            <td colspan="2" align="center" style="padding-bottom:15px"><img src="images/sthetoscope.ico"></td>
                        </tr>
                        <tr>
                            <td width="78">Username</td>
                            <td width="294"><input name="myusername" type="text" id="myusername"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input name="mypassword" type="password" id="mypassword"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="Submit" value="Login"></td>
                        </tr>
                    </table>
                </td>
            </form>
        </tr>
    </table>
</div>
<div id="er" color="444">
    <?php if(isset($er) && $er != '') echo $er; ?>
</div>

<?php
    include "ctl-db_connection.php";
    if(isset($_POST['Submit'])){
        $myusername = $_POST['myusername'];
        $mypassword = SHA1($_POST['mypassword']);
        $sql = "SELECT * FROM loginuser WHERE username = '".$myusername."' AND password='".$mypassword."'";
        $query = $connection -> query($sql);
        $result = mysqli_num_rows($query);
        if($result == 1){
            header ("location: vw-home.php");
        } else {
            echo "<br><center>Wrong username or password!".mysqli_error($connection);
        }
    }
?>
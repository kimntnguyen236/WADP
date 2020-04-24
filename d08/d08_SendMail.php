<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Send Mail</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style>
            body{
                margin-left: 1em;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2>Send Mail Demo</h2>  
            <hr>

            <form method="POST">
                <p>
                    Recipient: <input type="text" name="txtR" id="txtR" value="nguyenngocthienkim.2015.91@gmail.com" required/>
                </p>
                <p>
                    Subject: <input type="text" name="txtSub" id="txtSub" required value="Topic: Test Mail"/>
                </p>
                <p>
                    Message: <br>
                    <textarea name="txtBody" id="txtBody" cols="30" rows="10">
                        Test Mail PHP...
                    </textarea>
                </p>
                <p>
                    <input type="submit" name="btnSend" value="Send">
                    <input type="reset" name="btnReset" value="Reset">
                </p>
            </form>
        </div>
        <?php
        // phần xử lý của action page, chỉ được thực hiện sau khi web visitor bấm nút send == phần này chạy trên server
        if (isset($_POST["btnSend"])==TRUE) {
    // lấy thông tin nhập trên form
            $to = $_POST["txtR"];
            $from = $_POST["From:sophianguyen.236@gmail.com"];// tk của người setup mail server
            $subject = $_POST["txtSub"];
            $message = $_POST["txtBody"];
            $r = mail($to, $subject, $message, $from);
            if ($r) {
                echo "<script>alert('sent mail succeed !')</script>";
            } else {
                echo "<script>alert('ERROR: sent mail fail !')</script>";
            }
}
        ?>
    </body>
</html>

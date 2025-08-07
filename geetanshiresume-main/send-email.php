
<?php
if ($_SERVER['REQUEST_METHOD']=="POST") {
    $name=$_POST["name"];
        $msg=$_POST["message"];
        $email=$_POST["email"];
        
        $to="geetanshisingh28@gmail.com";
        $sub="form Submission";
        $header="from:geetanshisingh28@gmail.com";
        
        
        $email_body="Name : $name \n Message : $msg \n Email : $email";
        
        if (mail($to,$sub,$email_body,$header)) {
          echo "
<style>
.thank-you-message {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f5f5f5;
}

.thank-you-message div {
    font-size: 1.5rem;
    padding: 20px;
    background: #e0ffe0;
    border: 1px solid #00aa00;
    border-radius: 8px;
}
</style>

<div class='thank-you-message'>
    <div>Your Message is Received</div>
</div>";


            $replyto=$email;
            $replyheader="from: geetanshisingh28@gmail.com";
            $replymail="Hello $name \n We have recieved your Information will contact you Soon. \n We will get back to you shortly";
            mail($replyto,$replysub,$replymail,$replyheader);
        }
}
?>
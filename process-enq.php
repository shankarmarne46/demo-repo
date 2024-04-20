<?php
 if (isset($_POST['submit'])) {
         $from = "support@elitedesignstudio.in";
        //  $to = "info@elitedesignstudio.in, hitesh@nextbigbox.in";
         $to = "amit.nbb97@gmail.com";
         $subject = "Elite Design Studio";
         
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $product = $_POST['product'];
        $message = '<h2>Contact Request Submitted</h2>
          <p><b>Name:</b> ' . $name . '</p>
          <p><b>Subject:</b> ' . $subject . '</p>
          <p><b>Email:</b> ' . $email . '</p>
          <p><b>Phone No.:</b> ' . $phone . '</p>
          <p><b>Product:</b> ' . $product . '</p>';
         
         $header = "From:$from \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {?>
             <script>
            // alert("Thanks for Submitting... Get will be contact you soon.");
            window.location.href="thankyou.php" ;
      </script>
        <?php  }else {
            echo "Message could not be sent...";
         }
      }
      ?>
?>

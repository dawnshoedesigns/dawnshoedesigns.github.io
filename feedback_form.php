<?php

#Receive user input
$email_address = $_POST['email_address'];
$feedback = $_POST['feedback'];

#Filter user input
function filter_email_header($form_field) {  
return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}

$email_address  = filter_email_header($email_address);

#Send email
$headers = "From: $email_addressn";
$sent = mail('dawnshoedesign@gmail.com', 'Feedback Form Submission', $feedback, $headers);

#Thank user or notify them of a problem
if ($sent) {

?><html>
<head><Title>Dawn Shoe Designs</Title>
    <link rel="stylesheet" href= "style.css">
</head>

<body>
    <header>
        <section>
        <h1>Dawn Shoe Designs</h1>
            <h3>Hand-Painted Shoes</h3>
        </section>
    <nav>
        <ul class=>
        <li class="list"> <a href="Amber%20Home.html"> HOME</a></li>
        <li class="list"> <a href="Amber%20About.html">About</a></li>
        <li class="list"> <a href="Amber%20Gallery.html"> Gallery</a></li>
        <li class="list"><a href="Amber%20Prices.html">Prices</a></li>
        <li class="list"> <a href="Amber%20Order.html">Place an Order</a></li> 
        </ul>
    </nav>
    </header>
    
    <h2 class="thanks"> 
        Thank you for submitting your order!</h2>
    <br> 
    <h2 class= "thanks2"> Amber will be in contact with you to finalize the price and design!</h2>
    </body>
</html>
<?php

} else {

?><html>
<head><Title>Dawn Shoe Designs</Title>
    <link rel="stylesheet" href= "style.css">
</head>

<body>
    <header>
        <section>
        <h1>Dawn Shoe Designs</h1>
            <h3>Hand-Painted Shoes</h3>
        </section>
    <nav>
        <ul class=>
        <li class="list"> <a href="Amber%20Home.html"> HOME</a></li>
        <li class="list"> <a href="Amber%20About.html">About</a></li>
        <li class="list"> <a href="Amber%20Gallery.html"> Gallery</a></li>
        <li class="list"><a href="Amber%20Prices.html">Prices</a></li>
        <li class="list"> <a href="Amber%20Order.html">Place an Order</a></li> 
        </ul>
    </nav>
    </header>
    
    <h2 class="thanks"> 
        We were unable to submit your order</h2>
    <br> 
    <h2 class= "thanks2"> Please try again!</h2>
<?php
}
?>

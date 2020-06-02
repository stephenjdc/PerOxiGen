<?php
include(__DIR__ . "/_Builder.php");

getHeader("Peroxigen");

getPageContainer()

?>


<div class="mainText">
    If you would like more information about our product, you can contact us or check out our social media channels below.
</div>

<a class="socialContainer" href=''>
    <div class='socialIcon' id='email'></div>
    <div class='socialLink' >Email</div>
</a>

<a class="socialContainer" href=''>
    <div class='socialIcon' id='facebook'></div>
    <div class='socialLink'>Facebook</div>
</a>

<a class="socialContainer" href='https://twitter.com/oxi_per'>
    <div class='socialIcon' id='twitter'></div>
    <div class='socialLink'>Twitter</div>
</a>

<a class="socialContainer" href='https://www.linkedin.com/company/peroxigen/'>
    <div class='socialIcon' id='linkedin'></div>
    <div class='socialLink'>LinkedIn</div>
</a>

<a class="socialContainer" href=''>
    <div class='socialIcon' id='instagram'></div>
    <div class='socialLink'>Instagram</div>
</a>


<?php

closePageContainer();
getFooter();
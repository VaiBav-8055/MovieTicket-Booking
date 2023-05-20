<?php
$connect=mysqli_connect("localhost","root","","login_register") or die("Connection Failed");
if(!empty($_POST['confirm']))
{
    $ownername=$_POST['owners'];
    $cvvnum=$_POST['cvv'];
    $cardnum=$_POST['cardnum'];
    $monthexp=$_POST['months'];
    $yearexp=$_POST['years'];
    $query="SELECT * FROM payment where owners='$ownername' AND cvv='$cvvnum' AND cardnum='$cardnum' AND months='$monthexp' AND years='$yearexp'";
    $result=mysqli_query($connect,$query);
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        header('Location: successpay.php');
        
    }
    else{
        header('Location: notsucesspay.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>
    <link rel="stylesheet" href="paymentstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=fo9KWwIvbDafK0Cx6EfaWQyMkYQo0VPSwQPkX6FRdI-Rsecqt0WrvJuKJqNTSM58DkPolVElYBN9rRHxS-iiuZHtUnN88Zyke58kQvirYJFZbmL9zzzNz0vfMGJUQcB389ocUR8mmEpOd1Z8CHhK4lAJQvsoq-k4Oq6MzGy8oXQ7aulNhYnmKmEaKx98uqDll2wZs93LTPAv3nphGl93NiyUO4aGo3pKmuGIxPbfuJfz9N1l6Ge_mD1jtLeKOOPBO5onn5go5D1c5AxfcEjnemp3a5U0iU9s9GufoohMLVPBjl98blpmetkkkN8DzWdjFxnKZo0NqYdTzc2YKLRuERZymHjAQTQ7umpnf6w9RHi3diPhLqDuRv4t0LiceyHwfQvIsNbqQKUdaRxBMM1IiHeai-TrGJwrQ7IIUsGYF2N-xAhZ17o2_0wXhDyQSQQc_faqg01S7NXkdYD13nPiYVEy8FbXB0v-QRxi6mdWxSmSqBUf7D44We_lQpcIyKGQv_bX6SU2HfQHHCb_L7AGLwhRJgkvlD8kaaftJMAneUAoDaCfH1jegeKvk60LVx8RsK5z6hfub6xIDnaa3lxU6KvArVfCXZ36GOFJufLXmigTIxQhZkGAK0dVsaE4Me59nTOO8mA1mJj-ktgUMl1CjZb0XONAoLlxdsvjARGEbhV1ovqw8S_HebaiiNH1KFcFfkzl4rV4RBbHGLwV7_UFUCXN0j94LL-FRGuDN2RF4XsuZZLk5LAytoXZI05wnU12NFnvGaV7UdahpgECjNHtTBLt9XKgepq7bL6DEx-n-Oi4nqA4PKXMHszAB5pytBOjN3nWfaCD73jWtFdOvfF1ugc0uoGdtf8_6edV5ezCqzKe_RhUUMuHBot0NsAnxtgQex0B9Ql16Z_O95jcDAhJqkClG2inx_dUaA36eAOUOnVgYOB781YIhPaO_8eWU29vUYaLMznLGGlI7DS6SGqlrqWzHBnlCCBi3N956AnWgObZJKca9uPGHX0Kq8jmJI_6b0W25jrGQe8Hp4VwqmIcPnZw-3EPSpGCGWrJ4YF6MXYnpkGEQA3qoiL-rGC1STP21atvnbaQeQmnyYlT9rvSVBK4GbArk4kHdlc4rT0iVL5kWi7GMH-IUjc1o8Raf9UmOuq_gi7x8ivN17gj0vQ2eS21Q-n4zwh36mXcIMyxtDZYj6OW-aXBdKegcQ2wwSDhcL7rjlr6Rp8T5LAfLGbMgLdRRSg_PhJdHUvG-ibaPRLq5X9o-gEPKMVaKHw7qJ7JqGoMmKJJ3zLyohkRW45Qnw5R5bxh53d4zJHg5_w5a51Y8URbM8lviTsvo4GuvKL-cS5X9uwPHN80JW65GLq8O_zNvGH7pLvGoSFVcQjFGHCMX1VimHkr-rEf_9NfMTbfjaBVneEGOTl_kyDZjs0wCI-RnbxKAhdshxy2yExAZuiT-ALFGR9EiLNb7Dcb10x60ZQ1xJ2XaZb8QXPlk55NO4Dnoykc7PqxLS3DVWNUFge-Ya9z6Juz7T8A5yjJVputx2JK7237e-BYe35SC0iHOzM1vRXIA1zpaZoTIfvN8O5zBX2uIJXqsM-vqB60Gl9x8daEhvolMIvH4obT80Ppxw" charset="UTF-8"></script></head>
<body>
    <div class="container">
        
        <h1>Confirm Your Payment</h1>
        <form method="post">
        <div class="first-row">
            <div class="owner">
                <h3>Owner</h3>
                <div class="input-field">
                    <input type="text" name="owners">
                </div>
            </div>
            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field">
                    <input type="password" name="cvv">
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h3>Card Number</h3>
                <div class="input-field">
                    <input type="text" name="cardnum">
                </div>
            </div>
        </div>
        <div class="third-row">
            <h3>Card Expiration</h3>
            <div class="selection">
                <div class="date">
                    <input type="text" name="months">
                    <!--<select name="months" id="months">
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                      </select>
                      
                      <select name="years" id="years">
                        <option value="2020">2028</option>
                        <option value="2019">2027</option>
                        <option value="2018">2026</option>
                        <option value="2017">2025</option>
                        <option value="2016">2024</option>
                        <option value="2015">2023</option>
                      </select>-->
                      <input type="text" name="years">
                </div>
                <div class="cards">
                    <img src="mc.png" alt="">
                    <img src="vi.png" alt="">
                    <img src="pp.png" alt="">
                </div>
            </div>    
        </div>
        <!--<a href="successpay.html">Confirm</a>-->
        <input type="submit" name="confirm" value="Confirm">

        </form>
        
    </div>
</body>
</html>
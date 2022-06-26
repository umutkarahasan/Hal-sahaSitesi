
<style>
    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 13.5px;
    }

    .form{
        margin: auto;
        margin-top: 5%;
    }
    .div{
   margin-left: 10%;
  }
    .a{
        margin-bottom: 10%;
        margin-right: 50%;
    }
    body {
        background: #4c268f;
        color: #99eeb4;
        height: 100vh;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
    }


    span {
        position: relative;
        font-family: "Avenir Next", sans-serif;
        font-weight: 900;
        font-size: 64px;
        text-transform: uppercase;
        font-style: italic;
        letter-spacing: 0.05em;
        display: inline-block;
    }

    span:before {
        position: absolute;
        left: 0;
        top: 0;
        content: attr(filter-content);

        filter: url(#motion-blur-filter);
    }


    svg {
        display: none;
    }
</style>
<div class="">
    <svg xmlns="http://www.w3.org/2000/svg">

        <filter id="motion-blur-filter" filterUnits="userSpaceOnUse">

            <feGaussianBlur stdDeviation="100 0"></feGaussianBlur>
        </filter>
    </svg>


    <span filter-content="S">HALISAHAM</span><br>
    <span filter-content="S">ADMİN PANEL</span>


</div>
<br> </br>
<div class="div">
    <form class="form" style="background: 800px" action="admin/girisoption.php" method="POST">
        <table align="center">
            <tr>
                <td>KULLANICI ADI</td>
                <td>:</td>
                <td style="width:350px"><input type="text" name="admin_name" id="admin_name"></td>
            </tr>
            <tr>
                <td>ŞİFRE</td>
                <td>:</td>
                <td><input type="password" name="admin_sifre" id="admin_sifre"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input  class="button" type="submit" value="Giris"></td>
            </tr>
        </table>
    </form>
</div>




<?php
include('header.php');
?>
<style>
.login {
  background-color:dimgrey; 
}

.login input{
display:block;
margin: 5px 0px 0px 0px;

}
.login p{
    color:red
}
.login p{
    display:block;
margin: 0px 0px 0px 62px;
}
</style>
<form action="iletisim_post.php" method="post" class="login">
    <p>
    Adınız <br><input type="text" name="firstname" ><br>
    Soyadınız <br> <input type="text" name="lastname" ><br>
    Kullanıcı adı<br> <input type="text" name="username"><br>
    Eposta adresiniz<br> <input type="text" name="email"><br>

    
    
    Erkek <input type="radio" name="cinsiyet" value="erkek" checked="on"> 
    Kadin <input type="radio" name="cinsiyet" value="kadin"> 
    <input type="submit" value="Send">
     <input type="reset" value="Sıfırla">

     <?
      ################
      # ad_soyad.php #
      ################
      echo "Adınız $firstname ve soyadınız $lastname.";
     ?>
    </P>
 </form>
 <?php
include('footer.php');
?>

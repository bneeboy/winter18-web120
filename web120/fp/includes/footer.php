<footer>
    <p><a><i class="fa fa-fw fa-facebook-official"></i></a> - <a>Email</a> - <a>Public Website</a> - <a>Big Island News</a></p>
    <p><small>&copy; 2018 - <?=date("Y")?> by <a href="contact.php">Christian Patton</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
     
  <!-- Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon -->
     
  <script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>


<!-- public scripts load -->
<?php
if( isset($this->js[0]) ){
    foreach($this->js as $key => $val){
        foreach($val as $script_name){
            echo '<script src="public/js/'. $script_name . '.js"></script>';
        }
    }
}
?>

<footer class="main-footer">
      <!— Подвал сайта —>
</footer>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

</body>
</html>
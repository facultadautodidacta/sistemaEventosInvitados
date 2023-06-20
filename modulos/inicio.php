<?php 
  include "header.php";
  include "menu.php"; 
?>

<style>
        #calendario {
            width: 600px;
            height: 400px;
        }
    </style>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mt-3">
        <div class="card-body">
        <div id='calendar'></div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
  include "footer.php";
?>
<script src="../public/js/fullCalendar.js"></script>
    
   
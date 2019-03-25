<?php 
include 'includes/header.php';
include 'includes/navbar_search.php';
include 'includes/navbar.php';
include 'includes/sidebar_menu.php';

 ?>
 <?php
       
       include 'connection.php';
       
        ?>  
 
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Add Category</div>
        <div class="card-body">
          <form role="form" method="post" action="category_transac.php?action=add">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="Category" class="form-control" placeholder="category" name="Category" required="required" autofocus="autofocus">
                    <label for="productName">Category</label>
                  </div>
                </div>
               
              </div>
            </div>
            <button type="submit" class="btn btn-default">Save Record</button>
                            <button type="reset" class="btn btn-default">Clear Entry</button>


          </form>
          
        </div>
      </div>
    </div>
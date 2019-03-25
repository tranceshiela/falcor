<?php 
include 'includes/header.php';
include 'includes/navbar_search.php';
include 'includes/navbar.php';
include 'includes/sidebar2.php';

 ?>
 <?php
       
       include 'connection.php';
       
        ?>  
 
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Add Customer</div>
        <div class="card-body">
          <form role="form" method="post" action="customer_transac.php?action=add">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" class="form-control" placeholder="First Name" name="First_Name" required="required" autofocus="autofocus">
                    <label for="firstName">First Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" placeholder="Last Name" name="Last_Name" required="required">
                    <label for="lastName">Last Name</label>
                  </div>
                </div>
              </div>
            </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="" id="Address"class="form-control" placeholder="Address" name="Address" required="required">
                    <label for="Address">Address</label>
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
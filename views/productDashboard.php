<?php
require_once '../controllers/productController.php';
session_start();
?>
<style>
*{
  font-family: sans-serif; 
}

.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: sienna;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.link{
    text-decoration: none;
    color: red;
    font-size: 17px;
}
.first-link{
  color: black;
  font-size: 22px;
  padding-left: 50%;
  position: relative;
  top: 20px;
}
.top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}
</style>
<div>
    <table class="content-table">
        <thead>
            <tr>
            <th>Product name</th>
              <th>Product image</th>
              <th>Product price</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $m=new productController;
          $allMenu=$m->readData();//instances ja therrasim metoden readData
          foreach($allMenu as $menu):?>
          <tr>
          <td><?php echo $menu['name'];?></td>
            <td> <img src='data:image;base64,<?php echo $menu["image"]?>' width="300px"></td>
            <td><?php echo $menu['price'];?></td>
            
          </tr>
          <?php endforeach;?>
        </tbody>
    </table>
</div>

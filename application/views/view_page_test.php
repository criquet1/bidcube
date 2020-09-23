 <div class="container">
     <div class="row">
          <div class="table-responsive-md">





<div id="test">
</div>
<br>
<div>
     <button id="generate">Generate</button>
</div>







<form>
     
     <select id='sel_cube'>
          <option value='Choisir un cube'>Choisir un cube</option>"
<?php         
          foreach($cubes as $cube){
               echo "<option value='" . $cube['cubespec'] . "' >" . 
                         $cube['cubespec'] . "</option>";
          }
?>
     </select><br>

     <b>Spacing : </b>
          <span style="font-weight: bold;" id="sspacing"></span><br>


     <b>Total holes : </b>
          <span style="font-weight: bold;" id="sholes"></span><br>
<hr>

     <table style="width:100%" border="1">
          <tr>
               <th>Nb of holes</th>
               <th>Products / Quantity</th>
          </tr>




          <tr>
               <td><input type="text" name="nbholes1"></td>

               <td>
                    <div>
                         <select id="sel_product0" class="increment" name="product0">
                              <option value='Choose a product'>Choose a product</option>
<?php  
                         foreach($price_list as $price){
                              echo "<option value='".$price['product_code']."' >".$price['name']. ' ' . $price['spec'] . "</option>";
                         }
?>
                         </select>
               

                    <input type="text" name="qty0" class="increment" id="qty0">

                    <span id="price0">price</span> $ / <span id="perunit0">unit</span>


                    <span id="price0"></span>
                    <span id="perunit0"></span>
                    <span id="cost0"></span>
               

               </div>

                    <button type="button" class="more">Add another product</button>
               </td>

          </tr>
     </table>
</form>




</div></div></div>
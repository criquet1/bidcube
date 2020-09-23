

$(document).ready(function(){
 
     $('#sel_cube').change(function(){
          var cubespec = $(this).val();
          $.ajax({
               url:baseURL+'index.php/page_test/cubeDetails',
               method: 'post',
               data: {cubespec: cubespec},
               dataType: 'json',
               success: function(response){
                    var len = response.length;
              
                    $('#sucube,#sspacing,#sholes').text('');
                    if(len > 0){
                         // Read values
                         var ucube = response[0].cube;
                         var spacing = response[0].spacing;
                         var holes = response[0].holes;
           
                         $('#sucube').text(ucube);
                         $('#sspacing').text(spacing);
                         $('#sholes, #total').text(holes * holes);
           
                    }
               }
          });
     });
 


     $('#sel_product0').change(function(){
          var product_code = $(this).val();
          $.ajax({
               url:baseURL+'index.php/page_test/productDetails',
               method: 'post',
               data: {product_code: product_code},
               dataType: 'json',
               success: function(response){
                    var len = response.length;
              
                    $('#perunit0,#price0').text('');
                    if(len > 0){
                         // Read values
                         var uprice_per = response[0].price_per;
                         var uunit_price = response[0].unit_price;
           
                         $('#perunit0').text(uprice_per);
                         $('#price0').text(uunit_price);
           
                    }
               }
          });
     });






});
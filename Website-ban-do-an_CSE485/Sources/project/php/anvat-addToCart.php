
<?php
session_start();
$anvat_ids = array();
//session_destroy();

//check if Add to Cart button has been submitted
if(filter_input(INPUT_POST, 'add_to_cart')){
    if(isset($_SESSION['shopping_cart'])){
        
        //keep track of how mnay products are in the shopping cart
        $count = count($_SESSION['shopping_cart']);
        
        //create sequantial array for matching array keys to products id's
        $anvat_ids = array_column($_SESSION['shopping_cart'], 'id');
        
        if (!in_array(filter_input(INPUT_GET, 'id'), $anvat_ids)){
        $_SESSION['shopping_cart'][$count] = array
            (
                'id' => filter_input(INPUT_GET, 'id'),
                'name' => filter_input(INPUT_POST, 'name'),
                'price' => filter_input(INPUT_POST, 'price'),
                'quantity' => filter_input(INPUT_POST, 'quantity')
            );   
        }
        else { //product already exists, increase quantity
            //match array key to id of the product being added to the cart
            for ($i = 0; $i < count($anvat_ids); $i++){
                if ($anvat_ids[$i] == filter_input(INPUT_GET, 'id')){
                    //add item quantity to the existing product in the array
                    $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }
        
    }
    else { //if shopping cart doesn't exist, create first product with array key 0
        //create array using submitted form data, start from key 0 and fill it with values
        $_SESSION['shopping_cart'][0] = array
        (
            'id' => filter_input(INPUT_GET, 'id'),
            'name' => filter_input(INPUT_POST, 'name'),
            'price' => filter_input(INPUT_POST, 'price'),
            'quantity' => filter_input(INPUT_POST, 'quantity')
        );
    }
}

if(filter_input(INPUT_GET, 'action') == 'delete'){
    //loop through all products in the shopping cart until it matches with GET id variable
    foreach($_SESSION['shopping_cart'] as $key => $anvat){
        if ($anvat['id'] == filter_input(INPUT_GET, 'id')){
            //remove product from the shopping cart when it matches with the GET id
            unset($_SESSION['shopping_cart'][$key]);
        }
    }
    //reset session array keys so they match with $product_ids numeric array
    $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}

//pre_r($_SESSION);

function pre_r($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}
?>
<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <title>Shopping Cart (working)</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/cart.css" />
        
    </head>
    <body>
        
        <div class="container">
        <?php

        $connect = mysqli_connect('localhost', 'root', '', 'baoanh');
        mysqli_set_charset($connect,"utf8");
        $query = 'SELECT * FROM anvat ORDER by id ASC';
        $result = mysqli_query($connect, $query);

        if ($result):
            if(mysqli_num_rows($result)>0):
                while($anvat = mysqli_fetch_assoc($result)):
                //print_r($product);
                ?>
                <div class="col-sm-4 col-md-3" >
                    <form method="post" action="anvat-addToCart.php?action=add&id=<?php echo $anvat['id']; ?>">
                        <div class="products">
                            <img src="<?php echo $anvat['image']; ?>" class="img-responsive" style="height: 200px"/>
                            <h4 class="text-info"><?php echo $anvat['name']; ?></h4>
                            <h4> <?php echo $anvat['price']; ?> VND</h4>
                            <input type="text" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="name" value="<?php echo $anvat['name']; ?>" />
                            <input type="hidden" name="price" value="<?php echo $anvat['price']; ?>" />
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-info"
                                   value="Thêm vào giỏ" />
                        </div>
                    </form>
                </div>
                <?php
                endwhile;
            endif;
        endif;   
        ?>
        <div style="clear:both"></div>  
        <br />  
        <div class="table-responsive">  
        <table class="table">  
            <tr><th colspan="5"><h3>Thông Tin Giỏ Hàng</h3></th></tr>   
        <tr>  
             <th width="40%">Tên Đồ Ăn</th>  
             <th width="10%">Số Lượng</th>  
             <th width="20%">Giá</th>  
             <th width="15%">Tổng Cộng</th>  
             <th width="5%">Hành Động</th>  
        </tr>  
        <?php   
        if(!empty($_SESSION['shopping_cart'])):  
            
             $total = 0;  
        
             foreach($_SESSION['shopping_cart'] as $key => $anvat): 
        ?>  
        <tr>  
           <td><?php echo $anvat['name']; ?></td>  
           <td><?php echo $anvat['quantity']; ?></td>  
           <td> <?php echo $anvat['price']; ?> VND</td>  
           <td> <?php echo number_format($anvat['quantity'] * $anvat['price'], 2); ?> VND</td>  
           <td>
               <a href="anvat-addToCart.php?action=delete&id=<?php echo $anvat['id']; ?>">
                    <div class="btn-danger">Xoá</div>
               </a>
           </td>  
        </tr>  
        <?php  
                  $total = $total + ($anvat['quantity'] * $anvat['price']);  
             endforeach;  
        ?>  
        <tr>  
             <td colspan="3" align="right">Total</td>  
             <td align="right"> <?php echo number_format($total, 2); ?> VND</td>  
             <td></td>  
        </tr>  
        <tr>
            <!-- Show checkout button only if the shopping cart is not empty -->
            <td colspan="5">
             <?php 
                if (isset($_SESSION['shopping_cart'])):
                if (count($_SESSION['shopping_cart']) > 0):
             ?>
                <a href="project.php" class="button text-center">Checkout</a>
             <?php endif; endif; ?>
            </td>
        </tr>
        <?php  
        endif;
        ?>  
        </table>  
         </div>
        </div>

        



    </body>
</html>

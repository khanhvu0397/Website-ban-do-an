
<?php
session_start();
$com_ids = array();
//session_destroy();

//Kiểm tra xem nút thêm vào giỏ đã đc submit chưa
if(filter_input(INPUT_POST, 'add_to_cart')){
    if(isset($_SESSION['shopping_cart'])){
        
        //theo giữ xem có bao nhiêu sp trong giỏ hàng
        $count = count($_SESSION['shopping_cart']);
        
        //tạo mảng mới để đối chiếu key id của sp
        $com_ids = array_column($_SESSION['shopping_cart'], 'id');
        
        //
        if (!in_array(filter_input(INPUT_GET, 'id'), $com_ids)){
        $_SESSION['shopping_cart'][$count] = array
            (
                'id' => filter_input(INPUT_GET, 'id'),
                'name' => filter_input(INPUT_POST, 'name'),
                'price' => filter_input(INPUT_POST, 'price'),
                'quantity' => filter_input(INPUT_POST, 'quantity')
            );   
        }
        else { //nếu sp đó tồn tại thì tăng thêm số lượng
            //đối chiếu key của mảng với key của sp đã được thêm vào giỏ hàng
            for ($i = 0; $i < count($com_ids); $i++){
                if ($com_ids[$i] == filter_input(INPUT_GET, 'id')){
                    //cộng sô lượng đồ ăn vào sp đó đã tồn tại
                    
                    $_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST, 'quantity');
                }
            }
        }
        
    }
    else {//nếu sp đó ko tồn tại thì tạo ra 1 sp mới với mảng có key = 0
         //tạo ra mảng khi người dùng kích thêm vào giỏ, bắt đầu từ key 0 đổ giá trị vào mảng
        
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
    //lắp qua toàn bộ sp có trong giỏ hàng đến khi nó trùng với biến Get id
    foreach($_SESSION['shopping_cart'] as $key => $com){
        if ($com['id'] == filter_input(INPUT_GET, 'id')){
            //xóa sp trong giỏ hàng khi nó trùng với biến Get id
            
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
        //kết nối csdl
        $connect = mysqli_connect('localhost', 'root', '', 'cart');
        mysqli_set_charset($connect,"utf8");
        //truy vấn 
        $query = 'SELECT * FROM com ORDER by id ASC';
        $result = mysqli_query($connect, $query);

        if ($result):
            if(mysqli_num_rows($result)>0):
                //đổ dữ liệu từ biến result vào mảng cơm
                while($com = mysqli_fetch_assoc($result)):
                //print_r($product);
                ?>
                <div class="col-sm-4 col-md-3" >
                    <!-- load dữ liệu từ database để hiện thị ra sp -->
                    <form method="post" action="com-addToCart.php?action=add&id=<?php echo $com['id']; ?>">
                        <div class="products">
                            <img style="height: 200px" src=" <?php echo $com['image']; ?>" class="img-responsive" />
                            <h4 class="text-info"><?php echo $com['name']; ?></h4>
                            <h4> <?php echo $com['price']; ?> VND</h4>
                            <input type="text" name="quantity" class="form-control" value="1" />
                            <input type="hidden" name="name" value="<?php echo $com['name']; ?>" />
                            <input type="hidden" name="price" value="<?php echo $com['price']; ?>" />
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
        
             foreach($_SESSION['shopping_cart'] as $key => $com): 
        ?>  
        <tr>  
           <td><?php echo $com['name']; ?></td>  
           <td><?php echo $com['quantity']; ?></td>  
           <td> <?php echo $com['price']; ?> VND</td>  
           <td> <?php echo number_format($com['quantity'] * $com['price'], 2); ?> VND</td>  
           <td>
               <a href="com-addToCart.php?action=delete&id=<?php echo $com['id']; ?>">
                    <div class="btn-danger">Xoá</div>
               </a>
           </td>  
        </tr>  
        <?php  
                  $total = $total + ($com['quantity'] * $com['price']);  
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
                <a href="formcheckout.php" class="button">Thanh toán</a>
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

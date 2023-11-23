<?php
include 'includes/autoload.inc.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['search_prod']) && $_POST['function']=="search_prod"){
        $value = secured($_POST['search_prod']);

        $fetch_prod = new fetch();
        $res_fetch_prod = $fetch_prod->fetchProd($value);
        if($res_fetch_prod->rowCount()>0){
            while($row = $res_fetch_prod->fetch()){
                if($row['product_categories'] == "Carrier"){
                ?>
                    <div class="px-2 py-2">
                        <div class="form-list-group">
                            <ul class="nav-item">

                                <a href="carrier.php" class="nav-link text-dark" value="asdd" id="btn_user_name">
                                    <div class="col-12">
                                        <img src="uploads/<?=$row['product_image']?>" width="50px" height="50px">
                                        <span class="px-2"><?=$row['product_name']?></span>
                                    </div>
                                </a>
                            </ul>
                        </div>
                    </div>
                <?php
                }else{
                    ?>
                        <div class="px-2 py-2">
                            <div class="form-list-group">
                                <ul class="nav-item">

                                    <a href="trade.php" class="nav-link text-dark" value="asdd" id="btn_user_name">
                                        <div class="col-12">
                                            <img src="uploads/<?=$row['product_image']?>" width="50px" height="50px">
                                            <span class="px-2"><?=$row['product_name']?></span>
                                        </div>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    <?php
                }
            }
        }else{
            ?>
                <div class="px-2 py-2">
                    <div class="form-list-group">
                        <ul class="nav-item">
                            <p>No Data Found</p>
                        </ul>
                    </div>
                </div>
            <?php
        }
        
    }else{
        ob_end_flush(header("Location: index.php"));
    }
}else{
    return false;
}
?>



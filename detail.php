<?php
    // require_once("config.html");
    $result = $conn->query("SELECT * FROM products");
?>

<div class="container py-3">
    <div class="row">
    <?php
        $idx =1;
        while($products_data = mysqli_fetch_array($result)){ 
            ?>
            <div class="card" style="max-width: 540px; margin-bottom: 20px; margin-right: 20px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src=<?php echo $products_data['image_path']?> alt="" style="max-width: 100%;">	
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="min-height: 50%;">
                            <h5 class="card-title">
                                <?php
                                echo $products_data['product_name'];
                                ?>
                                <div class="float-right">
                                    <form action="edit-product.html" method="POST" style="margin-bottom:5px;">
                                        <input type="hidden" name="id" value=<?php echo $products_data['id'] ?>>
                                        <button class="btn" type="submit">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                    </form>
                                    <form action="dodelete.html" method="POST">
                                        <input type="hidden" name="id" value=<?php echo $products_data['id'] ?>>
                                        <button class="btn" type="submit">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </h5>
                            
                            <p class="card-text">
                                <?php
                                    echo $products_data['description'];
                                ?>	
                            </p>
                           
                        </div>
                        <div class="card-footer">
                            <a href="">More info</a>
                        </div>
                    </div>
                </div>
            </div>
        
        <?php
            $idx+=1;
            }	
        ?>
    </div>
    
    
</div>
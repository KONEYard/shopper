<section class="section-1">

                <div class="head">
                    <h3 class="heading text-uppercase">Acheter avec <span class="orange text_bold ">nous</span></h3>
                    <h5 class="text_muted text-center">Le top des trucs du shopping</h5>
                </div>
                <div class="wrapper">
                <?php 

                   
                /*$connect = DataBase::connect();

                $statement = $connect->prepare('SELECT name, image FROM section1');
                $statement->execute();
                $section1 = $statement->fetchAll();

                DataBase::disconnect();*/

                include_once("section1Model.php");
                

                    foreach($section1 as $row){

                ?>
                
                <div class="box">
                    <a href="#">
                        <img src="assets/image/<?php echo $row['image']; ?>" alt="shopper | <?php echo $row['name']; ?>">
                        <h4 class="title">
                            <?php echo $row['name'] ;?>
                        </h4>
                        <span class="price">
                            <?php echo $row['price']; ?> XOF
                        </span>
                    </a>
                    <div class="link-actions">
                        <span class="ex-price">
                            <?php echo random_int(50000, 1000000); ?> XOF
                        </span>
                        <a href="#" class="btn btn-default">détails</a>
                    </div>
                </div>
                    
            <?php 
                }
            ?>
            
                </div>
            </section>
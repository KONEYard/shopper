<section class="section-2">

                <div class="head">
                    <div class="sexe">
                        <h3 class=" text-uppercase">Derniers arrivages  <span class="orange text_bold ">HOMMES </span></h3>
                        <h3 class=" text-uppercase">Derniers arrivages  <span class="orange text_bold "> FEMMES</span></h3>
                        
                    </div>
                </div>
                <div class="wrapper">
                <?php 
                include_once("section2Model.php");

                    foreach($section2 as $row){

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
                            <a href="#" class="btn btn-default">Voir</a>
                        </div>
                    </div>
                    
            <?php 
                }
            ?>
                </div>
            </section>
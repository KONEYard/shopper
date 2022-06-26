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
                    <a href="#">
                        <div class="box">
                            <img src="assets/image/<?php echo $row['image']; ?>" alt="shopper | <?php echo $row['name']; ?>">
                            <h4 class="title">
                                <?php echo $row['name'] ;?>
                            </h4>
                        </div>
                    </a>
                    
            <?php 
                }
            ?>
                </div>
            </section>
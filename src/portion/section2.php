<section class="section-2">

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
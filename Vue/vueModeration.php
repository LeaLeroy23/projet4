<?php $this->titre = "Espace Administration / Modération commentaire"; ?>

    <?php
    include 'gabaritSidebar.php';
    ?>

            <div class="col-10">
                <div class="container-dashboard" id="dashboard">

                    <div class="row row-dashboard">

                        <div class="col-12 box-dashboard" id="box-dashboard">

                            <form method="POST" action="index.php?action=dashboard" enctype="multipart/form-data" novalidate>

                            <input type="hidden" name="chapter" value="add" />

                            <h4 class="title-dashboard"><i class="fas fa-pen"></i>Modération des commentaires</h4>

                                <div class="col-12">
                                    
                                </div>
                                
                            </form>
                        
                        </div>

                    </div>

                </div>
            </div>

        
        </div>
    </section>
</body>

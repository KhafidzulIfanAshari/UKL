<div class="container-fluid" id="book">
    <div class="row justify-content-end">
        <div id="navigationBook">
            <div class="my-4"></div>
            
            <h1 class="text-center">
                Eiko Hotel
                <div class="underlineCustom"></div>
            </h1>
            <div class="my-4"></div>

            <div class="container">
                <a href="<?= base_url(); ?>">
                    <h6>Home</h6>
                </a>
                
                <a href="<?= base_url(); ?>index.php/Controller/bookPage">
                    <h6>Room list</h6>
                </a>

                <a href="<?= base_url(); ?>index.php/Controller/bookedPage">
                    <h6>Customer Room</h6>
                </a>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="container">
                <div class="my-4"></div>
                <?php $this->load->view($bookCont); ?>
            </div>
        </div>
    </div>
</div>
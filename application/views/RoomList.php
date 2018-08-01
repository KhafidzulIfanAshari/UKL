<div class="row">
    <div class="col-lg-12">
        <h2>
            Room Class
            <div class="underlineCustom"></div>
        </h2>
    </div>

<?php
    foreach($roomClass as $class){
?>
    <div class="col-lg-4">
        <div class="roomClass">
            <div class="container">
                <div class="roomClassImg">
                    <img src="<?= base_url(); ?>assets/img/<?= $class->roomPic; ?>" class="img-fluid" alt="">
                </div>
                <div class="my-3"></div>

                <h5>
                    <?= $class->roomClass; ?> <small>class</small>
                    <div class="underlineCustom"></div>
                </h5>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, error nobis? Necessitatibus tenetur, possimus sed vitae recusandae assumenda aperiam!
                </p>
            </div>
        </div>
    </div>
<?php
    }
?>
</div>

<div class="my-4"></div>

<div class="row">
    <div class="col-lg-12">
        <h2>
            Available Room 
<?php
    if($this->cart->total_items() != 0){
?>
            <a href="" data-toggle="modal" data-target="#cartList" style="color: black">
                <i class="fa fa-shopping-cart"></i>
                <small>
                    <?= $this->cart->total_items(); ?>
                </small>
            </a>

            <a href="<?= base_url(); ?>index.php/Controller/reservePage">
                <button type="button" class="btn btn-success">
                    <i class="fa fa-bed"></i>
                    Order all room
                </button>
            </a>
<?php
    }
?>
            <div class="underlineCustom"></div>
        </h2>
    </div>
    <div class="col-lg-4">
        <table class="table table-striped table-hover text-center">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Class</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
<?php
    foreach($alphaClass as $alpha){
?>
                <tr>
                    <td><?= $alpha->idRoom; ?></td>
                    <td><?= $alpha->roomClass; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>index.php/Cart/addCart/<?= $alpha->idRoom; ?>/<?= $alpha->price; ?>/<?= $alpha->roomClass; ?>">
                            <button type="button" class="btn btn-danger">
                                <i class="fa fa-shopping-cart"></i> add to Chart
                            </button>
                        </a>
                    </td>
                </tr>
<?php
    }
?>
            </tbody>
        </table>
    </div>

    <div class="col-lg-4">
        <table class="table table-striped table-hover text-center">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Class</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
<?php
    foreach($bravoClass as $alpha){
?>
                <tr>
                    <td><?= $alpha->idRoom; ?></td>
                    <td><?= $alpha->roomClass; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>index.php/Cart/addCart/<?= $alpha->idRoom; ?>/<?= $alpha->price; ?>/<?= $alpha->roomClass; ?>">
                            <button type="button" class="btn btn-danger">
                                <i class="fa fa-shopping-cart"></i> add to Chart
                            </button>
                        </a>
                    </td>
                </tr>
<?php
    }
?>
            </tbody>
        </table>
    </div>

    <div class="col-lg-4">
        <table class="table table-striped table-hover text-center">
            <thead>
                <tr>
                    <th>Number</th>
                    <th>Class</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
<?php
    foreach($charlieClass as $alpha){
?>
                <tr>
                    <td><?= $alpha->idRoom; ?></td>
                    <td><?= $alpha->roomClass; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>index.php/Cart/addCart/<?= $alpha->idRoom; ?>/<?= $alpha->price; ?>/<?= $alpha->roomClass; ?>">
                            <button type="button" class="btn btn-danger">
                                <i class="fa fa-shopping-cart"></i> add to Chart
                            </button>
                        </a>
                    </td>
                </tr>
<?php
    }
?>
            </tbody>
        </table>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cartList" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                <h4 class="modal-title" id="modelTitleId">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table table-striped table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Class</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php
    foreach($this->cart->contents() as $item){
        ?>
                                    <tr>    
                                        <td><?= $item['id']; ?></td>
                                        <td><?= $item['name']; ?></td>
                                        <td><?= $item['price']; ?></td>
                                    </tr>
<?php
    }
?>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#exampleModal').on('show.bs.modal', event => {
        var button = $(event.relatedTarget);
        var modal = $(this);
        // Use above variables to manipulate the DOM
        
    });
</script>
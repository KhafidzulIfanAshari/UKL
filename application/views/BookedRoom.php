<div class="row">
    <div class="col-lg-12">
        <h3>
            Booked <small>Room</small>
            <div class="underlineCustom"></div>
        </h3>
    </div>
    <div class="container-fluid">
        
        <table class="table table-striped table-hover text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Number</th>
                    <th>Officer</th>
                    <th>Guest</th>
                    <th>Price</th>
                    <th>Check in</th>
                    <th>Check out</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
<?php
    foreach($room as $roomRes){
?>
                <tr>
                    <td><?= $roomRes->idRoomReservation; ?></td>
                    <td><?= $roomRes->roomId; ?></td>
                    <td><?= base64_decode($roomRes->username); ?></td>
                    <td><?= $roomRes->customer; ?></td>
                    <td><?= $roomRes->price; ?></td>
                    <td><?= $roomRes->checkin; ?></td>
                    <td><?= $roomRes->checkout; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>index.php/Controller/deleteRoomRes/<?= $roomRes->idRoomReservation; ?>/<?= $roomRes->roomId; ?>">
                            <button type="button" class="btn btn-danger">Check Out</button>
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

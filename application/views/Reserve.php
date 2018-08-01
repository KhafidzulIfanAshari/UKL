<div class="row">
    <div class="col-lg-12">
        <h1 class="display-4">
            Reserving ordered room
            <div class="underlineCustom"></div>
        </h1>
    </div>
    <div class="container-fluid">
        <form action="<?= base_url(); ?>index.php/Cart/reserveAllRoom" method="post">
            <div class="form-group">
              <label for="">Guest name</label>
              <input type="text" name="guestName" id="" class="form-control" placeholder="" aria-describedby="helpgn">
              <small id="helpgn" class="text-muted">Required</small>
            </div>
            <div class="form-group">
              <label for="">Check in</label>
              <input type="date" name="checkIn" id="" class="form-control" placeholder="" aria-describedby="helpci">
              <small id="helpci" class="text-muted">Required</small>
            </div>
            <div class="form-group">
              <label for="">Check out</label>
              <input type="date" name="checkOut" id="" class="form-control" placeholder="" aria-describedby="helpco">
              <small id="helpco" class="text-muted">Required</small>
            </div>
            <div class="form-group">
              <input type="submit" name="reserve" id="" class="btn btn-danger form-control" placeholder="" aria-describedby="helpId">
            </div>
        </form>
    </div>
</div>
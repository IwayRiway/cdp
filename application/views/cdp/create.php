<div class="container my-5">
   <!-- NO 1 -->
   <div class="card round shadow-sm">
      <div class="card-body">
         <?=$judul?>

         <form method="post" action="<?= base_url('cdp/create')?>">
            <div class="card-body">
               <div class="row">
                  <div class="col-sm">

                     <div class=" form-group row mt-3">
                        <label for="container_no" class="col-sm-2 col-form-label text-sm">No. Container</label>
                        <div class="col-sm-6">
                           <input type="text" class="form-control round" id="container_no" name="container_no" placeholder="No. Container" value="<?= set_value('container_no')?>">
                           
                           <?= form_error('container_no', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                     </div>

                     <div class=" form-group row mt-3">
                        <label for="size" class="col-sm-2 col-form-label text-sm">Size</label>
                        <div class="col-sm-6">
                           <input type="number" class="form-control round" id="size" name="size" placeholder="Size" value="<?= set_value('size')?>">
                           
                           <?= form_error('size', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                     </div>

                     <div class=" form-group row mt-3">
                        <label for="type" class="col-sm-2 col-form-label text-sm">Type</label>
                        <div class="col-sm-6">
                           <input type="text" class="form-control round" id="type" name="type" placeholder="Type" value="<?= set_value('type')?>">
                           
                           <?= form_error('type', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                     </div>

                     <div class=" form-group row mt-3">
                        <label for="gate_in" class="col-sm-2 col-form-label text-sm">Gate In</label>
                        <div class="col-sm-6">
                           <input type="text" class="form-control round" id="gate_in" name="gate_in" placeholder="Gate In" value="<?=set_value('gate_in')?>">
                           
                           <?= form_error('gate_in', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                     </div>

                     <div class="row mt-3">
                        <div class="col-sm">
                           <a href="javascript:history.back()" class="btn btn-danger btn-sm shadow-sm" >Batal</a>
                           <button type="submit" class="btn btn-primary btn-sm shadow-sm" >Simpan</button>
                        </div>
                     </div>

                  </div>
               </div>


            </div>
         </form>
      </div>
   </div>
   <!-- AKHIR -->
</div>

<script>
   $(document).ready(function(){
      $("#gate_in").flatpickr({
         enableTime: true,
         dateFormat: "Y-m-d H:i",
         time_24hr: true,
      });
   })
</script>
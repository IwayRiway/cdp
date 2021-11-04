<div class="container">
<div class="card round shadow-sm my-5">
      <div class="card-body">

         <div id="buttons2" style="padding: 10px; margin-bottom: 10px;width: 25%;">
               <p>Export :</p>
         </div>
         <table class="table table-striped table-hover mt-5" id="myTable">
            <thead>
               <th>Container Number</th>
               <th>Size</th>
               <th>Type</th>
               <th>Gate In Date</th>
            </thead>
            <tbody>
                  <tr>
                     <td><?=$container['container_no']?></td>
                     <td><?=$container['size']?></td>
                     <td><?=$container['type']?></td>
                     <td><?=$container['gate_in']?></td>
                  </tr>
            </tbody>
         </table>

         <div class="row mt-3">
            <div class="col-sm">
               <a href="<?=base_url()?>" class="btn btn-danger btn-sm shadow-sm" >Kembali</a>
            </div>
         </div>

      </div>
   </div>
   <!-- AKHIR -->
</div>

<script>
   $(document).ready( function () {
    var table2 = $('#myTable').DataTable({'searching': false, 'order': false, 'paginate': false});

    var buttons2 = new $.fn.dataTable.Buttons(table2, {
      buttons: [{
         extend: 'csv',
         title: 'Data Lengkap',
         text: 'CSV',
         className: 'btn btn-info btn-sm btn-corner btn-rounded',
         titleAttr: 'Download as Csv'
      },{
         extend: 'excelHtml5',
         title: 'Data Lengkap',
         text: 'EXCEL',
         className: 'btn btn-success btn-sm btn-corner',
         titleAttr: 'Download as Excel'
      },{
         extend: 'pdfHtml5',
         title: 'Data Lengkap',
         orientation: 'potrait',
         pageSize: 'A4',
         className: 'btn btn-danger btn-sm btn-corner',
         text: 'PDF',
         titleAttr: 'Download as PDF',
      }, ],
   }).container().appendTo($('#buttons2'));
} );
</script>
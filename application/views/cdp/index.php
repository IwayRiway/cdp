<div class="container mt-5">
   <!-- NO 1 -->
   <div class="card round shadow-sm">
      <div class="card-body">
         1. SELECT a.code_cust, a.cust_name, b.fwd_name, a.order_type, a.join_date<br>
         FROM customer a JOIN forwarder b ON a.code_cust = b.code_cust<br>
         WHERE a.join_date BETWEEN '2019-10-01' AND '2020-01-02'

         <table class="table table-striped table-hover mt-5">
            <thead>
               <th>Code_cust</th>
               <th>Cust_Name</th>
               <th>Fwd_Name</th>
               <th>Order_Type</th>
               <th>Join_Date</th>
            </thead>
            <tbody>
               <?php foreach($no1 as $db):?>
                  <tr>
                     <td><?=$db['code_cust']?></td>
                     <td><?=$db['cust_name']?></td>
                     <td><?=$db['fwd_name']?></td>
                     <td><?=$db['order_type']?></td>
                     <td><?=date('d/m/Y', strtotime($db['join_date']))?></td>
                  </tr>
               <?php endforeach?>
            </tbody>
         </table>
      </div>
   </div>
   <!-- AKHIR -->

   <!-- NO 2 -->
   <div class="card round shadow-sm mt-5">
      <div class="card-body">
         2. SELECT type, COUNT(type) AS Total_Type, SUM(REPLACE(amount, '.', '')) AS Grand_Total FROM `order` GROUP BY type <br>
         UNION <br>
         SELECT 'Total' as type, COUNT(type) AS Total_type, SUM(REPLACE(amount, '.', '')) AS Grand_Total FROM `order`;

         <table class="table table-striped table-hover mt-5">
            <thead>
               <th>Type</th>
               <th>Total_Type</th>
               <th>Grand_Total</th>
            </thead>
            <tbody>
               <?php foreach($no2 as $db):?>
                  <tr>
                     <td><?=$db['type']?></td>
                     <td><?=$db['Total_Type']?></td>
                     <td><?=number_format($db['Grand_Total'],0,'','.')?></td>
                  </tr>
               <?php endforeach?>
            </tbody>
         </table>
      </div>
   </div>
   <!-- AKHIR -->

   <!-- NO 3 -->
   <div class="card round shadow-sm mt-5">
      <div class="card-body">
         3. 
         <textarea name="code" id="code" cols="30" rows="15" class="form-control">
         $input = "C0001,C0002,B0003,B0004,";
         $mydata = explode(',', $input);
         $jumlah = 0;

         echo "Output:<br>";
         for ($i=0; $i < count($mydata); $i++) { 
               if($mydata[$i] !== ''){
                  echo $mydata[$i] . "<br>";
                  $jumlah++;
               }
         }
         echo "<br>Count Row:<br>";
         echo $jumlah;
         </textarea>
      </div>
   </div>
   <!-- AKHIR -->

   <!-- NO 4 -->
   <div class="card round shadow-sm my-5">
      <div class="card-body">
         4.
         <div class="d-grid justify-content-end mb-3">
            <a href="<?=base_url('cdp/create')?>" class="btn btn-primary btn-sm shadow-sm" >Tambah</a>
         </div>

         <div id="buttons2" style="padding: 10px; margin-bottom: 10px;width: 25%;">
               <p>Export :</p>
         </div>
         <table class="table table-striped table-hover mt-5" id="myTable">
            <thead>
               <th>Container Number</th>
               <th>Size</th>
               <th>Type</th>
               <th>Gate In Date</th>
               <th>Keterangan</th>
            </thead>
            <tbody>
               <?php foreach($no4 as $db):?>
                  <tr>
                     <td><?=$db['container_no']?></td>
                     <td><?=$db['size']?></td>
                     <td><?=$db['type']?></td>
                     <td><?=$db['gate_in']?></td>
                     <td>
                        <a href="<?=base_url('cdp/detail/')?><?=$db['id']?>" class="btn btn-info btn-sm shadow-sm m-1" >Detail</a>
                        <a href="<?=base_url('cdp/update/')?><?=$db['id']?>" class="btn btn-success btn-sm shadow-sm m-1" >Edit</a>
                        <a href="<?=base_url('cdp/delete/')?><?=$db['id']?>" class="btn btn-danger tombol-hapus btn-sm shadow-sm m-1" >Delete</a>
                     </td>
                  </tr>
               <?php endforeach?>
            </tbody>
         </table>

      </div>
   </div>
   <!-- AKHIR -->
</div>

<script>
   $(document).ready( function () {
    var table2 = $('#myTable').DataTable();

    var buttons2 = new $.fn.dataTable.Buttons(table2, {
      buttons: [{
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
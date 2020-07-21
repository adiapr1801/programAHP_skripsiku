<?php
include 'grade/gradeatas.php';
include_once('includes/header.inc.php');
include_once('includes/nilai-awal.inc.php');
$pro = new NilaiAwal($db);
$stmt = $pro->readAll();

include_once('includes/kriteria.inc.php');
$kriteriaObj = new Kriteria($db);
$kriteria = $kriteriaObj->readAll();


include_once('includes/nilai-awal-detail.inc.php');
$nilAwDeObj = new NilaiAwalDetail($db);
// $nilAwDe = $nilAwDeObj->readAllByNik();

if (isset($_POST['hapus-contengan'])) {
    $imp = "('".implode("','", array_values($_POST['checkbox']))."')";
    $result = $pro->hapusell($imp);
    if ($result) { ?>
      <script type="text/javascript">
        window.onload=function(){
            showSuccessToast();
            setTimeout(function(){
                window.location.reload(1);
                history.go(0)
                location.href = location.href
            }, 5000);
        };
      </script> <?php
    } else { ?>
      <script type="text/javascript">
      window.onload=function(){
          showErrorToast();
          setTimeout(function(){
              window.location.reload(1);
              history.go(0)
              location.href = location.href
          }, 5000);
      };
      </script> <?php
    }
}
?>

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <ol class="breadcrumb">
        <li><a href="index.php">Beranda</a></li>
        <li class="active">Nilai Awal</li>
      </ol>
      <form method="post">
        <div class="row">
          <div class="col-md-6 text-left">
            <strong style="font-size:18pt;"><span class="fa fa-modx"></span> Data Nilai Preferensi</strong>
          </div>
          <div class="col-md-6 text-right">
            <div class="btn-group">
              <button type="submit" name="hapus-contengan" class="btn btn-danger"><span class="fa fa-close"></span> Hapus Contengan</button>
              <button type="button" onclick="location.href='nilai-awal-baru.php'" class="btn btn-primary"><span class="fa fa-clone"></span> Tambah Data</button>
            </div>
          </div>
        </div>
        <br/>
        <table width="100%" class="table table-striped table-bordered" id="tabeldata">
          <thead>
            <tr>
              <th width="10"><input type="checkbox" name="select-all" id="select-all" /></th>
              <th>NIK</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tfoot>
          </tfoot>
          <tbody>
          <?php $no=1; while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
              <td><input type="checkbox" value="<?=$row['id_nilai_awal']?>" name="checkbox[]" /></td>
              <td><?=$row['id_alternatif']?></td>
              <td><?php
                  if ($row['keterangan'] == "B") {
                    echo "Konsisten";
                  }elseif($row['keterangan'] == "C"){
                    echo "Cukup";
                  }else{
                    echo "Tidak konsisten";
                  }
                ?></td>
            </tr>
          <?php endwhile; ?>
          </tbody>
        </table>
      </form>
    </div>
  </div>

  <!-- Default bootstrap modal example -->
  <div class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Nilai Detail</h4>
        </div>
        <div class="modal-body">
          <p>One fine body&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

<?php include 'grade/gradebawah.php'; ?>

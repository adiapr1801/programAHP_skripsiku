<?php
include 'grade/gradeatas.php';
include_once('includes/header.inc.php');
include_once('includes/nilai.inc.php');
$pro = new Nilai($db);
$stmt = $pro->readAll();
$count = $pro->countAll();

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
      <form method="post">
        <div class="row">
          <div class="col-md-6 text-left">
            <strong style="font-size:18pt;"><span class="fa fa-modx"></span> Data Nilai Preferensi</strong>
          </div>
          <div class="col-md-6 text-right">
            <div class="btn-group">
              <button type="submit" name="hapus-contengan" class="btn btn-danger"><span class="fa fa-close"></span> Hapus Contengan</button>
              <button type="button" onclick="location.href='nilai-baru.php'" class="btn btn-primary"><span class="fa fa-clone"></span> Tambah Data</button>
            </div>
          </div>
        </div>
        <br/>
        <table width="100%" class="table table-striped table-bordered" id="tabeldata">
          <thead>
            <tr>
              <th width="10"><input type="checkbox" name="select-all" id="select-all" /></th>
              <th>Nilai</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tfoot>
          </tfoot>
          <tbody>
          <?php $no=1; while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) : ?>
            <tr>
              <td style="vertical-align:middle;"><input type="checkbox" value="<?php echo $row['id_nilai'] ?>" name="checkbox[]" /></td>
              <td style="vertical-align:middle;"><?php echo $row['jum_nilai'] ?></td>
              <td style="vertical-align:middle;"><?php echo $row['ket_nilai'] ?></td>
            </tr>
          <?php endwhile; ?>
          </tbody>
        </table>
      </form>
    </div>
  </div>

<?php include 'grade/gradebawah.php'; ?>

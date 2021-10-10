<?php include 'head.php';

if(empty($id=$_SESSION['id'])){ ?>
  <script>window.location.href='index.php'</script>
<?php }else{
$result=tampilpendaftar($id);
$result1=tampildataortu($id);
$result2=tampilpendidikan($id);
$result3=tampildok($id);
$result4=tampilpembayaran($id);
?>


<style>
    .block-web.success-box {
        background: rgb(252, 252, 252);
        padding: 10px;
        /* color: white; */
    }
    
    .block-web.dark-box {
        background: darksalmon;
        padding: 10px;
        margin-top: 1%;
    }
    
    .header {
        background: #89b0d2;
        padding: 10px;
        margin-top: 10%;
        color: white;
    }
    
    .navbar {
        margin-bottom: 0;
    }
    
    .daftar {
        background-color: #e4e4e4;
    }
    
    #kepada {
        background-color: rgb(252, 252, 252);
    }

    .konfirm{
      background: rgb(252, 252, 252);
    }
</style>

<div class="container">
    <div class="col-md-6">
        <div class="header">
            <h3>Informasi</h3>
        </div>
        <div class="block-web success-box">

            <div class="porlets-content">
                <?php while ($row=mysqli_fetch_array($result)) { ?>

                <p style="font-weight:bold">Yth Sdr-i.
                    <?php echo strtoupper($row['nama_lengkap']) ?>
                </p>

                <p>Selamat, Anda telah berhasil melakukan Aktivasi Pengisian Formulir. </p>
                <p>Pertanyaan dan Informasi, silahkan kontak Panitia Tata usaha di SMK BRIGJEND KATAMSO MEDAN SUNGGAL(GTalk/Hangout) atau 0218000063!</p>
            </div>
        </div>

        <div class="header">
            <h3>Progress Pengisian Blanko (Formulir)</h3>
        </div>
        <div class="block-web primary-box">

            <div class="porlets-content">

                <li class="list-group-item">
                <?php if($_SESSION['status']==1){ ?>
                    <a class="btn btn-success btn-block "><span class="glyphicon glyphicon-ok"></span>
                        ORANG TUA
                    </a>
                <?php }else{?>
                      <a href="orangtua.php" class="btn btn-primary btn-block ">
                        ORANG TUA
                    </a>
                <?php } ?>
                </li>

                <li class="list-group-item">
                <?php

                 if($_SESSION['statusdidik']==1){ ?>
                    <a class="btn btn-success btn-block "><span class="glyphicon glyphicon-ok"></span>
                       PENDIDIKAN                    </a>
                <?php }else{?>
                    <a href="pendidikan.php" class="btn btn-primary btn-block ">
                        PENDIDIKAN                    </a>
                <?php } ?>
                </li>

                <li class="list-group-item">
                <?php if($_SESSION['statusdok']==1){ ?>
                    <a class="btn btn-success btn-block "><span class="glyphicon glyphicon-ok"></span>
                      DOKUMEN
                    </a>
                <?php }else{?>
                    <a href="dokumen.php" class="btn btn-primary btn-block ">
                        DOKUMEN
                    </a>
                <?php } ?>
                </li>
             
            </div>
        </div>
    </div>


</div>
<?php } ?>
</form>
</div>
</div>
<br>
    <?php } include 'foot.php'; ?>
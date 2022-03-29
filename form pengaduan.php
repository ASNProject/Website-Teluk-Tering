<?php 
include_once('pengaduan_mail.php');
?>

<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Layanan Pengaduan</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <div class="wrapper">
      <nav>
        <div class="container-flex">
          <div class="brand">
            <img
              src="images/logo.png"
              alt=""
              style="width: 60px; height: 80px"
            />
          </div>
          <div class="burger">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
          </div>
          <div class="bg-sidebar"></div>
          <ul class="sidebar">
            <li><a href="index.html">BERANDA</a></li>
            <li><a href="form informasi data.html">PROFIL</a></li>
            <li><a href="index.html">PENGURUSAN DOKUMEN</a></li>
            <li><a href="form download.html">INFORMASI DATA</a></li>
            <li><a href="form pengaduan.php">LAYANAN PENGADUAN</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <div class="container" style="background-color: rgb(212, 208, 208)">
      <br />
      <h1 style="text-align: center">LAYANAN PENGADUAN</h1>
      <div class="row">
        <div class="col-xl-6 col-sm-12" style="padding: 10px">
          <br />
          <form method="post" enctype="multipart/form-data">
            <!--Nama-->
            <div class="row">
              <div class="col-xl-6 col-sm-12" style="width: 200px; margin-left: 20px">
                <p>NAMA</p>
              </div>
              <div class="col-xl-6 col-sm-12">
                <div
                  style="
                    width: 300px;
                    padding: 5px;
                    border-radius: 5px;
                    background-color: white;
                    margin-left: 20px;
                  "
                >
                  <input type="text" name="nama" style="width: 290px" />
                </div>
              </div>
            </div>
            <!--NIK-->
            <div class="row" style="margin-top: 10px">
              <div class="col-xl-6 col-sm-12" style="width: 200px; margin-left: 20px">
                <p>NIK</p>
              </div>
              <div class="col-xl-6 col-sm-12">
                <div
                  style="
                    width: 300px;
                    padding: 5px;
                    margin-left: 20px;
                    border-radius: 5px;
                    background-color: white;
                  "
                >
                  <input type="text" name="nik" style="width: 290px" />
                </div>
              </div>
            </div>
            <!--Email-->
            <div class="row" style="margin-top: 10px">
              <div class="col-xl-6 col-sm-12" style="width: 200px; margin-left: 20px">
                <p>EMAIL</p>
              </div>
              <div class="col-xl-6 col-sm-12">
                <div
                  style="
                    width: 300px;
                    padding: 5px;
                    margin-left: 20px;
                    border-radius: 5px;
                    background-color: white;
                  "
                >
                  <input type="text" name="email" style="width: 290px" />
                </div>
              </div>
            </div>
            <!--NO. HANDPHONE/WA-->
            <div class="row" style="margin-top: 10px">
              <div class="col-xl-6 col-sm-12" style="width: 200px; margin-left: 20px">
                <p>NO. HANDPHONE/WA</p>
              </div>
              <div class="col-xl-6 col-sm-12">
                <div
                  style="
                    width: 300px;
                    padding: 5px;
                    margin-left: 20px;
                    border-radius: 5px;
                    background-color: white;
                  "
                >
                  <input type="text" name="nohp" style="width: 290px" />
                </div>
              </div>
            </div>
            <!--Alamat Domisili-->
            <div class="row" style="margin-top: 10px">
              <div class="col-xl-6 col-sm-12" style="width: 200px; margin-left: 20px">
                <p>ALAMAT DOMISILI</p>
              </div>
              <div class="col-xl-6 col-sm-12">
                <div
                  style="
                    width: 300px;
                    margin-left: 20px;
                    height: 100px;
                    padding: 5px;
                    border-radius: 5px;
                    background-color: white;
                  "
                >
                  <textarea
                    name="alamatdomisili"
                    id=""
                    cols="30"
                    rows="10"
                    type="text"
                    style="width: 290px; height: 90px"
                  ></textarea>
                </div>
              </div>
            </div>
            <!--Alamat Tujuan Pindah-->
            <div class="row" style="margin-top: 10px">
              <div class="col-xl-6 col-sm-12" style="width: 200px; margin-left: 20px">
                <p>PENGADUAN</p>
              </div>
              <div class="col-xl-6 col-sm-12">
                <div
                  style="
                    width: 300px;
                    height: 100px;
                    padding: 5px;
                    margin-left: 20px;
                    border-radius: 5px;
                    background-color: white;
                  "
                >
                  <textarea
                    name="alamattujuan"
                    id=""
                    cols="30"
                    rows="10"
                    type="text"
                    style="width: 290px; height: 90px"
                  ></textarea>
                </div>
              </div>
            </div>
            
            <br /><br />
            <!--File Pengantar RT dan RW-->
            <div class="row">
              <div class="col-6" style="width: 200px; margin-left: 20px">
                <p>BUKTI PENGADUAN (FOTO)</p>
              </div>
              <div class="col-6">
                <input
                  type="file"
                  name="pengantar"
                  required
                  id="file" style="margin-left:20px"
                />
              </div>
            </div>
            <script type="text/javascript">
                var uploadField = document.getElementById("file");
                uploadField.onchange = function(){
                    if (this.files[0].size > 2000000){
                        alert("Maaf File Terlalu Besar! Maksimal 2MB");
                        this.value = "";
                    };
                };
            </script>
            <br /><br />
            <!--Button Ajukan Permohonan-->
            <div style="margin-left: auto; margin-right: auto; width: 200px; text-align: center">
              <input
                type="submit"
                name="submit"
                value="Ajukan Permohonan"
                class="btn btn-lg btn-success"
                style="margin-bottom: 20px"
              />
            </div>
          </form>
        </div>
        <div class="col-6">
        </div>
      </div>
    </div>
    <!--Bottom-->
    <div
      class="container"
      style="margin-top: 10px; background-color: rgb(212, 208, 208)"
    >
      <div class="row" >
        <div class="col-6" style="padding: 20px;">
          <p style="margin-left: auto">
            <img
              src="images/gmail.png"
              style="float: left; width: 20px; height: 20px"
            />teluktering003@gmail.com
          </p>
          <p style="margin-left: auto">
            <img
              src="images/fb.png"
              style="float: left; width: 20px; height: 20px"
            />kelurahan teluk tering
          </p>
          <p style="margin-left: auto">
            <img
              src="images/wa.png"
              style="float: left; width: 20px; height: 20px"
            />085891674893
          </p>
        </div>
        <div class="col-6" style=" margin-right: auto;">
          <div>
            <p style="                
                display: block;
                margin-left: auto;
                margin-right: auto;
                width: 50%;
                margin-top: 10px;"
                >LOKASI KELURAHAN TELUK TERING</p>
            <iframe class="img-fluid" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31912.368026676064!2d104.02729576060487!3d1.1273684473697556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9891afdb3cd87%3A0xbc627a0dc73e7499!2sTlk.%20Tering%2C%20Kec.%20Batam%20Kota%2C%20Kota%20Batam%2C%20Kepulauan%20Riau!5e0!3m2!1sid!2sid!4v1647777580152!5m2!1sid!2sid" width="520" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
    <div class="container">
      <p style="margin-left: auto; font-size: 10px; margin-top: 10px;">
        Copyright&copy; Teluk Tering Online | 2022
      </p>
    </div>

    <script src="app.js"></script>
  </body>
</html>

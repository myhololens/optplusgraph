<?php
session_start();

if(isset($_SESSION['kode'])){
    require_once('db/db.php');
    $kode_unik = $_SESSION['kode'];
    $_DB = new DB();
    $select = $_DB->select('SELECT nama_responden, tahap_sekarang FROM responden WHERE kode_unik = '.$kode_unik);
    if($select){
        if($select[0]['tahap_sekarang'] == "post-test2.php"){
            # Ok, right place!
        } else {
            header("Location: ".$select[0]['tahap_sekarang']);
            exit;            
        }
    } else {
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
?>
<?php require_once('header.php'); ?>
<body>
    <style>
        /* Mark input boxes that gets an error on validation: */

        .invalid {
            background-color: #ffdddd;
        }
        /* Hide all steps by default: */

        .tab {
            /*display: none;*/
            box-sizing: border-box;
            -webkit-animation: fadeEffect 1.5s;
            animation: fadeEffect 1.5s;
        }

        @-webkit-keyframes fadeEffect {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeEffect {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        /* Make circles that indicate the steps of the form: */

        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            display: inline-block;
            opacity: 0.5;
        }

        .step.active {
            opacity: 1;
        }
        /* Mark the steps that are finished and valid: */

        .step.finish {
            background-color: #4CAF50;
        }

        .style-code {
            width: 100%;
            margin-top: 17px;
            margin-bottom: 17px;
            font-size: 12pt;
            border: 1px solid #ddd;
        }
    </style>
    
    <header role="banner" id="fh5co-header" class="navbar-fixed-top">
        <div class="container">
            <!-- <div class="row"> -->
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <!-- Mobile Toggle Menu Button -->
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"></a>
                    <div class="navbar-brand" style="font-size:12pt">
                        <ul class="social social-circle" style="width: auto;">
                            <li class="icon-head"></li>
                        </ul> Anda sebagai Responden | <p id="timer">Sisa Waktu: 5 menit 0 detik</p>
                    </div>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" data-nav-section="beranda"><span>Beranda</span></a></li>
                        <li class="icon-arrow-circle-right" style="margin-top:17px;"></li>
                        <li><a href="#" data-nav-section="data-pribadi"><span>Data Pribadi</span></a></li>
                        <li class="icon-arrow-circle-right" style="margin-top:17px;"></li>
                        <li><a href="#" data-nav-section="pretest"><span>Pre Test</span></a></li>
                        <li class="icon-arrow-circle-right" style="margin-top:17px;"></li>
                        <li><a href="#" data-nav-section="simulasi"><span>Simulasi</span></a></li>
                        <li class="icon-arrow-circle-right" style="margin-top:17px;"></li>
                        <li class="active"><a href="#" data-nav-section="post-test"><span>Post Test</span></a></li>
                        <li class="icon-arrow-circle-right" style="margin-top:17px;color:lightseagreen;"></li>
                        <li><a href="#" data-nav-section="selesai"><span>Selesai</span></a></li>
                    </ul>
                </div>
            </nav>
            <!-- </div> -->
        </div>
    </header>

    <section id="fh5co-contact" data-section="post-test">
        <div class="clearfix visible-sm-block"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 section-heading text-center">
                    <h2 class="to-animate">Post Test 2</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext to-animate">
                            <h3>Tes ini untuk menilai hasil kinerja Anda<br>dari simulasi yang telah dilakukan.<br>Mohon kejujuran dan konsentrasi Anda.</h3>
                            <p>Baca lebih lanjut tentang <a data-toggle="modal" data-target="#kebijakan">Kebijakan Privasi</a>.</p>
                            <p>Anda <b>tidak diperkenankan</b> menggunakan bantuan kakas apapun.<br>
                            Silakan persiapkan alat tulis untuk membantu dalam menghitung.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-12 col-sm-12 to-animate">
                    
                    <form accept-charset="utf-8" method="POST" action="#" name="formPostTest2" id="formPostTest2">
                        
                        <div style="text-align:center;margin-top:40px;">
                            <h4>Sisa Soal:
                                <b id="sisaSoal">1</b>
                            </h4>
                        </div>

                        <!-- One "tab" for each step in the form: -->
                        <div id="DivFormPostTest">
                            
                            <div id="p1" class="tab form-group">
                                <div class="form-control" style="height: 100%">
                                    <p style="margin-bottom: 7pt;">Berapa jumlah simpul dari kode program berikut ini ?</p>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 to-animate">
                                            <select id="answerP1" name="answerP1" class="form-control" onchange="checkAnswer(this);">
                                                <option value="" selected disabled>Silakan Pilih Jawaban Anda</option>                
                                                <option value="a">6</option>                
                                                <option value="b">5</option>                
                                                <option value="c">4</option>                
                                                <option value="d">7</option>    
                                                <option value="e">Tidak ada jawaban</option>         
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-sm-6 to-animate">
                                            <div style="overflow:auto;">
                                                <div style="float:center;">
                                                    <center><input id="nextBtn" class="btn btn-primary btn-lg" style="display:none;" value="Simpan" type="button" onclick="postTest2(1)"></center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="code" class="style-code">#include "stdio.h"

int main(){
  int x = 6, y = 6;
  int i, j,
  graf[6][6] = {  { 0, 0,  0, 0,  0, 0 },
                  { 0, 0, 11, 7,  5, 9 },
                  { 0, 11, 0, 8,  4, 13},
                  { 0, 7,  8, 0,  2, 1 },
                  { 0, 5,  3, 2,  0, 13},
                  { 0, 9,  3, 1, 13, 0 }
               };    
  printf("\nGraf:\n");
  for (i = 0; i < x; i++)
    for (j = 0; j < y; j++){
      printf("graf[%d][%d]: %d\n",i,j,graf[i][j]);
    }
  return 0;
}</div>

                                </div>
                            </div>

                        </div>
                        
                    </form>
                </div>

            </div>

        </div>
    </section>

    <div style="height:133px;"></div>
    
<?php require_once('footer.php'); ?>
<script src="js/ace/ace.js?v=1"></script>
<script src="js/ace/mode-c_cpp.js?v=1"></script>
<script src="js/post-test2.js?v=1"></script>
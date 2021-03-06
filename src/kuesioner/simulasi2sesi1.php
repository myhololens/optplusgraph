<?php
session_start();

if(isset($_SESSION['kode'])){
    # Ok
} else {
    header("Location: index.php");
    exit;
}
?>
<?php require_once('header.php'); ?>

<body onunload="_DESTROY_CODEVIZ()">
    <style>
        /* Mark input boxes that gets an error on validation: */

        .invalid {
            background-color: #ffdddd;
        }

        /* Hide all steps by default: */

        .tab {
            display: none;
            box-sizing: border-box;
            -webkit-animation: fadeEffect 1.5s;
            animation: fadeEffect 1.5s;
        }

        .tab2 {
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
    </style>

    <header role="banner" id="fh5co-header" class="navbar-fixed-top">
        <div class="container">
            
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <!-- Mobile Toggle Menu Button -->
                    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"></a>
                    <div class="navbar-brand" style="font-size:12pt">
                        <ul class="social social-circle" style="width: auto;">
                            <li class="icon-head"></li>
                        </ul> Simulasi 2 - CodeViz <p class="timer-simulasi" id="timer">Sisa Waktu: 15 menit 0 detik</p>
                    </div>
                </div>
            </nav>
            
        </div>
    </header>

    <section id="fh5co-contact" data-section="simulasi">
        <div class="clearfix visible-sm-block"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 section-heading text-center">
                    <h2 class="to-animate">Simulasi 2 - CodeViz</h2>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 subtext to-animate">
                            <h3>Anda ditugaskan untuk menyelesaikan 3 soal kode program dengan bahasa pemrograman C menggunakan <a data-toggle="modal" data-target="#kakasCodeViz"><b>kakas CodeViz</b></a>.</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 to-animate">
                    
                    <div id="DivFormSimulasi">
                        <div id="p1" class="tab form-group">
                            <div class="form-control" style="height: 100%">
                                <p style="margin-bottom: 7pt;"><span class="badge badge-info">Tes Inti | Simulasi 2 - CodeViz</span></p>
                                <p><b>Soal 1</b></p>
                                <p>Silakan perbaiki kesalahan sintaks pada kode program berikut ini !</p>
                                <p>Berapa derajat (degree) yang dimiliki oleh simpul 3 pada kode program berikut ini ?</p>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 to-animate">
                                        <select id="answerP1" name="answerP1" class="form-control" onchange="checkAnswer(this, 1);">
                                            <option value="" selected disabled>Silahkan Pilih Jawaban Anda</option>                
                                            <option value="a">1</option>                
                                            <option value="b">2</option>                
                                            <option value="c">3</option>                
                                            <option value="d">4</option>    
                                            <option value="e">5</option>        
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-6 to-animate">
                                        <div style="overflow:auto;">
                                            <div style="float:center;">
                                                <center><input id="nextBtn1" class="btn btn-primary btn-lg" style="display:none;" value="Simpan" type="button" onclick="simulasi2sesi1NextBtn(1)"></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <iframe id="CODEVIZ1" width="100%" height="600" frameborder="0" src="http://<?php echo $_SESSION['host']; ?>/codeviz/#code=%23include%20%22stdio.h%22%0A%0Aint%20row%20%3D%205,%20col%20%3D%204%3B%0Aint%20i,%20j%3B%0A%0Aint%20main%28%29%0A%7B%0A%20%20%20%20Int%20graf%5B5%5D%5B4%5D%20%3D%20%7B%20%20%7B%200,%202,%203,%201%7D,%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7B%202,%200,%207,%209%7D,%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7B%203,%207,%200,%208%7D,%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7B%201,%209,%208,%200%7D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7D%3B%0A%20%20%20%20print%28%22%5CnGraf%3A%5Cn%22%29%3B%0A%20%20%20%20for%20%28i%20%3D%200%3B%20i%20%3C%20row%20i%2B%2B%29%0A%20%20%20%20%20%20%20%20for%20%28j%20%3D%200%3B%20j%20%3C%20cols%3B%20j%2B%2B%29%0A%20%20%20%20%20%20%20%20%20%20%20%20printf%28%22graf%5B%25d%5D%5B%25d%5D%3A%20%25d%5Cn%22,i,j,graf%5Bi%5D%5Bj%5D%29%3B%0A%0A%20%20%20%20return%200%3B%0A%7D&mode=edit&origin=opt-frontend.js&py=c&rawInputLstJSON=%5B%5D"> </iframe>
                            </div>
                        </div>
                        <div id="p2" class="tab form-group">
                            <div class="form-control" style="height: 100%">
                                <p style="margin-bottom: 7pt;"><span class="badge badge-info">Tes Inti | Simulasi 2 - CodeViz</span></p>
                                <p><b>Soal 2</b></p>
                                <p>Berapa jumlah minimum biaya (cost) yang diperlukan dari simpul 1 hingga simpul 7 dari kode program berikut ini ?</p>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 to-animate">
                                        <select id="answerP2" name="answerP2" class="form-control" onchange="checkAnswer(this, 2);">
                                            <option value="" selected disabled>Silahkan Pilih Jawaban Anda</option>                
                                            <option value="a">14</option>                
                                            <option value="b">13</option>                
                                            <option value="c">12</option>                
                                            <option value="d">11</option>    
                                            <option value="e">Tidak dapat dihitung</option>        
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-6 to-animate">
                                        <div style="overflow:auto;">
                                            <div style="float:center;">
                                                <center><input id="nextBtn2" class="btn btn-primary btn-lg" style="display:none;" value="Simpan" type="button" onclick="simulasi2sesi1NextBtn(2)"></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <iframe id="CODEVIZ2" width="100%" height="600" frameborder="0" src="http://<?php echo $_SESSION['host']; ?>/codeviz/#code=%23include%20%22stdio.h%22%0A%23include%20%22time.h%22%0A%23define%20infinity%20999%0A%0Aint%20graf%5B10%5D%5B10%5D,%20X%5B10%5D,%20n,%20c%20%3D%200%3B%0A%0Aint%20R%28const%20int%20nMin,%20const%20int%20nMax%29%0A%7B%0A%20%20%20%20return%20rand%28%29%20%25%20%28nMax%20-%20nMin%29%20%2B%20nMin%3B%0A%7D%0A%0Avoid%20Z%28%29%0A%7B%0A%20%20%20%20int%20i,%20j%3B%0A%20%20%20%20n%20%3D%207%3B%0A%0A%20%20%20%20for%20%28i%20%3D%200%3B%20i%20%3C%20n%3B%20i%2B%2B%29%0A%20%20%20%20%7B%0A%20%20%20%20%20%20%20%20X%5Bi%5D%20%3D%200%3B%0A%20%20%20%20%7D%0A%20%20%20%20%0A%20%20%20%20graf%5B1%5D%5B2%5D%20%3D%203%3B%0A%20%20%20%20graf%5B1%5D%5B3%5D%20%3D%205%3B%0A%20%20%20%20graf%5B2%5D%5B4%5D%20%3D%2010%3B%0A%20%20%20%20graf%5B3%5D%5B5%5D%20%3D%204%3B%0A%20%20%20%20graf%5B5%5D%5B6%5D%20%3D%201%3B%0A%20%20%20%20graf%5B6%5D%5B7%5D%20%3D%203%3B%0A%20%20%20%20graf%5B2%5D%5B7%5D%20%3D%2011%3B%0A%20%20%20%20%0A%20%20%20%20for%20%28i%20%3D%200%3B%20i%20%3C%20n%3B%20i%2B%2B%29%0A%20%20%20%20%7B%0A%20%20%20%20%20%20%20%20printf%28%22%5Cn%22%29%3B%0A%20%20%20%20%20%20%20%20for%20%28j%20%3D%200%3B%20j%20%3C%20n%3B%20j%2B%2B%29%0A%20%20%20%20%20%20%20%20%20%20%20%20printf%28%22%5Ct%25d%22,%20graf%5Bi%5D%5Bj%5D%29%3B%0A%20%20%20%20%7D%0A%7D%0A%0Avoid%20Q%28int%20s%29%0A%7B%0A%20%20%20%20int%20i,%20n%3B%0A%0A%20%20%20%20X%5Bs%5D%20%3D%201%3B%0A%0A%20%20%20%20printf%28%22%25d---%3E%22,%20s%20%2B%201%29%3B%0A%20%20%20%20n%20%3D%20xyz%28s%29%3B%0A%0A%20%20%20%20if%20%28n%20%3D%3D%20999%29%0A%20%20%20%20%7B%0A%20%20%20%20%20%20%20%20n%20%3D%200%3B%0A%20%20%20%20%20%20%20%20printf%28%22%25d%22,%20n%20%2B%201%29%3B%0A%20%20%20%20%20%20%20%20c%20%2B%3D%20graf%5Bs%5D%5Bn%5D%3B%0A%0A%20%20%20%20%20%20%20%20return%3B%0A%20%20%20%20%7D%0A%0A%20%20%20%20Q%28n%29%3B%0A%7D%0A%0Aint%20xyz%28int%20c%29%0A%7B%0A%20%20%20%20int%20i,%20nc%20%3D%20999%3B%0A%20%20%20%20int%20min%20%3D%20999,%20kmin%3B%0A%0A%20%20%20%20for%20%28i%20%3D%200%3B%20i%20%3C%20n%3B%20i%2B%2B%29%0A%20%20%20%20%7B%0A%20%20%20%20%20%20%20%20if%20%28%28graf%5Bc%5D%5Bi%5D%20!%3D%200%29%20%26%26%20%28X%5Bi%5D%20%3D%3D%200%29%29%0A%20%20%20%20%20%20%20%20%20%20%20%20if%20%28graf%5Bc%5D%5Bi%5D%20%2B%20graf%5Bi%5D%5Bc%5D%20%3C%20min%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20min%20%3D%20graf%5Bi%5D%5B0%5D%20%2B%20graf%5Bc%5D%5Bi%5D%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20kmin%20%3D%20graf%5Bc%5D%5Bi%5D%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20nc%20%3D%20i%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%7D%0A%0A%20%20%20%20if%20%28min%20!%3D%20999%29%0A%20%20%20%20%20%20%20%20c%20%2B%3D%20kmin%3B%0A%0A%20%20%20%20return%20nc%3B%0A%7D%0A%0Aint%20main%28%29%0A%7B%0A%20%20%20%20srand%28time%28NULL%29%29%3B%0A%20%20%20%20Z%28%29%3B%0A%20%20%20%20printf%28%22%5Cn%22%29%3B%0A%20%20%20%20Q%280%29%3B%0A%20%20%20%20printf%28%22%5Cn%5CnHasil%3A%20%25d%5Cn%20%22,%20c%29%3B%0A%0A%20%20%20%20return%200%3B%0A%7D&mode=edit&origin=opt-frontend.js&py=c&rawInputLstJSON=%5B%5D"> </iframe>
                            </div>
                        </div>
                        <div id="p3" class="tab form-group">
                            <div class="form-control" style="height: 100%">
                                <p style="margin-bottom: 7pt;"><span class="badge badge-info">Tes Inti | Simulasi 2 - CodeViz</span></p>
                                <p><b>Soal 3</b></p>
                                <p>Berapa jumlah sisi (edge) yang dimiliki oleh kode program berikut ini ?</p>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 to-animate">
                                        <select id="answerP3" name="answerP3" class="form-control" onchange="checkAnswer(this, 3);">
                                            <option value="" selected disabled>Silahkan Pilih Jawaban Anda</option>                
                                            <option value="a">1</option>                
                                            <option value="b">2</option>                
                                            <option value="c">3</option>                
                                            <option value="d">4</option>    
                                            <option value="e">5</option>        
                                        </select>
                                    </div>
                                    <div class="col-md-6 col-sm-6 to-animate">
                                        <div style="overflow:auto;">
                                            <div style="float:center;">
                                                <center><input id="nextBtn3" class="btn btn-primary btn-lg" style="display:none;" value="Simpan" type="button" onclick="simulasi2sesi1NextBtn(3)"></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <iframe id="CODEVIZ3" width="100%" height="600" frameborder="0" src="http://<?php echo $_SESSION['host']; ?>/codeviz/#code=%23include%3Cstdio.h%3E%0A%0Aint%20row%20%3D%203,%20col%20%3D%203%3B%0Aint%20i,%20j%3B%0A%0Aint%20main%28%29%0A%7B%0A%20%20%20%20int%20G%5B3%5D%5B3%5D%20%3D%20%7B%20%20%20%7B%200,%202,%203%7D,%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7B%202,%200,%207%7D,%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7B%203,%207,%200%7D,%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%7D%3B%0A%20%20%20%20printf%28%22%5CnGraf%3A%5Cn%22%29%3B%0A%20%20%20%20for%20%28i%20%3D%200%3B%20i%20%3C%20row%3B%20i%2B%2B%29%0A%20%20%20%20%20%20%20%20for%20%28j%20%3D%200%3B%20j%20%3C%20col%3B%20j%2B%2B%29%0A%20%20%20%20%20%20%20%20%20%20%20%20printf%28%22G%5B%25d%5D%5B%25d%5D%3A%20%25d%5Cn%22,i,j,G%5Bi%5D%5Bj%5D%29%3B%0A%0A%20%20%20%20return%200%3B%0A%7D&mode=edit&origin=opt-frontend.js&py=c&rawInputLstJSON=%5B%5D"> </iframe>
                            </div>
                        </div>
                        
                    </div>

                </div>

            </div>

        </div>
    </section>

    <div style="height:133px;"></div>
    
    <?php require_once('footer.php'); ?>
    <script src="js/simulasi.js?v=6"></script>
    <script src="js/simulasi2sesi1.js?v=3"></script>

<div id="kakasCodeViz" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <Button type="button" class="close" data-dismiss="modal">&times;</Button>
                <h4 class="modal-title">Kakas CodeViz (Code Visualization)</h4>
            </div>
            <div class="modal-body">
                <p>Kakas ini disebut kakas visualisasi program.</p>
                <p>Visualisasi Program adalah kakas yang dapat membantu memvisualisasikan
                    data-data dalam memori komputer ketika melakukan eksekusi kode program.
                    Diharapkan dengan kakas ini dapat membantu dalam mempelajari kode program.
                    Kelebihan kakas CodeViz dibanding OPT adalah kakas ini mampu mendeteksi
                    representasi graf dalam data memori komputer sehingga dapat memvisualisasikan
                    graf.</p>
                <p><b>CodeViz</b></p>
                <p>Tampilan awal kakas CodeViz dapat dilihat pada gambar berikut ini.</p>
                <p><img src="images/homescreen-codeviz.png" style="width:100%;" /></p>
                <p>Seperti halnya kakas OPT, pada kakas CodeViz ini Anda hanya menggunakan <b>Code Editor</b>
                    untuk input kode program. Kemudian klik <b>'Visualize Execution'</b> untuk melihat hasil visualisasi.
                </p>
                <p><img src="images/gambarIV.14-codeviz.png" style="width:100%;"/></p>
                <p>Pada Gambar IV.14 terlihat tiga bagian penting, yaitu <b>(a) Navigasi kontrol</b>,
                <b>(b) Slider</b>, dan <b>(c) Panel visualisasi</b>.<br>
                    Pada Navigasi kontrol, terdiri dari 4 <i>button</i> yang dapat digunakan, yaitu:<br>
                    Tombol <b>'Forward'</b> untuk melihat visualisasi per baris kode program.<br>
                    Tombol <b>'Back'</b> untuk melihat visualisasi sebelumnya.<br>
                    Tombol <b>'Last'</b> untuk melihat visualisasi di akhir kode program.<br>
                    Tombol <b>'First'</b> untuk melihat visualisasi di awal kode program.<br>
                    Untuk membuat breakpoint, cukup klik pada nomor baris kode program.<br>
                    Untuk menghapus breakpoint, cukup klik pada nomor baris yang sebelumnya telah ditandai sebagai breakpoint.<br>
                    <br>
                    Pada <b>Slider</b>, Anda dapat menggeser proses langkah visualisasi dengan melompat pada
                    langkah tertentu yang diinginkan.<br>
                    Pada <b>Panel Visualisasi</b>, terdapat 3 bagian tab yaitu Primitif Visualization yang isinya sama dengan milik kakas OPT.
                    Panel kedua <b>Graph Visualization</b> adalah fitur utama dalam kakas CodeViz ini untuk menampilkan visualisasi graf.
                    Kemudian panel terakhir <b>Print Output</b> adalah untuk melihat hasil code <i>printf</i>.<br>
                    Pada code sebelah kiri, terlihat baris berwarna kuning dengan anak panah berwarna merah. Ini mengindikasikan baris kode program
                    yang akan dieksekusi selanjutnya. Untuk baris berwarna <i>gray</i> dengan anak panah berwarna hijau mengindikasikan baris kode program yang saat ini sedang divisualisasikan.
                </p>
                <p><img src="images/gambarIV.15-codeviz.png" style="width:100%;"/></p>
                <p>Pada Gambar IV.15 terlihat visualisasi graf.<br>
                    Anda dapat <b>drag and drop</b> simpul (node) untuk menyesuaikan visual graf.<br>
                    Simpul yang berwarna <i>orange</i>, akan menempel pada posisi yang Anda inginkan.
                    Untuk mengembalikan (release) seperti semula (simpul berwarna biru dongker), cukup <b>double-click</b> pada
                    simpul yang berwarna <i>orange</i> tadi.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
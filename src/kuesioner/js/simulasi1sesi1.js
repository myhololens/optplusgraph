$(document).ready(function() {
    goTop();
    var divTimer = document.getElementById("timer");
    timer(15, 0, divTimer);
});

function goTop() {
    $('html, body').animate({
        scrollTop: $('html').offset().top
    }, 500);
    return false;
}

function saveToDB(jwb, id_soal) {
    var time = 'menit ' + _MIN + ':detik ' + _SEC;
    console.log(id_soal + ' jwb: ' + jwb + '-' + time);
    $.ajax({
        type: "POST",
        url: "ajax_request/simulasi1sesi1.php",
        data: "id_soal=" + id_soal + "&jwb=" + jwb + "&time=" + time,
        cache: false,
        success: function(result) {
            if (result == 'sukses') {
                console.log('sukses simpan jawaban ke DB');
            } else {
                console.log(result);
            }
        },
        error: function(xhr, status, error) {
            console.log('Terjadi koneksi galat: ' + status);
        }
    });
}

/**
 * 
 * @param {soal sekarang} currentQuestion
 */
function simulasi1sesi1NextBtn(currentQuestion) {
    var valid = true;

    switch (currentQuestion) {
        case 1:
            var iframe1 = document.getElementById("OPT1");
            var viz1 = iframe1.contentWindow.document.getElementById("vizLayoutTdSecond");

            if (document.getElementById('answerP1').value != '') {
                if (viz1 != null) {
                    saveToDB(document.getElementById('answerP1').value, 17);
                    goTop();
                } else {
                    valid = false;
                    console.log('viz1: ' + viz1);
                    alert("Silakan gunakan kakas OPT terlebih dahulu untuk menjawab soal!");
                }
            } else {
                document.getElementById('p1').className += ' invalid';
                valid = false;
            }
            break;
        case 2:
            var iframe2 = document.getElementById("OPT2");
            var viz2 = iframe2.contentWindow.document.getElementById("vizLayoutTdSecond");

            if (document.getElementById('answerP2').value != '') {
                if (viz2 != null) {
                    saveToDB(document.getElementById('answerP2').value, 20);
                    goTop();
                } else {
                    valid = false;
                    console.log('viz2: ' + viz2);
                    alert("Silakan gunakan kakas OPT terlebih dahulu untuk menjawab soal!");
                }
            } else {
                document.getElementById('p2').className += ' invalid';
                valid = false;
            }
            break;
        case 3:
            var iframe3 = document.getElementById("OPT3");
            var viz3 = iframe3.contentWindow.document.getElementById("vizLayoutTdSecond");

            if (document.getElementById('answerP3').value != '') {
                if (viz3 != null) {
                    saveToDB(document.getElementById('answerP3').value, 21);
                    goTop();
                } else {
                    valid = false;
                    console.log('viz3: ' + viz3);
                    alert("Silakan gunakan kakas OPT terlebih dahulu untuk menjawab soal!");
                }
            } else {
                document.getElementById('p3').className += ' invalid';
                valid = false;
            }

            // go to SUBMIT
            if (valid) {
                saveToDB("finish", 0);
                // FINISH Simulasi 1 OPT
                alert('Jawaban Simulasi 1-OPT Berhasil Disimpan!');
                window.close();
            }
            break;
    }

    if (valid) nextForm(1);

    return valid;
}

function checkAnswer(val, q) {
    var answer = val.value;

    if (answer != '') {
        if (q == 1) document.getElementById('nextBtn1').style.display = 'block';
        else if (q == 2) document.getElementById('nextBtn2').style.display = 'block';
        else if (q == 3) document.getElementById('nextBtn3').style.display = 'block';
    }
}
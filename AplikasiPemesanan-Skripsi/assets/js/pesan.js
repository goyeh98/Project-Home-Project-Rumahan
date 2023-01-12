$("#btnSubmit").click(function (e) {
    e.preventDefault();
  
    const nomor = $("#nomor").val();
    const nama = $("#nama").val();
    const pemesan = $("#pemesan").val();

    if (nomor == "") {
        $("#nomor").focus();
    } else if (nama == "") {
        $("#nama").focus();
    } else {
        $.ajax({
            type: 'POST',
            url: base_url + 'transaksi/listrik_prabayar',
            data: {
                nomor: nomor,
                nama: nama
            },
            success: function(response) {
                if (response.status) {
                    console.log(response.message);
                }
            }
        });

        // let linkwa =
        //     "https://api.whatsapp.com/send?phone=6281804905183&text=Saya ingin beli listrik prabayar";
        // linkwa += `%0a%0aNomor: ${nomor}`;
        // linkwa += `%0aNama: ${nama}`;
        // linkwa += `%0aPemesan : ${pemesan}`;

        // window.open(linkwa);
    }
});

$("#btnSubmit1").click(function (e) {
    e.preventDefault();
  
    const nomorsatu = $("#nomorsatu").val();
    const nominalsatu = $("#nominalsatu").val();
    const pemesan1 = $("#pemesan1").val();

    if (nomorsatu == "") {
        $("#nomorsatu").focus();
    } else if (nominalsatu == "") {
        $("#nominalsatu").focus();
    } else {
        $.ajax({
            type: 'POST',
            url: base_url + 'transaksi/listrik_token',
            data: {
                nomorsatu: nomorsatu,
                nominalsatu: nominalsatu
            },
            success: function(response) {
                if (response.status) {
                    console.log(response.message);
                }
            }
        });

        // let linkwa =
        //     "https://api.whatsapp.com/send?phone=6281804905183&text=Saya ingin beli listrik token";
        // linkwa += `%0a%0aNomor: ${nomorsatu}`;
        // linkwa += `%0aNominal: ${nominalsatu}`;
        // linkwa += `%0aPemesan : ${pemesan1}`;

        // window.open(linkwa);
    }
});

$("#btnSubmit2").click(function (e) {
    e.preventDefault();
  
    const namadua = $("#namadua").val();
    const nomordua = $("#nomordua").val();
    const nominaldua = $("#nominaldua").val();
    const pemesan2 = $("#pemesan2").val();

    if (namadua == "") {
        $("#namadua").focus();
    } else if (nomordua == "") {
        $("#nomordua").focus();
    } else if (nominaldua == "") {
        $("#nominaldua").focus();
    } else {
        $.ajax({
            type: 'POST',
            url: base_url + 'transaksi/transfer',
            data: {
                namadua: namadua,
                nomordua: nomordua,
                nominaldua: nominaldua
            },
            success: function(response) {
                if (response.status) {
                    console.log(response.message);
                }
            }
        });

        // let linkwa =
        //     "https://api.whatsapp.com/send?phone=6281804905183&text=Saya ingin transfer antar bank";
        // linkwa += `%0a%0aNama Bank: ${namadua}`;
        // linkwa += `%0aNo Bank Tujuan : ${nomordua}`;
        // linkwa += `%0aNominal Transfer : ${nominaldua}`;
        // linkwa += `%0aPemesan : ${pemesan2}`;

        // window.open(linkwa);
    }
});

$("#btnSubmit3").click(function (e) {
    e.preventDefault();
  
    const nomortiga = $("#nomortiga").val();
    const pemesan3 = $("#pemesan3").val();

    if (nomortiga == "") {
        $("#nomortiga").focus();
    } else {
        $.ajax({
            type: 'POST',
            url: base_url + 'transaksi/briva',
            data: {
                nomortiga: nomortiga
            },
            success: function(response) {
                if (response.status) {
                    console.log(response.message);
                }
            }
        });

        // let linkwa =
        //     "https://api.whatsapp.com/send?phone=6281804905183&text=Saya ingin bayar BRIVA";
        // linkwa += `%0aNomor Tujuan : ${nomortiga}`;
        // linkwa += `%0aPemesan : ${pemesan3}`;

        // window.open(linkwa);
    }
});

$("#btnSubmit4").click(function (e) {
    e.preventDefault();
  
    const namaempat = $("#namaempat").val();
    const nomorempat = $("#nomorempat").val();
    const pemesan4 = $("#pemesan4").val();

    if (namaempat == "") {
        $("#namaempat").focus();
    } else if (nomorempat == "") {
        $("#nomorempat").focus();
    } else {
        $.ajax({
            type: 'POST',
            url: base_url + 'transaksi/bpjs',
            data: {
                namaempat: namaempat,
                nomorempat: nomorempat
            },
            success: function(response) {
                if (response.status) {
                    console.log(response.message);
                }
            }
        });

        // let linkwa =
        //     "https://api.whatsapp.com/send?phone=6281804905183&text=Saya ingin bayar BPJS";
        // linkwa += `%0a%0aNama BPJS : ${namaempat}`;
        // linkwa += `%0aNomor BPJS : ${nomorempat}`;
        // linkwa += `%0aPemesan : ${pemesan4}`;

        // window.open(linkwa);
    }
});

$("#btnSubmit5").click(function (e) {
    e.preventDefault();
  
    const namalima = $("#namalima").val();
    const nomorlima = $("#nomorlima").val();
    const nominallima = $("#nominallima").val();
    const pemesan5 = $("#pemesan5").val();

    if (namalima == "") {
        $("#namalima").focus();
    } else if (nominallima == "") {
        $("#nominallima").focus();
    } else {
        $.ajax({
            type: 'POST',
            url: base_url + 'transaksi/ewallet',
            data: {
                namalima: namalima,
                nomorlima: nomorlima,
                nominallima: nominallima
            },
            success: function(response) {
                if (response.status) {
                    console.log(response.message);
                }
            }
        });

        // let linkwa =
        //     "https://api.whatsapp.com/send?phone=6281804905183&text=Saya ingin beli saldo ewallet";
        // linkwa += `%0a%0aNama Aplikasi : ${namalima}`;
        // linkwa += `%0aNomor : ${nomorlima}`;
        // linkwa += `%0aNominal : ${nominallima}`;
        // linkwa += `%0aPemesan : ${pemesan5}`;

        // window.open(linkwa);
    }
});

$("#btnSubmit6").click(function (e) {
    e.preventDefault();
  
    const namaenam = $("#namaenam").val();
    const nomorenam = $("#nomorenam").val();
    const nominalenam = $("#nominalenam").val();
    const pemesan6 = $("#pemesan6").val();

    if (namaenam == "") {
        $("#namaenam").focus();
    } else if (nomorenam == "") {
        $("#nomorenam").focus();
    } else if (nominalenam == "") {
        $("#nominalenam").focus();
    } else {
        $.ajax({
            type: 'POST',
            url: base_url + 'transaksi/kuota',
            data: {
                namaenam: namaenam,
                nomorenam: nomorenam,
                nominalenam: nominalenam
            },
            success: function(response) {
                if (response.status) {
                    console.log(response.message);
                }
            }
        });

        // $('#bt7').modal('hide');
        // let linkwa =
        //     "https://api.whatsapp.com/send?phone=6281804905183&text=Saya ingin beli kuota internet";
        // linkwa += `%0a%0aNama Provider : ${namaenam}`;
        // linkwa += `%0aNomor Kartu : ${nomorenam}`;
        // linkwa += `%0aNominal : ${nominalenam}`;
        // linkwa += `%0aPemesan : ${pemesan6}`;

        // window.open(linkwa);
    }
});

$("#btnSubmit7").click(function (e) {
    e.preventDefault();
  
    const namatujuh = $("#namatujuh").val();
    const nomortujuh = $("#nomortujuh").val();
    const nominaltujuh = $("#nominaltujuh").val();
    const pemesan7 = $("#pemesan7").val();

    if (namatujuh == "") {
        $("#namatujuh").focus();
    } else if (nomortujuh == "") {
        $("#nomortujuh").focus();
    } else if (nominaltujuh == "") {
        $("#nominaltujuh").focus();
    } else {
        $.ajax({
            type: 'POST',
            url: base_url + 'transaksi/pulsa',
            data: {
                namatujuh: namatujuh,
                nomortujuh: nomortujuh,
                nominaltujuh: nominaltujuh
            },
            success: function(response) {
                if (response.status) {
                    console.log(response.message);
                }
            }
        });

        // let linkwa =
        //     "https://api.whatsapp.com/send?phone=6281804905183&text=Saya ingin beli pulsa";
        // linkwa += `%0a%0aNama Provider : ${namatujuh}`;
        // linkwa += `%0aNomor Kartu : ${nomortujuh}`;
        // linkwa += `%0aNominal : ${nominaltujuh}`;
        // linkwa += `%0aPemesan : ${pemesan7}`;

        // window.open(linkwa);
    }
});
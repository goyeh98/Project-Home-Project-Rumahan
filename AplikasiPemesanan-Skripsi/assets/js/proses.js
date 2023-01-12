$("#btnSubmit").click(function (e) {
    e.preventDefault();
  
    const jumlah = $("#jumlah").val();
    const id = $("#id").val();

    if (jumlah == "") {
        $("#jumlah").focus();
    } else {
        $.ajax({
            type: 'POST',
            url: base_url + 'transaksi/proses',
            data: {
                jumlah: jumlah,
                id: id
            },
            success: function(response) {
                if (response.status) {
                    console.log(response.message);
                    window.location.reload();
                }
            }
        });
    }
});
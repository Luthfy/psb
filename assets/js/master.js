function cariBuku()
{
    var kataKunci=$("#kataKunci").val();
    var kategori=$("#kategori").val();
    $.ajax({
        type:"GET",
        url:"cari.php",
        data:"katakunci="+kataKunci+"&kategori="+kategori,
        success:function(html)
        {
           $("#modalCari").html(html);
        }

    });
}

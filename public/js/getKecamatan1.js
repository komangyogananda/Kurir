$(document).ready(function() {

    $('select[name="kota_penerima"]').on('change', function(){
        var kotaId = $(this).val();
        if(kotaId) {
            $.ajax({
                url: '/kecamatan/get/'+kotaId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="kecamatan_penerima"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="kecamatan_penerima"]').append('<option value="'+ value +'">' + key + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="kecamatan_penerima"]').empty();
        }

    });

});
$(document).ready(function() {

    $('select[name="provinsi_pengirim"]').on('change', function(){
        var provinsiId = $(this).val();
        if(provinsiId) {
            $.ajax({
                url: '/kota/get/'+provinsiId,
                type:"GET",
                dataType:"json",
                beforeSend: function(){
                    $('#loader').css("visibility", "visible");
                },

                success:function(data) {

                    $('select[name="kota_pengirim"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="kota_pengirim"]').append('<option value="'+ value +'">' + key + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="kota_pengirim"]').empty();
        }

    });

});
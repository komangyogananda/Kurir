$(document).ready(function() {

    $('select[name="provinsi_penerima"]').on('change', function(){
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

                    $('select[name="kota_penerima"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="kota_penerima"]').append('<option value="'+ value +'">' + key + '</option>');

                    });
                },
                complete: function(){
                    $('#loader').css("visibility", "hidden");
                }
            });
        } else {
            $('select[name="kota_penerima"]').empty();
        }

    });

});
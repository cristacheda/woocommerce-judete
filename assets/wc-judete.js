jQuery(function($){
  $( document ).ready(function() {
    $('#billing_country').change(function(){
      if($('#billing_country').val() == 'RO'){
        $('#billing_state option:eq(11)').prop('selected', true);
        $("#billing_city").select2();

        $('#billing_state').change(function(){
      		if($('#billing_state').val().indexOf("Alegeți județul") >= 0){
      			return;
      		}else{
      			ask_for_city();
      		}
      	});

        $('#billing_city').change(function(){
      		if($('#billing_state').val().indexOf("alegeti localitatea") >= 0){
      			return;
      		}else{
      			ask_for_postcode();
      		}
      	});

        function ask_for_postcode(){
          var billing_city_id = $('#billing_city').val();
          $.ajax({
    				type: "POST",
    				dataType: 'json',
    				url:"/query-codpostal.php",
    				data:{
    					input: billing_city_id,
    				},
    				success: function(data){
              console.log('data');
    				},
  				});
      	}

        function ask_for_city(){
          var billing_state = $('#billing_state').val();
          $.ajax({
    				type: "POST",
    				dataType: 'json',
    				url:"/query-localitati.php",
    				data:{
    					input: billing_state,
    				},
    				success: function(data){
              var orase = data;

              $('#billing_city').find('option').remove()
              var toAppend = '';
              $.each(orase,function(key, value) {
                if(key == 'Bucuresti'){
                  toAppend += '<option value="'+value.id+'" selected>'+value.nume+'</option>';
                }else{
                  toAppend += '<option value="'+value.id+'">'+value.nume+'</option>';
                }
              });

              $("#billing_city").append(toAppend);
    				},
  				});
      	}
      }else{
        $('#billing_city').select2('destroy');
        $('#billing_city').replaceWith('<input type="text" class="input-text" name="billing_city" id="billing_city" placeholder="Orașul în care locuiești" value="" autocomplete="address-level2" tabindex="3" aria-hidden="false">');
        $('#billing_city_field .select2').remove();
      }
    });
  });
});

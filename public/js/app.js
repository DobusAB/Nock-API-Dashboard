$(function () {
    console.log( "ready!" );

    var $companies = $('#companies');
    getCompanies();
	

});

function getCompanies(){
	$.get('/companies', function(data){
		var row = "";

		$.each(data.data, function(key, val){
				console.log(data);
				row += '<div class="col-md-3">';
                row += '<div class="preview">';
                    row += '<img style="width:100%" src="'+val.company_imageURL+'">';
                    row += '<div class="info">';
                    row +=  '<h2>'+val.name+'</h2>';
                       row += '<p>';
                      //   row += val.description;
                        row += '</p>';
                        row += '<p class="muted-text"id="companies"> Omsättning 400 SEK</p>';
                        row += '<div class="row">';

                        $.each(val.users,function(k, v){
                        	row += '<div class="row user">';
	                        	row += '<div class="col-md-3">';
	                                row += '<img class="pic" src="'+v.profile_image+'">';
	                            row += '</div>';

	                            row += '<div class="col-md-9 fact">';             
	                               row += '<h5>'+v.firstname+' '+v.lastname+'</h5>';
	                                row += '<p>'+v.email+'</p>';
	                            row += '</div>';
	                        row += '</div>';
	                       
                        });
              
                          row += '<div class="row status pull-right">';
		                        row += '<div class="col-md-3">';             		                          
		                                row += '<p>Inne</p>';
		                        row += '</div>'; 
	                        row += '</div>';   
                        row += '</div>'; 
                     row += '</div>';
                 row += '</div>';
            row += '</div>';     
		});
		
		$('.append').html(row);

		$('.autoplay').slick({
		  slidesToShow: 4,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 1000,
		  settings: 'unslick',
		  arrows:false,
		});
	});
}
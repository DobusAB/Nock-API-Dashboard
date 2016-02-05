$(function () {
    console.log( "ready!" );

    var $companies = $('#companies');
    getCompanies();

   //   var arr = data.split('/');
	//  $("#date").html("<span>"+arr[0] + "</span></br>" + arr[1]+"/"+arr[2]);


});

function getCompanies(){
	$.get('/companies', function(data){
		var row = "";
    console.log(data);

		$.each(data.data, function(key, val){

				row += '<div class="col-md-3">';
                row += '<div class="card">';
                    row += '<img class="header-pic" src="'+val.company_imageURL+'">';
                    row += '<div class="info">';
                    row +=  '<h2>'+val.name+'</h2>';
                       row += '<p>';
                      //   row += val.description;
                        row += '</p>';
                        row += '<p class="muted-text"id="companies"> Omsättning 400 SEK</p>';
                        row += '<div class="row">';

                        $.each(val.users,function(k, v){

                        	row += '<div class="row user">';
	                        	row += '<div class="col-xs-4 col-sm-4">';
	                                row += '<img class="pic" src="'+v.profile_image+'">';
	                          row += '</div>';

	                            row += '<div class="col-xs-8 col-sm-8 fact">';
	                               row += '<h5>'+v.firstname+' '+v.lastname+'</h5>';
	                                row += '<p>'+v.email+'</p>';

                                      if (v.status != null) {
                                        row += '<p><span class="in">Inne</span></p>';
                                      } else {
                                        row += '<p><span class="out">Ute</span></p>';
                                      }

	                            row += '</div>';
	                        row += '</div>';
                        });
                        row += '</div>';
                     row += '</div>';
                 row += '</div>';
            row += '</div>';
		});

		$('.append').html(row);

		$('.autoplay').slick({
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 1000,
		  settings: 'unslick',
		  arrows:false,
		});
	});
}

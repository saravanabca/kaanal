// // Contact Form

$(document).ready(function () {

    $(".star").on("click", function() {
        var rating = $(this).attr("data-value");
        $(".star").removeClass("active");
        $(this).prevAll().addBack().addClass("active");
        $("#selected-rating").text(rating);
    });


	$("#submit").click(function () {
        $('.text-danger').hide();
        var ratingg = $('.star.active').data("value");
         if($('#fullname').val()=="")
        {
            $('.fullname').html('Please Enter Your Full Name');
            $('.fullname').show();
        }
       else if($('#addreview').val()=="")
        {
            $('.addreview').html('Please Enter Your Review');
            $('.addreview').show();
        }
        else if(ratingg === undefined)
        {
            $('.starreview').html('Please Select Your Star Rating');
            $('.starreview').show();
        }
        else
        {
            send();
        } 
        
		function send() {
			$(".load-dnone").show();
			var form = $("#myForm")[0];
			var formData  = new FormData(form);
			// console.log(data);
            // alert(data);
            var stardata = $("#selected-rating").text();
            formData.append('starreview', stardata);
            // alert(formData);
            // return;
			return $.ajax({
				url: base_URL + "insert_review",
				method: "POST",
				data: formData,
				contentType: false,
				cache: false,
				processData: false,
                
                success: function(data) {
                    var insertResult = $.parseJSON(data);
                    if(insertResult.status=="success")
                    {
                        $.confirm({
                            icon: 'icon-close',
                            title: 'congratulations...!',
                            content: 'Your Review Added Sucessfully',
                            type: 'green',
                                buttons: {
                                    Ok: function() {
                                        location.reload();
                                    },
                                }
                        }); 
                        request.done(function (response){
                            $('#myModal').modal('hide');         
                            refreshDetails();
                        });
                    }
                    else{
                        $.confirm({
                          title: 'Encountered an error!',
                          content: insertResult['message'],
                          type: 'red',
                          typeAnimated: true,
                          buttons: {
                              tryAgain: {
                                  text: 'Try again',
                                  btnClass: 'btn-red',
                                  action: function(){
                                  }
                              },
                              close: function () {
                              }
                             
                          }
                      });
                      
                    }
                },
				error: function () {
					
					$.confirm({
						title: "Error",
						content: "",
						type: "red",
						typeAnimated: true,
						buttons: {
							tryAgain: {
								text: "Try again",
								btnClass: "btn-red",
								action: function () {},
							},
							close: function () {},
						},
					});
					form.reset();
					// alert("js error");
				},
			});
		}
	});
});

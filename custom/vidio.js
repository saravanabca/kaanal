$(document).ready(function() {      
    var coreJSON,vidio_id ,mode;
    $.when(getGallery()).done(function(){
        dispGallery(coreJSON);          
    });


    $('#addNew').click(function(){
        mode="new";
        $("#user_uploaded_vidio").css("display", "none");
        $('#myModal').modal('show');
    });

// *************************** [Validation] ******************************************************************** 
    $('#formSubmit').click(function(){
        $('.invalid-feedback').hide();
        if($('#vidio').val()=="" && mode == 'new')
        {
            $('.vidio').html('Please Uploade vidio');
            $('.vidio').show();
        }
        
       
        else
        {
            saveGallery();
        }       
    });
    // *************************** [Insert and Update] ********************************************************************

    function saveGallery()
    {       
        $("#loadder").show();
        var form = $('#formModal')[0];
        var data = new FormData(form);
        if (mode == "new")
        {
            var url = base_URL+"admin/SriAlagarcontroll/insert_vidio";
        }
        else if (mode == "update")
        {
            var url = base_URL+"admin/SriAlagarcontroll/update_vidio";
            data.append("vidio_id",vidio_id);
        }
        request = $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: url,
                data: data,
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    console.log(data);
                    var insertResult = $.parseJSON(data);
                   
                    if(insertResult.status=="success")
                    {
                        $.confirm({
                            icon: 'icon-close',
                            title: 'congratulations...!',
                            content: 'Updated Sucessfully',
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
                             $("#loadder").hide();
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
                                   $("#loadder").hide();
                              }
                             
                          }
                      });
                      
                    }
                },
        });    
    }

    $('#myModal').on('show.bs.modal', function () {
        $(this).find('form').trigger('reset');
        $('.invalid-feedback').hide();
    }); 


    // ***************************[Get] ********************************************************************

    function getGallery()
    {
        return $.ajax({
            url: base_URL+'admin/SriAlagarcontroll/get_vidio',
            type:'POST',
            success:function(data){
                coreJSON = $.parseJSON(data);                
            },      
            error: function() {
                console.log("Error");  
            }
        });
    }
// *************************** [Display] ********************************************************************
    function dispGallery(JSON)
    {
        var i = 0;
       $('#datatable').dataTable( {
            "aaSorting":[],
            "aaData": JSON,
            "aoColumns": [
                { 
                    "mDataProp": function ( data, type, full, meta) {
                        return ++i;                        
                    }
                },
                { 
                    "mDataProp": function ( data, type, full, meta) {
                        if(data.vidio!==null)
                        return '<a href="'+base_URL+data.vidio+'" target="_blank"><video width="100" height="150" autoplay muted><source src="'+base_URL+data.vidio+'" type="video/mp4"></video></a>';
                            // return '<a href="'+base_URL+data.vidio+'" target="_blank" allowfullscreen webkitallowfullscreen> <i class="fa fa-video"></i> </a>';
                        else
                            return '';
                    }
                    
                },

                { 
                    "mDataProp": function ( data, type, full, meta) {
                        return  '<a id="'+ meta.row +'" class="btn btnEdit"><i class="mdi mdi-book-edit-outline"></i></a>'+
                                '<a id="'+ meta.row +'" class="btn BtnDelete"><i class="mdi mdi-trash-can"></i></a>';
                    }
                },              
            ]               
        });
    }    

    // *************************** [Image On Change] ********************************************************************
   
 $(document).on('change', '#vidio', function() {
        readURL(this);
    });
    
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#user_uploaded_vidio').attr('src', e.target.result);
                $('#user_uploaded_vidio').css("display", "block");
                var tmppath = URL.createObjectURL(input.files[0]);           
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    // *************************** [Edit] ********************************************************************

    $(document).on('click', '.btnEdit', function() {
        var r_index = $(this).attr("id");
        mode = "update";
        $('#myModal').modal('show');
        // $('#gallery_name').val(coreJSON[r_index].gallery_name);
        $('#user_uploaded_vidio').attr("src", base_URL+coreJSON[r_index].vidio);
        $("#user_uploaded_vidio").addClass("active");
        $("#user_uploaded_vidio").css("display", "block");
        vidio_id = coreJSON[r_index].vidio_id;
    });

    // *************************** [Delete] ********************************************************************

    $(document).on('click','.BtnDelete',function(){
        mode="delete";
        var r_index = $(this).attr('id');
        vidio_id  = coreJSON[r_index].vidio_id;
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            confirmButtonClass: "btn btn-success mt-2",
            cancelButtonClass: "btn btn-danger ms-2 mt-2",
            buttonsStyling: !1
        }).then(function (e) {
            e.value ?
            $.ajax({
                type: "POST",
                url: base_URL+'admin/SriAlagarcontroll/delete_vidio',
                data: {"vidio_id":vidio_id },
                success: function (data) {
                    var insertResult = $.parseJSON(data);
                    if(insertResult.status=="success")
                    {
                        $.confirm({
                            icon: 'icon-close',
                            title: 'congratulations..!',
                            content: insertResult['message'],
                            type: 'green',
                                buttons: {
                                    Ok: function() {
                                        location.reload();
                                    },
                                }
                        }); 
                        request.done(function (response){       
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
            })
            :
            null
        })
    });

    // *************************** [Refresh] ********************************************************************
    
   function refreshDetails()
    {
        $.when(getGallery()).done(function(){
            var table = $('#datatable').DataTable();
            table.destroy();    
            dispGallery(coreJSON);               
        });     
    }

});

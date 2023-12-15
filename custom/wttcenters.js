$(document).ready(function() {      
    var coreJSON,wttcenters_id ,mode;
    $.when(getGallery()).done(function(){
        dispGallery(coreJSON);          
    });


    $('#addNew').click(function(){
        mode="new";
        $("#user_uploaded_image").css("display", "none");
        // wttcentersdescription.setData('');
        $('#myModal').modal('show');
    });

// *************************** [Validation] ******************************************************************** 
    $('#formSubmit').click(function(){
        $('.invalid-feedback').hide();
        
      
       
         if($('#name').val()=="" && mode == 'new')
        {
            $('.name').html('Please Enter Center Name').show();
           
        }
       else if($('#district').val()=="" && mode == 'new')
        {
            $('.district').html('Please Enter district');
            $('.district').show();
        }
        // else if($('#map').val()=="" && mode == 'new')
        // {
        //     $('.map').html('Please Enter map src');
        //     $('.map').show();
        // }
       
        else
        {
            saveGallery();
        }       
    });
    // *************************** [Insert and Update] ********************************************************************

    function saveGallery()
    {       
        var form = $('#formModal')[0];
        var data = new FormData(form);
        // data.append("wttcenters_description",wttcentersdescription.getData());
        if (mode == "new")
        {
            var url = base_URL+"admin/KaanalAdmin/insert_wttcenters";
        }
        else if (mode == "update")
        {
            var url = base_URL+"admin/KaanalAdmin/update_wttcenters";
            data.append("wttcenters_id",wttcenters_id);
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
            url: base_URL+'admin/KaanalAdmin/get_wttcenters',
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
                        return data.name;
                        
                    }
                },
                { 
                    "mDataProp": function ( data, type, full, meta) {
                        return data.district;
                        
                    }
                },
               
                // { 
                //     "mDataProp": function ( data, type, full, meta) {
                //         return data.map;
                        
                //     }
                // },
                
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
   
 $(document).on('change', '#image_url', function() {
        readURL(this);
    });
    
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#user_uploaded_image').attr('src', e.target.result);
                $('#user_uploaded_image').css("display", "block");
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
        $('#name').val(coreJSON[r_index].name);
        $('#district').val(coreJSON[r_index].district);
      

        // wttcentersdescription.setData(coreJSON[r_index].wttcenters_description);
        // $('#user_uploaded_image').attr("src", base_URL+coreJSON[r_index].image_url);
        // $("#user_uploaded_image").addClass("active");
        // $("#user_uploaded_image").css("display", "block");
        wttcenters_id = coreJSON[r_index].wttcenters_id;
    });

    // *************************** [Delete] ********************************************************************

    $(document).on('click','.BtnDelete',function(){
        mode="delete";
        var r_index = $(this).attr('id');
        wttcenters_id  = coreJSON[r_index].wttcenters_id;
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
                url: base_URL+'admin/KaanalAdmin/delete_wttcenters',
                data: {"wttcenters_id":wttcenters_id },
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

$(document).ready(function() {      
    var masterJSON;
    // alert("hai");
    $.when(getCustomerDetails()).done(function(){
        displayCustomerDetails(masterJSON);          
    });

    function getCustomerDetails()
    {
        return $.ajax({
            url: base_URL+'admin/SriAlagarcontroll/getCustomerDetails',
            type:'POST',
            success:function(data){
                masterJSON = $.parseJSON(data);                
            },      
            error: function() {
                console.log("Error");  
            }
        });
    }
    
    function displayCustomerDetails(JSON)
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
                    "mDataProp": "customer_name"
                },
                { 
                    "mDataProp": "customer_email"
                },
                { 
                    "mDataProp": "customer_phone"
                },
                { 
                    "mDataProp": "customer_message"
                }              
            ]               
        });
    }

    $('.refreshCustomerDEtailsTable').on('click',function(){
        refreshDetails();
    });
    
    function refreshDetails()
    {
        $.when(getCustomerDetails()).done(function(){
            var table = $('#datatable').DataTable();
            table.destroy();    
            displayCustomerDetails(masterJSON);               
        });     
    }

});

$(document).ready(function(){
    //check Admin Password if its correct or not 
    $('#current_pwd').keyup(function(){
        var current_pwd = $('#current_pwd').val();
        // alert(current_pwd);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/check-current-password',
            data: {current_pwd: current_pwd},
            success: function(response){
                if(response=="false"){
                    $("#varifyCurrentPwd").html("Current Password is Incorrect");
                }else if (response=="true"){
                    $("#varifyCurrentPwd").html("Current Password is Correct");
                }
            },error:function(){
                alert('Error');
            }
        })
    });

    // Update Subadmin Status
    $(document).on("click", ".updateSubadminStatus", function () {
        var status = $(this).children("i").attr("status");
        var subadmin_id = $(this).attr("subadmin_id");
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/update-subadmin-status',
            data: { status: status, subadmin_id: subadmin_id },
            success: function (response) {
                console.log(response); // Debugging response
                if (response['status'] == 0) {
                    $("#subadmin-" + subadmin_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>");
                } else if (response['status'] == 1) {
                    $("#subadmin-" + subadmin_id).html("<i class='fas fa-toggle-on' style='color:#007bff' status='Active'></i>");
                }
            },
            error: function (xhr, status, error) {
                console.log(xhr.responseText); // Debugging error
                alert('Error: ' + error);
            }
        });
    });
    
    // Update CMS Page Status 
    $(document).on("click",".updateCmsPageStatus", function(){
        var status = $(this).children("i").attr("status");
        var page_id = $(this).attr("page_id");
        // alert(page_id);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'post',
            url: '/admin/update-cms-pages-status',
            data: {status: status, page_id: page_id},
            success: function(response){
                if(response['status']==0){
                    $("#page-"+page_id).html("<i class='fas fa-toggle-off' style='color:grey' status='Inactive'></i>");
                }
                else if(response['status']==1){
                    $("#page-"+page_id).html("<i class='fas fa-toggle-on' status='Active'></i>");
                }
                
            },error:function(){
                alert('Error');
            }

        })
    })

    // Confirm the deletion of CMS PAge 

    // $(document).on("click", ".confirmDelete", function(){
    //     var name = $(this).attr('name');
    //     if(confirm('Are you sure you want to delete this '+name+'?')){
    //         return true;
    //     }
    //     return false;
    // });

    // Confirm Deletion with Sweet Alert
    // $(document).on("click", ".confirmDelete", function(){
    //     var record = $(this).attr('record');
    //     var recordid = $(this).attr('recordid');
    //     Swal.fire({
    //         title: "Are you sure?",
    //         text: "You won't be able to revert this!",
    //         icon: "warning",
    //         showCancelButton: true,
    //         confirmButtonColor: "#3085d6",
    //         cancelButtonColor: "#d33",
    //         confirmButtonText: "Yes, delete it!"
    //       }).then((result) => {
    //         if (result.isConfirmed) {
    //           Swal.fire({
    //             title: "Deleted!",
    //             text: "Your file has been deleted.",
    //             icon: "success"
    //           });
    //           window.location.href = "admin/delete-"+record+"/"+recordid.replace("cms-page", "cms-page/");
    //         }
    //       });
    // });

    $(document).on("click", ".confirmDelete", function() {
        var url = $(this).data('url');
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "Deleted!",
                    text: "Your file has been deleted.",
                    icon: "success"
                });
                window.location.href = url;
            }
        });
    });
    






});
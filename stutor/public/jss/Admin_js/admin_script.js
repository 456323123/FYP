$(document).ready(function () {
    $("#current_pwd").keyup(function () {
        var current_pwd = $("#current_pwd").val();
       // alert(current_pwd);
        $.ajax({
           type:'post',
           url:'/admin/check-current-pwd',
           data:{current_pwd:current_pwd},
           success:function(resp) {
               if(resp=='false')
               {
                   $('#checkpwd').html('<font color=red>Current Password is incorrect</font>')
               }
               else if (resp == 'true'){
                   $('#checkpwd').html('<font color=green>Current Password is correct</font>')

               }
           },error:function () {
                  alert('error');
           }
        });
    });

    $(".update-section-status").click(function () {
        var status = $(this).text();
        var section_id=$(this).attr("section_id");
       // alert(status);
        //alert(section_id);
        $.ajax({
            type: 'post',
            url: '/admin/update-section-status',
            data: { status:status,section_id:section_id },
                    success: function (resp) {
                    //alert(resp['status']);
                    //alert(resp['section_id']);
                        if (resp['status']==0) {
            $('#section-' + section_id).html("<a  class='update-section-status' href='javascript: void (0)' id='section-{{ $section-> id }}'>Inctive</a>")

                    }
                       else if (resp['status'] == 1)
                       {
                            $('#section-' + section_id).html("<a  class='update-section-status' href='javascript: void (0)' id='section-{{ $section-> id }}'>Active</a>")

                       }

            }, error: function () {
                alert('Error');
            }

            });
    });


    $(".update-category-status").click(function () {
        var status = $(this).text();
        var category_id = $(this).attr("category_id");
        // alert(status);
        //alert(section_id);
        $.ajax({
            type: 'post',
            url: '/admin/update-category-status',
            data: { status: status, category_id: category_id },
            success: function (resp) {
                //alert(resp['status']);
                //alert(resp['section_id']);
                if (resp['status'] == 0) {
                    $('#category-' + category_id).html("<a  class='update-category-status' href='javascript: void (0)' id='category-{{ $category-> id }}'>Inctive</a>")

                }
                else if (resp['status'] == 1) {
                    $('#category-' + category_id).html("<a  class='update-category-status' href='javascript: void (0)' id='category-{{ $category-> id }}'>Active</a>")

                }

            }, error: function () {
                alert('Error');
            }

        });
    });


    $("#section_id").change(function(){
var section_id=$(this).val();
//alert(section_id);
        $.ajax({
            type: 'post',
            url: '/admin/append-category-level',
            data:{section_id:section_id},
            success: function (resp) {
                $('#appendCategoryLevel').html(resp);
            },error:function(resp) {
              alert('Error');
            }

        });
    });

    $(".confirmsubjectDelete").click(function () {
        var recordid = $(this).attr("recordid");
        var recordname = $(this).attr("recordname");
        Swal.fire({
            text: "Are You sure to Delete " + recordname + " Subject ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your Subject has been deleted.',
                    'success'
                )
                window.location.href = "/subject-delete/"+recordid;
            }

        });

    });

    $("#course_id").change(function(){
        var course_id=$(this).val();

        //alert(course_id);

        $.ajax({
            type:'post',
            url:'/user/subject/append',
            data: { course_id:course_id},
            success:function(resp)
            { $('#appendsubject').html(resp)},
            error:function()
            {alert("Error");
        }

        });
});


$(".sub").click(function(){
alert('error');
});









});

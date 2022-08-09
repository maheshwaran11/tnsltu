<?php
session_start();
if(!empty($_SESSION)) {
    ?>
    <?php include './adminHeader.php' ?>
    <div class="admin-content page_allMembers">
        <h1>All Members</h1>
        
        <div class="row m-0">
            <div class="px-0 py-5 col-lg-12">
                <div class="table-container  mdc-data-table card p-4">
                    <div class="table-title">
                        <h2>All members in union list</h2>
                    </div>
            
                
                    <div class="px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0 allMemberTable">
                            <thead>
                                <tr>
                                <th class="">Username</th>
                                <th class="">Email</th>
                                <th class="">Mobile</th>
                                <th class="">ID Number</th>
                                <th class="">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                            </table>
                        </div>
                    </div>
                
                </div>
            </div>
        </div>
    </div>
    <?php include './adminFooter.php' ?>

<script>
    $(function(){
        $.ajax({
            type: "POST",
            url: "./services/getAllMembers.php",
            data: {},
            dataType: "JSON",
            success: function (response) {
                if(response.status === 1) {
                    $items = response.info;
                    $.each($items, function(i, item) {
                        content ='<tr>'+
                            '<td>'+
                                '<div class="d-flex py-1">'+
                                    '<div>'+
                                        '<img src="<?php echo $BASE?>images/profile.png" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">'+
                                    '</div>'+
                                    '<div class="d-flex flex-column justify-content-center">'+
                                        '<h6 class="mb-0 text-sm username">'+item.username+'</h6>'+
                                    '</div>'+
                                '</div>'+
                            '</td>'+
                            '<td>'+
                            '<p class="text-xs font-weight-bold mb-0 email">'+item.email+'</p>'+
                            '</td>'+
                            '<td class="align-middle text-sm">'+
                            '<p class="text-xs font-weight-bold mb-0 mobile">'+item.mobile+'</p>'+
                            '</td>'+
                            '<td class="align-middle">'+
                            '<p class="text-xs font-weight-bold mb-0 idNumber">'+item.idNumber+'</p>'+
                            '</td>'+
                            '<td class="align-middle">'+
                            '<button data-id="'+item.idNumber+'" class="viewBtn btn1">View</button>'+
                            '<button class="editBtn btn2">Edit</button>'+
                            '<button class="deleteBtn btn3">Delete</button>'+
                            '</a>'+
                            '</td>'+
                            '</tr>';
                        $(content).appendTo('.allMemberTable tbody');
                });
                } else {
                    $('.error').html('<div>'+response.info+'</div>');
                }
            }
        });
    });
    $('.allMemberTable tbody').on('click', '.viewBtn', function(){
            $id = $(this).attr('data-id');

            if($id !== '') {
                var myRedirect = function(redirectUrl, arg, value) {
                var form = $('<form action="' + redirectUrl + '" method="post">' +
                '<input type="hidden" name="'+ arg +'" value="' + value + '"></input>' + '</form>');
                $('body').append(form);
                $(form).submit();
                };
                location.reload(true);
                myRedirect("./userDetails.php", "id", $id);
            } else {
                alert("Try again");
            }
            
        }); 
    // $('.allMemberTable').DataTable();
</script>

    <?php
} else {
    header('location: ./session_expired.php');
}
?>
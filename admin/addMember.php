<?php
session_start();
if(!empty($_SESSION)) {
    ?>
    <?php include './adminHeader.php' ?>
    <div class="admin-content page_dashboard">
        <h1>Add new member</h1>
        
        <div class="row m-0">
            <div class="px-0 py-5 col-9">
                <div class="form-container card p-4">
                    <div class="form-title">
                        <h2>Enter the member details</h2>
                    </div>
                    
                    <form class="addMemberForm" id="addMemberForm">
                        <div class="row">
                            <div class="col-6 input-wrapper mb-5">
                                <label class="form-label">First Name</label>
                                <input type="text" name="firstName" class="form-control" id="firstName" required>
                            </div>
                            <div class="col-6 input-wrapper mb-5">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="lastName" class="form-control">
                            </div>
                            <div class="col-6 input-wrapper mb-5">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="col-6 input-wrapper mb-5">
                                <label class="form-label">Mobile</label>
                                <input type="text" name="mobile" class="form-control">
                            </div>
                            <div class="col-6 input-wrapper mb-5">
                                <label class="form-label">ID Number</label>
                                <input type="text" name="idNumber" class="form-control">
                            </div>
                            <div class="col-6 input-wrapper mb-5">
                                <label class="form-label">User Type</label>
                                <select class="form-control" name="adminType" >
                                    <option value='-1'>--------- Select -----------</option>
                                    <option value='admin'>Admin</option>
                                    <option value='user'>Member</option>
                                </select>
                            </div>
                            <div class="col-6 input-wrapper mb-5">
                                <label class="form-label">Member description</label>
                                <textarea name="description" class="form-control"></textarea>
                            </div>
                            <div class="col-6 input-wrapper mb-5">
                                <label class="form-label">Upload Photo</label>
                                <input type="file" name="photo" class="form-control">
                            </div>
                            <div class="responseText"></div>
                            <div class="button-wrapper d-flex justify-content-center">
                                <input type="submit" class="btn1 submitBtn" value="Submit"/>
                                <input type="reset" class="btn3" value="Cancel"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>
        
    </div>
    <?php include './adminFooter.php' ?>

<script>
    $(function(){
        $('.input-wrapper input, .input-wrapper select, .input-wrapper textarea').on('focus', function() {
            $(this).parent().addClass('focusedState');
        });
        $('.input-wrapper input, .input-wrapper select, .input-wrapper textarea').on('blur', function() {
            $(this).parent().removeClass('focusedState');
            $val = $(this).val();
            if(($val === '') || ($val === '-1')) {
                $(this).parent().removeClass('successState');
                $(this).parent().addClass('emptyState');

            } else {
                $(this).parent().removeClass('emptyState');
                $(this).parent().addClass('successState');
            }
        });





        const btn = document.querySelector('.submitBtn');
        const form = document.getElementById('addMemberForm');
        $('.submitBtn').on('click', function(e){
            required(form);
            // return false;
            e.preventDefault();
            // const formData = new FormData(form);
            // const form_values = Object.fromEntries(formData);
            // form_values.photoName = form_values.photo.name;
            // form_values.photoSize = form_values.photo.size;
            // form_values.photoType = form_values.photo.type;
            // const all_values = JSON.stringify(form_values);



            // $.ajax({
            //     type: "POST",
            //     url: "./services/addMember.php",
            //     data: { data: all_values },
            //     dataType: "JSON",
            //     success: function (response) {
            //         console.log(response);
            //         if(response.status === 1) {
            //             $('.responseText').html('<div class="alertSuccess">'+response.info+'</div>');
            //         } else {
            //             $('.responseText').html('<div class="alertFailure">'+response.info+'</div>');
            //         }
            //     }
            // });
            
        });
    });
</script>

<?php
} else {
    header('location: ./session_expired.php');
}
?>
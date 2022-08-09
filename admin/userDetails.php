<?php
$idNumber = $_POST['id'] || '';
session_start();
if(!empty($_SESSION)) {
    ?>
                <?php include './adminHeader.php' ?>
                <div class="admin-content page_details">
                    <h1>Member Details</h1>
                    <div class="detailsWrapper">
                        <div class="row">
                            <div class="col col-lg-3">
                                <div class="profileSidecontent">
                                    <div class="profilePhoto">
                                        <img src="<?php echo $BASE?>images/profile.png" alt="">
                                    </div>
                                    <div class="contactInfo">
                                    <p class="mobile">098765432</p>
                                    <p class="email">test@test.com</p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col col-lg-9">
                                <div class="profileMaincontent">
                                    <div class="fieldWrapper">
                                        <h4>Test Name</h4>
                                        <label>Lorem Ipsum is simply</label>
                                        <p class="idNumber">01101010</p>
                                    </div>
                                    <div class="fielwrapper">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
                                    </div>
                                    <div class="button-wrapper">
                                    <button class="mdc-button mdc-button--raised viewBtn m-1" data-id='+item.idNumber+'><span class="mdc-button__label">Print</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
    <?php include './adminFooter.php' ?>

<script>
    $(function(){
        $id = <?php echo $idNumber ?>;
        $.ajax({
            type: "POST",
            url: "./services/getMemberDetails.php",
            data: {id: $id},
            dataType: "JSON",
            success: function (response) {
                console.log(response);
                if(response.status === 1) {
                    $items = response.info;
                    $.each($items, function(i, item) {
                    $('<div class="row">').html(
                        '<p>'+item.username+'</p>'+
                        '<p>'+item.email+'</p>'+
                        '<p>'+item.mobile+'</p>'+
                        '<p>'+item.userType+'</p>'+
                        '<p>'+item.idNumber+'</p>'+
                        '<button class="mdc-button mdc-button--raised m-1"><span class="mdc-button__label">Back to list</span></button>'+
                    '</div>').appendTo('.detailsWrapper1');

                });
                } else {
                    $('.error').html('<div>'+response.info+'</div>');
                }
            }
        });

        
    });
    
</script>

    <?php
} else {
    header('location: ./session_expired.php');
}
?>
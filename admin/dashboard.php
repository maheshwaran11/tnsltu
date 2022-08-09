<?php
session_start();
if(!empty($_SESSION)) {
    ?>
    <?php include './adminHeader.php' ?>
    <div class="admin-content page_dashboard">
        <h1>Dashboard</h1>
        <div class="row">
            <div class="col col-lg-12">
                <div class="cardInfo">
                    <p>Total Members</p>
                    <h1 class="totalMemberSection">48</h1>
                </div>
                <div class="cardInfo">
                    <p>Total Members</p>
                    <h1 class="totalMemberSection">48</h1>
                </div>
            </div>
            
        </div>
        
    </div>


    <script>
        $(function(){
            $.ajax({
                type: "POST",
                url: "./services/getAllMembers.php",
                data: {},
                dataType: "JSON",
                success: function (response) {
                    if(response.status === 1) {
                        $totalMembers = response.info.length;
                        $('.totalMemberSection').html($totalMembers);
                        // window.location.href = "./dashboard.php";
                    } else {
                        $('.error').html('<div>'+response.info+'</div>');
                    }
                }
            });
        })
    </script>
               
    <?php include './adminFooter.php' ?>

    <?php
} else {
    header('location: ./session_expired.php');
}
?>
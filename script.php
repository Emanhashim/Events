<script type='text/javascript'>
    $(document).ready(function() {
        $('.userinfo').click(function() {
            var userid = $(this).data('id');
            $.ajax({
                url: 'ajax.php',
                type: 'post',
                data: {
                    userid: userid
                },
                success: function(response) {
                    $('.modal-body').html(response);
                    $('#event').modal('show');
                }
            });
        });
    });
</script>
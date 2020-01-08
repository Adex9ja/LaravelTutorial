<!doctype html>
<html lang="en">
<head>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



<div id = 'msg'>This message will be replaced using Ajax.
    Click the button to replace the message.</div>

<?php
    echo Form::button('Change Text', ['onClick' => 'getMessage()']);
?>



<script type="text/javascript">
    function getMessage() {
        $.ajax({
            type:'POST',
            url:'/ajaxPost',
            data: { "_token": "{{ csrf_token() }}",},
            success:function(data) {
                console.log(data);
                $("#msg").html(data.msg);
            }
        }).fail(function( jqXHR, textStatus ) {
            console.log(textStatus);
        });
    }
</script>
</body>
</html>

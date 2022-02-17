<?php
function modal(string $modalId, string $title, string $message){
    echo "
    <script>
    $(document).ready(function(){
        showModal('$modalId', '$title', '$message')
    });
    </script>
    ";
}
?>
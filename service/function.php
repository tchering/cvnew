<?php
function connection($host = host, $dbname = dbname, $user = user, $pass = pass)
{
    $dsn = "mysql:host=$host;dbname=$dbname:charset=utf8";
    try {
        $connection = new PDO($dsn, $user, $pass);
    } catch (Exception $error) {
        echo "<h3>Connection failed</h3>";
    }
    return $connection;
}

?>
<script>
    function send() {
        let xhr = new XMLHttpRequest();
        xhr.open('post', 'form.php?action=send');
        let data = new FormData();
        data.append('name', document.getElementById('name').value);
        data.append('email', document.getElementById('email').value);
        data.append('message', document.getElementById('message').value);
        xhr.send(data);
        xhr.onload = () => {
            if (xhr.status == 200) {
                let response = xhr.responseText;
                alert('test');
                // document.getElementById('alert').innerHTML=response;
            }
        }
    }
</script>
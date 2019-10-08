<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Big Theme Chat</title>
</head>
<body>
   <div id="Lord of the rings">
        <button type="button" onclick="loaddoc()"></button>
   
   </div>
   <button></button>
    <script>
        function loaddoc(){
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange= function(){
                if(this.readyState==4&&this.status==200){
                    document.getElementById("Lord of the rings").innerHTML = this.responseText;

                }
            };
            xhttp.open("get","ajax_info.txt",true);
            xhttp.send();

        }
    </script>
</body>
</html>
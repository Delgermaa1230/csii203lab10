<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>searchdata</title>
    </head>
    <body>
        <script>
           var xhttp = new XMLHttpRequest();
           xhttp.onreadystatechange = funciton() {
                if (this.readyState == 4 && this.status == 200) {
                  console.log(xhttp.responseText);

                }
           };
           xhttp.open("GET", "products.json", true);
           xhttp.send();
        </script>
    </body>
</html>
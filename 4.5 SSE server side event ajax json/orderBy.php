
<?php

?>



<!DOCTYPE html>


<html>

<head>
    <title>Page Title</title>
</head>


<link rel="stylesheet" type="text/css" href="tablesorter-master/tablesorter-master/themes/blue/style.css">
<link rel="stylesheet" type="text/css" href="tablesorter-master/tablesorter-master/addons/pager/jquery.tablesorter.pager.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="tablesorter-master/tablesorter-master/jquery.tablesorter.js"></script>
<script src="tablesorter-master/tablesorter-master/addons/pager/jquery.tablesorter.pager.js"></script>
<script>
    $(document).ready(function() {

        ajax_db();

        var source = new EventSource("sse.php");

        source.onmessage = function(event) {
            ajax_db();
            console.log(event);
        };

        function ajax_db() {
            $.getJSON("json.php", function(data) {
                var html = '';
                var arr = Array();               
                
                arr = $.map(data[0], function(el) {
                     return el
                 });
             
                //check if table exists
                if(!$("#myTable").length){
                  $("body").append('<table id="myTable" class="tablesorter" border="1"><thead><tr><th>' + arr.join('</th><th>') + '</th></tr></thead><tbody></tbody></table>');
                }
                 
                //check record by id
                for (var i = 1; i < data.length; i++) {
                    arr = $.map(data[i], function(el) {
                        return el
                    });

                    html = '<tr id="'+arr[0]+'"><td>' + arr.join('</td><td>') + '</td></tr>';
                    if($(".tablesorter #"+arr[0]+"").length){
                      $(".tablesorter #"+arr[0]+"").html('<td>' + arr.join('</td><td>') + '</td>');
                    }else{
                      $(".tablesorter tbody").prepend(html);
                    }

                }



                $("#myTable").tablesorter({
                    widthFixed: true,
                    widgets: ['zebra']
                });

            });
        }
     
        function update_table(data){
        }
    })
</script>

<body>
    <div id="pager" class="pager">

        <form>
            <img src="tablesorter-master/tablesorter-master/addons/pager/first.png" class="first" />
            <img src="tablesorter-master/tablesorter-master/addons/pager/prev.png" class="prev" />
            <input type="text" class="pagedisplay" />
            <img src="tablesorter-master/tablesorter-master/addons/pager/next.png" class="next" />
            <img src="tablesorter-master/tablesorter-master/addons/pager/last.png" class="last" />
            <select class="pagesize">
                <option selected="selected" value="10">10</option>
                <option value="20">20</option>
                <option value="30">30</option>
                <option value="40">40</option>
            </select>
        </form>
    </div>



</body>




</html>
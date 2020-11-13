<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/placeholder-loading/dist/css/placeholder-loading.min.css">
</head>
<body>
    <br/>
    <div class="container">
        <h3 align="center">Live Data Search with Pagination in php mysql using ajax</h3>
        <br/>
        <div class="card">
            <div class="card-header">Dynamic Data</div>
            <div class="card-body">
                <div class="form-group">
                    <input type="text" name="search_box" id="search_box" class="form-control" placeholder="Type your search query here" />
                </div>
                <div id="dynmic_content" class="table-responsive"></div>
            </div>
        </div>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        function load_data(page, query='')
        {
            $.ajax({
                url:"fetch.php",
                method:"POST",
                data:{page:page, query:query},
                success:function(data)
                {
                    $('#dynmic_content').html(data);
                }
            })
        }
        load_data(1);
    });
</script>
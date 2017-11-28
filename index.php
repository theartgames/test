<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Art Games - Test</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

<div class="container">

    <div class="row">
        <div class="col-sm-6 col-sm-offset-3 text-center">
            <h3>Search</h3>
            <input type="text" class="form-control" id="search" placeholder="Jane Doe">
            <label class="btn btn-secondary">
                <input type="checkbox" id="check-pname" class="filter-checkbox" autocomplete="off" /> Product Name
            </label>
            <label class="btn btn-secondary">
                <input type="checkbox" id="check-pdesc" class="filter-checkbox" autocomplete="off" /> Product Description
            </label>
            Sort by <select name="parameter" id="parameter" class="filter-element">
                <option value="id">Product Id</option>
                <option value="aname">Artist Name</option>
                <option value="pname">Product Name</option>
                <option value="pdesc">Product Description</option>
            </select>
            <select name="sort" id="sort" class="filter-element">
                <option value="asc">asc</option>
                <option value="desc">desc</option>
            </select>
        </div>
    </div>

    <div class="row">
        <p>&nbsp;</p>
        <div class="col-sm-12" id="result"></div>
    </div>

    <div class="hidden" id="template">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">ID: {id}</h3>
            </div>
            <div class="panel-body">
                <img src="{img_80}" class="pull-right" alt="">
                <p>{aname}</p>
                <p>{pname}</p>
                <p>{pdesc}</p>
                <p>{psdesc}</p>
                <p>{sku}</p>
                <p>{url}</p>
            </div>
        </div>
    </div>

</div>


<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="/node_modules/kisphp-format-string/src/format-string.js"></script>
<script src="/js/app.js"></script>
</body>
</html>

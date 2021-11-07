<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Navigation Layout</title>
    <style>
        h2{
            color: black;
        }
    </style>
</head>
<body style="height:1000px">
    <nav class="navbar navbar-expand-sm bg-secondary navbar-dark fixed-top">       
        <div class="container mt-3 btn btn-dark">
            <!-- Nav pills -->   
            <ul class="nav nav-pills" role="tablist">
            <li class="nav-item">
                <a class="nav-link {{ $welcome_view ?? '' }}"   href="/">HOME</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link {{ $store_view ?? '' }}"   href="/storelist">Store List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $owner_view ?? '' }}"  href="/ownerlist">Owner</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $contact_view ??  '' }}"  href="/contact">Contact</a>
            </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
            <div id="home" class="container tab-pane active"><br>
            </div>
            <div id="menu1" class="container tab-pane fade"><br>
            </div>
            <div id="menu2" class="container tab-pane fade"><br>
            </div>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom">
    <div class="container-fluid justify-content-center">
      <a class="navbar-brand">K-Market</a>
    </div>
  </nav>
</body>
</html>
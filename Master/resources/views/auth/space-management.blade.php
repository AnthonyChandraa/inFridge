<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto&family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
   <title>inFridge Space Management</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img class="img-fluid" src="storage/app/public/logo.png" alt="" style="width:
        200px"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/auth/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/auth/register">Register</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
 
</body>
<body style="background-color: #e5e5e5;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
        .titles{
            font-family: "Open Sans";
        }
        .content{
            font-family: "Roboto Condensed";
        }
    </style>
  <div class="container" style="margin-top: 25vh;">
      
       <table class="table table-striped table-hover">
        <thead>
          <tr class="titles">
            <th scope="col">#</th>
            <th scope="col">Product</th>
            <th scope="col">Quantity</th>
            <th scope="col">Expiry</th>
          </tr>
        </thead>
        <tbody class="content">
            
          <tr>
            <th scope="row">1</th>
            <td>Chicken Breast</td>
            <td>2</td>
            <td>02 March 2022</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Potato</td>
            <td>5</td>
            <td>06 March 2022</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Egg</td>
            <td>12</td>
            <td>14 March 2022</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Broccoli</td>
            <td>1</td>
            <td>02 March 2022</td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>Canned Beans</td>
            <td>2</td>
            <td>20 March 2022</td>
          </tr>
        </tbody>
      </table>
  </div>

    <div class="container" style="margin-left: 75vw;">
 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
Add item(s)
</button>

<!-- Primary Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel">Add item(s)</h5>
       <!-- Search Bar -->
       
       <div class="input-group rounded" style="padding-left: 150px;">
        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
        <span class="input-group-text border-0" id="search-addon">
          <i class="fas fa-search"></i>
        </span>
      </div>


      <!-- Add Meat -->
        

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      <button type="button" class="btn btn-primary">Done Adding!</button>
    </div>
  </div>
</div>
</div>
</div>
</body>
</html>

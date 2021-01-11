<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand text-white" href="#">App Name</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link " href="#"><i class="fa fa-th-list "></i> Meta Data</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#"> <i class="fa fa-briefcase"></i> Data Owner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#"><i class="fa fa-book"></i> Data Catalog</a>
                        </li> 
                    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            <i class="fa fa-user"></i> XXXXX.xxx
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" >
                            <a class="dropdown-item" href="#">  LOGOUT</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    </nav>
    <?php $this->load->view($appview);?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <script src="./assets/js/search.js"> </script>
    

    
    <link href="./assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
 

    
    <style>
        body {
            background-color: #ecf0f1;
        }
    </style>
   
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="./assets/img/room.png" height="50">
            </a>
         

      
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        

            
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./registration.php">Registration</a>
                    </li>
                   
                </ul>
                <span class="navbar-text col text-center">Welcome!!Choice your Room</span>
                <form class="d-flex">
                    <input onkeyup="search(this.value)" class="form-control " type="text"
                        placeholder="Search anything here">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
            </div>
           
        </div>
    </nav>
    
    <div class="container-fluid mb-5">
        <p class="h1 mt-2">Room Manangement</p>
        <p class="mt-2">You can choice your Room Above</p>
        <div class="card mt-2">
            <div class="card-header" style="text-align : center;">List of Room</div>
            <div class="card-body"> <strong> </strong>
                <table class="table table-bordered table-hover" ;>
                    <thead>
                        <tr>
                            <th width="100" style="text-align : center;">Room Id</th>
                            <th style="text-align: left; padding-left: 10px">Name</th>
                            <th width="130">Details</th>
                        </tr>
                        <div class="modal" id="show-details">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                
                                    <div class="modal-header">
                                        <h4 class="modal-title">Roomt Details</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                  
                                    <div class="modal-body">
                                        Modal body..
                                    </div>

                                 
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-bs-dismiss="modal">Close</button>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </thead>
                    <tbody id="results">
            </div>
        </div>
        <div style="display: none;">
            </tbody>
            </table>
        </div>
        <div class="card-footer">This are all the List of Rooms</div>
    </div>
   

</body>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>


</html>
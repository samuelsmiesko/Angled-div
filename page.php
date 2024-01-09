<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    



                <div  id="sideBox" style="width:25%">
                </div>

                <div class="container" id="mainBox" style="width:75%; height:100vh;">

                    <div class="container ">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                            <img src="includesIcons/checklist.jpg" style="max-height:280px; width:auto" >
                            </div>

                        </div>
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <div onclick="myMove()"  class="btn btn-danger btn-lg m-4">< Previous</div>
                            </div>
                            <div class="col d-flex justify-content-center">
                                <div onclick="myMoveBack()"  class="btn btn-outline-danger btn-lg m-4">> Next</div>
                            </div>
                            
                        </div>
                        <div class="row">
                        
                            <div class="col p-5 d-flex justify-content-center">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
                            but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing 
                            Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                        </div>
                    </div>

                </div>
</div>
            
 
</body>
<script src="animate.js"></script>
</html>
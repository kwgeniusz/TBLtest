<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Contact</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
 
<body>
    <div class="container">
        <div class="row ">
            <div class="col-6 align-self-center">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h4> ¡Hi, We are so happy! </h4>
                        </div>
                      <p>We added you in our contact list. Thank you</p>
                    </div>
                    <div class="card-body">
                        <p> <strong> Full Name:</strong> {{$contact['firstName']}} {{$contact['lastName']}}</p>
                        <p><strong>Email: </strong> {{$contact['email']}}</p>
                        <p><strong>Contact Number: </strong> {{$contact['contactNumber']}}</p>
                    </div>
                </div>
            </div>
 
        </div>
    </div>
 
 
</body>
 
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            background-color: #CAD3DC;
        }
    </style>
</head>
<body>
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card text-center">
                        <div class="card-body">
                            <h2 class="card-title">Jamed Allan</h2>
                            <h8 class="card-title">@james</h8><p><br>
                            <img src="images\men.jpg" class="rounded-circle" alt="men" width="120" height="120"><p>
                            <div style="background-color:#FF0000; color:white" class="btn">
                                <label class="form-label text-white m-1" for="customFile2">Upload New Photo</label>
                                <input type="file" class="form-control d-none" id="customFile2" onchange="displaySelectedImage(event, 'selectedAvatar')" />
                            </div><p>
                            <div class="card card-body text-center" style="width: 330px;">
                                Upload a new avatar. Larger image will be resized automatically.<p>
                                    Maximum upload size is <strong>1 MB</strong>
                            </div><br>
                            <h9>Member since: <strong>29 september 2019</strong></h9>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                    <h1 class="card-title">Edit Profile</h1>
                        <ul class="nav nav-tabs card-header-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="true" href="#">User Info</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Billing Information</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name</label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" id="name" placeholder="Full Name" required>
                                        <div class="invalid-tooltip">
                                            Please write your Full Name
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                                    <div class="invalid-tooltip">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group has-validation">
                                    <input type="password" class="form-control" id="password" placeholder="Password" required>
                                    <div class="invalid-tooltip">
                                        Please provide password.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="confirmpass" class="form-label">Confirm Password</label>
                                <div class="input-group has-validation">
                                    <input type="password" class="form-control" id="confirmpass" placeholder="Confirm Password" required>
                                    <div class="invalid-tooltip">
                                        Please select a valid state.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email Address</label>
                                <div class="input-group has-validation">
                                    <input type="text" class="form-control" id="email" placeholder="demomail@mail.com" required>
                                    <div class="invalid-tooltip">
                                        Please provide a valid email.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="confirmemail" class="form-label">Confirm Email Address</label>
                                <input type="text" class="form-control" id="confirmemail" placeholder="demomail@mail.com" required>
                                    <div class="invalid-tooltip">
                                        Please provide a valid email.
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <label for="socialfb" class="form-label">Social Profile</label>
                                    <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">
                                        <img src="images\facebook.png">
                                    </span>
                                    <input type="text" class="form-control" id="socialfb" aria-describedby="inputGroupPrepend" placeholder="Facebook Username" required>
                                        <div class="invalid-tooltip">
                                            Please choose a username.
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <label for="socialx" class="form-label">Social Profile</label>
                                    <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">
                                        <img src="images\twitter.png">
                                    </span>
                                    <input type="text" class="form-control" id="socialx" aria-describedby="inputGroupPrepend" placeholder="Twitter Username" required>
                                        <div class="invalid-tooltip">
                                            Please choose a username.
                                        </div>
                                    </div>
                            </div>
                            <div class="col-12">
                                <button style="background-color:#FF0000; color:white" class="btn" type="submit">Update Info</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/bootstrap.min.js"></script>
    <script src="scripts\uploadPhoto.js"></script>
</body>
</html>
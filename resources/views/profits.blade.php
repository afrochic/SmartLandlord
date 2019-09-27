<<<<<<< HEAD
@extends('layouts.landingPage')

@section('content')
<header class="header">
=======
<!DOCTYPE html>
<html>
    <head>
        <title> Chady Enterprises:Profit Report</title>
        <meta charsey="utf-8">
        <link rel="stylesheet" type="text/css" href="chadyApplication.css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
        <style>
                *
                {
                    margin:0;
                    padding:0;
                }
                .header
                {
                    height:100vh;
                }
                .navbar-style
                {
                    box-shadow: 0 5px 10px #efefef;
                    text-transform:uppercase;
                }
                .logo
                {
                    height:100px;
                    padding:2px 10px;
                }

        </style>
    </head>
    <body>
        <header class="header">
>>>>>>> 536063ca2aa1cd12ad3bc18c1bf0354cbaff6c87
            <nav class="navbar navbar-style navbar-right">
                <div class="container">
                    <div class="navbar-header">
                        <a href=""><img class="logo"src="CHADY.png"alt="home"></a>
                    </div>
                    <ul class="nav navbar-nav">
<<<<<<< HEAD
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('buildings') }}">Buidlings</a></li>
                        <li><a href="{{ route('profits') }}">Profit Report</a></li>
                        <li><a href="{{ url('/main/logout') }}">Logout</a></li>
=======
                        <li><a href="">Home</a></li>
                        <li><a href="">Buidlings</a></li>
                        <li><a href="">Profit Report</a></li>
>>>>>>> 536063ca2aa1cd12ad3bc18c1bf0354cbaff6c87
                    </ul>
                </div>
            </nav>
            <p>Building1 </p>
            <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Buidling Name</th>
                        <th>Returns</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                      </tr>
                      <!--<tr>
                        <td>Mary</td>
                        <td>Moe</td>
                        <td>mary@example.com</td>
                      </tr>
                      <tr>
                        <td>July</td>
                        <td>Dooley</td>
                        <td>july@example.com</td>
                      </tr>-->
                    </tbody>
                  </table>
    </header>
<<<<<<< HEAD
@endsection
=======
    <div>
    
        </div>
    </body>
</html>
>>>>>>> 536063ca2aa1cd12ad3bc18c1bf0354cbaff6c87

@extends('layouts.landingPage')

@section('content')
<header class="header">
            <nav class="navbar navbar-style navbar-right">
                <div class="container">
                    <div class="navbar-header">
                        <a href=""><img class="logo"src="CHADY.png"alt="home"></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('buildings') }}">Buidlings</a></li>
                        <li><a href="{{ route('profits') }}">Profit Report</a></li>
                        <li><a href="{{ url('/main/logout') }}">Logout</a></li>
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
@endsection

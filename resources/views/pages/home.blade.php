@extends('layouts.default')
@section('content')
    <h1>Welcome Highlanders!! </h1>
    <section class="jumbotron text-center">
        <div class="container">
            <h1>Graduate Student Association</h1>
            <a href="http://gsa.njit.edu/" class="lang-logo">
                <img src="http://gsa.njit.edu/assets/img/G3.png" class="img-rounded" alt="Cinque Terre" width="300" height="200">>
            </a>

            <p> Welcome Highlanders! GSA produly presents the 2018 E-BOARD members</p>
            <a type="button" class="btn btn-lg btn-default" href="http://gsa.njit.edu/about_us.html"><span class="glyphicon glyphicon-question-sign"></span>Help</a>
            <a type="button" class="btn btn-lg btn-primary" href="http://gsa.njit.edu/Department.html"><span class="glyphicon glyphicon-user"></span>Department Representatives</a>
            <hr>
            <div class="row text-left">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Position</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Monica</td>
                        <td>Geller</td>
                        <td>Presdient</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Chandler</td>
                        <td>Bing</td>
                        <td>Secretary</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Joey</td>
                        <td>Tribiyani</td>
                        <td>Student Affairs</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Barney</td>
                        <td>Stinston</td>
                        <td>Treasurer</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>Ross</td>
                        <td>Geller</td>
                        <td>Vice President PR</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>Jake</td>
                        <td>Peralta</td>
                        <td>Vice President Admin</td>
                    </tr>

                    <tr>
                        <th scope="row">7</th>
                        <td>Rachel</td>
                        <td>Green</td>
                        <td>Technology Officer</td>
                    </tr>


                    </tbody>
                </table>

            </div>
        </div>
        <div class="container">
            <div class="alert alert-info text-center" role="alert">
                REMINDER: Fresher's party postponed to September 23rd.Location and timings will be posted soon
            </div>
        </div>
    </section>
@stop
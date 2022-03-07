@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                <div class="card-body">

                    @csrf




                    <head>
                        <meta charset="utf-8" />

                    </head>

                    <body>
                        <marquee>
                            <h1>
                                <font color="black"></font>
                            </h1>
                        </marquee>
                        <form action="/maraichage" method="post" class="section">
                            {{ csrf_field() }}
                            <table align="center" width="495" height="338">


                                <tr>
                                    <td width="143">
                                        <font color="black"><b>Mois</b></font>
                                    </td>
                                    <td>
                                        <select name="mois">
                                            <option></option>
                                            <option>Janvier</option>
                                            <option>Février</option>
                                            <option>Mars</option>
                                            <option>Avril</option>
                                            <option>Mai</option>
                                            <option>Juin</option>
                                            <option>Juillet</option>
                                            <option>Aout</option>
                                            <option>Septembre</option>
                                            <option>Octobre</option>
                                            <option>Novembre</option>
                                            <option>Décembre</option>
                                        </select>

                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="submit" name="val" value="ok"></td>
                                    <td><input type="reset" name="an" value="Annuler"></td>
                                </tr>
                            </table>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<img src="image/ms.jpg" class="rounded mx-auto d-block" alt="...">

</body>

</html>
@endsection
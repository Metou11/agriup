@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <img src="image/ms.jpg" style="height: 500px; object-fit: cover" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Maraichage</h5>
                    <p class="card-text">Selectionnez un mois pour voir les cultures qui sont favorables....</p>
                    <form action="/maraichage" method="POST">
                        {{ csrf_field() }}
                        <div class="row d-flex align-items-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Choisir le mois</label>
                                    <select class="form-control" name="mois" id="mois">
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
                                </div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-success">Valider</button>
                                <button type="reset" class="btn btn-secondary">Annuler</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

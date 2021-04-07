@extends('management.layouts.layout')
@section('content')
    <section class="main-admin-restaurant">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-2 text-left">
                    <h2>Bilanci</h2>
                </div>
                <div class=" bg-lights">
                    <table class="table">
                        <thead class="table-light">
                        <th> Numri total i porosive</th>
                        <th> Shuma totale</th>
                        <th> Data</th>
                        </thead>
                        <tbody>
                        @foreach($reports as $report)
                        <tr>
                            <td> {{$report->orders}}</td>
                            <td> {{$report->balance}}</td>
                            <td> {{$report->created_at->format('d.m.Y')}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
@endsection

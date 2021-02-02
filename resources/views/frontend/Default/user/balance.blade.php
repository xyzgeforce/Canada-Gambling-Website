@extends('frontend.Default.layouts.user')
@section('profile')
<main class="profile">
    <div class="profile container pt-5">
        <div class="row">
            <div class="side-menu col-md-3 p-0">
                @include('frontend.Default.user.tab')
            </div>
            <div class="col-md-9 p-0">
                <div class="main-section px-4 py-4">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Balance</h3>
                        </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th style="width: 20%" scope="col">Amount</th>
                                <th style="width: 20%" scope="col">Available to cash out</th>
                                <th style="width: 20%" scope="col">Currency</th>
                                <th style="width: 40%" scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{Auth::user()->balance}}</td>
                                <td>{{Auth::user()->total_balance}}</td>
                                <td>USD</td>
                                <td>
                                    <button type="button" class="btn btn-success" onclick="fn_deposit('1')">Deposit</button>
                                    <button type="button" class="btn btn-info" onclick="fn_cashout()">Cash Out</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="row my-2">
                        <div class="col-md-4">Total Bonus: {{Auth::user()->count_bonus}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>		
</main>
@endsection
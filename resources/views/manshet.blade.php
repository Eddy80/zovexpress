@extends('layout')

@section('content')
<?php
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\UsersController;
?>
<div class="register-photo" style="background-color: rgb(255,255,255); padding: 20px 0px;">
    <div class="table-responsive table-borderless">
        <table class="table table-bordered">
            <thead>
            <tr></tr>
            </thead>
            <tbody>
            <tr>
                <td style="padding: 0px;">
                    <h2 class="text-center" style="font-size: 16px;margin: 0px 8px 0px;"><strong></strong></h2>
                </td>
            </tr>
            <tr>
                <td class="text-center" style="padding: 0px;"><img src="assets/img/underline.png"></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="form-container">
        <form method="post" style="height:auto; width: 600px;padding: 10px 20px;">
            <p></p>
            <ul class="list-group bg-white border-white">
                <?php   $reviews = GeneralController::getReviewsList();  ?>
                @foreach($reviews as $review)
                <?php
                $user = UsersController::getUserFLNames($review->userid);
                ?>
                <li class="list-group-item text-right border-white"><span></span>
                    <p class="text-justify" style="margin: 0px;">“{{$review->textru}}”&nbsp;</p>
                        <strong class="text-right">
                        <br>
                            @if (count($user) > 0)
                            {{ $user[0]->firstname }} {{ $user[0]->lastname }}
                            @endif
                            &nbsp;
                        <br><br></strong>
                    <img class="d-xl-flex justify-content-center align-items-center align-content-center justify-content-xl-end" src="assets/img/line.png" style="margin: 0 auto;">
                </li>
                @endforeach
            </ul>
            <div class="btn-group border-white d-xl-flex justify-content-xl-center" role="group">
<!--                <button class="btn btn-primary bg-white border rounded border-warning" type="button" style="color: #000000;margin: 35px 10px 0px 10px;">&lt;&lt; Предыдущая страница</button>-->
<!--                <button class="btn btn-primary bg-warning border-warning" type="button"     style="margin: 35px 20px 0px 20px;">Следующая страница &gt;&gt;</button>-->
            </div>
            <ul></ul>
        </form>
    </div>
</div>

@endsection

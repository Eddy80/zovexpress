@extends('layout')

@section('content')
<div class="register-photo" style="background-color: rgb(255,255,255); padding: 20px 0px;">
    <div class="table-responsive table-borderless">
        <table class="table table-bordered">
            <thead>
            <tr></tr>
            </thead>
            <tbody>
            <tr>
                <td style="padding: 0px;">
                    <h2 class="text-center" style="font-size: 16px;margin: 0px 8px 0px;"><strong>ОТЗЫВЫ</strong></h2>
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
                <li class="list-group-item text-right border-white"><span></span>
                    <p class="text-justify" style="margin: 0px;">“Изучение истории Отечества, множество достопримечательностей, красивые виды на Волгу, удобные информационные таблички с аудиогидом.”&nbsp;</p><strong class="text-right"><br>Анар Бабаев&nbsp;<br><br></strong><img class="d-xl-flex justify-content-center align-items-center align-content-center justify-content-xl-end"
                                                                                                                                                                                                                                                                                      src="assets/img/line.png" style="margin: 0 auto;"></li>
                <li class="list-group-item text-right border-white"><span></span>
                    <p class="text-justify" style="margin: 0px;">“После рождения второго ребенка мои волосы превратились в общипанную мочалку. (Подробно о том, как я отращивала полосы после облысения - тут). В тот же период времени я решила кардинально сменить свой уход с массмаркета на профессиональную
                        уходовую косметику.”</p><strong class="text-right"><br>Анар Бабаев&nbsp;<br><br></strong><img class="d-xl-flex justify-content-center align-items-center align-content-center justify-content-xl-end" src="assets/img/line.png" style="margin: 0 auto;"></li>
                <li
                    class="list-group-item text-right border-white"><span></span>
                    <p class="text-justify" style="margin: 0px; ">“Изучение истории Отечества, множество достопримечательностей, красивые виды на Волгу, удобные информационные таблички с аудиогидом.”&nbsp;</p><strong class="text-right"><br>Анар Бабаев&nbsp;<br><br></strong><img class="d-xl-flex justify-content-center align-items-center align-content-center justify-content-xl-end"
                                                                                                                                                                                                                                                                                      src="assets/img/line.png" style="margin: 0 auto;"></li>
            </ul>
            <div class="btn-group border-white d-xl-flex justify-content-xl-center" role="group"><button class="btn btn-primary bg-white border rounded border-warning" type="button" style="color: #000000;margin: 35px 10px 0px 10px;">&lt;&lt; Предыдущая страница</button><button class="btn btn-primary bg-warning border-warning" type="button"
                                                                                                                                                                                                                                                                                      style="margin: 35px 20px 0px 20px;">Следующая страница &gt;&gt;</button></div>
            <ul></ul>
        </form>
    </div>
</div>

@endsection

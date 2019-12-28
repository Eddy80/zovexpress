@extends('tracking')

@section('contenttracking')

<ul class="list-group">
    <li class="list-group-item" style="height: 75px;">
        <div class="table-responsive" style="height: 75px;">
            <table class="table">
                <thead>
                <tr></tr>
                </thead>
                <tbody>
                <tr></tr>
                <tr style="height: 55px;">
                    <td class="border-white" style="padding: 0px;height: 48px;">
                        <button class="btn btn-primary border rounded border-warning" type="button" style="background-color: #ffffff;margin: 0px 5px 0px;height: 35px;padding: 0px 10px;width: 200px;color: #000000;">

                        </button>
                    </td>
                    <td
                        style="padding: 0px;">
                        <div class="table-responsive table-borderless border-white" style="height: 48px;">
                            <table class="table table-bordered">
                                <thead>
                                <tr></tr>
                                </thead>
                                <tbody class="border-warning">
                                <tr>
                                    <td class="border-warning" style="padding: 0px 5px;font-size: 10px;background-color: #d79827;color: #ffffff;width: 400px;">Дата отправлки: 10. 10. 2019&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="border-warning" style="height: 16px;padding: 0px 5px;font-size: 10px;background-color: #d79827;color: #ffffff;margin: 0px;">Ожидаемаема дата получения: 20. 10. 2020</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </td>
                    <td class="border-white" style="padding: 0px;height: 48px;"><label style="margin: 0px 10px;font-size: 14px;">Статус:</label><label style="font-size: 12px;"><strong><em>доставлено</em></strong></label></td>
                </tr>
                <tr></tr>
                <tr></tr>
                </tbody>
            </table>
        </div>
    </li>
</ul>

@endsection

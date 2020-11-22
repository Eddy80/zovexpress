@extends('tascohome')

@section('tascocontent')
<div class="col-md-8 col-lg-6 item" style="padding:0px;"> 
<div class="tascoLeftMenu" style="padding:0px;">
    <img src="/assets/img/bg/tasco_main_banner.png" style="width:100%;"/>
</div>
<a id="goodslist"></a>
<div id="table_data">
                          


@yield('tascogoodscontent')
</div>



                    

                </div>
                <div class="col-md-4 col-lg-3 item">
                    <div class="tascoRightMenu">
                        <div>
                        <img src="/assets/img/bg/Tasco_right_banner1.png" style="width:250px;height:300px;">
                        </div>
                        <div>
                        <img src="/assets/img/bg/Tasco_right_banner2.png" style="margin-top:10px;width:250px"/>
                        </div>
                        <div>
                        <img src="/assets/img/bg/Tasco_right_banner3.png" style="margin-top:10px;width:250px"/>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
@endsection
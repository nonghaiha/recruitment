<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>30Shine PDF</title>
    <link rel="stylesheet" href="{{cxl_asset('admin/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{cxl_asset('admin/crop/croppie.css')}}">
    <link rel="stylesheet" href="{{cxl_asset('admin/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{cxl_asset('admin/css/AdminLTE.css')}}">
    <link rel="stylesheet" href="{{cxl_asset('admin/css/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{cxl_asset('admin/css/jquery-ui.css')}}">
    <style>
        *{ font-family: DejaVu Sans, font-size: 12px;}
    </style>
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <section class="content-header">
                <h1 class="text-center">
                    30SHINE
                </h1>
                <div class="col-xs-12 text-center">
                    <p>Company: Công ty Cổ phần Thương mại Dịch vụ 30Shine</p>
                    <p>Tax: 0107467693</p>
                    <p>Address: Số 82 Trần Đại Nghĩa, phường Đồng Tâm, quận Hai Bà Trưng,
                        Hà Nội
                    </p>
                </div>
            </section>
            <section class="content">
                <h3 class="text-center">{{$title}}</h3>
                <div class="box-body">
                    <p>{!! $description !!}</p>
                    <p>Number Of Employees: {{$number_of_employees}}</p>
                    <p>Salary: {{$salary}}</p>
                    <p class="text-right">Apply:{{$applied_at}}</p>
                    <p class="text-right">End:{{$ended_at}}</p>
                </div>
            </section>
        </div>
        <p>Cám ơn sự quan tâm của bạn dành cho 30Shine</p>
    </div>
</body>
</html>

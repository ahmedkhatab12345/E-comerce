<!DOCTYPE html>
<html  >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
<meta name="keyword" content="LUNO, Bootstrap 5, ReactJs, Angular, Laravel, VueJs, ASP .Net, Admin Dashboard, Admin Theme, HRMS, Projects, Hospital Admin, CRM Admin, Events, Fitness, Music, Inventory, Job Portal">
<link rel="icon" href="{{url('/')}}/assets/img/favicon.ico" type="image/x-icon"> 
<title>:: LUNO :: Dashboard</title>

<link rel="stylesheet" href="{{url('/')}}/assets/cssbundle/daterangepicker.min.css">

<link rel="stylesheet" href="{{url('/')}}/assets/css/luno-style.css">
<link rel="stylesheet" href="{{url('/')}}/assets/cssbundle/dropify.min.css">


<script src="{{url('/')}}/assets/js/plugins.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<!-- <style type="text/css">
    body{
        background: #ddd;
    }
   
    .error{
        color:red;
    }
</style> -->
<body class="layout-1 rtl_mode" data-luno="theme-blue">

@include('dashboard.include.sidebar')

<div class="wrapper">

@include('dashboard.include.header')


@yield('content')



@include( 'dashboard.include.footer' )


<script src="{{url('/')}}/assets/js/theme.js"></script>

<script src="{{url('/')}}/assets/js/bundle/apexcharts.bundle.js"></script>

<script src="{{url('/')}}/assets/js/bundle/apexcharts.bundle.js"></script>


<script src="{{url('/')}}/assets/js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{url('/')}}/assets/js/bundle/dropify.bundle.js"></script>
<!-- <script src="{{url('/')}}/assets/vendor/prismjs/prism.js"></script>
<script src="{{url('/')}}/assets/js/plugins.js"></script>
<script src="{{url('/')}}/assets/js/theme.js"></script> -->

  <script>
       function ConfirmDelete()
{
  
  return confirm("Are you sure you want to delete?");
  if (result === null) {
    return;
}
}
    </script>
    @stack('javascripts')
    @yield('price_js')

    @yield('scripts')
    <script>
    $(function() {
      $('.dropify').dropify();
      var drEvent = $('#dropify-event').dropify();
      drEvent.on('dropify.beforeClear', function(event, element) {
        return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
      });
      drEvent.on('dropify.afterClear', function(event, element) {
        alert('File deleted');
      });
      $('.dropify-fr').dropify({
        messages: {
          default: 'Glissez-dÃ©posez un fichier ici ou cliquez',
          replace: 'Glissez-dÃ©posez un fichier ou cliquez pour remplacer',
          remove: 'Supprimer',
          error: 'DÃ©solÃ©, le fichier trop volumineux'
        }
      });
    });
  </script>
   
   <script>
      $.validate({
        form: 'form'
      });
    </script>
 
<script>
    // LUNO Revenue
    var options = {
      series: [{
        name: 'Income',
        data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
      }, {
        name: 'Expenses',
        data: [123, 142, 135, 127, 143, 122, 117, 131, 122, 122, 112, 116]
      }, {
        name: 'Revenue',
        data: [223, 242, 235, 227, 243, 222, 217, 231, 222, 222, 212, 216]
      }],
      chart: {
        type: 'bar',
        height: 260,
        stacked: true,
        stackType: '100%',
        toolbar: {
          show: false,
        },
      },
      colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
      responsive: [{
        breakpoint: 480,
        options: {
          legend: {
            position: 'bottom',
            offsetX: -10,
            offsetY: 0
          }
        }
      }],
      xaxis: {
        categories: ['Jan', 'Feb', 'March', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
      },
      fill: {
        opacity: 1
      },
      dataLabels: {
        enabled: false,
      },
      legend: {
        position: 'bottom',
        horizontalAlign: 'center',
      },
    };
    var chart = new ApexCharts(document.querySelector("#apex-AudienceOverview"), options);
    chart.render();
    // Sales by Category
    var options = {
      chart: {
        height: 280,
        type: 'donut',
      },
      plotOptions: {
        pie: {
          donut: {
            labels: {
              show: true,
              total: {
                showAlways: true,
                show: true
              }
            }
          }
        }
      },
      dataLabels: {
        enabled: false,
      },
      legend: {
        position: 'bottom',
        horizontalAlign: 'center',
        show: true,
      },
      colors: ['var(--chart-color1)', 'var(--chart-color2)', 'var(--chart-color3)'],
      series: [55, 35, 10],
    }
    var chart = new ApexCharts(document.querySelector("#apex-SalesbyCategory"), options);
    chart.render();
  </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" />
  <title>
    Roda Rakyat
  </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{asset('/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{asset('/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('/css/soft-ui-dashboard.css?v=1.0.7')}}" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

@yield('content')

<footer class="footer my-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
        <a href="https://www.instagram.com/rodarakyat.id/" target="_blank" class="text-secondary">
          <span class="text-lg fab fa-instagram"></span>
      </div>
    </div>
    <div class="row">
      <div class="col-8 mx-auto text-center mt-1">
        <p class="mb-0 text-secondary">
          Copyright © <script>
            document.write(new Date().getFullYear())
          </script> Roda Rakyat.
        </p>
      </div>
    </div>
  </div>
</footer>
<!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
<!--   Core JS Files   -->
<script src="{{asset('/js/core/popper.min.js')}}"></script>
<script src="{{asset('/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{'asset(/js/soft-ui-dashboard.min.js?v=1.0.7)'}}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>TI/ POS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap">
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap-theme.scss') }}">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pos.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="">
    <section class="">
      <nav class="navbar navbar-expand-xl navbar-light bg-white flex-wrap">
        <div class="container-fluid">
            <div class="d-flex w-100 align-items-center">
                <a  href="#">
                    <img class="img-fluid" src="{{asset('image/ti-banner-pos.png')}}" alt="" width="auto" style="height:40px !important;width:120px !important;">
                </a>
            <!-- <div aria-label="breadcrumb" style="--bs-breadcrumb-divider: '&gt;';">
                <div class="col-12 col-lg-auto d-flex align-items-center">
                <div class="input-group me-4 pe-4 bg-white rounded border">
                    <input class="form-control border-0" type="text" placeholder="Type to search...">
                    <button class="btn p-0" type="button">
                        <svg width="18" height="18" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.0921 16.9083L15.0004 13.8417C16.2005 12.3453 16.7817 10.4461 16.6244 8.53441C16.4672 6.62274 15.5835 4.84398 14.155 3.56386C12.7265 2.28375 10.8619 1.59958 8.94451 1.65205C7.02711 1.70452 5.20268 2.48963 3.84636 3.84594C2.49004 5.20226 1.70493 7.02669 1.65247 8.94409C1.6 10.8615 2.28416 12.7261 3.56428 14.1546C4.84439 15.583 6.62316 16.4668 8.53482 16.624C10.4465 16.7812 12.3457 16.2001 13.8421 15L16.9087 18.0667C16.9862 18.1448 17.0784 18.2068 17.1799 18.2491C17.2815 18.2914 17.3904 18.3132 17.5004 18.3132C17.6104 18.3132 17.7193 18.2914 17.8209 18.2491C17.9224 18.2068 18.0146 18.1448 18.0921 18.0667C18.2423 17.9113 18.3262 17.7036 18.3262 17.4875C18.3262 17.2714 18.2423 17.0637 18.0921 16.9083ZM9.16708 15C8.01335 15 6.88554 14.6579 5.92625 14.0169C4.96696 13.3759 4.21929 12.4649 3.77778 11.399C3.33627 10.3331 3.22075 9.16019 3.44583 8.02863C3.67091 6.89708 4.22648 5.85767 5.04229 5.04187C5.85809 4.22606 6.89749 3.67049 8.02905 3.44541C9.1606 3.22033 10.3335 3.33585 11.3994 3.77736C12.4653 4.21887 13.3763 4.96654 14.0173 5.92583C14.6583 6.88512 15.0004 8.01293 15.0004 9.16666C15.0004 10.7138 14.3858 12.1975 13.2919 13.2914C12.1979 14.3854 10.7142 15 9.16708 15Z" fill="#382CDD"></path>
                        </svg>
                    </button>
                </div>
                <a class="flex-shrink-0 btn btn-primary d-flex align-items-center gt-rounded-10 btn-lg" href="{{ url('/pos') }}">
                    <span class="d-inline-block me-2 text-primary-light">
                    <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 16px;height: 16px">
                        <path d="M12.6667 1.33334H3.33333C2.19999 1.33334 1.33333 2.20001 1.33333 3.33334V12.6667C1.33333 13.8 2.19999 14.6667 3.33333 14.6667H12.6667C13.8 14.6667 14.6667 13.8 14.6667 12.6667V3.33334C14.6667 2.20001 13.8 1.33334 12.6667 1.33334ZM10.6667 8.66668H8.66666V10.6667C8.66666 11.0667 8.4 11.3333 8 11.3333C7.6 11.3333 7.33333 11.0667 7.33333 10.6667V8.66668H5.33333C4.93333 8.66668 4.66666 8.40001 4.66666 8.00001C4.66666 7.60001 4.93333 7.33334 5.33333 7.33334H7.33333V5.33334C7.33333 4.93334 7.6 4.66668 8 4.66668C8.4 4.66668 8.66666 4.93334 8.66666 5.33334V7.33334H10.6667C11.0667 7.33334 11.3333 7.60001 11.3333 8.00001C11.3333 8.40001 11.0667 8.66668 10.6667 8.66668Z" fill="currentColor"></path>
                    </svg>
                    </span>
                    <span>POS</span>
                </a>
                </div>
            </div> -->
            
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-6 ms-auto">
                    <li class="nav-item px-0">
                    <a class="nav-link text-secondary p-0" href="#">
                        <svg width="16" height="20" viewbox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 11.18V8C13.9986 6.58312 13.4958 5.21247 12.5806 4.13077C11.6655 3.04908 10.3971 2.32615 9 2.09V1C9 0.734784 8.89464 0.48043 8.70711 0.292893C8.51957 0.105357 8.26522 0 8 0C7.73478 0 7.48043 0.105357 7.29289 0.292893C7.10536 0.48043 7 0.734784 7 1V2.09C5.60294 2.32615 4.33452 3.04908 3.41939 4.13077C2.50425 5.21247 2.00144 6.58312 2 8V11.18C1.41645 11.3863 0.910998 11.7681 0.552938 12.2729C0.194879 12.7778 0.00173951 13.3811 0 14V16C0 16.2652 0.105357 16.5196 0.292893 16.7071C0.48043 16.8946 0.734784 17 1 17H4.14C4.37028 17.8474 4.873 18.5954 5.5706 19.1287C6.26819 19.6621 7.1219 19.951 8 19.951C8.8781 19.951 9.73181 19.6621 10.4294 19.1287C11.127 18.5954 11.6297 17.8474 11.86 17H15C15.2652 17 15.5196 16.8946 15.7071 16.7071C15.8946 16.5196 16 16.2652 16 16V14C15.9983 13.3811 15.8051 12.7778 15.4471 12.2729C15.089 11.7681 14.5835 11.3863 14 11.18ZM4 8C4 6.93913 4.42143 5.92172 5.17157 5.17157C5.92172 4.42143 6.93913 4 8 4C9.06087 4 10.0783 4.42143 10.8284 5.17157C11.5786 5.92172 12 6.93913 12 8V11H4V8ZM8 18C7.65097 17.9979 7.30857 17.9045 7.00683 17.7291C6.70509 17.5536 6.45451 17.3023 6.28 17H9.72C9.54549 17.3023 9.29491 17.5536 8.99317 17.7291C8.69143 17.9045 8.34903 17.9979 8 18ZM14 15H2V14C2 13.7348 2.10536 13.4804 2.29289 13.2929C2.48043 13.1054 2.73478 13 3 13H13C13.2652 13 13.5196 13.1054 13.7071 13.2929C13.8946 13.4804 14 13.7348 14 14V15Z" fill="currentColor"></path></svg></a>
                    </li>
                </ul>
            <div>
                <div class="dropdown">
                <button class="btn p-0 fw-normal d-flex align-items-center dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="me-3">
                    <p class="mb-0 small"></p>
                    <p class="mb-0 small text-secondary">{{ Auth::user()->name }}</p>
                    </div>
                    <div class="me-2">
                    <img class="img-fluid rounded-circle" style="width: 40px; height: 40px; object-fit: cover;" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;crop=faces&amp;fit=crop&amp;h=128&amp;w=128" alt=""></div>
                    <span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="width:10px !important;">
                    <a class="dropdown-item" href="{{ url('users') }}">Accounts</a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                </div>
            </div>
                </div>
                </div>
                </div>
            </nav>
            </div>
        </section>
  <div class="bg-dark">  @yield('content')</div>
    <!-- <main class="py-4">
    @yield('content')
    </main> -->
  </div>
    <script src="{{ asset('template/js/main.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap/bootstrap.bundle.js.map') }}"></script>
    <script src="{{ asset('template/js/bootstrap/bootstrap.bundle.min.js.map') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @yield('javascript')
    <script>
      $('.delete').click(function() {
        const response = confirm('Are you sure you want to delete this record?');
        if(response) {
          $(this).closest('td').find('form').submit();
        }
      })
    </script>
    <script type="text/javascript">      
      var success = "{{ Session::get('success') }}";
      if (success) {
          swal ({
              text: success,
              icon: 'success',
              button: 'OK',
          });
      }
      var deleted = "{{ Session::get('deleted') }}";
      if (deleted) {
          swal ({
              text: deleted,
              icon: 'error',
              button: 'OK',
          });
      }
      var error = "{{ Session::get('error') }}";
      if (error) {
          swal ({
              text: error,
              icon: 'error',
              button: 'OK',
          });
      }
      var danger = "{{ Session::get('flash_danger') }}";
      if (danger) {
          swal ({
              text: danger,
              icon: 'error',
              button: 'OK',
          });
      }
      var warning = "{{ Session::get('warning') }}";
      if (warning) {
          swal ({
              text: warning,
              icon: 'info',
              button: 'OK',
          });
      }
      var errors = $('.alert-errors').length;
      var html_errors = $('#html_errors').val();
      if(errors){
          swal ({
              text: html_errors,
              icon: 'error',
              button: 'OK',
          });
      }
    </script>
</body>

   
</html>

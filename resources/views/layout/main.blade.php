<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    
    <link rel="stylesheet" href="{{ url('/landing/public/css/style.css') }}">

    <style>
      .serviceImageheight {
          height: 220px;
      }

      
        .klicked {
            background-color: #8e32cc;
            color: rgb(255, 255, 255);
        }
    
  </style>
  <style>
    .table {
        border-spacing: 0 15px;
    }

    i {
        font-size: 1rem !important;
    }

    .table tr {
        border-radius: 20px;
    }

    tr td:nth-child(n+5),
    tr th:nth-child(n+5) {
        border-radius: 0 .625rem .625rem 0;
    }

    tr td:nth-child(1),
    tr th:nth-child(1) {
        border-radius: .625rem 0 0 .625rem;
    }
</style>
    
</head>

<body class="bg-white dark:bg-slate-800">
  
  @include('partial.navbar')

  @yield('nocontainer')

    <div class="container mt-4 mx-auto">
        @yield('container')
    </div>
    
    <script>
        const checkbox = document.querySelector('#toogleA');
        const html = document.querySelector('html');
        let light = document.querySelector('#light')
        let night = document.querySelector('#night')
        let it_light = document.querySelector('#it_light')
        let it_night = document.querySelector('#it_night')

        checkbox.addEventListener('click', function () {
            // checkbox.checked ? html.classList.add('dark') : html.classList.remove('dark')
            if (checkbox.checked) {
                localStorage.setItem('tema', 'dark')
                setTema('dark')
            } else {
                localStorage.setItem('tema', 'light')
                setTema('light')
            }


        })

        let loadNamaTema = localStorage.getItem('tema')
        if (loadNamaTema != '') {
            setTema(loadNamaTema)
        } else {
            setTema('light')
        }

        function setTema(e) {
            if (e == 'dark') {
                html.classList.add('dark')
                light.classList.add('hidden')
                night.classList.remove('hidden')
                it_night.classList.remove('sr-only')
                it_light.classList.add('sr-only')
            } else if (e == 'light') {
                html.classList.remove('dark')
                night.classList.add('hidden')
                light.classList.remove('hidden')
                it_light.classList.remove('sr-only')
                it_night.classList.add('sr-only')
            }
        }
    </script>
    <script>
        let klik = document.querySelectorAll('.klick')
        // console.log(klik);
        //
        klik.forEach(myFunction);

        function myFunction(item) {
            item.addEventListener('click', function (e) {
                klik.forEach(myFunction);
                function myFunction(p) {
                    p.classList.remove('klicked')
                }
                item.classList.add('klicked')

            })
        }
    </script>
    <script>
        let inputNama = document.querySelector('#nama')
        let judul = document.querySelector('#judul')
        let inputDes = document.querySelector('#des')
        let deskripsi = document.querySelector('#deskripsi')
        let gambar = document.querySelector('#gambar')
        let gambarEdit = document.querySelector('#gambarEdit')


        inputNama.onkeyup = function () {
            isiNama = inputNama.value
            judul.innerHTML = isiNama


        }

        inputDes.onkeyup = function () {
            isiDes = inputDes.value
            deskripsi.innerHTML = isiDes
        }

        gambar.onchange = function (e) {
            if (e.target.files.length > 0) {
                var src = URL.createObjectURL(e.target.files[0]);
                // console.log(src);
                gambarEdit.src = ''
                gambarEdit.src = src
            }
        };
    </script>
    
</body>

</html>
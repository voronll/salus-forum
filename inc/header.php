<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @font-face {
            font-family: 'SFDisplayPro';
            src: url('/assets/fonts/SFPRODISPLAYMEDIUM.woff2') format('woff2'), /* Melhor formato para web */
                 url('/assets/fonts/SFPRODISPLAYMEDIUM.woff') format('woff');   /* Alternativa */
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: 'SFDisplayPro', sans-serif;
        }

        header {
            background-color: #000000;
            width: 100%;
        }

        .border-bottom {
            border-bottom: 2px solid #808080;
        }

        .nav-pills {
            margin-left: 20px;
        }

        .nav-link {
            color: #ffffff !important;
        }
    </style>
</head>
<body>
    <header class="d-flex flex-wrap align-items-center py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Salus</span>
      </a>

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Documentação</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Comunidade</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contato</a></li>
      </ul>
    </header>
</body>
</html>

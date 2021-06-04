<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="imagem/png" href="" />
    <title> POO </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/24eb5c67e7.js" crossorigin="anonymous"></script>
    @yield('style')
</head>

<body>
    @include('templates.menu')

    <section id="content">
        @yield('content')
    </section>


    {{-- @include('templates.index.footer') --}}

    @yield('javaScript')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        });

        function clearLink() {
            window.history.pushState("", "", "/");
        }

        function goBack() {
            window.history.back();
        }
        function addRemoveButton(routes, event_id){
            var iButton = $("#finalButton").length;
            var rota    = routes.split('.');
            var tagA    = '<a href="'+rota[0]+'/'+event_id+'/'+rota[1]+'" onclick="clearLink()" id="finalButton" class="btn btn-primary">Remover</a>';

            document.querySelector("#event_id").innerHTML = event_id;

            if (iButton == true) {
                $("#finalButton").remove();
            }
            $("#cancelButton").after(tagA);
        }
    </script>
</body>
</html>

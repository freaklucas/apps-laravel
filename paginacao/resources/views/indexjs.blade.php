<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <link href="{{('css/app.css')}} rel=" stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Paginação</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <style>
        body {
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card  text-center">
            <div class="card-header">
                <h2>Tabela de clientes</h2>
            </div>
            <div class="card-body">
                <h5 class="card-title" id="cardTitle">
                    Exibindo clientes
                </h5>
                <table class="table table-hover" id="tabelaClientes">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">E-mail</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>nome</td>
                            <td>sobrenome</td>
                            <td>email</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <nav id="paginator">
                    <ul class="pagination">
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        /*
        function carregarClientes(pagina) {
            var url = "http://127.0.0.1:8000/json";
            var xhttp = new XMLHttpRequest();
            xhttp.open("GET", url, false);
            xhttp.send();
            console.log(xhttp.responseText);

        }
        
        carregarClientes(2);
        */
        function getItemProximo(data) {
            i = data.current_page + 1; 
            if (data.last_page == data.current_page) 
                aux = '<li class="page-item disabled"> ';
            else 
                aux = '<li class="page-item"> ';
            aux += '<a class="page-link" ' + ' pagina="' + i + '"  href="javascript:void(0);">Próximo</a></li>';     
            
            return aux;
        }

        function getItemAnterior(data) {
            i = data.current_page - 1; 
            if (1 == data.current_page) 
                aux = '<li class="page-item disabled"> ';
            else 
                aux = '<li class="page-item"> ';
            aux += '<a class="page-link" ' + ' pagina="' + i + '" href="javascript:void(0);">Anterior</a></li>';     
            
            return aux;
        }
        
        function getItem(data, i) {
            if (i == data.current_page) 
                aux = '<li class="page-item active"> ';
            else 
                aux = '<li class="page-item"> ';
            aux += '<a class="page-link" ' + ' pagina="' + i + '" href="javascript:void(0);">' + i + '</a></li>';     
            
            return aux;
        }

        function montarPaginator(data) {
            $("#paginator>ul>li").remove();
            $("#paginator>ul").append(getItemAnterior(data));
            
            paginasPorVez = 10;
            if(data.current_page - paginasPorVez / 2 <= 1)
                inicio = 1;
            
            else if(data.last_page - data.current_page < paginasPorVez)
                inicio = data.last_page - paginasPorVez + 1;
            
            else
                inicio = data.current_page - paginasPorVez / 2;

            fim = inicio + paginasPorVez - 1;

            for(i=inicio;i<=fim;i++) {
                montar = getItem(data, i);
                $("#paginator>ul").append(montar);
            }
            $("#paginator>ul").append(getItemProximo(data));
        }


        function montarLinha(cliente) {
            return '<tr>'+
                '<td>' + cliente.id  + '</td>' +
                '<td>' + cliente.nome +  '</td>' +
                '<td>' + cliente.sobrenome +  '</td>' +
                '<td>' + cliente.email +  '</td>' +   
            '</tr>';
        }

        function montarTabela(data) {
            $("#tabelaClientes>tbody>tr").remove();
            for(i=0; i<data.data.length; i++) {
                linhaMontada = montarLinha(data.data[i])
                $("#tabelaClientes>tbody").append(linhaMontada);
            }
        }

        function carregarClientes(pagina) {
            $.get('/json', {page: pagina}, function(resposta) {
                
                montarTabela(resposta);

                montarPaginator(resposta);
                
                $("#paginator>ul>li>a").click( function() { 
                    carregarClientes($(this).attr('pagina'));
                });

                $("#cardTitle").html(" Exibindo "   + resposta.per_page + 
                    " Clientes de " + resposta.total + 
                    " ( " + resposta.from + " a " + resposta.to + ")"
                
                );
            });
        }

        $(function() {
            carregarClientes(1);
        });
    </script>
</body>

</html>
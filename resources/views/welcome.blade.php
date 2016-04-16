<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sem Franquia</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:50">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="text-center">Sem Franquia</h1>
                <p class="text-center">Está insatisfeito com a possibilidade de franquias na banda larga brasileira?
                    Deixe sua reclamação aqui e ajude o somátorio total de prejuízo para empresas caso todos nós
                    saissemos de nossos planos mensais.</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center big-size">R$ 2.300,00</h1>
            <p class="text-uppercase text-center"><strong>Esse é o total da receita mensal que as empresas
                    perderiam,caso todos os usuários que deixaram sua insatisfação aqui desistissem de seus
                    planos</strong></p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="bootstrap-form-with-validation">
                <h2 class="text-center">Quero registrar minha insatisfação</h2>
                <div class="form-group">
                    <label class="control-label" for="text-input">Estado </label>
                    <select class="form-control">
                        <option value="1">Bahia</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="password-input">Cidade </label>
                    <select class="form-control">
                        <option value="1">Salvador</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="email-input">Empresa </label>
                    <select class="form-control">
                        <option value="1">GVT</option>
                        <option value="13">Velox</option>
                        <option value="14">NET</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label" for="textarea-input">Valor mensal do plano de internet</label>
                    <input class="form-control" type="text" name="plan" required="" id="plan">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">ENVIAR</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>
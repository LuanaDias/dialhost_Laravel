<html>
<head>
    <title>Landing Page</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">        
    <script type="text/javascript" src='js/jquery.js'></script>
    <script type='text/javascript' src='js/cep.js'></script>  
    <script type="text/javascript" src='js/jquery.mask.js'></script>
    <script type="text/javascript" src='js/jquery.mask.min.js'></script>    
</style> 
</head>
<body>     
<div class="container"> 
    <h1>Cadastre e ouça as melhores musicas</h1> 
    <hr/> 
    <form method="POST" action="enviar">
{{ csrf_field() }}   
    <div class="form-group">                    
        <div class="col-md-9">
            <legend style="color: #308576">Dados Pessoais</legend>
            <div class="col-md-6">
                <div class="form-group">
                     <label for="nome">Nome</label>
                     <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" 
                     maxlength="80" minlength="3" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                     <label for="email">E-Mail</label>
                     <input type="email" id="email" name="email" class="form-control" placeholder="E-Mail" maxlength="80" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                     <label for="telefone">Telefone</label>
                     <input type="tel" id="telefone" name="telefone" class="form-control" placeholder="Telefone" maxlength="8">
                </div>
            </div>  
            <div class="col-md-4">
                <div class="form-group">
                     <label for="celular">Celular</label>
                     <input type="tel" id="celular" name="celular" class="form-control" placeholder="Celular" maxlength="9">
                 </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="dtnascimento">Data de Nascimento</label>
                    <input type="date" id="dtnascimento" name="dtnascimento" class="form-control" placeholder="dtnascimento" required>
                </div>
            </div>
            <legend style="color: #308576">Endereço</legend>
            <div class="col-md-3">
                <div class="form-group">
                     <label for="cep">Cep</label>         
                     <input type="text" id="cep" name="cep" class="form-control" placeholder="Cep" required>
                </div>
            </div>
            <div class="col-md-4">                      
                <div class="form-group">
                     <label for="logradouro">rua</label>         
                     <input type="text" id="logradouro" name="logradouro" class="form-control" maxlength="80">
                </div> 
            </div>     
            <div class="col-md-2">
                <div class="form-group">
                     <label for="numero">Número:</label>         
                     <input type="text" id="numero" name="numero" class="form-control" placeholder="numero" pattern="[0-9]+$" maxlength="11">
                 </div>      
            </div> 
            <div class="col-md-3">
                <div class="form-group">
                     <label for="complemento">Complemento:</label>      
                     <input type="text" id="complemento" name="complemento" class="form-control" maxlength="20" maxlength="20">
                 </div>      
            </div> 
            <div class="col-md-4">
                 <div class="form-group">
                      <label for="bairro">Bairro:</label>         
                      <input type="text" id="bairro" name="bairro" class="form-control" placeholder="bairro" maxlength="30" required>
                  </div>  
            </div>    
            <div class="col-md-4">
                <div class="form-group">
                     <label for="cidade">Cidade:</label>         
                     <input type="text" id="cidade" name="cidade" class="form-control" placeholder="cidade" maxlength="30" required>
                </div>      
            </div>
            <div class="col-md-4">
                 <div class="form-group">
                      <label for="uf">Estado:</label>         
                      <input type="text" id="uf" name="uf" class="form-control" placeholder="estado" required maxlength="2">
            </div> 
            </div> 
            <div class="col-md-4">
                <div class="form-group"> 
                     <input type="submit" class="btn btn-primary" value="Salvar" name="salvar" />
                     <input type="reset" class="btn btn-primary" value="Limpar" name="limpar" />
                  </div>      
              </div>
         </div>        
    </div>
    </form> 
</body>
</html>
<script>
$(document).ready(function(){
    $('[name=telefone]').mask('(00) 0000-0000');
    $('[name=celular]').mask('(00) 00000-0000');
    $('[name=cep]').mask('00000000');
});
</script>
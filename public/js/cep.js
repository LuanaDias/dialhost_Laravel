$(document).ready( function() {   
   $('#cep').blur(function(){          
           $.ajax({
                url : 'consultar_cep.php', 
                type : 'POST',  
                data: 'cep=' + $('#cep').val(), 
                dataType: 'json',
                success: function(data){
                    if(data.sucesso == 1){
                        $('#logradouro').val(data.logradouro);
                        $('#bairro').val(data.bairro);
                        $('#cidade').val(data.cidade);
                        $('#uf').val(data.uf); 
                        $('#numero').focus();
                    }
                }
           });   
   return false;    
   })
});
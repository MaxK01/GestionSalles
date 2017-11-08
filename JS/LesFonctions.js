/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function GetDernierNumeroSalle(){
    
    $.ajax
    (
        {
            type:"get",
            url:"GetMaxIdSalles.php",
            success:function(data)
                {
                    $('#txtNumSalle').val(data);           
                },
            error:function()
                {
                    alert("Impossible de recuperer le max");
                }
        }
    );
}

function InsererSalle(){
    $.ajax
    (
         type:"get",
            url:"GetInsererSalle.php",
            data:"id="+$('#txtNumSalle').val()+"&nom="+$('#txtNomSalle').val()+"&nb="+$('#txtNbPlace').val(),
            success:function(data)
                {
                    $('#txtNumSalle').val(data);           
                },
            error:function()
                {
                    alert("Impossible d'inserer la salle");
                }
    )};
    
}
var total;
var idModal = '';
//var total = 0;
//clavier
function idClavier(id) {
    return document.getElementById(id);
}
function initialiser_affichage(id) {
    this.idClavier(id).value = 0;
    document.getElementById(id).focus();
    return true;
}
function affichageClavier(id, n) {
    if (n != '') {
        this.idClavier(id).value += n;
    } else {
        var texte = this.idClavier(id).value;
        var reponse = texte.slice(0, -1);
        this.idClavier(id).value = reponse;

    }
    document.getElementById(id).focus();
    return true;
}

function reset(id, n) {
    if (n == 'reset') {
        this.idClavier(id).value = '';
    }
}
//idPad
function validerDecoupe(id) {
    total = document.getElementById(id).value;
    this.idPad('valeurDecoupe').value = total;
    document.getElementById('valeurDecoupe').focus();
    this.idPad(id).value = '';
    UIkit.modal("#modal-pad-decoupe").hide();
}
function validerLongueur(id) {
    total = document.getElementById(id).value;
    this.idPad('valeurlongueur').value = total;
    document.getElementById('valeurlongueur').focus();
    this.idPad(id).value = '';
    UIkit.modal("#modal-pad-longueur").hide();
}
function validerNom(id) {
    total = document.getElementById(id).value;
    this.idClavier('valeurNom').value = total;
    document.getElementById('valeurNom').focus();
    this.idClavier(id).value = '';
    UIkit.modal("#modal-clavier").hide();

}
function idPad(id) {
    return document.getElementById(id);
}
function initialiser_affichage(id) {
    this.idPad(id).value = '';
    document.getElementById(id).focus();
    return true;
}
function affichage(id, n) {
    if (n != '') {
        this.idClavier(id).value += n;
    } else {
        var texte = this.idClavier(id).value;
        var reponse = texte.slice(0, -1);
        this.idClavier(id).value = reponse;
    }
    document.getElementById(id).focus();
    return true;
}
function reset(id, n) {
    if (n == 'reset') {
        this.idClavier(id).value = '';
    }
}




//Page Decoupe
// $('#maform').submit((e) => {
//             let that = e.currentTarget;
//             e.preventDefault();
//             // reset();
//             // $('.pure-form-message').html('');
//             $.ajax({
//                 method: $(that).attr('method'),
//                 url: $(that).attr('action'),
//                 // data: $(that).serialize()
//             })
//             .done((data) => {
//                 $('body').load();
//                 // $('legend').hide();
//                 // $('.alert').show('slow');
//             })
//             .fail((data) => {
//                 console.log(data);
//                 if(data.status == 422) {
//                     // $.each(data.responseJSON.errors, function (i, error) {
//                     //     $('form')
//                     //         .find('[name="' + i + '"]')
//                     //         .addClass('input-invalid')
//                     //         .next()
//                     //         .append(error[0]);
//                     // });
//                 }
//             });
//         });

// UIkit.util.on('#js-modal-confirm', 'click', function (e) {
//     e.preventDefault();
//     e.target.blur();
//     UIkit.modal.confirm('Voulez-vous annuler ?',{
//         labels: {
//             cancel: 'Annuler',
//             ok: 'Valider'
//         }        
//     }).then(function () {
//         $('body').load("/");
//         console.log('Confirmed.')
//     }, function () {

//         console.log('Rejected.')
//     });
// });



// Page Historique
// $(document).ready(function () {
//     $('#allCheckbox').on('click', function (e) {
//         if ($(this).is(':checked', true)) {
//             $(".uk-checkbox").prop('checked', true);
//         }
//         else {
//             $(".uk-checkbox").prop('checked', false);
//         }
//     })
//     $('.alldelete').on('click', function (e) {
//         var tableId = [];
//         $(".uk-checkbox:checked").each(function () {
//             tableId.push($(this).attr('data-id'));
//         })
//         if (tableId.length <= 0) {
//             alert("veuilliez selectionner un élement à supprimer");
//         }
//         else {
//             var check = confirm("Are you sure you want to delete this row?");
//             console.log(check);
//             if (check == true) {
//                 var join_values_id = tableId.join(",");
//                 var token = $("meta[name='csrf-token']").attr("content");
//                 var url = "historique/" + join_values_id + "/destroy";
//                 $.ajax({
//                     url: url,
//                     type: "POST",
//                     crossDomain: true,
//                     data: {
//                         "id": join_values_id,
//                         "_token": token,
//                     },
//                     success: function (data) {
//                         $(window).load();
//                         // if (data['success']) {
//                         //     $(".uk-checkbox:checked").each(function() {  
//                         //         $(this).parents("tr").remove();
//                         //     });
//                         //     alert(data['success']);
//                         // } else if (data['error']) {
//                         //     alert(data['error']);
//                         // } else {
//                         //     alert('Whoops Something went wrong!!');
//                         // }
//                     },
//                     error: function (data) {
//                         alert(data.responseText);
//                     }
//                 });
//             }
//         }
//     })
// })

/**
 * Autor: Lucas Forchino
 * Web: http://www.tutorialjquery.com
 *
 */
$(document).ready(function(){ //cuando el html fue cargado iniciar

/*inicio paises*/
    //añado la posibilidad de editar al presionar sobre edit
    $('.editpais').live('click',function(){
        //this = es el elemento sobre el que se hizo click en este caso el link
        //obtengo el id que guardamos en data-id
        var id=$(this).attr('data-id');
        //preparo los parametros
        params={};
        params.id=id;
        params.action="editarPais";
        $('#popupbox').load('../marfinlinux/forms/pais/index.php', params,function(){
            $('#block').show();
            $('#popupbox').show();
        })

    })

    $('.deletepais').live('click',function(){
        //obtengo el id que guardamos en data-id
        var id=$(this).attr('data-id');
        //preparo los parametros
        params={};
        params.id=id;
        params.action="borrarPais";
        $('#popupbox').load('../marfinlinux/forms/pais/index.php', params,function(){
            $('#content').load('../marfinlinux/forms/pais/index.php',{action:"refreshGrid"});
        })

    })

    $('#newpais').live('click',function(){
        params={};
        params.action="nuevoPais";
        $('#popupbox').load('../marfinlinux/forms/pais/index.php', params,function(){
            $('#block').show();
            $('#popupbox').show();
        })
    })


    $('#clientpais').live('submit',function(){
        var params={};
        params.action='guardarPais';
        params.id=$('#id').val();
        params.Nombre=$('#Nombre').val();
        params.BeneficioSalarios=$('#BeneficioSalarios').val();
        $.post('../marfinlinux/forms/pais/index.php',params,function(){
            $('#block').hide();
            $('#popupbox').hide();
            $('#content').load('../marfinlinux/forms/pais/index.php',{action:"refreshGrid"});
        })
        return false;
    })

/*fin paises*/

/*inicio regiones*/
 //añado la posibilidad de editar al presionar sobre edit
    $('.editregion').live('click',function(){
        //this = es el elemento sobre el que se hizo click en este caso el link
        //obtengo el id que guardamos en data-id
        var id=$(this).attr('data-id');
        //preparo los parametros
        params={};
        params.id=id;
        params.action="editarRegion";
        $('#popupbox').load('../marfinlinux/forms/region/index.php', params,function(){
            $('#block').show();
            $('#popupbox').show();
        })

    })

    $('.deleteregion').live('click',function(){
        //obtengo el id que guardamos en data-id
        var id=$(this).attr('data-id');
        //preparo los parametros
        params={};
        params.id=id;
        params.action="borrarRegion";
        $('#popupbox').load('../marfinlinux/forms/region/index.php', params,function(){
            $('#content').load('../marfinlinux/forms/region/index.php',{action:"refreshGrid"});
        })

    })

    $('#newregion').live('click',function(){
        params={};
        params.action="nuevoRegion";
        $('#popupbox').load('../marfinlinux/forms/region/index.php', params,function(){
            $('#block').show();
            $('#popupbox').show();
        })
    })


    $('#clientregion').live('submit',function(){
        var params={};
        params.action='guardarRegion';
        params.id=$('#id').val();
        params.Nombre=$('#Nombre').val();
        params.Pais=$('#Pais').val();
        $.post('../marfinlinux/forms/region/index.php',params,function(){
            $('#block').hide();
            $('#popupbox').hide();
            $('#content').load('../marfinlinux/forms/region/index.php',{action:"refreshGrid"});
        })
        return false;
    })

/*fin regiones*/

/*inicio tipo de categoria*/
 //añado la posibilidad de editar al presionar sobre edit
    $('.edittipocat').live('click',function(){
        //this = es el elemento sobre el que se hizo click en este caso el link
        //obtengo el id que guardamos en data-id
        var id=$(this).attr('data-id');
        //preparo los parametros
        params={};
        params.id=id;
        params.action="editartipocat";
        $('#popupbox').load('../marfinlinux/forms/tipocat/index.php', params,function(){
            $('#block').show();
            $('#popupbox').show();
        })

    })

    $('.deletetipocat').live('click',function(){
        //obtengo el id que guardamos en data-id
        var id=$(this).attr('data-id');
        //preparo los parametros
        params={};
        params.id=id;
        params.action="borrartipocat";
        $('#popupbox').load('../marfinlinux/forms/tipocat/index.php', params,function(){
            $('#content').load('../marfinlinux/forms/tipocat/index.php',{action:"refreshGrid"});
        })

    })

    $('#newtipocat').live('click',function(){
        params={};
        params.action="nuevotipocat";
        $('#popupbox').load('../marfinlinux/forms/tipocat/index.php', params,function(){
            $('#block').show();
            $('#popupbox').show();
        })
    })


    $('#clienttipocat').live('submit',function(){
        var params={};
        params.action='guardartipocat';
        params.id=$('#id').val();
        params.Nombre=$('#Nombre').val();
        $.post('../marfinlinux/forms/tipocat/index.php',params,function(){
            $('#block').hide();
            $('#popupbox').hide();
            $('#content').load('../marfinlinux/forms/tipocat/index.php',{action:"refreshGrid"});
        })
        return false;
    })

/*fin tipo de categoria*/

/*inicio tipo area protegida*/
 //añado la posibilidad de editar al presionar sobre edit
    $('.edittipoap').live('click',function(){
        //this = es el elemento sobre el que se hizo click en este caso el link
        //obtengo el id que guardamos en data-id
        var id=$(this).attr('data-id');
        //preparo los parametros
        params={};
        params.id=id;
        params.action="editartipoap";
        $('#popupbox').load('../marfinlinux/forms/tipoap/index.php', params,function(){
            $('#block').show();
            $('#popupbox').show();
        })

    })

    $('.deletetipoap').live('click',function(){
        //obtengo el id que guardamos en data-id
        var id=$(this).attr('data-id');
        //preparo los parametros
        params={};
        params.id=id;
        params.action="borrartipoap";
        $('#popupbox').load('../marfinlinux/forms/tipoap/index.php', params,function(){
            $('#content').load('../marfinlinux/forms/tipoap/index.php',{action:"refreshGrid"});
        })

    })

    $('#newtipoap').live('click',function(){
        params={};
        params.action="nuevotipoap";
        $('#popupbox').load('../marfinlinux/forms/tipoap/index.php', params,function(){
            $('#block').show();
            $('#popupbox').show();
        })
    })


    $('#clienttipoap').live('submit',function(){
        var params={};
        params.action='guardartipoap';
        params.id=$('#id').val();
        params.Nombre=$('#Nombre').val();
        params.idTipoCat=$('#idTipoCat').val();
        $.post('../marfinlinux/forms/tipoap/index.php',params,function(){
            $('#block').hide();
            $('#popupbox').hide();
            $('#content').load('../marfinlinux/forms/tipoap/index.php',{action:"refreshGrid"});
        })
        return false;
    })

/*fin tipo area protegida*/

    // boton cancelar, uso live en lugar de bind para que tome cualquier boton
    // nuevo que pueda aparecer
    $('#cancel').live('click',function(){
        $('#block').hide();
        $('#popupbox').hide();
    })


})

NS={};

$(document).ready(function() {
    
    $("#insertEmpleado").bind("submit", function() {
    
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success:function(){
                $("body").overhang({
                        type: "success",
                        message: "Empleado insertado correctamente.",
                    callback: function() {
                        window.location.href = "Empleados.php";
                    }
                    });
            },
            error:function(){
                alert("Error");
            }
        });
        this.reset();
        return false;
    });

    $("#insertProducto").bind("submit", function() {
    
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success:function(){
                $("body").overhang({
                        type: "success",
                        message: "Producto insertado correctamente.",
                    callback: function() {
                        window.location.href = "Productos.php";
                    }
                    });
            },
            error:function(){
                alert("Error");
            }
        });
        this.reset();
        return false;
    });

    $("#insertZona").bind("submit", function() {
    
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success:function(){
                $("body").overhang({
                        type: "success",
                        message: "Zona insertada correctamente.",
                    callback: function() {
                        window.location.href = "Zonas.php";
                    }
                    });
            },
            error:function(){
                alert("Error");
            }
        });
        this.reset();
        return false;
    });
    
    $(".deleteEmpleado").click(function(){
        var id = $(this).attr("id");
        var dataString = 'id=' + id;
        if(confirm("Está seguro de eliminar este empleado?")) {
            $.ajax({
                type: "POST",
                url: "../Controllers/User/deleteEmpleado.php",
                data: dataString,
                success:function(){
                    $("body").overhang({
                        type: "success",
                        message: "Empleado eliminado con exito."
                    });
                }
            });
            $(this).parent().parent().fadeOut(300, function(){
                $(this).remove();
            });
        };
        return false;              
    });

    $(".deleteProducto").click(function(){
        var id = $(this).attr("id");
        var dataString = 'id=' + id;
        if(confirm("Está seguro de eliminar este producto?")) {
            $.ajax({
                type: "POST",
                url: "../Controllers/Producto/deleteProducto.php",
                data: dataString,
                success:function(){
                    $("body").overhang({
                        type: "success",
                        message: "Producto eliminado con exito."
                    });
                }
            });
            $(this).parent().parent().fadeOut(300, function(){
                $(this).remove();
            });
        };
        return false;              
    });

    $(".deleteZona").click(function(){
        var id = $(this).attr("id");
        var dataString = 'id=' + id;
        if(confirm("Está seguro de eliminar esta zona?")) {
            $.ajax({
                type: "POST",
                url: "../Controllers/Zona/deleteZona.php",
                data: dataString,
                success:function(){
                    $("body").overhang({
                        type: "success",
                        message: "Zona eliminada con exito."
                    });
                }
            });
            $(this).parent().parent().fadeOut(300, function(){
                $(this).remove();
            });
        };
        return false;              
    });
    
    $("#updateEmpleado").bind("submit", function() {
    
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success:function(){
                $("body").overhang({
                    type: "success",
                    message: "Empleado actualizado con exito.",
                    callback: function() {
                        window.location.href = "Empleados.php";
                    }
                });
            },
            error:function(){
                alert("Error");
            }
        });
        return false;
    });

    $("#updateProducto").bind("submit", function() {
    
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success:function(){
                $("body").overhang({
                    type: "success",
                    message: "Producto actualizado con exito.",
                    callback: function() {
                        window.location.href = "Productos.php";
                    }
                });
            },
            error:function(){
                alert("Error");
            }
        });
        return false;
    });

    $("#updateZona").bind("submit", function() {
    
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success:function(){
                $("body").overhang({
                    type: "success",
                    message: "Zona actualizada con exito.",
                    callback: function() {
                        window.location.href = "Zonas.php";
                    }
                });
            },
            error:function(){
                alert("Error");
            }
        });
        return false;
    });
    
});


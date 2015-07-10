/**
*
*/

$(document).ready(function(){

	$("#formFactura").submit(function(e){

		e.preventDefault();

		var form = $("#formFactura");
		var url = form.attr('action');
		var data = form.serialize();

		$.post(url, data).done(function(result){

			$("#factura_id").val(result);
			$("#aggProductoDisplay").slideToggle();

		}).fail(function(result){
			console.log(result);
		});

	});

	$("#aggProducto").submit(function(e){

		e.preventDefault();

		var form = $("#aggProducto");
		var url = form.attr('action');
		var data = form.serialize();

		$.post(url, data).done(function(result){

			var html = '';
			var total = 0;

			$.each(result, function(i, index){

				var subtotal = index.pvp*index.cantidad;
				total += subtotal;

				html += '<tr>';
				html += '<td>'+index.id+'</td>';
				html += '<td>'+index.numero+'</td>';
				html += '<td>'+index.fecha+'</td>';
				html += '<td>'+index.nombre+'</td>';
				html += '<td>'+index.pvp+'</td>';
				html += '<td>'+index.cantidad+'</td>';
				html += '<td>'+subtotal+'</td>';
				html += '</tr>';
			});

				html += '<tr>';
				html += '<td colspan="5"></td>';
				html += '<td>Total</td>';
				html += '<td>'+total+'</td>';
				html += '</tr>';

			$("#tableProductos").find("tbody").html(html);


		}).fail(function(result){
			console.log(result);
		});

	});

});
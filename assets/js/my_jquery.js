
$(document).ready(function(){

  $('#generate').click(function() {
  	
    var values = ["dog", "cat", "parrot", "rabbit"];

    var select = $('<select>').prop('id', 'pets')
                    .prop('name', 'pets');

    $(values).each(function() {
      select.append($("<option>")
        .prop('value', this)
        .text(this.charAt(0).toUpperCase() + this.slice(1)));
    });

    var label = $("<label>").prop('for', 'pets')
                   .text("Choose your pets: ");

    var br = $("<br>");

    $('#test').append(label).append(select).append(br);
  });


	$('#nb_holes0').keyup(function(){
		var touche = $(this).val();
		var myFloat = 0;
		myFloat = parseFloat(touche);
		var theSpanText = $('#sholes').text();
		var theSpanNumber = parseFloat(theSpanText); 
		$('#span0').text(theSpanNumber - myFloat);
	});


	var c = 0;
	$('.more').on('click', function(){
		c++;
		alert(c);
		var div = $(this).prev().clone()
		div.find(".increment").attr("name",function(i,name){
			return name.replace(/\d+/,c)
		})
		$(this).before(div);
 	});






});
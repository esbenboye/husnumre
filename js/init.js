$(document).ready(function(){
	setGadenavnSource();
	setPostnummerSource();
	setFormActions();
	
	
})


function setFormActions()
{
	$("#findhusstande").click(function(){
		pnr = $("#postnummer").val();
		gadenavn = $("#gadenavn").val();;
		$.get("husnumre.php",{postnummer:pnr, gadenavn:gadenavn}, function(data){
					 $("#result").text("Der blev fundet "+data.length+" husnumre");
				},"JSON");
	})
}

function setPostnummerSource()
{
	$("#postnummer").typeahead({
		source:postnumre, // Sættes i filen "/js/postnumre.js"
	})
}

function setGadenavnSource()
{
	$("#gadenavn").typeahead({
		source:	getGadenavne,
		})
}

function getGadenavne(query, process)
{
	var pnr = $("#postnummer").val();
	$.get("gadenavne.php",{postnummer:pnr, gadenavn:query}, function(data){
		process(data);
	},"JSON");
			
}

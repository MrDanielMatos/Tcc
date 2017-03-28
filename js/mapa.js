var geocoder;
var map;
var marker;
var circulo;
var raio;

function initialize() {
	
	var latlng = new google.maps.LatLng(-18.8800397, -47.05878999999999);
	var options = {
		zoom: 5,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	
	map = new google.maps.Map(document.getElementById("mapa"), options);
	
	geocoder = new google.maps.Geocoder();
	
	circulo = new  google.maps.Circle({
	 // strokeColor: '#FF0000',
     // strokeOpacity: 0.8,
     // strokeWeight: 2,
     // fillColor: '#FF0000',
     // fillOpacity: 0.35,
    // map: map,	
	 // center: options.center,
	 // radius: 1500,
	// dragend: true
		
	})
	
	marker = new google.maps.Marker({
		map: map,
		draggable: true,
		
	});
	
	//marker.setPosition(latlng);
}

$(document).ready(function () {

	initialize();
	
	function carregarNoMapa(endereco) {
		geocoder.geocode({ 'address': endereco + ', Brasil', 'region': 'BR' }, function (results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				if (results[0]) {
					var latitude = results[0].geometry.location.lat();
					var longitude = results[0].geometry.location.lng();
		
					$('#txtEndereco').val(results[0].formatted_address);
					$('#txtLatitude').val(latitude);
                   	$('#txtLongitude').val(longitude);
					
		
					var location = new google.maps.LatLng(latitude, longitude);
					//marker.setPosition(location);
					map.setCenter(location);
					//Aqui Gera o circulo
					carregarCirculo(latitude,longitude);
					//Fim da geração do circulo
					$('#txtRaio').val(circulo.getRadius());
					map.setZoom(16);
				}
			}
		})
	}
	
	$("#btnEndereco").click(function() {
		if($(this).val() != "")
			carregarNoMapa($("#txtEndereco").val());
			
	})
	
	$("#txtEndereco").blur(function() {
		if($(this).val() != "")
			carregarNoMapa($(this).val());
	})
	
	google.maps.event.addListener(marker, 'drag', function () {
		geocoder.geocode({ 'latLng': marker.getPosition() }, function (results, status) {
			if (status == google.maps.GeocoderStatus.OK) {
				if (results[0]) {  
					$('#txtEndereco').val(results[0].formatted_address);
					$('#txtLatitude').val(marker.getPosition().lat());
					$('#txtLongitude').val(marker.getPosition().lng());
					//Carrega o circulo quando o marcador é movido
					carregarCirculo(marker.getPosition().lat(),marker.getPosition().lng());
					
				}
			}
		});
	});
	
	$("#txtEndereco").autocomplete({
		source: function (request, response) {
			geocoder.geocode({ 'address': request.term + ', Brasil', 'region': 'BR' }, function (results, status) {
				response($.map(results, function (item) {
					return {
						label: item.formatted_address,
						value: item.formatted_address,
						latitude: item.geometry.location.lat(),
          				longitude: item.geometry.location.lng()
					}
				}));
			})
		},
		select: function (event, ui) {
			$("#txtLatitude").val(ui.item.latitude);
    		$("#txtLongitude").val(ui.item.longitude);
			var location = new google.maps.LatLng(ui.item.latitude, ui.item.longitude);
			marker.setPosition(location);
			map.setCenter(location);
			map.setZoom(16);
			
		}
	});
	function carregarCirculo(lat,lng) {	
			var location = new google.maps.LatLng(lat,lng);
			//console.log(localiza);
			circulo.setMap(null);
			circulo = new  google.maps.Circle({
				strokeColor: '#FF0000',
				strokeOpacity: 0.8,
				strokeWeight: 2,
				fillColor: '#FF0000',
				fillOpacity: 0.35,
				map: map,	
				center: location,
				radius: 75,
				editable: true,
				dragend: true
				

			})
			//Buscando o Raio do circulo quando a mudança no tamanho do raio
			google.maps.event.addListener(circulo, 'radius_changed', function() {
					$('#txtRaio').val(circulo.getRadius());
			});


	}
	

});
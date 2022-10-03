

const funcionInit = () => {
	if (!"geolocation" in navigator) {
		return alert("Tu navegador no soporta el acceso a la ubicación. Intenta con otro");
	}

	

	let idWatcher = null;

	const $latitud = document.querySelector("#latitud"),
		$longitud = document.querySelector("#longitud"),
		$obtener = document.querySelector("#obtener")


	const onUbicacionConcedida = ubicacion => {
		const coordenadas = ubicacion.coords;
		$latitud.innerText = coordenadas.latitude;
		$longitud.innerText = coordenadas.longitude;
		enviarAServidor(ubicacion);
        
	}

	const enviarAServidor = ubicacion => {
		// Debemos crear otro objeto porque el que nos mandan no se puede codificar
		const otraUbicacion = {
			coordenadas: {
				latitud: ubicacion.coords.latitude,
				longitud: ubicacion.coords.longitude,
			},
			
		};
		console.log(otraUbicacion);
        detenerWatcher();
		
	};

	

	const onErrorDeUbicacion = err => {

		$latitud.innerText = "Error obteniendo ubicación: " + err.message;
		$longitud.innerText = "Error obteniendo ubicación: " + err.message;
		console.log("Error obteniendo ubicación: ", err);
	}

	const detenerWatcher = () => {
		if (idWatcher) {
			navigator.geolocation.clearWatch(idWatcher);
		}
	}

	const opcionesDeSolicitud = {
		enableHighAccuracy: true, // Alta precisión
		maximumAge: 0, // No queremos caché
		
	};


	$obtener.addEventListener("click", () => {
		detenerWatcher();
		idWatcher = navigator.geolocation.watchPosition(onUbicacionConcedida, onErrorDeUbicacion,opcionesDeSolicitud,detenerWatcher);
        
	});

	

};
document.addEventListener("DOMContentLoaded", funcionInit);
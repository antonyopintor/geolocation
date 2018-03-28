ENVIAR COMENTÁRIOS
Primeiros passos
A Google Maps Geocoding API é um serviço que oferece geocodificação e geocodificação reversa de endereços.

Este serviço também está disponível como parte da Google Maps JavaScript API do lado do cliente ou para uso do lado do servidor com Java Client, Python Client, Go Client e Node.js Client for Google Maps Services.

A geocodificação é o processo de converter endereços (como nome da rua e número) em coordenadas geográficas (latitude e longitude) que permitem a inserção de marcadores de local em um mapa ou o posicionamento do mapa.

A geocodificação inversa é o processo de conversão de coordenadas geográficas em um endereço legível. O serviço de geocodificação inversa da Google Maps Geocoding API também permite que você encontre o endereço de um determinado ID de local.

Exemplo de solicitação e resposta
A Google Maps Geocoding API é acessada por uma interface HTTP. Veja a seguir exemplos de solicitação de geocodificação e geocodificação reversa.

Solicitação e resposta de geocodificação (pesquisa de latitude/longitude)
O exemplo a seguir solicita a latitude e a longitude de "1600 Amphitheatre Parkway, Mountain View, CA" e especifica que a saída deve ser no formato JSON.

https://maps.googleapis.com/maps/api/geocode/json?address=1600+Amphitheatre+Parkway,+Mountain+View,+CA&key=YOUR_API_KEY
Esse exemplo pode ser testado inserindo o URL no navegador da Web (não deixe de substituir 'YOUR_API_KEY' pela chave de API real). A resposta inclui a latitude e a longitude do endereço.

Consulte o guia do desenvolvedor para obter mais informações sobre a criação de URLs de solicitação de geocodificação e os parâmetros disponíveis, bem como sobre como interpretar a resposta.

Veja a seguir um exemplo de resposta de geocodificação em JSON:

{
   "results" : [
      {
         "address_components" : [
            {
               "long_name" : "1600",
               "short_name" : "1600",
               "types" : [ "street_number" ]
            },
            {
               "long_name" : "Amphitheatre Pkwy",
               "short_name" : "Amphitheatre Pkwy",
               "types" : [ "route" ]
            },
            {
               "long_name" : "Mountain View",
               "short_name" : "Mountain View",
               "types" : [ "locality", "political" ]
            },
            {
               "long_name" : "Santa Clara County",
               "short_name" : "Santa Clara County",
               "types" : [ "administrative_area_level_2", "political" ]
            },
            {
               "long_name" : "California",
               "short_name" : "CA",
               "types" : [ "administrative_area_level_1", "political" ]
            },
            {
               "long_name" : "United States",
               "short_name" : "US",
               "types" : [ "country", "political" ]
            },
            {
               "long_name" : "94043",
               "short_name" : "94043",
               "types" : [ "postal_code" ]
            }
         ],
         "formatted_address" : "1600 Amphitheatre Parkway, Mountain View, CA 94043, USA",
         "geometry" : {
            "location" : {
               "lat" : 37.4224764,
               "lng" : -122.0842499
            },
            "location_type" : "ROOFTOP",
            "viewport" : {
               "northeast" : {
                  "lat" : 37.4238253802915,
                  "lng" : -122.0829009197085
               },
               "southwest" : {
                  "lat" : 37.4211274197085,
                  "lng" : -122.0855988802915
               }
            }
         },
         "place_id" : "ChIJ2eUgeAK6j4ARbn5u_wAGqWA",
         "types" : [ "street_address" ]
      }
   ],
   "status" : "OK"
}

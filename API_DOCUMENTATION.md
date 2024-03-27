{
	"info": {
		"_postman_id": "4d9ed214-8870-4ad0-a97a-ce6576f7f304",
		"name": "MarocExploreApi",
		"description": "# API Documentation\n\nBienvenue dans la documentation de l'API MarocExplore.\n\nVous trouverez dans cette documentation :\n\n- la manière de **s'authentifier.**\n    \n- la définition des **endpoints.**\n    \n- les **paramètres** éventuels.\n    \n- quelques **extraits de code.**\n    \n- des exemples de **requêtes** et de **réponses.**\n    \n\n**Aperçu**\n\nL'API MarocExplore propose différents points d'accès pour accéder aux itinéraires de voyage et aux destinations au Maroc. Avec notre API, les développeurs peuvent intégrer des fonctionnalités liées aux voyages dans leurs applications, telles que la récupération des itinéraires, le filtrage par catégorie, et bien plus encore.\n\n**Authentification**\n\nL'API MarocExplore utilise l'authentification par Json web token JWT. Pour vous authentifier, il suffit d'entrer les donnees necessaires de l'authentification tel que name et email et puis vous receverez votre token en response format JSON.\n\n**Réponse d'erreur d'authentification**\n\nSi une clé d'API est manquante, mal formée ou invalide, vous recevrez une réponse HTTP 401 Unauthorized.\n\nVous trouverez içi toutes les fonctionnalités avec une description détaillée de la fonctionnalité, les paramètres requises, les autorisations et les responses.",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
		"_exporter_id": "27916279"
	},
	"item": [
		{
			"name": "User",
			"item": [
				{
					"name": "Register",
					"request": {
						"method": "POST",
						"header": [],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"name\" : \"example\",\r\n    \"email\" : \"example@gmail.com\",\r\n    \"password\" : \"example\"\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": {
							"raw": "http://127.0.0.1:8000/api/register",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"register"
							]
						},
						"description": "**POST /register**\n\n1. **Description** : Endpoint pour enregistrer un nouvel utilisateur.\n    \n2. **Paramètres de la requête** :\n    \n    - name (string, required) : Le nom de l'utilisateur.\n    - email (string, required) : L'adresse e-mail de l'utilisateur.\n    - password (string, required) : Le mot de passe de l'utilisateur.\n3. **Réponse** :\n    \n    - 200 OK : Succès de l'enregistrement de l'utilisateur.\n    - 422 Unprocessable Entity : Erreur de validation des données."
					},
					"response": []
				},
				{
					"name": "Login",
					"request": {
						"method": "POST",
						"header": [
							{
								"key": "Authorization",
								"value": "Bearer <JWT token>",
								"type": "text"
							}
						],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"email\" : \"example@gmail.com\",\r\n    \"password\" : \"example\"\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": {
							"raw": "http://127.0.0.1:8000/api/login",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"login"
							]
						},
						"description": "**POST /login**\n\n- **Description** : Endpoint pour connecter un utilisateur existant.\n- **Paramètres de la requête** :\n    - email (string, required) : L'adresse e-mail de l'utilisateur.\n    - password (string, required) : Le mot de passe de l'utilisateur.\n- **Réponse** :\n    - 200 OK : Succès de la connexion de l'utilisateur.\n    - 401 Unauthorized : Erreur d'authentification."
					},
					"response": []
				},
				{
					"name": "logout",
					"request": {
						"method": "POST",
						"header": [
							{
								"name": "cookie",
								"sortOrder": 1,
								"infoTitle": "This header was automatically added",
								"info": "The Cookie header is added to send the cookies that are associated with this endpoint.\n\nUse the cookie manager to remove the header or to change the value.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to cookies",
								"key": "Cookie",
								"value": "XSRF-TOKEN=eyJpdiI6IlNNUDlra0hhL05aWEIrM3J0YVljK1E9PSIsInZhbHVlIjoiL3ZqSmVZUExoQXoveGpYU3MvWUtCeTVRMUhLR1k2K0VlOE5CNG9PQmxBZ1k3S0NYeXVBc25hMHNSVnAyd2x4QjZVWUx6VHFQWlVOSnRDOGJYTk4vWHNqcWpGYzdoWGE0b05RVnFtd3VSWEpHenpyMkpEejZnam11Tnl4YkozVVMiLCJtYWMiOiIyYzk5MTY2NWE2NGE5NDAwNmU5NDczMDRmYjVhZjNhZDllY2E1NWRhODlkNDhjZjg2OTg4ZmU2NDhiYjkzYjcxIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6Ims5eFhSL2Jkd1hMdFlzYk0wcERRYVE9PSIsInZhbHVlIjoib2FZZzh2QTI3YjlxY0VQOXdqVmVoN2dHZW5NRFVVblEwdXVtMDRuR2JvL3pSVWtIZ2x0ckhLVDN4S3ZWOEVzY2dsS01JUkVpdVZUZ0d5bm4wR1lOVTBNSnhVbmFaemp6azJ1NUh2UzRGTWQ4NEhSbDhBOXFqVHk5bXBJRGNiQkQiLCJtYWMiOiIyMGE2NjQ4Yzc3YTIwMWUwYzg4MzQyMGJiNzZhMGM3Yzk5NzI1Njg1ODIzNTM2NmNlNzhmNTgwZWQ2MWQyNmJkIiwidGFnIjoiIn0%3D",
								"system": true,
								"type": "text"
							},
							{
								"name": "cache-control",
								"sortOrder": 2,
								"infoTitle": "We recommend using this header",
								"info": "Postman added \"Cache-Control: no-cache\" as a precautionary measure to prevent the server from returning stale response when one makes repeated requests.\n\nYou can remove this header in the app settings or enter a new one with a different value.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to settings",
								"key": "Cache-Control",
								"value": "no-cache",
								"system": true,
								"type": "text"
							},
							{
								"name": "postman-token",
								"sortOrder": 3,
								"infoTitle": "We recommend using this header",
								"info": "The Postman-Token header appends a random UUID to every outgoing request. Postman adds this header for API developers to better debug requests sent and to ensure separate requests appear distinct to the receiving server.\n\nYou can remove this header in the app settings.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to settings",
								"key": "Postman-Token",
								"value": "<calculated when request is sent>",
								"system": true,
								"type": "text"
							},
							{
								"name": "content-length",
								"sortOrder": 5,
								"infoTitle": "This header was automatically added",
								"info": "The Content-Length header was added to indicate to the server the size of the request body that is added to this request. Server uses this value to parse the request body accurately.\n\nYou can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"previewSettingsLink": "Go to body",
								"key": "Content-Length",
								"value": "0",
								"system": true,
								"type": "text"
							},
							{
								"name": "host",
								"sortOrder": 6,
								"infoTitle": "We recommend using this header",
								"info": "The Host header is added to identify the domain name for which a request is being sent to the server. This header is implicitly sent by every HTTP client.\n\nYou can remove the header or enter a new one with a different value. It is most likely that without this header, your request will return an HTTP 400 error.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Host",
								"value": "<calculated when request is sent>",
								"system": true,
								"type": "text"
							},
							{
								"name": "user-agent",
								"sortOrder": 7,
								"infoTitle": "We recommend using this header",
								"info": "The User-Agent header is added to help the server identify Postman as the HTTP requesting application or client.\n\nIt is recommended that this header be sent, but you can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "User-Agent",
								"value": "PostmanRuntime/7.32.1",
								"system": true,
								"type": "text"
							},
							{
								"name": "accept",
								"sortOrder": 8,
								"infoTitle": "We recommend using this header",
								"info": "The \"Accept: */*\" header is added to tell the server that Postman can understand and process all forms of response content types.\n\nIt is recommended that this header be sent, but you can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Accept",
								"value": "*/*",
								"system": true,
								"type": "text"
							},
							{
								"name": "accept-encoding",
								"sortOrder": 9,
								"infoTitle": "We recommend using this header",
								"info": "The Accept-Encoding header is added to indicate to the server that Postman HTTP client supports a defined list of content-encoding or compression algorithms as response.\n\nYou can remove the header or enter a new one with a different value. Doing that may not accurately render the response within the app.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Accept-Encoding",
								"value": "gzip, deflate, br",
								"system": true,
								"type": "text"
							},
							{
								"name": "connection",
								"sortOrder": 10,
								"infoTitle": "We recommend using this header",
								"info": "Postman added the Connection header to indicate the server to keep the underlying network connection open once the current response is received. This allows Postman to reuse the same connection for faster response times in subsequent requests to the same server.\n\nYou can remove this header or enter a new one with a different value, such as `Connection: Close` to control this behaviour.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Connection",
								"value": "keep-alive",
								"system": true,
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "Bearer <JWT token>",
								"type": "text",
								"id": 0
							}
						],
						"url": {
							"raw": "http://127.0.0.1:8000/api/logout",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"logout"
							]
						},
						"description": "**POST /logout**\n\n- **Description** : Endpoint pour déconnecter un utilisateur.\n- **Autorisation** : Authentification requise.\n- **Réponse** :\n    - 200 OK : Succès de la déconnexion de l'utilisateur."
					},
					"response": []
				}
			],
			"description": "Les fonctionnalités de l'utilisateur tel que login, register et logout."
		},
		{
			"name": "Itinéraire",
			"item": [
				{
					"name": "Creer itineraire",
					"request": {
						"method": "POST",
						"header": [
							{
								"name": "cookie",
								"sortOrder": 1,
								"infoTitle": "This header was automatically added",
								"info": "The Cookie header is added to send the cookies that are associated with this endpoint.\n\nUse the cookie manager to remove the header or to change the value.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to cookies",
								"key": "Cookie",
								"value": "XSRF-TOKEN=eyJpdiI6IlNNUDlra0hhL05aWEIrM3J0YVljK1E9PSIsInZhbHVlIjoiL3ZqSmVZUExoQXoveGpYU3MvWUtCeTVRMUhLR1k2K0VlOE5CNG9PQmxBZ1k3S0NYeXVBc25hMHNSVnAyd2x4QjZVWUx6VHFQWlVOSnRDOGJYTk4vWHNqcWpGYzdoWGE0b05RVnFtd3VSWEpHenpyMkpEejZnam11Tnl4YkozVVMiLCJtYWMiOiIyYzk5MTY2NWE2NGE5NDAwNmU5NDczMDRmYjVhZjNhZDllY2E1NWRhODlkNDhjZjg2OTg4ZmU2NDhiYjkzYjcxIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6Ims5eFhSL2Jkd1hMdFlzYk0wcERRYVE9PSIsInZhbHVlIjoib2FZZzh2QTI3YjlxY0VQOXdqVmVoN2dHZW5NRFVVblEwdXVtMDRuR2JvL3pSVWtIZ2x0ckhLVDN4S3ZWOEVzY2dsS01JUkVpdVZUZ0d5bm4wR1lOVTBNSnhVbmFaemp6azJ1NUh2UzRGTWQ4NEhSbDhBOXFqVHk5bXBJRGNiQkQiLCJtYWMiOiIyMGE2NjQ4Yzc3YTIwMWUwYzg4MzQyMGJiNzZhMGM3Yzk5NzI1Njg1ODIzNTM2NmNlNzhmNTgwZWQ2MWQyNmJkIiwidGFnIjoiIn0%3D",
								"system": true,
								"type": "text"
							},
							{
								"name": "cache-control",
								"sortOrder": 2,
								"infoTitle": "We recommend using this header",
								"info": "Postman added \"Cache-Control: no-cache\" as a precautionary measure to prevent the server from returning stale response when one makes repeated requests.\n\nYou can remove this header in the app settings or enter a new one with a different value.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to settings",
								"key": "Cache-Control",
								"value": "no-cache",
								"system": true,
								"type": "text"
							},
							{
								"name": "postman-token",
								"sortOrder": 3,
								"infoTitle": "We recommend using this header",
								"info": "The Postman-Token header appends a random UUID to every outgoing request. Postman adds this header for API developers to better debug requests sent and to ensure separate requests appear distinct to the receiving server.\n\nYou can remove this header in the app settings.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to settings",
								"key": "Postman-Token",
								"value": "<calculated when request is sent>",
								"system": true,
								"type": "text"
							},
							{
								"name": "content-length",
								"sortOrder": 5,
								"infoTitle": "This header was automatically added",
								"info": "The Content-Length header was added to indicate to the server the size of the request body that is added to this request. Server uses this value to parse the request body accurately.\n\nYou can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"previewSettingsLink": "Go to body",
								"key": "Content-Length",
								"value": "0",
								"system": true,
								"type": "text"
							},
							{
								"name": "host",
								"sortOrder": 6,
								"infoTitle": "We recommend using this header",
								"info": "The Host header is added to identify the domain name for which a request is being sent to the server. This header is implicitly sent by every HTTP client.\n\nYou can remove the header or enter a new one with a different value. It is most likely that without this header, your request will return an HTTP 400 error.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Host",
								"value": "<calculated when request is sent>",
								"system": true,
								"type": "text"
							},
							{
								"name": "user-agent",
								"sortOrder": 7,
								"infoTitle": "We recommend using this header",
								"info": "The User-Agent header is added to help the server identify Postman as the HTTP requesting application or client.\n\nIt is recommended that this header be sent, but you can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "User-Agent",
								"value": "PostmanRuntime/7.32.1",
								"system": true,
								"type": "text"
							},
							{
								"name": "accept",
								"sortOrder": 8,
								"infoTitle": "We recommend using this header",
								"info": "The \"Accept: */*\" header is added to tell the server that Postman can understand and process all forms of response content types.\n\nIt is recommended that this header be sent, but you can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Accept",
								"value": "*/*",
								"system": true,
								"type": "text"
							},
							{
								"name": "accept-encoding",
								"sortOrder": 9,
								"infoTitle": "We recommend using this header",
								"info": "The Accept-Encoding header is added to indicate to the server that Postman HTTP client supports a defined list of content-encoding or compression algorithms as response.\n\nYou can remove the header or enter a new one with a different value. Doing that may not accurately render the response within the app.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Accept-Encoding",
								"value": "gzip, deflate, br",
								"system": true,
								"type": "text"
							},
							{
								"name": "connection",
								"sortOrder": 10,
								"infoTitle": "We recommend using this header",
								"info": "Postman added the Connection header to indicate the server to keep the underlying network connection open once the current response is received. This allows Postman to reuse the same connection for faster response times in subsequent requests to the same server.\n\nYou can remove this header or enter a new one with a different value, such as `Connection: Close` to control this behaviour.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Connection",
								"value": "keep-alive",
								"system": true,
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "Bearer <JWT token>",
								"type": "text",
								"id": 0
							}
						],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"titre\": \"Nouveau titre de l'itinéraire\",\r\n    \"categorie\": \"Aventure\",\r\n    \"image\": \"https://example.com/nouvelle_image.jpg\",\r\n    \"debut\": \"Nouveau départ\",\r\n    \"fin\": \"Nouvelle destination\",\r\n    \"duree\": \"15 jours\",\r\n    \"destinations\": [\r\n        {\r\n            \"id\": 1,\r\n            \"nom\": \"Nouveau nom de la destination\",\r\n            \"logement\": \"Nouveau logement\",\r\n            \"liste\": \"Nouvelle liste d'activités\"\r\n        },\r\n        {\r\n            \"id\": 2,\r\n            \"nom\": \"Autre destination\",\r\n            \"logement\": \"Autre logement\",\r\n            \"liste\": \"Autre liste d'activités\"\r\n        }\r\n    ]\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": {
							"raw": "http://127.0.0.1:8000/api/itineraire",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"itineraire"
							]
						},
						"description": "**POST /itineraire**\n\n- **Description** : Endpoint pour créer un nouvel itinéraire.\n- **Autorisation** : Authentification requise.\n- **Paramètres de la requête** : (Inclure les paramètres requis pour créer un itinéraire et créer au moins deux destinations)\n- **Réponse** :\n    - 200 OK : Succès de la création de l'itinéraire.\n    - 500 error : An error occured + Message of the error"
					},
					"response": []
				},
				{
					"name": "Afficher itinéraires de l'utilisateur",
					"request": {
						"method": "GET",
						"header": [
							{
								"name": "cookie",
								"sortOrder": 1,
								"infoTitle": "This header was automatically added",
								"info": "The Cookie header is added to send the cookies that are associated with this endpoint.\n\nUse the cookie manager to remove the header or to change the value.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to cookies",
								"key": "Cookie",
								"value": "XSRF-TOKEN=eyJpdiI6IlNNUDlra0hhL05aWEIrM3J0YVljK1E9PSIsInZhbHVlIjoiL3ZqSmVZUExoQXoveGpYU3MvWUtCeTVRMUhLR1k2K0VlOE5CNG9PQmxBZ1k3S0NYeXVBc25hMHNSVnAyd2x4QjZVWUx6VHFQWlVOSnRDOGJYTk4vWHNqcWpGYzdoWGE0b05RVnFtd3VSWEpHenpyMkpEejZnam11Tnl4YkozVVMiLCJtYWMiOiIyYzk5MTY2NWE2NGE5NDAwNmU5NDczMDRmYjVhZjNhZDllY2E1NWRhODlkNDhjZjg2OTg4ZmU2NDhiYjkzYjcxIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6Ims5eFhSL2Jkd1hMdFlzYk0wcERRYVE9PSIsInZhbHVlIjoib2FZZzh2QTI3YjlxY0VQOXdqVmVoN2dHZW5NRFVVblEwdXVtMDRuR2JvL3pSVWtIZ2x0ckhLVDN4S3ZWOEVzY2dsS01JUkVpdVZUZ0d5bm4wR1lOVTBNSnhVbmFaemp6azJ1NUh2UzRGTWQ4NEhSbDhBOXFqVHk5bXBJRGNiQkQiLCJtYWMiOiIyMGE2NjQ4Yzc3YTIwMWUwYzg4MzQyMGJiNzZhMGM3Yzk5NzI1Njg1ODIzNTM2NmNlNzhmNTgwZWQ2MWQyNmJkIiwidGFnIjoiIn0%3D",
								"system": true,
								"type": "text"
							},
							{
								"name": "cache-control",
								"sortOrder": 2,
								"infoTitle": "We recommend using this header",
								"info": "Postman added \"Cache-Control: no-cache\" as a precautionary measure to prevent the server from returning stale response when one makes repeated requests.\n\nYou can remove this header in the app settings or enter a new one with a different value.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to settings",
								"key": "Cache-Control",
								"value": "no-cache",
								"system": true,
								"type": "text"
							},
							{
								"name": "postman-token",
								"sortOrder": 3,
								"infoTitle": "We recommend using this header",
								"info": "The Postman-Token header appends a random UUID to every outgoing request. Postman adds this header for API developers to better debug requests sent and to ensure separate requests appear distinct to the receiving server.\n\nYou can remove this header in the app settings.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to settings",
								"key": "Postman-Token",
								"value": "<calculated when request is sent>",
								"system": true,
								"type": "text"
							},
							{
								"name": "host",
								"sortOrder": 6,
								"infoTitle": "We recommend using this header",
								"info": "The Host header is added to identify the domain name for which a request is being sent to the server. This header is implicitly sent by every HTTP client.\n\nYou can remove the header or enter a new one with a different value. It is most likely that without this header, your request will return an HTTP 400 error.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Host",
								"value": "<calculated when request is sent>",
								"system": true,
								"type": "text"
							},
							{
								"name": "user-agent",
								"sortOrder": 7,
								"infoTitle": "We recommend using this header",
								"info": "The User-Agent header is added to help the server identify Postman as the HTTP requesting application or client.\n\nIt is recommended that this header be sent, but you can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "User-Agent",
								"value": "PostmanRuntime/7.32.1",
								"system": true,
								"type": "text"
							},
							{
								"name": "accept",
								"sortOrder": 8,
								"infoTitle": "We recommend using this header",
								"info": "The \"Accept: */*\" header is added to tell the server that Postman can understand and process all forms of response content types.\n\nIt is recommended that this header be sent, but you can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Accept",
								"value": "*/*",
								"system": true,
								"type": "text"
							},
							{
								"name": "accept-encoding",
								"sortOrder": 9,
								"infoTitle": "We recommend using this header",
								"info": "The Accept-Encoding header is added to indicate to the server that Postman HTTP client supports a defined list of content-encoding or compression algorithms as response.\n\nYou can remove the header or enter a new one with a different value. Doing that may not accurately render the response within the app.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Accept-Encoding",
								"value": "gzip, deflate, br",
								"system": true,
								"type": "text"
							},
							{
								"name": "connection",
								"sortOrder": 10,
								"infoTitle": "We recommend using this header",
								"info": "Postman added the Connection header to indicate the server to keep the underlying network connection open once the current response is received. This allows Postman to reuse the same connection for faster response times in subsequent requests to the same server.\n\nYou can remove this header or enter a new one with a different value, such as `Connection: Close` to control this behaviour.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Connection",
								"value": "keep-alive",
								"system": true,
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "<JWT token>",
								"type": "text",
								"id": 0
							}
						],
						"url": {
							"raw": "http://127.0.0.1:8000/api/itinerairee",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"itinerairee"
							]
						},
						"description": "**GET /itinerairee**\n\n- **Description** : Endpoint pour créer un afficher les itinéraires de l'utilisateur authentifié.\n- **Paramètres de la requête** : Aucun.\n- **Autorisation** : Authentification requise.\n- **Réponse** :\n    - 200 OK : Succès de l'affichage des l'itinéraires."
					},
					"response": []
				},
				{
					"name": "Modifier Itineraire",
					"request": {
						"method": "PUT",
						"header": [
							{
								"name": "cookie",
								"sortOrder": 1,
								"infoTitle": "This header was automatically added",
								"info": "The Cookie header is added to send the cookies that are associated with this endpoint.\n\nUse the cookie manager to remove the header or to change the value.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to cookies",
								"key": "Cookie",
								"value": "XSRF-TOKEN=eyJpdiI6IlNNUDlra0hhL05aWEIrM3J0YVljK1E9PSIsInZhbHVlIjoiL3ZqSmVZUExoQXoveGpYU3MvWUtCeTVRMUhLR1k2K0VlOE5CNG9PQmxBZ1k3S0NYeXVBc25hMHNSVnAyd2x4QjZVWUx6VHFQWlVOSnRDOGJYTk4vWHNqcWpGYzdoWGE0b05RVnFtd3VSWEpHenpyMkpEejZnam11Tnl4YkozVVMiLCJtYWMiOiIyYzk5MTY2NWE2NGE5NDAwNmU5NDczMDRmYjVhZjNhZDllY2E1NWRhODlkNDhjZjg2OTg4ZmU2NDhiYjkzYjcxIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6Ims5eFhSL2Jkd1hMdFlzYk0wcERRYVE9PSIsInZhbHVlIjoib2FZZzh2QTI3YjlxY0VQOXdqVmVoN2dHZW5NRFVVblEwdXVtMDRuR2JvL3pSVWtIZ2x0ckhLVDN4S3ZWOEVzY2dsS01JUkVpdVZUZ0d5bm4wR1lOVTBNSnhVbmFaemp6azJ1NUh2UzRGTWQ4NEhSbDhBOXFqVHk5bXBJRGNiQkQiLCJtYWMiOiIyMGE2NjQ4Yzc3YTIwMWUwYzg4MzQyMGJiNzZhMGM3Yzk5NzI1Njg1ODIzNTM2NmNlNzhmNTgwZWQ2MWQyNmJkIiwidGFnIjoiIn0%3D",
								"system": true,
								"type": "text"
							},
							{
								"name": "cache-control",
								"sortOrder": 2,
								"infoTitle": "We recommend using this header",
								"info": "Postman added \"Cache-Control: no-cache\" as a precautionary measure to prevent the server from returning stale response when one makes repeated requests.\n\nYou can remove this header in the app settings or enter a new one with a different value.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to settings",
								"key": "Cache-Control",
								"value": "no-cache",
								"system": true,
								"type": "text"
							},
							{
								"name": "postman-token",
								"sortOrder": 3,
								"infoTitle": "We recommend using this header",
								"info": "The Postman-Token header appends a random UUID to every outgoing request. Postman adds this header for API developers to better debug requests sent and to ensure separate requests appear distinct to the receiving server.\n\nYou can remove this header in the app settings.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to settings",
								"key": "Postman-Token",
								"value": "<calculated when request is sent>",
								"system": true,
								"type": "text"
							},
							{
								"name": "content-length",
								"sortOrder": 5,
								"infoTitle": "This header was automatically added",
								"info": "The Content-Length header was added to indicate to the server the size of the request body that is added to this request. Server uses this value to parse the request body accurately.\n\nYou can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"previewSettingsLink": "Go to body",
								"key": "Content-Length",
								"value": "0",
								"system": true,
								"type": "text"
							},
							{
								"name": "host",
								"sortOrder": 6,
								"infoTitle": "We recommend using this header",
								"info": "The Host header is added to identify the domain name for which a request is being sent to the server. This header is implicitly sent by every HTTP client.\n\nYou can remove the header or enter a new one with a different value. It is most likely that without this header, your request will return an HTTP 400 error.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Host",
								"value": "<calculated when request is sent>",
								"system": true,
								"type": "text"
							},
							{
								"name": "user-agent",
								"sortOrder": 7,
								"infoTitle": "We recommend using this header",
								"info": "The User-Agent header is added to help the server identify Postman as the HTTP requesting application or client.\n\nIt is recommended that this header be sent, but you can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "User-Agent",
								"value": "PostmanRuntime/7.32.1",
								"system": true,
								"type": "text"
							},
							{
								"name": "accept",
								"sortOrder": 8,
								"infoTitle": "We recommend using this header",
								"info": "The \"Accept: */*\" header is added to tell the server that Postman can understand and process all forms of response content types.\n\nIt is recommended that this header be sent, but you can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Accept",
								"value": "*/*",
								"system": true,
								"type": "text"
							},
							{
								"name": "accept-encoding",
								"sortOrder": 9,
								"infoTitle": "We recommend using this header",
								"info": "The Accept-Encoding header is added to indicate to the server that Postman HTTP client supports a defined list of content-encoding or compression algorithms as response.\n\nYou can remove the header or enter a new one with a different value. Doing that may not accurately render the response within the app.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Accept-Encoding",
								"value": "gzip, deflate, br",
								"system": true,
								"type": "text"
							},
							{
								"name": "connection",
								"sortOrder": 10,
								"infoTitle": "We recommend using this header",
								"info": "Postman added the Connection header to indicate the server to keep the underlying network connection open once the current response is received. This allows Postman to reuse the same connection for faster response times in subsequent requests to the same server.\n\nYou can remove this header or enter a new one with a different value, such as `Connection: Close` to control this behaviour.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Connection",
								"value": "keep-alive",
								"system": true,
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "Bearer <JWT token>",
								"type": "text",
								"id": 0
							}
						],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"titre\": \"Nouveau titre de l'itinéraire\",\r\n    \"categorie\": \"Aventure\",\r\n    \"image\": \"https://example.com/nouvelle_image.jpg\",\r\n    \"debut\": \"Nouveau départ\",\r\n    \"fin\": \"Nouvelle destination\",\r\n    \"duree\": \"15 jours\",\r\n    \"destinations\": [\r\n        {\r\n            \"id\": 1,\r\n            \"nom\": \"Nouveau nom de la destination\",\r\n            \"logement\": \"Nouveau logement\",\r\n            \"liste\": \"Nouvelle liste d'activités\"\r\n        },\r\n        {\r\n            \"id\": 2,\r\n            \"nom\": \"Autre destination\",\r\n            \"logement\": \"Autre logement\",\r\n            \"liste\": \"Autre liste d'activités\"\r\n        }\r\n    ]\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": {
							"raw": "http://127.0.0.1:8000/api/itineraires/update/{id}",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"itineraires",
								"update",
								"{id}"
							]
						},
						"description": "**PUT/**itineraires/update/{id}\n\n- **Description** : Endpoint pour modifier un itinéraire.\n- **Autorisation** : Authentification requise.\n- **Paramètres de la requête** : (ID de l'itinéraire à modifier + Inclure les paramètres requis pour modifier un itinéraire et inclure les id des destinations à modifier de l'itinéraire)\n    \n- **Réponse** :\n    - 200 OK : Succès de la création de l'itinéraire.\n    - 404 error : Itinéraire non trouvé.\n    - 403 error : Vous n'êtes pas autorisé à modifier cet itinéraire.\n    - 500 internal server error : an error occured + message of the error."
					},
					"response": []
				},
				{
					"name": "Supprimer Itineraire",
					"request": {
						"method": "DELETE",
						"header": [
							{
								"name": "cookie",
								"sortOrder": 1,
								"infoTitle": "This header was automatically added",
								"info": "The Cookie header is added to send the cookies that are associated with this endpoint.\n\nUse the cookie manager to remove the header or to change the value.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to cookies",
								"key": "Cookie",
								"value": "XSRF-TOKEN=eyJpdiI6IlNNUDlra0hhL05aWEIrM3J0YVljK1E9PSIsInZhbHVlIjoiL3ZqSmVZUExoQXoveGpYU3MvWUtCeTVRMUhLR1k2K0VlOE5CNG9PQmxBZ1k3S0NYeXVBc25hMHNSVnAyd2x4QjZVWUx6VHFQWlVOSnRDOGJYTk4vWHNqcWpGYzdoWGE0b05RVnFtd3VSWEpHenpyMkpEejZnam11Tnl4YkozVVMiLCJtYWMiOiIyYzk5MTY2NWE2NGE5NDAwNmU5NDczMDRmYjVhZjNhZDllY2E1NWRhODlkNDhjZjg2OTg4ZmU2NDhiYjkzYjcxIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6Ims5eFhSL2Jkd1hMdFlzYk0wcERRYVE9PSIsInZhbHVlIjoib2FZZzh2QTI3YjlxY0VQOXdqVmVoN2dHZW5NRFVVblEwdXVtMDRuR2JvL3pSVWtIZ2x0ckhLVDN4S3ZWOEVzY2dsS01JUkVpdVZUZ0d5bm4wR1lOVTBNSnhVbmFaemp6azJ1NUh2UzRGTWQ4NEhSbDhBOXFqVHk5bXBJRGNiQkQiLCJtYWMiOiIyMGE2NjQ4Yzc3YTIwMWUwYzg4MzQyMGJiNzZhMGM3Yzk5NzI1Njg1ODIzNTM2NmNlNzhmNTgwZWQ2MWQyNmJkIiwidGFnIjoiIn0%3D",
								"system": true,
								"type": "text"
							},
							{
								"name": "cache-control",
								"sortOrder": 2,
								"infoTitle": "We recommend using this header",
								"info": "Postman added \"Cache-Control: no-cache\" as a precautionary measure to prevent the server from returning stale response when one makes repeated requests.\n\nYou can remove this header in the app settings or enter a new one with a different value.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to settings",
								"key": "Cache-Control",
								"value": "no-cache",
								"system": true,
								"type": "text"
							},
							{
								"name": "postman-token",
								"sortOrder": 3,
								"infoTitle": "We recommend using this header",
								"info": "The Postman-Token header appends a random UUID to every outgoing request. Postman adds this header for API developers to better debug requests sent and to ensure separate requests appear distinct to the receiving server.\n\nYou can remove this header in the app settings.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to settings",
								"key": "Postman-Token",
								"value": "<calculated when request is sent>",
								"system": true,
								"type": "text"
							},
							{
								"name": "host",
								"sortOrder": 6,
								"infoTitle": "We recommend using this header",
								"info": "The Host header is added to identify the domain name for which a request is being sent to the server. This header is implicitly sent by every HTTP client.\n\nYou can remove the header or enter a new one with a different value. It is most likely that without this header, your request will return an HTTP 400 error.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Host",
								"value": "<calculated when request is sent>",
								"system": true,
								"type": "text"
							},
							{
								"name": "user-agent",
								"sortOrder": 7,
								"infoTitle": "We recommend using this header",
								"info": "The User-Agent header is added to help the server identify Postman as the HTTP requesting application or client.\n\nIt is recommended that this header be sent, but you can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "User-Agent",
								"value": "PostmanRuntime/7.32.1",
								"system": true,
								"type": "text"
							},
							{
								"name": "accept",
								"sortOrder": 8,
								"infoTitle": "We recommend using this header",
								"info": "The \"Accept: */*\" header is added to tell the server that Postman can understand and process all forms of response content types.\n\nIt is recommended that this header be sent, but you can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Accept",
								"value": "*/*",
								"system": true,
								"type": "text"
							},
							{
								"name": "accept-encoding",
								"sortOrder": 9,
								"infoTitle": "We recommend using this header",
								"info": "The Accept-Encoding header is added to indicate to the server that Postman HTTP client supports a defined list of content-encoding or compression algorithms as response.\n\nYou can remove the header or enter a new one with a different value. Doing that may not accurately render the response within the app.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Accept-Encoding",
								"value": "gzip, deflate, br",
								"system": true,
								"type": "text"
							},
							{
								"name": "connection",
								"sortOrder": 10,
								"infoTitle": "We recommend using this header",
								"info": "Postman added the Connection header to indicate the server to keep the underlying network connection open once the current response is received. This allows Postman to reuse the same connection for faster response times in subsequent requests to the same server.\n\nYou can remove this header or enter a new one with a different value, such as `Connection: Close` to control this behaviour.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Connection",
								"value": "keep-alive",
								"system": true,
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "Bearer <JWT token>",
								"type": "text",
								"id": 0
							}
						],
						"url": {
							"raw": "http://127.0.0.1:8000/api/itineraires/{id}",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"itineraires",
								"{id}"
							]
						},
						"description": "**DELETE/**itineraires/{id}\n\n- **Description** : Endpoint pour créer un supprimer un itinéraire.\n    \n- **Paramètres de la requête :** ID de l'itinéraire à supprimer.\n    \n- **Autorisation** : Authentification requise.\n- **Réponse** :\n    - 200 OK : Succès de la suppression de l'itinéraire.\n    - 404 error : Itinéraire non trouvé.\n    - 403 error : Vous n'êtes pas autorisé à supprimer cet itinéraire."
					},
					"response": []
				},
				{
					"name": "Ajouter a liste à visiter",
					"request": {
						"method": "POST",
						"header": [
							{
								"name": "cache-control",
								"sortOrder": 2,
								"infoTitle": "We recommend using this header",
								"info": "Postman added \"Cache-Control: no-cache\" as a precautionary measure to prevent the server from returning stale response when one makes repeated requests.\n\nYou can remove this header in the app settings or enter a new one with a different value.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to settings",
								"key": "Cache-Control",
								"value": "no-cache",
								"system": true,
								"type": "text"
							},
							{
								"name": "postman-token",
								"sortOrder": 3,
								"infoTitle": "We recommend using this header",
								"info": "The Postman-Token header appends a random UUID to every outgoing request. Postman adds this header for API developers to better debug requests sent and to ensure separate requests appear distinct to the receiving server.\n\nYou can remove this header in the app settings.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to settings",
								"key": "Postman-Token",
								"value": "<calculated when request is sent>",
								"system": true,
								"type": "text"
							},
							{
								"name": "content-length",
								"sortOrder": 5,
								"infoTitle": "This header was automatically added",
								"info": "The Content-Length header was added to indicate to the server the size of the request body that is added to this request. Server uses this value to parse the request body accurately.\n\nYou can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"previewSettingsLink": "Go to body",
								"key": "Content-Length",
								"value": "0",
								"system": true,
								"type": "text"
							},
							{
								"name": "host",
								"sortOrder": 6,
								"infoTitle": "We recommend using this header",
								"info": "The Host header is added to identify the domain name for which a request is being sent to the server. This header is implicitly sent by every HTTP client.\n\nYou can remove the header or enter a new one with a different value. It is most likely that without this header, your request will return an HTTP 400 error.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Host",
								"value": "<calculated when request is sent>",
								"system": true,
								"type": "text"
							},
							{
								"name": "user-agent",
								"sortOrder": 7,
								"infoTitle": "We recommend using this header",
								"info": "The User-Agent header is added to help the server identify Postman as the HTTP requesting application or client.\n\nIt is recommended that this header be sent, but you can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "User-Agent",
								"value": "PostmanRuntime/7.32.1",
								"system": true,
								"type": "text"
							},
							{
								"name": "accept",
								"sortOrder": 8,
								"infoTitle": "We recommend using this header",
								"info": "The \"Accept: */*\" header is added to tell the server that Postman can understand and process all forms of response content types.\n\nIt is recommended that this header be sent, but you can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Accept",
								"value": "*/*",
								"system": true,
								"type": "text"
							},
							{
								"name": "accept-encoding",
								"sortOrder": 9,
								"infoTitle": "We recommend using this header",
								"info": "The Accept-Encoding header is added to indicate to the server that Postman HTTP client supports a defined list of content-encoding or compression algorithms as response.\n\nYou can remove the header or enter a new one with a different value. Doing that may not accurately render the response within the app.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Accept-Encoding",
								"value": "gzip, deflate, br",
								"system": true,
								"type": "text"
							},
							{
								"name": "connection",
								"sortOrder": 10,
								"infoTitle": "We recommend using this header",
								"info": "Postman added the Connection header to indicate the server to keep the underlying network connection open once the current response is received. This allows Postman to reuse the same connection for faster response times in subsequent requests to the same server.\n\nYou can remove this header or enter a new one with a different value, such as `Connection: Close` to control this behaviour.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Connection",
								"value": "keep-alive",
								"system": true,
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "<JWT token>",
								"type": "text",
								"id": 0
							}
						],
						"url": {
							"raw": "http://127.0.0.1:8000/api/liste-a-visualiser/{itineraireId}",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"liste-a-visualiser",
								"{itineraireId}"
							]
						},
						"description": "**POST/**liste-a-visualiser/{itineraireId}\n\n- **Description** : Endpoint pour ajouter un itinéraire a une liste à visiter.\n    \n- **Paramètres de la requête :** ID de l'itinéraire à ajouter à la liste.\n    \n- **Autorisation** : Authentification requise.\n- **Réponse** :\n    - 200 OK : Succès de la création de l'itinéraire.\n    - 404 error : Itinéraire non trouvé.\n    - 500 internal server error : an error occured + message of the error."
					},
					"response": []
				},
				{
					"name": "Afficher liste a visualiser",
					"request": {
						"method": "GET",
						"header": [
							{
								"name": "cache-control",
								"sortOrder": 2,
								"infoTitle": "We recommend using this header",
								"info": "Postman added \"Cache-Control: no-cache\" as a precautionary measure to prevent the server from returning stale response when one makes repeated requests.\n\nYou can remove this header in the app settings or enter a new one with a different value.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to settings",
								"key": "Cache-Control",
								"value": "no-cache",
								"system": true,
								"type": "text"
							},
							{
								"name": "postman-token",
								"sortOrder": 3,
								"infoTitle": "We recommend using this header",
								"info": "The Postman-Token header appends a random UUID to every outgoing request. Postman adds this header for API developers to better debug requests sent and to ensure separate requests appear distinct to the receiving server.\n\nYou can remove this header in the app settings.",
								"allowedToToggle": false,
								"disableEdit": true,
								"previewSettingsLink": "Go to settings",
								"key": "Postman-Token",
								"value": "<calculated when request is sent>",
								"system": true,
								"type": "text"
							},
							{
								"name": "host",
								"sortOrder": 6,
								"infoTitle": "We recommend using this header",
								"info": "The Host header is added to identify the domain name for which a request is being sent to the server. This header is implicitly sent by every HTTP client.\n\nYou can remove the header or enter a new one with a different value. It is most likely that without this header, your request will return an HTTP 400 error.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Host",
								"value": "<calculated when request is sent>",
								"system": true,
								"type": "text"
							},
							{
								"name": "user-agent",
								"sortOrder": 7,
								"infoTitle": "We recommend using this header",
								"info": "The User-Agent header is added to help the server identify Postman as the HTTP requesting application or client.\n\nIt is recommended that this header be sent, but you can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "User-Agent",
								"value": "PostmanRuntime/7.32.1",
								"system": true,
								"type": "text"
							},
							{
								"name": "accept",
								"sortOrder": 8,
								"infoTitle": "We recommend using this header",
								"info": "The \"Accept: */*\" header is added to tell the server that Postman can understand and process all forms of response content types.\n\nIt is recommended that this header be sent, but you can remove the header or enter a new one with a different value.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Accept",
								"value": "*/*",
								"system": true,
								"type": "text"
							},
							{
								"name": "accept-encoding",
								"sortOrder": 9,
								"infoTitle": "We recommend using this header",
								"info": "The Accept-Encoding header is added to indicate to the server that Postman HTTP client supports a defined list of content-encoding or compression algorithms as response.\n\nYou can remove the header or enter a new one with a different value. Doing that may not accurately render the response within the app.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Accept-Encoding",
								"value": "gzip, deflate, br",
								"system": true,
								"type": "text"
							},
							{
								"name": "connection",
								"sortOrder": 10,
								"infoTitle": "We recommend using this header",
								"info": "Postman added the Connection header to indicate the server to keep the underlying network connection open once the current response is received. This allows Postman to reuse the same connection for faster response times in subsequent requests to the same server.\n\nYou can remove this header or enter a new one with a different value, such as `Connection: Close` to control this behaviour.",
								"allowedToToggle": true,
								"disableEdit": true,
								"key": "Connection",
								"value": "keep-alive",
								"system": true,
								"type": "text"
							},
							{
								"key": "Authorization",
								"value": "<JWT token>",
								"type": "text",
								"id": 0
							}
						],
						"url": {
							"raw": "http://127.0.0.1:8000/api/liste-a-visualiser",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"liste-a-visualiser"
							]
						},
						"description": "**GET/**liste-a-visualiser\n\n- **Description** : Endpoint pour afficher la liste à visiter de l'utilisateur.\n- **Autorisation** : Authentification requise.\n- **Réponse** :\n    \n    - 200 OK : Succès + affichage des itinéraires dans la liste.\n        \n    - 500 internal server error : an error occured + message of the error."
					},
					"response": []
				}
			],
			"description": "Les fonctionnalités de l'utilisateur concernant l'itinéraire, tout ce qu'il peut faire en tant qu'un utilisateur authentifié."
		},
		{
			"name": "Internaute",
			"item": [
				{
					"name": "Afficher tous les itineraires",
					"request": {
						"method": "GET",
						"header": [],
						"url": {
							"raw": "http://127.0.0.1:8000/api/itineraires",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"itineraires"
							]
						},
						"description": "**POST /itineraires**\n\n- **Description** : Endpoint pour afficher tous les itinéraires.\n    \n- **Paramètres de la requête** : Aucun.\n    \n- **Réponse** :\n    \n    - 200 OK : Succès de la création de l'itinéraire."
					},
					"response": []
				},
				{
					"name": "Rechercher Itineraire",
					"request": {
						"method": "GET",
						"header": [],
						"url": {
							"raw": "http://127.0.0.1:8000/api/itineraires/search?titre=YourSearchTerm",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"itineraires",
								"search"
							],
							"query": [
								{
									"key": "titre",
									"value": "YourSearchTerm"
								}
							]
						},
						"description": "**GET /**itineraires/search?titre=YourSearchTerm\n\n- **Description :** Recherche des itinéraires par titre.\n    \n- **Paramètres de la requête :** Titre de l'itinéraire.\n    \n- **Réponse :**\n    \n    - 200 OK : Succès de la récupération des itinéraires.\n    - 400 Bad Request : Titre manquant."
					},
					"response": []
				},
				{
					"name": "Filter par categorie ou duree",
					"request": {
						"method": "GET",
						"header": [],
						"url": {
							"raw": "http://127.0.0.1:8000/api/itineraires/filter",
							"protocol": "http",
							"host": [
								"127",
								"0",
								"0",
								"1"
							],
							"port": "8000",
							"path": [
								"api",
								"itineraires",
								"filter"
							],
							"query": [
								{
									"key": "categorie",
									"value": "YourCategory",
									"disabled": true
								},
								{
									"key": "duree",
									"value": "YourDuration",
									"disabled": true
								}
							]
						},
						"description": "**GET /**itineraires/filter\n\n- Description : Filtre les itinéraires par catégorie ou durée.\n- Paramètres de la requête : Catégorie (ex. Aventure)et/ou durée(ex. 10 jours).\n    \n- Réponse :\n    - 200 OK : Succès de la récupération des itinéraires filtrés.\n    - 400 Bad Request : Paramètres de filtrage incorrects."
					},
					"response": []
				}
			],
			"description": "Les fonctionnalités de l'internaute , tel que la consulation de toutes les itinéraires avec leurs destinations, rechercher un itinéraire par son titre et le filter par catégorie ou par durée ou les deux à la fois, en tant que utilisteur non authentifié."
		}
	]
}
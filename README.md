`1- URL API VOICE`

L' API est appelée par l'url `"https://macsmspro.com/api/voice.php"` . Il autorise les requetes `POST` et requiert en body un token directement lié à votre compte grâce auquel les envois sont effectués.

`2-  CORPS DE LA REQUETE`

`Le numéro appelant - (from)`
Passé à l'api par la variable from, il doit être vérifié au préalable dans votre panel MACSMSPRO.

`Le numéro appelé - (phone)`
Représenté par la variable phone dans le corps de la requete, c'est le numéro vers lequel l'appel sera émit, il doit être un numéro correct et valide.

`Le message - (message)`
Il s'agit du message que reçevra votre destinataire lors de l'appel. Le message text est convertir et lu par la voix programmable

`La langue - (language)`
Cet attribut facultatif permet de changer la langue de lecture par défaut (accéder à l'onglet autres pour consulter la liste des langues supportées )

`Le token`
Il est question du token que vous avez généré pour votre compte, il est requis pour tout envoi vers API. Il est utilisé dans le corps de reqête sous le même nom.

`3- REPONSES DU SERVEUR`


Le serveur retourne deux catégories possible de réponse lors d'une rêquete. Nous avons les retours de type ERROR et les retours de type SUCCESS.
Les messages d'erreur
Les messages d'erreur sont sous le format:
`"error" : {
"message" : {
"nom de l'erreur" : "message d'erreur"
}
}`
OU
`"error" : {
"message" : "message d'erreur"
}`
OU
`"error" : {
"messages" : [
{
"nom_erreur" : "message d'erreur"
}
]
}`

`Quelques erreurs`

`"error" : {
"message" : "Method Not Allowed"
}`
Cette erreur est retournée avec un code `405` lorsque la requete envoyée n'est pas de type `POST`
`"error" : {
"message" : "Crédit insuffisant"
}`
Cette erreur est retournée avec un code `403` lorsque le compte utilisateur ne dispose pas d'assez de crédit pour effectuer l'opération.
`"error" : {
"message" : {
"token" : "Le token est requis"
}
}`
Cette erreur est retournée avec un code `422` lorsque la valeur du token est vide ou NULL
`"error" : {
"message" : {
"token" : "token invalid"
}
}`
Cette erreur est retournée avec un code `401` lorsque la valeur du token envoyée ne correspond à aucun compte utilisateur du système.
`"error" : {
"messages" : [
{
"from" : "Le numéro destinateur est requis"
}
]
}`
Cette erreur est retournée avec un code `422` lorsque la valeur du numero de telephone appelant est vide ou NULL
`"error" : {
"messages" : [
{
"phone" : "Le numéro destinataire est requis"
}
]
}`
Cette erreur est retournée avec un code `422` lorsque la valeur du numero de appelé est vide ou NULL
`"error" : {
"messages" : [
{
"message" : "Le corps du message est requis"
}
]
}`
Cette erreur est retournée avec un code `422` lorsque la valeur du message est vide ou NULL
`"error" : {
"message" : "Le numéro xxxxx n'est pas encore vérifié pour votre compte "
}`
Cette erreur est retournée avec un code `400` lorsque le numéro destinateur n'est pas vérifié NULL
`"error" : {
"message" : "Le numéro xxxxxx n'est un numéro de téléphone valide "
}`
Cette erreur est retournée avec un code `400` lorsque le nuéro destinataire et desttinateur sont incorrect ou in valid
Les messages de réussite
`"success" : {
"message" : "Appel voice lancé vers 229xxxxxxxx"
}`
Cette réponse est retournée avec un code `200` lorsque l'appel est lancé.


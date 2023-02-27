#  Decaf4All

La adopción del punto de venta de Decaf tiene barreras ya que la conversión a fiat es dificil y no está integrada. 
Con Decaf4All, por medio del mismo onboarding de Decaf accederas al dinero de tus ventas en fiat, directo en tu cuenta bancaria en México. 
Todo sin salir de tu cuenta de Decaf.

<p align="center">
<img src="/FrontEnd/decaf4all/public/logo.jpg" width="256"/>
<p>    

## Problema
Actualmente, como micro-negocio aceptar pagos en crypto representa con lleva más dificultades que beneficios. 
Los puntos de venta crypto no ofrecen a los micro-negocios una forma sencilla de convertir los fondos que reciben en fiat para su uso fuera de blockchain.
Averiguar y completar esta conversión genera menor adopción ya que la experiencia de usuario es más compleja y requiere: 
más pasos, más conocimientos técnicos, etc. 
De forma adicional, no se tiene visibilidad, por lo que las personas desconocen que pueden pagar en crypto en ciertos lugares.
Así el negocio no percibe una demanda de este tipo de pago. 
## Links importantes

| ¿Qué? | Link |
|---|---|
| UX | https://www.figma.com/proto/lK0oLlWfeHA3unhCLYdVLd/Etherfuse2023?scaling=contain&page-id=0%3A1&starting-point-node-id=227%3A983 |
| Youtube | Pendiente |
| Linktr.ee | https://linktr.ee/decaf4all |


## Pasos de los API

1. Llama la base de datos de Decaf para obtener la información del usuario necesaria para crearle una cuenta en Suarmi
2. Llama la API de Suarmi para crear una cuenta
3. Se crea la cuenta de este usuario en Suarmi
4. Llama a Suarmi para pedir una cotización de una conversación 
5. Ejecuta la transacción desde la wallet de Decaf sin que la persona interactue con su wallet
6. La persona recibe sus pesos mexicanos en su cuenta de banco mexicana

## Visbilidad
- Con la información del negocio se mapea su localización para que otros usuarios de Decaf le puedan encontrar. 

## Hacia adelante
Removamos la barrera de adopción para crypto como medio de pago.
